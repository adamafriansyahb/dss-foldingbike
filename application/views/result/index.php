<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <br>
    <br>

    <h3 class='mb-4'>Detail of Bikes</h3>

    <div class="row">
        <div class="col-lg">

            <table class="table table-hover table">

                <thead>
                    <tr>
                        <th scope="col">Alternatives</th>
                        <?php// foreach ($criteria as $c) : ?>
                        <!-- <th scope="col"><?//= $c['name']; ?></th> -->
                        <th scope="col">Price (million)</th>
                        <th scope="col">Weight (kg)</th>
                        <th scope="col">Folding Type</th>
                        <th scope="col">Speed</th>
                        <th scope="col">Wheel Size (inch)</th>
                        <th scope="col">Design</th>
                        <th scope="col">Brand</th>
                        <?php //endforeach; 
                        ?>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($alternatives as $a) : ?>
                        <tr>
                            <th scope="row"><?= $a['name']; ?></th>
                            <td scope='col'><?= $a['price'] ?></td>
                            <td scope='col'><?= $a['bike_weight'] ?></td>
                            <td scope='col'><?= $a['folding_method'] ?>-fold</td>
                            <td scope='col'><?= $a['speed'] ?></td>
                            <td scope='col'><?= $a['wheel_size'] ?></td>
                            <td scope='col'><?= $a['design'] ?></td>
                            <td scope='col'><?= $a['brand'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <br>
    <br>


    <div class="container">
        <h2 class='d-flex justify-content-center mt-4'>Result - Personal Priority</h2>
        <div class="row my-4">

            <div class="col-lg-6">

                <p></p>
                <div class="row my-auto">
                    <div class="col d-flex justify-content-center">
                        <table class="table table-hover table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Alternatives</th>
                                    <th scope="col">Score</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php //arsort($score_survey);
                                ?>
                                <?php $i = 1 ?>
                                <?php foreach ($final_score as $s) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $s['alternative']; ?></td>
                                        <td><?= $s['with_assessment']; ?></td>
                                    </tr>
                                    <?php $i += 1; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


            <div class="col-lg mb-5 d-flex justify-content-center">
                <div class="row">
                    <div class="col">
                        <p class='d-flex justify-content-center'>The best bike for you: </p>
                        <div class="row">
                            <div class="col">
                                <?php if (
                                    $final_score[0]['with_assessment'] == 0 and
                                    $final_score[1]['with_assessment'] == 0 and
                                    $final_score[2]['with_assessment'] == 0 and
                                    $final_score[3]['with_assessment'] == 0 and
                                    $final_score[4]['with_assessment'] == 0
                                ) : ?>
                                    <p class='my-auto'>You did not make assessment.</p>
                                <?php else : ?>
                                    <div class="card d-flex justify-content-center" style="width: 13rem;">
                                        <img src="<?= base_url('assets/img/bikes/') . $winner['assessment']['image']; ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $winner['assessment']['name']; ?></h5>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class='d-flex justify-content-center mt-4'>Result - Default Priority</h2>
        <div class="row my-4">

            <div class="col-lg-6">

                <p></p>
                <div class="row my-auto">
                    <div class="col d-flex justify-content-center">
                        <table class="table table-hover table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Alternatives</th>
                                    <th scope="col">Score</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php //arsort($score_survey);
                                ?>
                                <?php $j = 1 ?>
                                <?php foreach ($final_score_survey as $s) : ?>
                                    <tr>
                                        <th scope="row"><?= $j; ?></th>
                                        <td><?= $s['alternative']; ?></td>
                                        <td><?= $s['with_survey']; ?></td>
                                    </tr>
                                    <?php $j += 1; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


            <div class="col-lg mb-5 d-flex justify-content-center">
                <div class="row">
                    <div class="col">
                        <p class='d-flex justify-content-center'>The best bike for you: </p>
                        <div class="row">
                            <div class="col">
                                <div class="card d-flex justify-content-center" style="width: 13rem;">
                                    <img src="<?= base_url('assets/img/bikes/') . $winner['survey']['image']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $winner['survey']['name']; ?></h5>
                                    </div>
                                    <!--<ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: <?= $winner['survey']['price']; ?> million</li>
                        <li class="list-group-item">Weight: <?= $winner['survey']['weight']; ?> kg</li>
                        <li class="list-group-item">Fold type: <?= $winner['survey']['folding_method']; ?>-fold</li>
                        <li class="list-group-item">Speed: <?= $winner['survey']['speed']; ?>-speed</li>
                        <li class="list-group-item">Wheel size: <?= $winner['survey']['wheel_size']; ?> inch</li>
                    </ul>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <br>






</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->