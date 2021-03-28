<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mb-3 justify-content-center">
        <div class="col-lg-3 d-flex justify-content-center">
            <h4>First criterion</h4>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
            <h4>Value</h4>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
            <h4>Second criterion</h4>
        </div>
    </div>


    <form action="<?= base_url('input/criteria'); ?>" method="post">
        <div class="row d-flex justify-content-center">

            <?= $this->session->flashdata('message'); ?>

            <!-- criteria[0] vs criteria[0], format c/posisi/indeks/baris -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3">
                    <div class="form-group">
                        <input style="text-align:center;" readonly type="hidden" class="form-control" name="cl01" value='<?= $criteria[0]['name']; ?>'>
                        <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <input style="text-align:center;" readonly type="hidden" class="form-control" name="v00" value='1' readonly>
                        <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-group">
                        <input style="text-align:center;" readonly type="hidden" class="form-control" name="cr01" value='<?= $criteria[0]['name']; ?>'>
                        <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
            </div>

        </div>

        <!-- criteria[0] vs criteria[1], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl02" value='<?= $criteria[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v01'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr12" value='<?= $criteria[1]['name']; ?>' readonly>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[0] vs criteria[2], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl03" value='<?= $criteria[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v02'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr23" value='<?= $criteria[2]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>

        <!-- criteria[0] vs criteria[3], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl04" value='<?= $criteria[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v03'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr34" value='<?= $criteria[3]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[0] vs criteria[4], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl05" value='<?= $criteria[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v04'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr45" value='<?= $criteria[4]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>

        <!-- criteria[0] vs criteria[5], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl06" value='<?= $criteria[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v05'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr56" value='<?= $criteria[5]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[0] vs criteria[6], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl07" value='<?= $criteria[0]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v06'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr67" value='<?= $criteria[6]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>

        <br>

        <!-- criteria[1] vs criteria[1], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cl18" value='<?= $criteria[1]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="v11" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cr18" value='<?= $criteria[1]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[1] vs criteria[2], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl19" value='<?= $criteria[1]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v12'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr29" value='<?= $criteria[2]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[1] vs criteria[3], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl110" value='<?= $criteria[1]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v13'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr310" value='<?= $criteria[3]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[1] vs criteria[4], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl111" value='<?= $criteria[1]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v14'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr411" value='<?= $criteria[4]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>



        <!-- criteria[1] vs criteria[5], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl112" value='<?= $criteria[1]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v15'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr512" value='<?= $criteria[5]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[1] vs criteria[6], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl113" value='<?= $criteria[1]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v16'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr613" value='<?= $criteria[6]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>

        <br>

        <!-- criteria[2] vs criteria[2], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cl214" value='<?= $criteria[2]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="v22" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cr214" value='<?= $criteria[2]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>


        <!-- criteria[2] vs criteria[3], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl215" value='<?= $criteria[2]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v23'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr315" value='<?= $criteria[3]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>


        <!-- criteria[2] vs criteria[4], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl216" value='<?= $criteria[2]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v24'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr416" value='<?= $criteria[4]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>


        <!-- criteria[2] vs criteria[5], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl217" value='<?= $criteria[2]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v25'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr517" value='<?= $criteria[5]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[2] vs criteria[6], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl218" value='<?= $criteria[2]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v26'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr618" value='<?= $criteria[6]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>

        <br>


        <!-- criteria[3] vs criteria[3], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cl319" value='<?= $criteria[3]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="v33" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cr319" value='<?= $criteria[3]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>


        <!-- criteria[3] vs criteria[4], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl320" value='<?= $criteria[3]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v34'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr420" value='<?= $criteria[4]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>

        <!-- criteria[3] vs criteria[5], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl321" value='<?= $criteria[3]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v35'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr521" value='<?= $criteria[5]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[3] vs criteria[6], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl322" value='<?= $criteria[3]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v36'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr622" value='<?= $criteria[6]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>

        <br>


        <!-- criteria[4] vs criteria[4], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cl423" value='<?= $criteria[4]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="v44" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cr423" value='<?= $criteria[4]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
        </div>

        <!-- criteria[4] vs criteria[5], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl424" value='<?= $criteria[4]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v45'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr524" value='<?= $criteria[5]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[4] vs criteria[6], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl425" value='<?= $criteria[4]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v46'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr625" value='<?= $criteria[6]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>

        <br>

        <!-- criteria[5] vs criteria[5], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cl526" value='<?= $criteria[5]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="v55" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cr526" value='<?= $criteria[5]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>


        <!-- criteria[5] vs criteria[6], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cl527" value='<?= $criteria[5]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <select class="form-control" name='v56'>
                        <option value='1'>is equally important to</option>
                        <optgroup label='More important'>
                            <option value='2'>is very slightly more important to</option>
                            <option value='3'>is slightly important to</option>
                            <option value='4'>is quite more important to</option>
                            <option value='5'>is more important to</option>
                            <option value='6'>is quite strongly more important to</option>
                            <option value='7'>is strongly more important to</option>
                            <option value='8'>is far strongly more important to</option>
                            <option value='9'>is absolutely more important to</option>
                        </optgroup>

                        <optgroup label='Less important'>
                            <option value="<?= 1 / 2 ?>">is very slightly less important to</option>
                            <option value="<?= 1 / 3 ?>">is slighly less important to</option>
                            <option value="<?= 1 / 4 ?>">is quite less important to</option>
                            <option value="<?= 1 / 5 ?>">is less important to</option>
                            <option value="<?= 1 / 6 ?>">is quite strongly less important to</option>
                            <option value="<?= 1 / 7 ?>">is strongly less important to</option>
                            <option value="<?= 1 / 8 ?>">is far strongly less important to</option>
                            <option value="<?= 1 / 9 ?>">is absolutely less important to</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="text" class="form-control" name="cr627" value='<?= $criteria[6]['name']; ?>'>
                    <?= form_error('c2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

        </div>

        <br>

        <!-- criteria[6] vs criteria[6], format c/posisi/indeks/baris -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cl628" value='<?= $criteria[6]['name']; ?>'>
                    <?= form_error('c1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="v66" value='1' readonly>
                    <?= form_error('value', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="form-group">
                    <input style="text-align:center;" readonly type="hidden" class="form-control" name="cr628" value='<?= $criteria[6]['name']; ?>'>
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