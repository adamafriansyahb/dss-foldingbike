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

        <!--
        <div class="row">
            <div class="col">
                <a href="<?= base_url() ?>" class='btn btn-primary'>See folding bikes</a>
            </div>
            <div class="col">
                <a href="<?= base_url() ?>" class='btn btn-primary'>Select your bikes</a>
            </div>
            <div class="col">
                <a href="<?= base_url() ?>" class='btn btn-primary'>Compare the criteria</a>
            </div>
            <div class="col">
                <a href="<?= base_url() ?>" class='btn btn-primary'>Compare the design</a>
            </div>
            <div class="col">
                <a href="<?= base_url() ?>" class='btn btn-primary'>Compare the brands</a>
            </div>
        </div>
    </div>
-->

        <div class="container">
            <div class="row">
                <div class="col-6 ">

                    <h3 class='my-5'>Saaty's fundamental scale</h3>
                    <table class="table">
                        <tr>
                            <th>Score</th>
                            <th>Information</th>
                        </tr>
                        <tr>
                            <th scope='col'>1</th>
                            <td>Equally important</td>
                        </tr>
                        <tr>
                            <th scope='col'>3</th>
                            <td>Slightly more important</td>
                        </tr>
                        <tr>
                            <th scope='col'>5</th>
                            <td>More important</td>
                        </tr>
                        <tr>
                            <th scope='col'>7</th>
                            <td>Strongly more important</td>
                        </tr>
                        <tr>
                            <th scope='col'>9</th>
                            <td>Absolutely more important</td>
                        </tr>
                        <tr>
                            <th scope='col'>2, 4, 6, 8</th>
                            <td>In between two adjacent judgments</td>
                        </tr>
                        <tr>
                            <th scope='col'>0.333</th>
                            <td>Slightly less important</td>
                        </tr>
                        <tr>
                            <th scope='col'>0.2</th>
                            <td>Less important</td>
                        </tr>
                        <tr>
                            <th scope='col'>0.143</th>
                            <td>Strongly less important</td>
                        </tr>
                        <tr>
                            <th scope='col'>0.111</th>
                            <td>Absolutely less important</td>
                        </tr>
                        <tr>
                            <th scope='col'>0.5, 0.25, 0.167, 0.125</th>
                            <td>In between two adjacent judgements</td>
                        </tr>
                    </table>
                </div>

                <div class="col-6">
                    <h3 class=my-5>Steps to use the DSS</h3>
                    <div class="card my-4" style="width: 20rem;">
                        <div class="card-header">
                            Steps
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Go to <a href=''>Input Criteria</a>, and make your assessment.</li>
                            <li class="list-group-item">2. Go to <a href=''>Select Your Bike</a>, and choose the bikes you want to compare.</li>
                            <li class="list-group-item">3. Go to <a href=''>Compare Design</a>, and compare the design of your selected bikes.</li>
                            <li class="list-group-item">4. Go to <a href=''>Compare Brand</a>, and compare the brands of your selected bikes.</li>
                            <li class="list-group-item">5. See the result on <a href=''>Final Result</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>






    </div>
    <!-- End of Main Content -->