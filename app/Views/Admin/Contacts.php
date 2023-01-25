<?= $this->extend('Admin/Layout') ?>


<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('main') ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Contact Submissions</h1>
</div>

<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Message</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entries as $key => $entry) : ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $entry['name'] ?></td>
                    <td>
                        <?= $entry['email'] ?><br />
                        <?= $entry['mobile'] ?>
                    </td>
                    <td><?= $entry['message'] ?></td>
                    <td><?= date('d M, Y', strtotime($entry['created_at'])); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>


<?= $this->section('js') ?>

<?= $this->endSection() ?>