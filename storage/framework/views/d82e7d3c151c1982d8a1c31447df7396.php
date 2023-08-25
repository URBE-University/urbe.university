<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="icon" type="image/svg" href="<?php echo e(asset('static_assets/u-logo.svg')); ?>">
        <title><?php echo e($page->title ?? $title . ' | ' . config('app.name', 'URBE University')); ?></title>

        <?php if(request()->routeIs('home')): ?>
            <meta property="og:url"         content="<?php echo e(request()->url()); ?>" />
            <meta property="og:type"        content="page" />
            <meta property="og:title"       content="<?php echo e($settings->title); ?>" />
            <meta name="description" content="<?php echo e($settings->description); ?>">
            <meta property="og:description" content="<?php echo e($settings->description); ?>" />
            <meta property="og:image"       content="<?php echo e(asset($settings->card_image) ?? ''); ?>" />
            <meta name="google-site-verification" content="<?php echo e($settings->google_search_id); ?>" />
            <meta name="msvalidate.01" content="<?php echo e($settings->bing_webmaster_id); ?>" />
        <?php endif; ?>

        <?php if(request()->routeIs('blog.post.show')): ?>
            <meta property="og:url"         content="<?php echo e(request()->url()); ?>" />
            <meta property="og:type"        content="article" />
            <meta property="og:title"       content="<?php echo e($page->title ?? $title); ?>" />
            <meta name="description" content="<?php echo e(Str::of($page->content)->limit(165)); ?>">
            <meta property="og:description" content="<?php echo e(Str::of($page->content)->limit(120)); ?>" />
            <meta property="og:image"       content="<?php echo e(asset($page->featured_image) ?? ''); ?>" />
        <?php endif; ?>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=playfair-display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

        
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-700340760"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'AW-700340760');
        </script>

        
        <script src="https://cdn.usefathom.com/script.js" data-site="FHSKFCYK" defer></script>

        <script type="text/javascript">
	    (function(c,l,a,r,i,t,y){
		c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
		t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
		y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
	    })(window, document, "clarity", "script", "i97m7bmlcw");
	</script>
    </head>
    <body class="font-sans bg-white text-slate-800 antialiased">
        
        <?php $__empty_1 = true; $__currentLoopData = \App\Models\Banner::where('starts_at', '<=', today())->where('ends_at', '>=', today())->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="w-full bg-yellow-400 text-black text-base">
                <div class="max-w-5xl mx-auto h-12 px-4 sm:px-6 lg:px-8">
                    <div class="h-full flex items-center prose">
                        <?php echo e(Illuminate\Mail\Markdown::parse($banner->content)); ?>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
        

        <?php echo $__env->make('website.partials.subnavbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('website.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('website.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldPushContent('modals'); ?>

        <?php echo \Livewire\Livewire::scripts(); ?>

    </body>
</html>
<?php /**PATH /home/elvis/Projects/CUSTOMERS/URBE/urbe.university/resources/views/layouts/website.blade.php ENDPATH**/ ?>