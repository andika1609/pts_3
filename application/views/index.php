<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-color: #CFD2CF;
        }
    </style>
</head>

<body>
    <header class="p-3" style="background-color:#94B49F;">

        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none me-5">
                    <img src="<?= base_url('asset/ticket.png') ?>" alt="">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <?php if ($this->session->flashdata('scs_msg') != null) { ?>
                        <div class="alert alert-success">
                            <?= $this->session->flashdata('scs_msg'); ?>
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
    <div class="mt-5 container">
        <div class="container">
            <div class="row row-cols-8">
                <?php foreach ($film as $f) { ?>
                    <div class="col mb-5 me-2">
                        <div class="container rounded-3" style="width: 420px; height:fit-content+70px; background-color:#F7EDDB;">
                            <div class="row">
                                <div class="col-4 py-3 rounded-3" style="background-color: #A1C298;">
                                    <img width="120px" height="180px" src="<?= base_url('asset/teaser/' . $f->teaser) ?>" alt="">
                                </div>
                                <div class="col-8 py-4">
                                    <table class="text-dark">
                                        <tr>
                                            <td>Judul</td>
                                            <td>:</td>
                                            <td><?= $f->nama_film; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Durasi</td>
                                            <td>:</td>
                                            <td><?= date_format(date_create($f->durasi_film), "g") . " Jam " . date_format(date_create($f->durasi_film), "i") . " Menit"; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td>:</td>
                                            <td><?= $f->deskripsi_film; ?></td>
                                        </tr>
                                    </table>
                                    <div class="mx-auto pt-4" style="width: fit-content;">
                                        <?= anchor('home/book/' . $f->slug, '<button class="btn btn-light">Book</button>') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>">

</body>

</html>