
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Prajjwal Poudel • CV
    </title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/blk-design-system" />
    <!--  Social tags      -->
    <meta name="keywords" content="design system, bootstrap 4 design system, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, blk, blakc, black kit, blk ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, blk design system">
    <meta name="description" content="Black Kit is a responsive Bootstrap 4 kit provided for free by Creative Tim. It is a beautiful cross-platform UI kit featuring over 50 elements and 3 templates.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Black Kit by Creative Tim">
    <meta itemprop="description" content="Black Kit is a responsive Bootstrap 4 kit provided for free by Creative Tim. It is a beautiful cross-platform UI kit featuring over 50 elements and 3 templates.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/56/opt_nudp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Black Kit by Creative Tim">
    <meta name="twitter:description" content="Black Kit is a responsive Bootstrap 4 kit provided for free by Creative Tim. It is a beautiful cross-platform UI kit featuring over 50 elements and 3 templates.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/56/opt_nudp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Black Kit by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/blk-design-system-pro/index.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/56/opt_nudp_thumbnail.jpg" />
    <meta property="og:description" content="Black Kit is a responsive Bootstrap 4 kit provided for free by Creative Tim. It is a beautiful cross-platform UI kit featuring over 50 elements and 3 templates." />
    <meta property="og:site_name" content="Creative Tim" />
    <!--  -->
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/blk-design-system.min.css?v=1.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/style.css" rel="stylesheet" />

</head>

<body class="profile-page">
<!-- Extra details for Live View on GitHub Pages -->
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    <div class="page-header">
        <img src="assets/img/dots.png" class="dots">
        <img src="assets/img/path4.png" class="path">
        <div class="container align-items-center">
            <div class="row" style="margin-top: -100px; height: auto;">
                <div class="col-lg-12 col-md-12 ml-auto mr-auto">
                    <div class="card card-coin card-plain">
                        <div class="card-body">
                            <h2 class="title">MESSAGES</h2><hr class="title">
                            <a  href="#" class="close">Close</a>
                            <div class="table-responsive">
                                <table class="table tablesorter " id="plain-table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th class="header">
                                            Id
                                        </th>
                                        <th class="header">
                                            Name
                                        </th>
                                        <th class="header">
                                            Email
                                        </th>
                                        <th class="header">
                                            Phone
                                        </th>
                                        <th class="header">
                                            Address
                                        </th>
                                        <th class="header">
                                            Message
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    /**
                                     * Created by PhpStorm.
                                     * User: prajjwal
                                     * Date: 2/16/19
                                     * Time: 6:06 PM
                                     */

                                    include ("contact.php");
                                    $query = "SELECT * FROM `contact` ORDER BY `name` ASC ";
                                    $run = mysqli_query($con, $query);
                                    $row=mysqli_num_rows($run);
                                    while($data=mysqli_fetch_assoc($run)){
                                        ?>
                                        <tr>
                                            <td><?php echo $data['id'];?></td>
                                            <td><?php echo $data['name'];?></td>
                                            <td><?php echo $data['email'];?></td>
                                            <td><?php echo $data['phone'];?></td>
                                            <td><?php echo $data['address'];?></td>
                                            <td><?php echo $data['message'];?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!-- Chart JS -->
<script src="assets/js/plugins/chartjs.min.js"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="assets/js/plugins/moment.min.js"></script>
<script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!-- Black Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
<!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
<script src="assets/js/plugins/jquery.sharrre.min.js" type="text/javascript"></script>
<!-- Sharrre libray -->
<script src="assets/demo/jquery.sharrre.js"></script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
</noscript>
</body>

</html>