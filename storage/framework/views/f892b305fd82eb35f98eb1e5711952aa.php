<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e(config('app.name', 'Boxync')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="/images/logo.png">
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    </head>
    <body class="antialiased">
        <div class="relative min-h-screen selection:bg-red-500 selection:text-black bg-contain bg-no-repeat"
            style="background-image: url(/images/home.png); background-color:#f0f0f0;">
            <div class="max-w-10xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="pt-24 pr-20 lg:pr-20 sm:pr-0 h-16 text-right">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/categories')); ?>" class="font-semibold inline-flex items-center px-3 text-3xl sm:text-2xl pb-1   dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">Categories</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('register')); ?>" class="font-semibold inline-flex items-center px-3 text-3xl sm:text-2xl pb-1 text-red focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out" style="color:red;">Register</a>
                        <a href="<?php echo e(route('login')); ?>" class="bg-red-500 font-semibold inline-flex items-center px-3 text-3xl sm:text-2xl pb-1 text-white focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out rounded-md">Log in</a>
                    <?php endif; ?>
                </div>
                <img src="/images/logo.png" class="sm:h-20 lg:h-40 fixed top-5 left-12" />
                <span class="fixed bottom-5 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-2xl text-gray-300"> 
                    <!-- Bellic Boxing -->
                </span>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\Administrator\Downloads\230922_Laravel_category\Laravel-vite-tailwind-simple-site\resources\views/welcome.blade.php ENDPATH**/ ?>