<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
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
                <a href="<?= base_url('index.php/home/admin') ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none me-5">
                    <img src="<?= base_url('asset/ticket.png') ?>" alt="">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <?php if ($this->session->flashdata('error_msg') != null) { ?>
                        <div class="alert alert-danger">
                            <?= $this->session->flashdata('error_msg'); ?>
                        </div>
                    <?php } ?>
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
            <div class="row">
                <div class="col mb-5 me-2">
                    <div class="container rounded-3 py-3" style="width: 720px; height:fit-content+70px; background-color:#F7EDDB;">
                        <div class="row">
                            <?php foreach ($book as $b) { ?>
                                <div class="col-4">
                                    <img width="120px" height="180px" src="<?= base_url('asset/teaser/' . $b->teaser) ?>" alt="">
                                </div>
                                <div class="col-8">
                                    <table>
                                        <tr>
                                            <td>Judul</td>
                                            <td>:</td>
                                            <td><?= $b->nama_film; ?></td>
                                        </tr>

                                        <tr>
                                            <td>Durasi</td>
                                            <td>:</td>
                                            <td><?= date_format(date_create($b->durasi_film), "g") . " Jam" . " " . date_format(date_create($b->durasi_film), "i") . " Menit" ?></td>
                                        </tr>

                                        <tr>
                                            <td>Deskripsi</td>
                                            <td>:</td>
                                            <td><?= $b->deskripsi_film; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            <?php } ?>
                        </div>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-5">Tanggal</div>
                                    <div class="col-4">Waktu</div>
                                    <div class="col-2">Aksi</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2"></div>
                            <div class="col-8">
                                <?php foreach ($film as $f) { ?>
                                    <div class="row mb-2">
                                        <div class="col-5"><?= $f->tanggal_main; ?></div>
                                        <div class="col"><?= $f->waktu_main; ?></div>
                                        <div class="col"><?= anchor('admin/edit_jadwal/'.$f->id,'<button class="btn btn-primary">Edit</button>')?></div>
                                        <div class="col"><?= anchor('admin/hapus_jadwal'.'/'.$f->slug.'/'.$f->id,'<button class="btn btn-danger">Delete</button>')?></div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>">
</body>

</html>