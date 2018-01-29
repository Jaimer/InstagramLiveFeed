<?php
//      Instagram Live Feed para Fiesta de Graduados ESPOL
//      Por: Jaime Moscoso 2018

require_once 'vendor/autoload.php';

$instagram = \InstagramScraper\Instagram::withCredentials('USER', 'PASSWORD', '/cache');
$instagram->login();

$medias = $instagram->getMediasByTag('HASHTAG', 15);
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <meta http-equiv="refresh" content="600" /><!-- Change refresh time here (seconds) -->
    <title>Instagram Slider</title>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery.anyslider.min.js"></script>

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 slider">
            <?php
                foreach($medias as $media){
                    $id = $media->getOwner()->getId();
                    $account = $instagram->getAccountById($id);
                    echo '<div class="row">';
                    echo '<div class="profile"><img src="'.$account->getProfilePicUrl().'">';
                    echo '<h1>'.$account->getFullName().'</h1>';
                    echo '</div>';
                    echo '<div class="col-lg-12 image">';
                    echo '<img src="'.$media->getImageHighResolutionUrl().'">';
                    echo '<div class="caption">';
                    echo '<p>'.$media->getCaption().'</p>';
                    echo '</div>';
                    echo '</div></div>';
                }
            ?>
            </div>
            <!--<div class="col-lg-3 bar">
                <img src="images/logo1.png" style="max-width:80% !important;">
                <h1>TITULO</h1>
                <p>#HASHTAG</p>
                <img src="images/logo2.png" alt="">
                <img src="images/logo3.png" alt="">
                <div class="footer">
                    <i class="powered">Powered by:</i>
                    <img src="images/logo4.png">
                    <img src="images/logo5.png">
                </div>
            </div>-->
        </div>
    </div>
</body>
<script type="text/javascript">
        $('.slider').anyslider({
            showBullets: false,
            showControls: false,
            pauseOnHover: false
        });
    </script>
</html>
