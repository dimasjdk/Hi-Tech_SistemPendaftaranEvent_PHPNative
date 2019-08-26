<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jan 2019 17:11:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitech 1.0</title>
    <link rel="stylesheet" type="text/css" href="assets2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets2/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets2/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="assets2/css/iofrm-theme4.css">
    <link rel="icon" href="assets/img/logo/favicon.png" type="image/png" sizes="16x16">
</head>

<body>
    <div class="form-body">
        
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="assets2/images/graphic1.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <img src="assets/img/logo/favicon.png" style="width: 45pt; height: 45pt; margin-left: 40%; margin-right: 40%; margin-bottom: 10%;" >
                        <p style="font-size: 24px; text-align: center;"><a href="/hi-tech">Hi-technology 2019</a></p>
                        <p>Pour your ideas with artificial intellegence for an advenced future</p>
                        <?php
                            include 'koneksi.php';
                            error_reporting(E_ALL ^ (E_NOTICE));
                            switch ($_GET['halaman']) {
                                case 'workshop':
                                    include 'main_workshop.php';
                                    break;

                                case 'miniHackaton':
                                    include 'main_miniHackaton.php';
                                    break;

                                case 'softwareFair':
                                    include 'main_softwareFair.php';
                                    break;

                                case 'talkShow':
                                    include 'main_talkshow.php';
                                    break;
                                
                                default:
                                    include 'main_miniHackaton.php';
                                    break;
                            }
                            ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="assets2/js/jquery.min.js"></script>
<script src="assets2/js/popper.min.js"></script>
<script src="assets2/js/bootstrap.min.js"></script>
<script src="assets2/js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jan 2019 17:11:13 GMT -->
</html>


