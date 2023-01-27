<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/spinners.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 10:05:53 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Spinners</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <!-- <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet"> -->

    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">



</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <?php include('inc_spinner.php'); ?>
            
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">

            <?php include('inc_topmenu.php'); ?>
            </div>
            <?php include('inc_spinnerheader.php'); ?>

            <div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Simple loading spinners animated with CSS</h5>
                            </div>

                            <div class="ibox-content">

                                <p>
                                    SpinKit uses CSS animations to create smooth and easily customizable animations. You have to note that spinners use CSS3 animation.
                                </p>

                                <p>Grab the HTML and CSS for a spinner and include it in your project. Note that a hidden spinner (<code>opacity: 0</code>, or <code>visibility: hidden</code>) will still animate. After hiding a spinner, it's recommended to remove it from the DOM, set <code>display: none</code> or pause the animation by setting <code>animation-play-state: paused</code>.</p>


                            </div>
                        </div>
                    </div>
                </div>

                <?php include('inc_spinnertable.php'); ?>
            </div>
            <?php include('inc_footer.php'); ?>
        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <!-- <script src="js/plugins/pace/pace.min.js"></script> -->

    <!-- Tinycon -->
    <!-- <script src="js/plugins/tinycon/tinycon.min.js"></script> -->


</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/spinners.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 10:05:53 GMT -->

</html>