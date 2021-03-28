<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('dss/alternatives_add'); ?>

            <!-- name form -->
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <!-- price form -->
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" step="any" class="form-control" id="price" name="price">
                    <?= form_error('price', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <!-- weight form -->
            <div class="form-group row">
                <label for="weight" class="col-sm-2 col-form-label">Weight</label>
                <div class="col-sm-10">
                    <input type="number" step="any" class="form-control" id="weight" name="weight">
                    <?= form_error('weight', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <!-- folding method form -->
            <div class="form-group row">
                <label for="folding_method" class="col-sm-2 col-form-label">Folding method</label>
                <div class="col-sm-10">
                    <input type="number" step="any" class="form-control" id="folding_method" name="folding_method">
                    <?= form_error('folding_method', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <!-- speed form -->
            <div class="form-group row">
                <label for="speed" class="col-sm-2 col-form-label">Speed</label>
                <div class="col-sm-10">
                    <input type="number" step="any" class="form-control" id="speed" name="speed">
                    <?= form_error('speed', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <!-- wheel size form -->
            <div class="form-group row">
                <label for="wheel_size" class="col-sm-2 col-form-label">Wheel size</label>
                <div class="col-sm-10">
                    <input type="number" step="any" class="form-control" id="wheel_size" name="wheel_size">
                    <?= form_error('wheel_size', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <!-- picture form -->
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/bikes/seli.png'); ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add bike</button>
                </div>
            </div>

            </form>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->