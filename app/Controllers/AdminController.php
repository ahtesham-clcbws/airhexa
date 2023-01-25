<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\ContactEnquiryModel;

class AdminController extends BaseController
{
    protected $adminMd;
    public function __construct()
    {
        $this->adminMd = new AdminModel();
    }
    public function login()
    {
        if ($this->request->getPost()) {
            $login = $this->adminMd->login($this->request->getPost('email'), $this->request->getPost('password'));
            return json_encode($login);
        }
        return view('Admin/Login', $this->data);
    }
    public function dashboard()
    {
        $formDb = new ContactEnquiryModel();
        $contacts = $formDb->where('type', 'contact')->orderBy('id', 'desc')->countAllResults();
        $quotes = $formDb->where('type', 'quote')->orderBy('id', 'desc')->countAllResults();
        
        $this->data['contacts'] = $contacts;
        $this->data['quotes'] = $quotes;

        return view('Admin/Dashboard', $this->data);
    }
    public function contacts()
    {
        $formDb = new ContactEnquiryModel();
        $entries = $formDb->where('type', 'contact')->orderBy('id', 'desc')->findAll();
        $this->data['entries'] = $entries;

        return view('Admin/Contacts', $this->data);
    }
    public function inquiries()
    {
        $formDb = new ContactEnquiryModel();
        $entries = $formDb->where('type', 'quote')->orderBy('id', 'desc')->findAll();
        $this->data['entries'] = $entries;
        
        return view('Admin/Quotes', $this->data);
    }
}
