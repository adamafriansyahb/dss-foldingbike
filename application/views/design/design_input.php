<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-6">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <div class="row">
        <?php foreach ($bikes as $b) :  ?>
            <div class="col-lg mb-5 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="<?= base_url('assets/img/bikes/') . $b['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $b['name']; ?></h5>
                    </div>
                    <!--<ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: <?= $b['price']; ?> million</li>
                        <li class="list-group-item">Weight: <?= $b['weight']; ?> kg</li>
                        <li class="list-group-item">Fold type: <?= $b['folding_method']; ?>-fold</li>
                        <li class="list-group-item">Speed: <?= $b['speed']; ?>-speed</li>
                        <li class="list-group-item">Wheel size: <?= $b['wheel_size']; ?> inch</li>
                    </ul>-->
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="row my-2 justify-content-center">
        <div class="col-3 d-flex justify-content-center">
            <h4>First alternative</h4>
        </div>

        <div class="col-3 d-flex justify-content-center">
            <h4>Value</h4>
        </div>

        <div class="col-3 d-flex justify-content-center">
            <h4>Second alternative</h4>
        </div>
    </div>


    <form action="<?= base_url('design/compare'); ?>" method="post">
        <div class="row d-flex justify-content-center">

            <!-- alternative[0] vs alternative[0], format c/posisi/indeks/baris -->

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="cl01" value='<?= $alternatives[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="v00" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="cr01" value='<?= $alternatives[0]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>

        <!-- criteria[0] vs criteria[1], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cl02" value='<?= $alternatives[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v01'>
                        <optgroup label='Equally good'>
                            <option value='1'>is equally as good as</option>
                        </optgroup>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly better than</option>
                            <option value='3'>is slightly better than</option>
                            <option value='4'>is quite better than</option>
                            <option value='5'>is better than</option>
                            <option value='6'>is quite strongly better than</option>
                            <option value='7'>is strongly better than</option>
                            <option value='8'>is far strongly better than</option>
                            <option value='9'>is absolutely better than</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less desirable than</option>
                            <option value="<?= 1 / 3 ?>">is slighly less desirable than</option>
                            <option value="<?= 1 / 4 ?>">is quite less desirable than</option>
                            <option value="<?= 1 / 5 ?>">is less desirable than</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less desirable than</option>
                            <option value="<?= 1 / 7 ?>">is strongly less desirable than</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less desirable than</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less desirable than</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cr12" value='<?= $alternatives[1]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[0] vs criteria[2], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cl03" value='<?= $alternatives[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v02'>
                        <optgroup label='Equally good'>
                            <option value='1'>is equally as good as</option>
                        </optgroup>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly better than</option>
                            <option value='3'>is slightly better than</option>
                            <option value='4'>is quite better than</option>
                            <option value='5'>is better than</option>
                            <option value='6'>is quite strongly better than</option>
                            <option value='7'>is strongly better than</option>
                            <option value='8'>is far strongly better than</option>
                            <option value='9'>is absolutely better than</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less desirable than</option>
                            <option value="<?= 1 / 3 ?>">is slighly less desirable than</option>
                            <option value="<?= 1 / 4 ?>">is quite less desirable than</option>
                            <option value="<?= 1 / 5 ?>">is less desirable than</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less desirable than</option>
                            <option value="<?= 1 / 7 ?>">is strongly less desirable than</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less desirable than</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less desirable than</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cr23" value='<?= $alternatives[2]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[0] vs criteria[3], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cl04" value='<?= $alternatives[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v03'>
                        <optgroup label='Equally good'>
                            <option value='1'>is equally as good as</option>
                        </optgroup>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly better than</option>
                            <option value='3'>is slightly better than</option>
                            <option value='4'>is quite better than</option>
                            <option value='5'>is better than</option>
                            <option value='6'>is quite strongly better than</option>
                            <option value='7'>is strongly better than</option>
                            <option value='8'>is far strongly better than</option>
                            <option value='9'>is absolutely better than</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less desirable than</option>
                            <option value="<?= 1 / 3 ?>">is slighly less desirable than</option>
                            <option value="<?= 1 / 4 ?>">is quite less desirable than</option>
                            <option value="<?= 1 / 5 ?>">is less desirable than</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less desirable than</option>
                            <option value="<?= 1 / 7 ?>">is strongly less desirable than</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less desirable than</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less desirable than</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cr34" value='<?= $alternatives[3]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[0] vs criteria[4], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cl05" value='<?= $alternatives[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v04'>
                        <optgroup label='Equally good'>
                            <option value='1'>is equally as good as</option>
                        </optgroup>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly better than</option>
                            <option value='3'>is slightly better than</option>
                            <option value='4'>is quite better than</option>
                            <option value='5'>is better than</option>
                            <option value='6'>is quite strongly better than</option>
                            <option value='7'>is strongly better than</option>
                            <option value='8'>is far strongly better than</option>
                            <option value='9'>is absolutely better than</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less desirable than</option>
                            <option value="<?= 1 / 3 ?>">is slighly less desirable than</option>
                            <option value="<?= 1 / 4 ?>">is quite less desirable than</option>
                            <option value="<?= 1 / 5 ?>">is less desirable than</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less desirable than</option>
                            <option value="<?= 1 / 7 ?>">is strongly less desirable than</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less desirable than</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less desirable than</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cr45" value='<?= $alternatives[4]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <hr>
            </div>
        </div>


        <!-- criteria[1] vs criteria[1], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="cl16" value='<?= $alternatives[1]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="v11" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="cr16" value='<?= $alternatives[1]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[1] vs criteria[2], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cl17" value='<?= $alternatives[1]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v12'>
                        <optgroup label='Equally good'>
                            <option value='1'>is equally as good as</option>
                        </optgroup>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly better than</option>
                            <option value='3'>is slightly better than</option>
                            <option value='4'>is quite better than</option>
                            <option value='5'>is better than</option>
                            <option value='6'>is quite strongly better than</option>
                            <option value='7'>is strongly better than</option>
                            <option value='8'>is far strongly better than</option>
                            <option value='9'>is absolutely better than</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less desirable than</option>
                            <option value="<?= 1 / 3 ?>">is slighly less desirable than</option>
                            <option value="<?= 1 / 4 ?>">is quite less desirable than</option>
                            <option value="<?= 1 / 5 ?>">is less desirable than</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less desirable than</option>
                            <option value="<?= 1 / 7 ?>">is strongly less desirable than</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less desirable than</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less desirable than</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cr27" value='<?= $alternatives[2]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[1] vs criteria[3], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cl18" value='<?= $alternatives[1]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v13'>
                        <optgroup label='Equally good'>
                            <option value='1'>is equally as good as</option>
                        </optgroup>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly better than</option>
                            <option value='3'>is slightly better than</option>
                            <option value='4'>is quite better than</option>
                            <option value='5'>is better than</option>
                            <option value='6'>is quite strongly better than</option>
                            <option value='7'>is strongly better than</option>
                            <option value='8'>is far strongly better than</option>
                            <option value='9'>is absolutely better than</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less desirable than</option>
                            <option value="<?= 1 / 3 ?>">is slighly less desirable than</option>
                            <option value="<?= 1 / 4 ?>">is quite less desirable than</option>
                            <option value="<?= 1 / 5 ?>">is less desirable than</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less desirable than</option>
                            <option value="<?= 1 / 7 ?>">is strongly less desirable than</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less desirable than</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less desirable than</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cr38" value='<?= $alternatives[3]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[1] vs criteria[4], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cl19" value='<?= $alternatives[1]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v14'>
                        <optgroup label='Equally good'>
                            <option value='1'>is equally as good as</option>
                        </optgroup>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly better than</option>
                            <option value='3'>is slightly better than</option>
                            <option value='4'>is quite better than</option>
                            <option value='5'>is better than</option>
                            <option value='6'>is quite strongly better than</option>
                            <option value='7'>is strongly better than</option>
                            <option value='8'>is far strongly better than</option>
                            <option value='9'>is absolutely better than</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less desirable than</option>
                            <option value="<?= 1 / 3 ?>">is slighly less desirable than</option>
                            <option value="<?= 1 / 4 ?>">is quite less desirable than</option>
                            <option value="<?= 1 / 5 ?>">is less desirable than</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less desirable than</option>
                            <option value="<?= 1 / 7 ?>">is strongly less desirable than</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less desirable than</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less desirable than</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cr49" value='<?= $alternatives[4]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <hr>
            </div>
        </div>

        <!-- criteria[2] vs criteria[2], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="cl210" value='<?= $alternatives[2]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="v22" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="cr210" value='<?= $alternatives[2]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>


        <!-- criteria[2] vs criteria[3], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cl211" value='<?= $alternatives[2]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v23'>
                        <optgroup label='Equally good'>
                            <option value='1'>is equally as good as</option>
                        </optgroup>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly better than</option>
                            <option value='3'>is slightly better than</option>
                            <option value='4'>is quite better than</option>
                            <option value='5'>is better than</option>
                            <option value='6'>is quite strongly better than</option>
                            <option value='7'>is strongly better than</option>
                            <option value='8'>is far strongly better than</option>
                            <option value='9'>is absolutely better than</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less desirable than</option>
                            <option value="<?= 1 / 3 ?>">is slighly less desirable than</option>
                            <option value="<?= 1 / 4 ?>">is quite less desirable than</option>
                            <option value="<?= 1 / 5 ?>">is less desirable than</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less desirable than</option>
                            <option value="<?= 1 / 7 ?>">is strongly less desirable than</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less desirable than</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less desirable than</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cr311" value='<?= $alternatives[3]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>


        <!-- criteria[2] vs criteria[4], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cl212" value='<?= $alternatives[2]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v24'>
                        <optgroup label='Equally good'>
                            <option value='1'>is equally as good as</option>
                        </optgroup>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly better than</option>
                            <option value='3'>is slightly better than</option>
                            <option value='4'>is quite better than</option>
                            <option value='5'>is better than</option>
                            <option value='6'>is quite strongly better than</option>
                            <option value='7'>is strongly better than</option>
                            <option value='8'>is far strongly better than</option>
                            <option value='9'>is absolutely better than</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less desirable than</option>
                            <option value="<?= 1 / 3 ?>">is slighly less desirable than</option>
                            <option value="<?= 1 / 4 ?>">is quite less desirable than</option>
                            <option value="<?= 1 / 5 ?>">is less desirable than</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less desirable than</option>
                            <option value="<?= 1 / 7 ?>">is strongly less desirable than</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less desirable than</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less desirable than</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cr412" value='<?= $alternatives[4]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <hr>
            </div>
        </div>

        <!-- criteria[3] vs criteria[3], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="cl313" value='<?= $alternatives[3]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="v33" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="cr313" value='<?= $alternatives[3]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>

        <!-- criteria[3] vs criteria[4], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cl314" value='<?= $alternatives[3]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v34'>
                        <optgroup label='Equally good'>
                            <option value='1'>is equally as good as</option>
                        </optgroup>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly better than</option>
                            <option value='3'>is slightly better than</option>
                            <option value='4'>is quite better than</option>
                            <option value='5'>is better than</option>
                            <option value='6'>is quite strongly better than</option>
                            <option value='7'>is strongly better than</option>
                            <option value='8'>is far strongly better than</option>
                            <option value='9'>is absolutely better than</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less desirable than</option>
                            <option value="<?= 1 / 3 ?>">is slighly less desirable than</option>
                            <option value="<?= 1 / 4 ?>">is quite less desirable than</option>
                            <option value="<?= 1 / 5 ?>">is less desirable than</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less desirable than</option>
                            <option value="<?= 1 / 7 ?>">is strongly less desirable than</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less desirable than</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less desirable than</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="text" class="form-control" name="cr414" value='<?= $alternatives[4]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <hr>
            </div>
        </div>

        <!-- criteria[4] vs criteria[4], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="cl415" value='<?= $alternatives[4]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="v44" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input readonly type="hidden" class="form-control" name="cr415" value='<?= $alternatives[4]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 d-flex justify-content-end">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>

    </form>





</div>