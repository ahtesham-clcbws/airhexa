<?php

namespace App\Controllers;

use App\Models\ContactEnquiryModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class RequestsController extends ResourceController
{
    use ResponseTrait;
    protected $format = 'json';
    public function __construct()
    {
        helper('common');
    }

    public function formSubmission()
    {
        $returnResponse = [
            'success' => false,
            'message' => 'Unable to submit your query, please try after some time.'
        ];
        if ($this->request->isAJAX()) {
            $formModel = new ContactEnquiryModel();
            $formData = [
                'type' => $this->request->getPost('type') ? $this->request->getPost('type') : 'contact',
                'name' => $this->request->getPost('name') ? $this->request->getPost('name') : null,
                'email' => $this->request->getPost('email') ? $this->request->getPost('email') : null,
                'mobile' => $this->request->getPost('mobile') ? intval($this->request->getPost('mobile')) : null,
                'service' => $this->request->getPost('service') ? $this->request->getPost('service') : null,
                'subject' => $this->request->getPost('subject') ? $this->request->getPost('subject') : null,
                'message' => $this->request->getPost('message') ? $this->request->getPost('message') : null
            ];
            if ($formModel->save($formData)) {
                $returnResponse['success'] = true;
                $returnResponse['message'] = 'Form submited succesfully. We will get back to you soon.';
            }
            return $this->respond($returnResponse);
        } else {
            return redirect()->route('homePage');
        }
    }
}
