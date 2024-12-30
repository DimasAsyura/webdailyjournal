<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liberty Walk</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4igGHVT9jBdZyf4YSDcJghy6hDA-IGpo-Qg&s" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <style>
        body.dark-mode {
            background-color: #000000;
            color: #ffffff;
        }
        body.dark-mode .navbar {
            background-color: rgb(255, 255, 255);
        }
        body.dark-mode .card {
            background-color: #000000;
            border-color: rgb(255, 255, 255);
            color: #ffffff;
        }
        body.dark-mode .text-body-secondary {
            color: #ffffff;
        }
        /* Schedule styling */
        #schedule h1 {
            margin-bottom: 20px;
            font-size: 2.5rem;
        }
        #schedule .day-schedule {
            padding: 1rem;
            background-color: #f8f9fa;
            border-radius: 8px;
            margin-bottom: 1rem;
        }
        /* Responsive grid */
        @media (min-width: 768px) {
            #schedule .row-cols-md-4 > * {
                flex: 0 0 25%;
                max-width: 25%;
            }
        }
        #aboutme .row {
            align-items: center;
        }
        #aboutme .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        /* Responsive styling */
        @media (min-width: 768px) {
            #schedule .row-cols-md-4 > * {
                flex: 0 0 25%;
                max-width: 25%;
            }
            #aboutme .col-md-6 {
                text-align: left;
            }
        }
        @media (max-width: 767.98px) {
            #aboutme .col-md-6 {
                text-align: center;
            }
        }

    </style>
</head>

