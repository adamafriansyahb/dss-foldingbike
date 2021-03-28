<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?php if ($consistency['consistency_ratio'] > 1 / 10 or $consistency['consistency_ratio'] < 0) : ?>
                <div class='alert alert-danger' role='alert'>Your assessment is inconsistent. Please arrange the assessment again.</div>
                <a class="btn btn-primary mb-5" href="<?= base_url('design/compare'); ?>">Reinput value</a>

            <?php else : ?>
                <div class='alert alert-success' role='alert'>The assessment is consistent. Please proceed to the next step.</div>
                <a class="btn btn-primary mb-5" href="<?= base_url('brand/compare'); ?>">Compare Brand</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <table class="table">
                <tr>
                    <th scope='row'>Lambda max</th>
                    <td scope='col'><?= $consistency['lambda_max']; ?></td>
                </tr>

                <tr>
                    <th scope='row'>Consistency index</th>
                    <td scope='col'><?= $consistency['consistency_index']; ?></td>
                </tr>

                <tr>
                    <th scope='row'>Consistency ratio</th>
                    <td scope='col'><?= $consistency['consistency_ratio']; ?></td>
                </tr>
            </table>
        </div>
    </div>


    <br>

    <div class="row">
        <div class="col-lg">

            <table class="table table-hover table">

                <thead>
                    <tr>
                        <th scope="col">Alternatives</th>
                        <?php foreach ($alternatives as $a) : ?>
                            <th scope="col"><?= $a['name']; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>

                <tbody>
                    <!-- PRICE -->
                    <tr>
                        <th scope="row"><?= $alternatives[0]['name'] ?></th>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <td scope='col'><?= $comparison[$i]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    <!-- BIKE WEIGHT -->
                    <tr>
                        <th scope="row"><?= $alternatives[1]['name'] ?></th>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <td scope='col'><?= $comparison[$i + 5]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    <!-- FOLDING METHOD -->
                    <tr>
                        <th scope="row"><?= $alternatives[2]['name'] ?></th>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <td scope='col'><?= $comparison[$i + 10]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    <!-- SPEED -->
                    <tr>
                        <th scope="row"><?= $alternatives[3]['name'] ?></th>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <td scope='col'><?= $comparison[$i + 15]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    <!-- WHEEL SIZE -->
                    <tr>
                        <th scope="row"><?= $alternatives[4]['name'] ?></th>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <td scope='col'><?= $comparison[$i + 20]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>

                </tbody>

                <tfoot>
                    <th scope='row'>Total</th>
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <td scope='col'><?= $sum[$i]; ?></td>
                    <?php endfor; ?>
                </tfoot>
            </table>
        </div>
    </div>

    <br>
    <br>

    <!-- NORMALIZATION -->
    <div class="row">
        <div class="col-lg">

            <table class="table table-hover table">

                <thead>
                    <tr>
                        <th scope="col">Criteria</th>
                        <?php foreach ($alternatives as $a) : ?>
                            <th scope="col"><?= $a['name']; ?></th>
                        <?php endforeach; ?>
                        <th scope="col">Weight</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- PRICE -->
                    <tr>
                        <th scope="row"><?= $alternatives[0]['name'] ?></th>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <td scope='col'><?= round($normalized_a1[$i]['value'], 3); ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[0], 3); ?></th>
                    </tr>
                    <!-- BIKE WEIGHT -->
                    <tr>
                        <th scope="row"><?= $alternatives[1]['name'] ?></th>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <td scope='col'><?= round($normalized_a2[$i]['value'], 3); ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[1], 3); ?></th>
                    </tr>
                    <!-- FOLDING METHOD -->
                    <tr>
                        <th scope="row"><?= $alternatives[2]['name'] ?></th>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <td scope='col'><?= round($normalized_a3[$i]['value'], 3); ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[2], 3); ?></th>
                    </tr>
                    <!-- SPEED -->
                    <tr>
                        <th scope="row"><?= $alternatives[3]['name'] ?></th>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <td scope='col'><?= round($normalized_a4[$i]['value'], 3); ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[3], 3); ?></th>
                    </tr>
                    <!-- WHEEL SIZE -->
                    <tr>
                        <th scope="row"><?= $alternatives[4]['name'] ?></th>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <td scope='col'><?= round($normalized_a5[$i]['value'], 3); ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[4], 3); ?></th>
                    </tr>

                </tbody>

                <tfoot>
                    <th scope='row'>Total</th>
                    <td scope='col'><?= $norm_sum['a1'] ?></td>
                    <td scope='col'><?= $norm_sum['a2'] ?></td>
                    <td scope='col'><?= $norm_sum['a3'] ?></td>
                    <td scope='col'><?= $norm_sum['a4'] ?></td>
                    <td scope='col'><?= $norm_sum['a5'] ?></td>
                </tfoot>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->