<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembelian</title>
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color: #CFD2CF;
        }
    </style>
</head>

<body>
    <header class="p-3" style="background-color: #94B49F;">

        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="<?= base_url('index.php/home/index') ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none me-5">
                    <img src="<?= base_url('asset/ticket.png') ?>" alt="">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <?php if ($this->session->flashdata('error_msg') != null) { ?>
                        <div class="alert alert-danger">
                            <?= $this->session->flashdata('error_msg'); ?>
                        </div>
                    <?php } ?>
                </ul>

                <div class="me-4">
                    <a href="<?= base_url('index.php/home/user') ?>"><img src="<?= base_url('asset/user.png') ?>" alt="" height="42px" class="border border-5-white rounded-circle"></a>
                </div>


                <div class="text-end">
                    <a href="<?= base_url('index.php/home/logout') ?>"><button type="button" class="btn btn-outline-danger me-2">logout</button></a>
                    <!-- <button type="button" class="btn btn-warning">Sign-up</button> -->
                </div>


            </div>
        </div>

    </header>
    <div class="mt-5">

    </div>
    </div>

    <?php foreach ($aktif as $a) { ?>
        <div class="mt-5 container">
            <div class="container">
                <div class="row">
                    <div class="col me-2">
                        <div class="container py-3 rounded" style="width: 720px; height:fit-content+70px; background-color:#F7EDDB;">
                            <div class="row">
                                <div class="col-8 text-dark">
                                    <table>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?= $a->username; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Film</td>
                                            <td>:</td>
                                            <td><?= $a->film; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kursi</td>
                                            <td>:</td>
                                            <td><?= $a->kursi; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jadwal</td>
                                            <td>:</td>
                                            <td><?= $a->jadwal; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Waktu</td>
                                            <td>:</td>
                                            <td><?= date_format(date_create($a->waktu),"H:i"); ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td><?php 
                                            $date=date("Y-m-d");
                                            if($date<$a->jadwal){
                                                echo "Segera tayang";
                                            }
                                            else if($date==$a->jadwal){
                                                echo "Tayang hari ini";
                                            }else{
                                                echo "Sudah tayang";
                                            }
                                            ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="pb-5"></div>
    <div class="pb-5"></div>
    <div class="pb-5"></div>
    <div class="pb-5"></div>
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>">

</body>

</html>