<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        
        <title><?php echo e(config('app.name')); ?> | Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- AdminLTE -->        
        <link rel="stylesheet" href="<?php echo e(asset('public/AdminLTE/css/bootstrap.min.css')); ?>">
        <link type="text/css" href="<?php echo e(asset('public/AdminLTE/js/jquery-ui-1.9.2.custom/development-bundle/themes/base/jquery-ui.css')); ?>" rel="stylesheet" />

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->

        <link rel="stylesheet" href="<?php echo e(asset('public/AdminLTE/css/AdminLTE.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/AdminLTE/css/_all-skins.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/AdminLTE/css/main_v2.1.9.css')); ?>">

        <!-- sort icon -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
        
        <!-- my customer.css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/AdminLTE/css/back.css')); ?>">

        <!-- awesome -->  
        <link rel="stylesheet" href="<?php echo e(asset('public/AdminLTE/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">

<?php echo $__env->yieldContent('css'); ?>
        
    </head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">

<div class="wrapper">

    <header class="main-header">
        <a href="" class="logo">
             <span class="logo-mini"><b>C</b></span>
            <span class="logo-lg">Cards</span>
        </a>

        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                          <i class="fa fa-user fa-fw"></i>  
                          <?php echo e(Auth::user()->name); ?>

                        </a>
                        <ul class="dropdown-menu">
                           <li>   
                              <ul class="menu">
                                 <li>
                                    <div class="add_funct_top">
                                      <a class="btn btn-default btn-xs btn-block page_content" href="#" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><div class="dropdown-menu-div">Logout</div></a>
                                      <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                      </form>
                                    </div>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

     <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li class="header bolder" style="color: white;">MENU</li>
                <li>
                    <a href="<?php echo e(url('/')); ?>">
                        <i class="fa fa-folder-o"></i> <span>HOME</span>
                    </a>
                </li>
                <li class="header" style="font-size: 15px;">CARDS</li>  
                <li>
                    <a href="<?php echo e(url('/dashboard')); ?>">
                        <i class="fa fa-folder-o"></i> <span>List of Cards</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-folder-o"></i> <span>Add new Card</span>
                    </a>
                </li>
            </ul>
        </section>

    </aside>

    <div class="content-wrapper">

       <?php echo $__env->yieldContent('main'); ?>    

    </div>

    <footer class="main-footer">
        <div id="arrowup"><i class="fa fa-angle-double-up"></i></div>
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2019 <a href="#">"25one"</a>.</strong> All rights reserved.
    </footer>

</div>

<!-- AdminLTE -->
<script src="<?php echo e(asset('public/AdminLTE/js/jQuery-2.2.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/AdminLTE/js/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/AdminLTE/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/AdminLTE/js/app.min.js')); ?>"></script>

<!-- Sweet Alert -->
<!-- <script src="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.js"></script> -->

<?php echo $__env->yieldContent('js'); ?>

</body>

</html>
<?php /**PATH /var/www/html/laravel-cards/resources/views/back/layout.blade.php ENDPATH**/ ?>