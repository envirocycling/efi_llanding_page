<?php

$menus = [
    [
        "label" => "MMS",
        "icon" => "fa-users",
        "path" => "https://mmsv2.efi.net.ph"
    ],
    [
        "label" => "PURCHASING",
        "icon" => "fa-file-invoice",
        "path" => "https://purchasing.efi.net.ph"
    ],
    [
        "label" => "PAYMENT",
        "icon" => "fa-money-check-dollar",
        "path" => "https://paymentsystem.efi.net.ph"
    ],
    [
        "label" => "IMS",
        "icon" => "fa-file-lines",
        "path" => "https://ims.efi.net.ph"
    ],
    [
        "label" => "IMS 2",
        "icon" => "fa-gauge-high",
        "path" => "https://imsv2.efi.net.ph"
    ],
    [
        "label" => "AFE",
        "icon" => "fa-chart-line",
        "path" => "http://afe.efi.ph"
    ],
    [
        "label" => "APPRAISAL",
        "icon" => "fa-chart-line",
        "path" => "http://10.151.5.27:8089/login"
    ],
    [
        "label" => "NAS",
        "icon" => "fa-server",
        "path" => "http://10.150.1.139:5000/"
    ],
    [
        "label" => "WEB MAIL",
        "icon" => "fa-envelope",
        "path" => "https://v-host8.ph:2096/"
    ],
];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Envirocycling Fiber Inc.</title>

    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="assets/fontawesome/all.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="wrapper card border-success w-75  p-4" style="margin-top: 100px">

            <div class="d-flex justify-content-center align-items-center">
                <img src="assets/images/logo.png" alt="icon" style="margin-right: 20px;">
                <h1 class="title d-inline-block text-center">Envirocycling Fiber Inc.</h1>
            </div>
            
            
            <div class="card-body my-4">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 row-cols-sm-1 gx-5 gy-5">
                    <?php foreach($menus as $menu):?>
                    <div class="col">
                        <a class="item d-block text-decoration-none" href="<?=$menu['path']?>" target="__blank">
                            <div class="card border-success gy-2 text-success py-4 bg-light d-flex justify-content-center align-items-center">
                                <i class="fs-2 fa <?=$menu['icon']?>"></i>
                                <span class="mt-1"><?=$menu['label']?></span>
                            </div>
                        </a>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            
        </div>

        
        <footer class="my-2">
            <div class="mt-4 text-center text-white align-self-end">
                <small>EFI ITD&copy;2022</small>
            </div>
        </footer>
    </div>


    <script src="assets/fontawesome/js/all.js"></script>
  </body>
</html>