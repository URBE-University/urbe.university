<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="icon" type="image/svg" href="<?php echo e(asset('static_assets/u-logo.svg')); ?>">
        <title><?php echo e($page->title ?? $title . ' | ' . config('app.name', 'URBE University')); ?></title>

        <?php if(request()->routeIs('blog.post.show')): ?>
            <meta property="og:url"         content="<?php echo e(request()->url()); ?>" />
            <meta property="og:type"        content="article" />
            <meta property="og:title"       content="<?php echo e($page->title ?? $title); ?>" />
            <meta property="og:description" content="<?php echo e(Str::of($page->content)->limit(120)); ?>" />
            <meta property="og:image"       content="<?php echo e(asset($page->featured_image) ?? ''); ?>" />
        <?php endif; ?>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=playfair-display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans bg-white text-slate-800 antialiased text-lg">
        <?php echo $__env->make('website.partials.subnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('website.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('website.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/layouts/website.blade.php ENDPATH**/ ?>