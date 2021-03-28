<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($user['role_id'] == 1) : ?>
        <div class="row">
            <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
                <a class="btn btn-primary mb-3" href="<?= base_url('dss/alternatives_add/') ?>">Add New Bike</a>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">

        <?php foreach ($alternatives as $a) :  ?>

            <div class="col-lg mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/bikes/') . $a['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $a['name']; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: <?= $a['price']; ?> million</li>
                        <li class="list-group-item">Weight: <?= $a['weight']; ?> kg</li>
                        <li class="list-group-item">Fold type: <?= $a['folding_method']; ?>-fold</li>
                        <li class="list-group-item">Speed: <?= $a['speed']; ?>-speed</li>
                        <li class="list-group-item">Wheel size: <?= $a['wheel_size']; ?> inch</li>
                        <?php if ($user['role_id'] == 1) : ?>
                            <li class="list-group-item">
                                <a class="badge badge-success" href="<?= base_url('dss/alternatives_update/') . $a['id']; ?>">Edit</a>
                                <a class="badge badge-danger" href="<?= base_url('dss/alternatives_delete/') . $a['id']; ?>">Delete</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

        <?php endforeach; ?>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal 
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php //base_url('menu'); 
                            ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> -->