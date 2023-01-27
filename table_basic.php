<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/table_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 10:06:06 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Static Tables</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">

</head>
<style>
    
</style>
<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            
            <?php 
            
            $myVar ='Tables';
            
            $items = '<a href="https://www.w3schools.com">Home</a> -- <a href="https://www.goolge.com">Data</a> -- <a href="https://www.facebook.com">Login</a> -- <a href="https://www.w3schools.com">Table</a>';
            
            include('inc_leftmenu.php');        
            ?>

        </nav> 

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
            <?php include('inc_topmenu.php'); ?>
            </div>
            <?php include('inc_breadcrumb.php'); ?>
            <?php include('inc_tableall.php'); ?>
            <!-- <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Basic Table</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#" class="dropdown-item">Config option 1</a>
                                        </li>
                                        <li><a href="#" class="dropdown-item">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Striped Table </h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#" class="dropdown-item">Config option 1</a>
                                        </li>
                                        <li><a href="#" class="dropdown-item">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Data</th>
                                            <th>User</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                                            <td>Samantha</td>
                                            <td class="text-navy"> <i class="fa fa-level-up"></i> 40% </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><span class="line">5,3,9,6,5,9,7,3,5,2</span></td>
                                            <td>Jacob</td>
                                            <td class="text-warning"> <i class="fa fa-level-down"></i> -20% </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><span class="line">1,6,3,9,5,9,5,3,9,6,4</span></td>
                                            <td>Damien</td>
                                            <td class="text-navy"> <i class="fa fa-level-up"></i> 26% </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Border Table </h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#" class="dropdown-item">Config option 1</a>
                                        </li>
                                        <li><a href="#" class="dropdown-item">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Hover Table </h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#" class="dropdown-item">Config option 1</a>
                                        </li>
                                        <li><a href="#" class="dropdown-item">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Data</th>
                                            <th>User</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><span class="pie">0.52,1.041</span></td>
                                            <td>Samantha</td>
                                            <td class="text-navy"> <i class="fa fa-level-up"></i> 40% </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><span class="pie">226,134</span></td>
                                            <td>Jacob</td>
                                            <td class="text-warning"> <i class="fa fa-level-down"></i> -20% </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><span class="pie">0.52/1.561</span></td>
                                            <td>Damien</td>
                                            <td class="text-navy"> <i class="fa fa-level-up"></i> 26% </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Custom responsive table </h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#" class="dropdown-item">Config option 1</a>
                                        </li>
                                        <li><a href="#" class="dropdown-item">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-sm-5 m-b-xs"><select class="form-control-sm form-control input-s-sm inline">
                                            <option value="0">Option 1</option>
                                            <option value="1">Option 2</option>
                                            <option value="2">Option 3</option>
                                            <option value="3">Option 4</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 m-b-xs">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-sm btn-white ">
                                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Day
                                            </label>
                                            <label class="btn btn-sm btn-white active">
                                                <input type="radio" name="options" id="option2" autocomplete="off"> Week
                                            </label>
                                            <label class="btn btn-sm btn-white">
                                                <input type="radio" name="options" id="option3" autocomplete="off"> Month
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group"><input placeholder="Search" type="text" class="form-control form-control-sm"> <span class="input-group-append"> <button type="button" class="btn btn-sm btn-primary">Go!
                                                </button> </span></div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>

                                                <th></th>
                                                <th>Project </th>
                                                <th>Completed </th>
                                                <th>Task</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" checked class="i-checks" name="input[]"></td>
                                                <td>Project<small>This is example of project</small></td>
                                                <td><span class="pie">0.52/1.561</span></td>
                                                <td>20%</td>
                                                <td>Jul 14, 2013</td>
                                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                                <td>Alpha project</td>
                                                <td><span class="pie">6,9</span></td>
                                                <td>40%</td>
                                                <td>Jul 16, 2013</td>
                                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                                <td>Betha project</td>
                                                <td><span class="pie">3,1</span></td>
                                                <td>75%</td>
                                                <td>Jul 18, 2013</td>
                                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" class="i-checks" name="input[]"></td>
                                                <td>Gamma project</td>
                                                <td><span class="pie">4,9</span></td>
                                                <td>18%</td>
                                                <td>Jul 22, 2013</td>
                                                <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
            <?php include('inc_footer.php'); ?>

        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <!-- <script src="js/plugins/pace/pace.min.js"></script> -->

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <!-- <script src="js/demo/peity-demo.js"></script> -->

    <script>
        $(document).ready(function() {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/table_basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Sep 2019 10:06:06 GMT -->

</html>