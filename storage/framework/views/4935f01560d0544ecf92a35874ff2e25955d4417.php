<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('public/css/styles.css')); ?>" />

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>


     <?php echo $__env->make('layouts.inc.admin-navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <div id="layoutSidenav">

          <?php echo $__env->make('layouts.inc.admin-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <div id="layoutSidenav_content">

               <main>

                    <?php echo $__env->yieldContent('content'); ?>

               </main>

               <?php echo $__env->make('layouts.inc.admin-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          </div>


     </div>

     <script src="<?php echo e(asset('public/js/bootstrap.bundle.min.js')); ?>" crossorigin="anonymous"></script>
     <script src="<?php echo e(asset('public/js/scripts.js')); ?>" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\blog_app\resources\views/layouts/master.blade.php ENDPATH**/ ?>