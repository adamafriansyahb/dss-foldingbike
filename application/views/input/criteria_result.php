<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?php if ($consistency['consistency_ratio'] > 1 / 10 or $consistency['consistency_ratio'] < 0) : ?>
                <div class='alert alert-danger' role='alert'>The assessment is not consistent, please rearrange the comparisons.</div>
                <a class="btn btn-primary mb-5" href="<?= base_url('input/criteria'); ?>">Reinput value</a>
            <?php else : ?>
                <div class='alert alert-success' role='alert'>The assessment is consistent. Please proceed to the next step.</div>
                <a class="btn btn-primary mb-4" href="<?= base_url('bikes/select'); ?>">Choose bikes</a>
                <p>Already select a bike?</p>
                <a class="btn btn-primary mb-4" href="<?= base_url('design/compare'); ?>">Compare Design</a>
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
                        <th scope="col">Criteria</th>
                        <?php foreach ($criteria as $c1) : ?>
                            <th scope="col"><?= $c1['name']; ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>

                <tbody>
                    <!-- PRICE -->
                    <tr>
                        <th scope="row"><?= $criteria[0]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $analysis[$i]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    <!-- BIKE WEIGHT -->
                    <tr>
                        <th scope="row"><?= $criteria[1]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $analysis[$i + 7]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    <!-- FOLDING METHOD -->
                    <tr>
                        <th scope="row"><?= $criteria[2]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $analysis[$i + 14]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    <!-- SPEED -->
                    <tr>
                        <th scope="row"><?= $criteria[3]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $analysis[$i + 21]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    <!-- WHEEL SIZE -->
                    <tr>
                        <th scope="row"><?= $criteria[4]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $analysis[$i + 28]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    <!-- DESIGN -->
                    <tr>
                        <th scope="row"><?= $criteria[5]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $analysis[$i + 35]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>
                    <!-- BRAND -->
                    <tr>
                        <th scope="row"><?= $criteria[6]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $analysis[$i + 42]['value']; ?></td>
                        <?php endfor; ?>
                    </tr>

                </tbody>

                <tfoot>
                    <th scope='row'>Total</th>
                    <?php for ($i = 0; $i < 7; $i++) : ?>
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
                        <?php foreach ($criteria as $c1) : ?>
                            <th scope="col"><?= $c1['name']; ?></th>
                        <?php endforeach; ?>
                        <th scope="col">Weight</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- PRICE -->
                    <tr>
                        <th scope="row"><?= $criteria[0]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $normalized_price[$i]['value']; ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[0], 3); ?></th>
                    </tr>
                    <!-- BIKE WEIGHT -->
                    <tr>
                        <th scope="row"><?= $criteria[1]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $normalized_bw[$i]['value']; ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[1], 3); ?></th>
                    </tr>
                    <!-- FOLDING METHOD -->
                    <tr>
                        <th scope="row"><?= $criteria[2]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $normalized_folding[$i]['value']; ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[2], 3); ?></th>
                    </tr>
                    <!-- SPEED -->
                    <tr>
                        <th scope="row"><?= $criteria[3]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $normalized_speed[$i]['value']; ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[3], 3); ?></th>
                    </tr>
                    <!-- WHEEL SIZE -->
                    <tr>
                        <th scope="row"><?= $criteria[4]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $normalized_wheel[$i]['value']; ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[4], 3); ?></th>
                    </tr>

                    <!-- DESIGN -->
                    <tr>
                        <th scope="row"><?= $criteria[3]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $normalized_design[$i]['value']; ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[5], 3); ?></th>
                    </tr>
                    <!-- BRAND -->
                    <tr>
                        <th scope="row"><?= $criteria[4]['name'] ?></th>
                        <?php for ($i = 0; $i < 7; $i++) : ?>
                            <td scope='col'><?= $normalized_brand[$i]['value']; ?></td>
                        <?php endfor; ?>
                        <th scope='col'><?= round($weight[6], 3); ?></th>
                    </tr>

                </tbody>

                <tfoot>
                    <th scope='row'>Total</th>
                    <td scope='col'><?= $norm_sum['c1'] ?></td>
                    <td scope='col'><?= $norm_sum['c2'] ?></td>
                    <td scope='col'><?= $norm_sum['c3'] ?></td>
                    <td scope='col'><?= $norm_sum['c4'] ?></td>
                    <td scope='col'><?= $norm_sum['c5'] ?></td>
                    <td scope='col'><?= $norm_sum['c6'] ?></td>
                    <td scope='col'><?= $norm_sum['c7'] ?></td>
                </tfoot>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->