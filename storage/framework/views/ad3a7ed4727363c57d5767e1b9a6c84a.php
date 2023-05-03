<?php $__env->startSection('content'); ?>
<?php echo eval("?>$page_content"); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.website', ['settings' => $settings, 'page' => $page], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/website/page.blade.php ENDPATH**/ ?>