<body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">LIBERTY WALK</a>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4igGHVT9jBdZyf4YSDcJghy6hDA-IGpo-Qg&s" width="50" height="50" class="d-inline-block align-top" alt=""> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutme">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" target="_blank">Login</a>
                      </li>
                </ul>
                <button class="bg-black text-white p-2 rounded" id="darkModeBtn">
                    <i class="bi bi-moon-stars-fill"></i> 
                </button>
                <button class="bg-red-500 text-white p-2 rounded" id="lightModeBtn">
                    <i class="bi bi-brightness-high"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- nav end -->
    <!-- hero begin -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://libertywalk.co.jp/wp-content/uploads/2022/10/S15_silhouette.jpg" class="d-block w-100" height="715px" alt="LBWK S15">
                <div class="carousel-caption d-none d-md-block text-light">                
                    <p>S15 LB SILHOUTTE</p>
                </div>
                    
            </div>
            <div class="carousel-item">
                <img src="https://s1.cdn.autoevolution.com/images/news/gallery/r35-gt-r-fires-up-4-rotor-engine-is-ready-to-drift_7.jpg" width="100%" height="715px" alt="LBWK R35">
                <div class="carousel-caption d-none d-md-block text-light">             
                    <p>LBWK R35 FORMULA DRIFT</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.motortrend.com/uploads/sites/25/2020/08/Liberty-Walk-R34-Nissan-Skyline-Front-Splitter.jpg" class="d-block w-100" width="100%" height="715px" alt="LBWK R34">
                <div class="carousel-caption d-none d-md-block text-light">
                    <p>LBWK R34 SUPER SILHOUTTE</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->
    <!-- article begin -->
    <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <?php
                $sql = "SELECT * From Article ORDER BY tanggal DESC";
                $hasil = $conn->query($sql);

                $no =1;
                while($row = $hasil->fetch_assoc()){
                    ?>
                    <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
        }
        ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5" style="background-color: #616161">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class ="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://libertywalk.co.jp/wp-content/uploads/2023/04/DSC02406-Edit.jpg"
                            class="d-block w-100" width="70%"height="650px"alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://libertywalk.co.jp/wp-content/uploads/2024/10/WIRED-TOP-GALLERY00007.jpg"
                            class="d-block w-100" width="70%"height="650px"alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://libertywalk.co.jp/wp-content/uploads/2024/05/438910435_18426216826009611_2813431020241209694_n.jpg"
                            class="d-block w-100" width="70%"height="650px"alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://libertywalk.co.jp/wp-content/uploads/2023/04/TOP2023_mortorfan.jpg"
                            class="d-block w-100" width="70%"height="650px"alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://libertywalk.co.jp/wp-content/uploads/2024/02/423695228_18409709632059794_3927425507628203072_n.jpg"
                            class="d-block w-100" width="70%"height="650px"alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://libertywalk.co.jp/wp-content/uploads/2023/10/386363432_18386364769009611_908044468985857862_n.jpg"
                            class="d-block w-100" width="70%"height="650px"alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://libertywalk.co.jp/wp-content/uploads/2023/04/motorfanfesta00033.jpg"
                            class="d-block w-100" width="70%"height="650px"alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </section>

    <section id="schedule" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Schedule</h1>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <!-- Monday Schedule -->
                <div class="col day-schedule">
                    <h2>Senin</h2>
                    <ul class="list-unstyled">
                        <li>Sistem Operasi - 
                            12:30 - 15:00</li>
                        
                    </ul>
                </div>
                <!-- Tuesday Schedule -->
                <div class="col day-schedule">
                    <h2>Selasa</h2>
                    <ul class="list-unstyled">
                        <li>PKN - 10:20 - 12:00</li>
                        <li>Basis Data - 14:10 - 15;50</li>
                       
                    </ul>
                </div>
                <!-- Wednesday Schedule -->
                <div class="col day-schedule">
                    <h2>Rabu</h2>
                    <ul class="list-unstyled">
                        <li>Pemrograman Berbasis Web - 10:20 - 12:00</li>
                        <li>Basis Data - 12:30 - 14:10</li>
                        
                    </ul>
                </div>
                <!-- Thursday Schedule -->
                <div class="col day-schedule">
                    <h2>Kamis</h2>
                    <ul class="list-unstyled">
                        <li>Probabilitas Statistik - 09:30 - 12:00</li>
                        <li>Logika Informatika - 12:30 - 15:00</li>
                        
                    </ul>
                </div>
                <!-- Friday Schedule -->
                <div class="col day-schedule">
                    <h2>Jum'at</h2>
                    <ul class="list-unstyled">
                        <li>Sistem Informasi - 09:30 - 12:00</li>
                        <li>RPL 12:30 - 15:00</li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="aboutme" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">About Me</h1>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <img src="https://nmaa.co.id/wp-content/uploads/2023/08/wataru-kato-liberty-walk-ulti-pics-221-e1692868753373.jpg" alt="Profile" class="profile-img">
                </div>
                <div class="col mb-4">
                    <p><strong>NIM:</strong> A11.2023.14937</p>
                    <p><strong>Nama:</strong>Muhammad Dimas Asyura Nadiku</p>
                    <p><strong>Program Studi:</strong> Teknik Informatika</p>
                    <p><strong>Universitas:</strong> 
                        <a href="https://www.udinus.ac.id/" target="_blank">Universitas Dian Nuswantoro (UDINUS)</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery end -->
    <!-- footer begin -->
    <footer class="text-center p-5">
        <div>
            <a href="https://www.instagram.com/libertywalkkato?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                    class="bi bi-instagram h2 p-2 text-dark"></i></a>
            <a href="https://facebook.com/LibertywalkLBperformance/?locale=id_ID"><i class="bi bi-facebook h2 p-2 text-dark"></i></a>
        </div>
        <div>
            Dimas Asyura &copy; 2024
        </div>
    </footer>
    <!-- footer end -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous "></script>
    <script type="text/javascript">
        window.setTimeout("tampilWaktu()", 1000);

        function tampilWaktu() {
            var waktu = new Date();
            var bulan = waktu.getMonth() + 1;

            setTimeout("tampilWaktu()", 1000);
            document.getElementById("tanggal").innerHTML =
            waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
            document.getElementById("jam").innerHTML = 
            waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
        }
    </script>
    <script>
        const darkModeBtn = document.getElementById('darkModeBtn');
        const lightModeBtn = document.getElementById('lightModeBtn');

        darkModeBtn.addEventListener('click', () => {
            document.body.classList.add('dark-mode');
        });

        lightModeBtn.addEventListener('click', () => {
            document.body.classList.remove('dark-mode');
        });
    </script>
    
</body>

</html>

