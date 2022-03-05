<!doctype html>
<html lang="<?php echo e(APP['lang']); ?>">
    <head>
        <?php echo $__env->make('layouts.cms.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body data-spy="scroll" data-target=".navbar-custom">
        <?php echo $__env->make('layouts.cms.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\laragon\www\originals\resources\views/layouts/cms/app.blade.php ENDPATH**/ ?>