<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Beranda</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="beranda">Edenia Garden</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="beranda">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inventory">Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bunga">Bunga</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>
                            
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main> -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1 class="text-center display-3">Edenia Garden</h1>
                <p class="text-center lead">Sebuah kebun dengan berbagai ragam bunga di dalamnya. Edenia Garden juga 
                melayani pembelian bunga anggrek dan mawar.</p>
            </div>
        </div>

        <div class="container">
            <!-- Anggrek -->
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 href="bunga" class="m-0 font-weight-bold">Anggrek</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4"
                                src="img/anggrek.jpg" alt="">
                        </div>
                        <div class="col-sm">

                            <p>Suku anggrek-anggrekan merupakan satu suku tumbuhan berbunga dengan anggota jenis terbanyak. 
                                Jenis-jenisnya tersebar luas dari daerah tropika basah hingga wilayah sirkumpolar.
                                <br><br> Jenis anggrek yang ada di Edenia :</p>
                            <ul>
                                <li>Phalaenopsis</li>    
                                <li>Dendrobium</li>
                                <li>Cattleya</li>
                                <li>Vanda</li>
                                <li>Cymbidium</li>
                                <li>Orchis</li>
                            </ul>
                            <a href="bunga">Lihat selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mawar -->
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 href="bunga" class="m-0 font-weight-bold">Mawar</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4"
                                src="img/mawar.jpg" alt="">
                        </div>
                        <div class="col-sm">

                            <p>Mawar adalah suatu jenis tanaman semak dari genus Rosa sekaligus nama bunga yang dihasilkan 
                                tanaman ini. Tanaman mawar kebanyakan tumbuh di belahan bumi utara yang berudara sejuk.
                                <br><br> Jenis anggrek yang ada di Edenia :</p>
                            <ul>
                                <li>Mawar merah</li>    
                                <li>Mawar kuning</li>
                                <li>Mawar putih</li>
                                <li>Mawar pink</li>
                                <li>Mawar hitam</li>
                                <li>Mawar biru</li>
                            </ul>
                            <a href="bunga">Lihat selengkapnya &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\eg\edenia\resources\views/beranda.blade.php ENDPATH**/ ?>