<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="container">
        <div class="row ">
            <div class="col my-3">
                <h1 class="d-flex justify-content-center">Welcome To DSS for Folding Bike Selection</h1>
            </div>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <h2 class='my-4 d-flex justify-content-center'>Getting Started</h2>
                    <h5 class='my-4 d-flex justify-content-center'>Do you want to set your priority?</h5>
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <a class='btn btn-primary mb-4 mx-2' href="<?= base_url('input/criteria') ?>">Yes, let me set my priority</a>
                            <a class='btn btn-success mb-4 mx-2' href="<?= base_url('bikes/select') ?>">No, compare bikes directly</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col">
            <h2 class='my-4 d-flex justify-content-center'>Folding Bikes</h2>
        </div>
    </div>

    <div class="row">
        <?php for ($i = 0; $i < 5; $i++) :  ?>
            <div class="col-lg mb-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/bikes/') . $alternatives[$i]['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $alternatives[$i]['name']; ?></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: <?= $alternatives[$i]['price']; ?> million</li>
                        <li class="list-group-item">Weight: <?= $alternatives[$i]['weight']; ?> kg</li>
                        <li class="list-group-item">Fold type: <?= $alternatives[$i]['folding_method']; ?>-fold</li>
                        <li class="list-group-item">Speed: <?= $alternatives[$i]['speed']; ?>-speed</li>
                        <li class="list-group-item">Wheel size: <?= $alternatives[$i]['wheel_size']; ?> inch</li>
                    </ul>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="row">
        <div class="col d-flex justify-content-center">
            <a class='btn btn-primary mb-5' href="<?= base_url('dss/alternatives') ?>">See all bikes</a>
        </div>
    </div>



</div>