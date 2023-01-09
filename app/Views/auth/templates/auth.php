<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>KHDTK DATABASE - Authentification</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('front_page/assets/img/favicon.png') ?>" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,600,700" rel="stylesheet">
    <link href="<?= base_url('dashboard/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/plugins.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('dashboard/assets/css/authentication/form-2.css') ?>" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('dashboard/assets/css/forms/theme-checkbox-radio.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('dashboard/assets/css/forms/switches.css') ?>">

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        #parallax {
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: url("https://images.unsplash.com/photo-1534531409543-069f6204c5b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2076&q=80");
            background-repeat: no-repeat;
            background-position: center;
            background-position: 50% 50%;
            background-size: 110%;

        }
    </style>
</head>

<body class="form">
    <div id="parallax">

        <?= $this->renderSection('content'); ?>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url('dashboard/assets/js/libs/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('dashboard/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?= base_url('dashboard/assets/js/authentication/form-2.js') ?>"></script>
    <script>
        (function() {
            // Add event listener
            document.addEventListener("mousemove", parallax);
            const elem = document.querySelector("#parallax");
            // Magic happens here
            function parallax(e) {
                let _w = window.innerWidth / 2;
                let _h = window.innerHeight / 2;
                let _mouseX = e.clientX;
                let _mouseY = e.clientY;
                let _depth1 = `${50 - (_mouseX - _w) * 0.01}% ${50 - (_mouseY - _h) * 0.01}%`;
                let _depth2 = `${50 - (_mouseX - _w) * 0.02}% ${50 - (_mouseY - _h) * 0.02}%`;
                let _depth3 = `${50 - (_mouseX - _w) * 0.03}% ${50 - (_mouseY - _h) * 0.03}%`;
                let x = `${_depth3}, ${_depth2}, ${_depth1}`;
                console.log(x);
                elem.style.backgroundPosition = x;
            }

        })();
    </script>
</body>

</html>