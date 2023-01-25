<?= $this->extend('Admin/Layout') ?>


<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('main') ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <!-- <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
        </button>
    </div> -->
</div>

<div class="row">
    <div class="col-xs-12 col-sm-3 col-md-2">
        <div class="card">
            <div class="card-body d-inline">
                <a href="/admin/contacts" style="text-decoration: none;">
                    <span class="display-2"><?= $contacts ?></span><br />
                    <span class="h5">Contact Submissions</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-2">
        <div class="card">
            <div class="card-body d-inline">
                <a href="/admin/inquiries" style="text-decoration: none;">
                    <span class="display-2"><?= $quotes ?></span><br />
                    <span class="h5">Quote Submissions</span>
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>


<?= $this->section('js') ?>

<?= $this->endSection() ?>