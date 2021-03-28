<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-4">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col">

            <form action="<?= base_url('bikes/select'); ?>" method="post">

                <!-- ALTERNATIVE 1 -->
                <div class="form-group row">
                    <label for="a1" class="col-sm-2 col-form-label">Alternative 1</label>
                    <div class="col-sm-3">
                        <select class="form-control" name='a1'>
                            <?php foreach ($alternatives as $a) : ?>
                                <option><?= $a['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- ALTERNATIVE 2 -->
                <div class="form-group row">
                    <label for="a2" class="col-sm-2 col-form-label">Alternative 2</label>
                    <div class="col-sm-3">
                        <select class="form-control" name='a2'>
                            <?php foreach ($alternatives as $a) : ?>
                                <option><?= $a['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- ALTERNATIVE 3 -->
                <div class="form-group row">
                    <label for="a3" class="col-sm-2 col-form-label">Alternative 3</label>
                    <div class="col-sm-3">
                        <select class="form-control" name='a3'>
                            <?php foreach ($alternatives as $a) : ?>
                                <option><?= $a['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>


                <!-- ALTERNATIVE 4 -->
                <div class="form-group row">
                    <label for="a4" class="col-sm-2 col-form-label">Alternative 4</label>
                    <div class="col-sm-3">
                        <select class="form-control" name='a4'>
                            <?php foreach ($alternatives as $a) : ?>
                                <option><?= $a['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- ALTERNATIVE 5 -->
                <div class="form-group row">
                    <label for="a5" class="col-sm-2 col-form-label">Alternative 5</label>
                    <div class="col-sm-3">
                        <select class="form-control" name='a5'>
                            <?php foreach ($alternatives as $a) : ?>
                                <option><?= $a['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>

        </div>
    </div>

    <hr class='mb-3'>
    <!-- list alternatives -->

    <h1 class="h3 my-4 text-gray-800">Bikes</h1>
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
                    </ul>
                </div>
            </div>

        <?php endforeach; ?>

    </div>



</div>