<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Bunga</title>

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
                        <li class="nav-item">
                            <a class="nav-link" href="beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inventory">Inventory</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="bunga">Bunga <span class="sr-only">(current)</span></a>
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

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <h1 class="text-center display-3">Edenia Garden</h1>
                <p class="text-center lead">Daftar bunga di Edenia Garden.</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody class="color: #000">
                                <tr>
                                    <td>A001</td>
                                    <td>Phalaenopsis</td>
                                    <td>Anggrek</td>
                                    <td><img src="img/anggrek.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>A002</td>
                                    <td>Dendrobium</td>
                                    <td>Anggrek</td>
                                    <td><img src="img/dendrobium.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>A003</td>
                                    <td>Cattleya</td>
                                    <td>Anggrek</td>
                                    <td><img src="img/cattleya.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>A004</td>
                                    <td>Vanda</td>
                                    <td>Anggrek</td>
                                    <td><img src="img/vanda.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>A005</td>
                                    <td>Cymbidium</td>
                                    <td>Anggrek</td>
                                    <td><img src="img/cymbidium.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>A006</td>
                                    <td>Orchis</td>
                                    <td>Anggrek</td>
                                    <td><img src="img/orchis.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>M001</td>
                                    <td>Mawar Merah</td>
                                    <td>Mawar</td>
                                    <td><img src="img/mawar.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>M002</td>
                                    <td>Mawar Kuning</td>
                                    <td>Mawar</td>
                                    <td><img src="img/m_kuning.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>M003</td>
                                    <td>Mawar Putih</td>
                                    <td>Mawar</td>
                                    <td><img src="img/m_putih.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>M004</td>
                                    <td>Mawar Pink</td>
                                    <td>Mawar</td>
                                    <td><img src="img/m_pink.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>M005</td>
                                    <td>Mawar Hitam</td>
                                    <td>Mawar</td>
                                    <td><img src="img/m_hitam.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                                <tr>
                                    <td>M006</td>
                                    <td>Mawar Biru</td>
                                    <td>Mawar</td>
                                    <td><img src="img/m_biru.jpg" alt=""  style="height:200px;"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\edenia\resources\views/bunga.blade.php ENDPATH**/ ?>