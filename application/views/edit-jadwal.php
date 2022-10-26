<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
                <a href="<?= base_url('index.php/home/admin') ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none me-5">
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

    <div class="mt-5 container">
        <div class="container">
            <div class="row">
                <div class="col mb-5 me-2">
                    <div class="container rounded py-3 px-5" style="width: fit-content; height:fit-content+70px; background-color:#F7EDDB;">
                        <div class="pt-3"></div>
                        <?php foreach ($jadwal as $j) { ?>
                            <form action="<?= base_url('index.php/admin/update_jadwal') ?>" method="post">
                                <input type="hidden" name="id" value="<?= $j->id ?>?">
                                <input type="hidden" name="slug" value="<?= $j->slug ?>?">
                                <div class="row">
                                    <div>
                                        <table>
                                            <tr>
                                                <td>Tanggal tayang</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="date" name="tgl" id="" value="<?= $j->tanggal_main ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Waktu tayang</td>
                                                <td>:</td>
                                                <td>
                                                    <input type="time" name="waktu" id="" value="<?= date_format(date_create($j->waktu_main), "H:i") ?>">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="mx-auto" style="width: fit-content;">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                        <div class="pb-3 px-5"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>">

</body>

</html>