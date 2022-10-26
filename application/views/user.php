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
    <header class="p-3" style="height:fit-content+30px; background-color:#94B49F;">
        <div class="container d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ms-4">
            <a href="index" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none me-5">
                <img src="<?= base_url('asset/ticket.png') ?>" alt="">
            </a>
        </div>
    </header>

    <div class="mt-5 mx-auto rounded-5" style="width:720px; height: fit-content; background-color:#F7EDDB;">
        <div class="pt-5"></div>
        <div class="container mx-auto pt-3" style="width:fit-content;">
            <img src="<?= base_url('asset/user.png') ?>" alt="" class="border border-dark rounded-circle">
            <br>
            <h4 class="text-center"><?= $this->session->userdata('username') ?></h4>
        </div>

        <div class="">
            <a href="tiket" class="text-decoration-none text-dark">
                <div class="container w-50 border border-dark">Riwayat pesanan</div>
            </a>
        </div>

        <div class="mt-3"></div>
        
        <div class="">
            <a href="tiket_aktif" class="text-decoration-none text-dark">
                <div class="container w-50 border border-dark">Pesanan aktif</div>
            </a>
        </div>

        <div class="mx-auto mt-2" style="width:fit-content;">
            <a href="<?= site_url('home/logout') ?>" class="text-decoration-none text-dark">
                <div class="btn btn-danger">Logout</div>
            </a>
        </div>
        <div class="pb-5"></div>
        <div class="pb-3"></div>
    </div>

    <link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js') ?>">

</body>

</html>