<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bunga</title>
</head>
<link href="css/app.css" rel="stylesheet">
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="home">Edenia Garden</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="beranda">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inventory">Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bunga">Bunga</a>
                </li>
            </ul>
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
</body>
</html><?php /**PATH C:\xampp\htdocs\edenia\resources\views/bunga2.blade.php ENDPATH**/ ?>