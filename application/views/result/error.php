<div class="container-fluid">
    <!-- Page Heading -->

    <?php if ($bikes->num_rows() < 1) : ?>
        <div class="col-6">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class='alert alert-danger' role='alert'>You haven't chosen and compared the bikes yet.</div>
            <a class="btn btn-primary mb-5" href="<?= base_url('bikes/select'); ?>">Choose Bikes</a>
        </div>

    <?php elseif ($design->num_rows() < 1) : ?>
        <div class="col-6">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class='alert alert-danger' role='alert'>You haven't compared the design yet.</div>
            <a class="btn btn-primary mb-5" href="<?= base_url('design/compare'); ?>">Compare Design</a>
        </div>

    <?php elseif ($brand->num_rows() < 1) : ?>
        <div class="col-6">
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class='alert alert-danger' role='alert'>You haven't compared the brands yet.</div>
            <a class="btn btn-primary mb-5" href="<?= base_url('brand/compare'); ?>">Compare Brand</a>
        </div>
    <?php endif; ?>

</div>