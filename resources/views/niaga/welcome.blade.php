<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>Niagahoster</title>
          <!-- Tell the browser to be responsive to screen width -->
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="csrf-token" content="{{ csrf_token() }}">
          <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

          <!-- Font Awesome -->
          <link rel="stylesheet" href="{{url('assets/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
          <!-- Ionicons -->
          <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
          <!-- Tempusdominus Bbootstrap 4 -->
          <link rel="stylesheet" href="{{url('assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
          <!-- iCheck -->
          <link rel="stylesheet" href="{{url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
          <!-- JQVMap -->
          <link rel="stylesheet" href="{{url('assets/adminlte/plugins/jqvmap/jqvmap.min.css')}}">
          <!-- Theme style -->
          <link rel="stylesheet" href="{{url('assets/adminlte/dist/css/adminlte.min.css')}}">
          <!-- overlayScrollbars -->
          <link rel="stylesheet" href="{{url('assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
          <!-- Daterange picker -->
          <link rel="stylesheet" href="{{url('assets/adminlte/plugins/daterangepicker/daterangepicker.css')}}">
          <!-- summernote -->
          <link rel="stylesheet" href="{{url('assets/adminlte/plugins/summernote/summernote-bs4.css')}}">
          <!-- Google Font: Source Sans Pro -->
          <link href="{{url('assets/font-google.css')}}" rel="stylesheet">

          <style>
            .container {
              height: 200px;
              position: relative;
            }

            .center {
              margin: 0;
              position: absolute;
              top: 50%;
              left: 50%;
              -ms-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
            }

            .fa-star {
                color: #007bff;
            }

            .fa-check-circle {
                color: green;
            }

            .corner-ribbon {
              z-index: 2;
              width: 250px;
              background: #e43;
              position: absolute;
              top: 25px;
              left: -50px;
              text-align: center;
              line-height: 40px;
              letter-spacing: 1px;
              color: #f0f0f0;
              transform: rotate(45deg);
              -webkit-transform: rotate(45deg);
              overflow: hidden;
            }
            .corner-ribbon.shadow {
              box-shadow: 0 0 3px rgba(0, 0, 0, .3);
            }
            /* Different positions */

            .corner-ribbon.top-left {
              /* top: 18px; */
              top:22px;
              left: -80px;
              right: auto;
              transform: rotate(-45deg);
              -webkit-transform: rotate(-46deg);
              overflow: hidden;
            }
            .corner-ribbon.blue {
              background: green;
            }

            ul.list-group.list-group-striped li:nth-of-type(even){
                background: lightgray;
            }

            ul#sosmed li {
              display:inline;
            }

          </style>

    </head>
    <body>
        <div style="padding-left: 5%; padding-right: 5%">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;"">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-md">
                        <img class="img-fluid" src="{{url('assets/niaga/images/niaga.png')}}" alt="Niagahoster">
                    </div>
                    <div class="col-md">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item">
                            <a class="nav-link" href="#">Hosting</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Domain</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Server</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Website</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Afiliasi</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Promo</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Pembayaran</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Review</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                          </li>
                        </ul>
                    </div>
              </div>
            </nav>
            <div class="row" style="margin-top: 20px">
                <div class="col-md-6">
                    <h1 style="font-family: 'Montserrat'; margin-top: 50px">PHP Hosting</h1>
                    <h3>Cepat, handal, penuh dengan<br/> modul PHP yang anda butuhkan</h3>
                    <span style="padding-right: 10px" class="fas fa-check-circle"></span>Solusi PHP untuk performa query yang lebih cepat<br/>
                    <span style="padding-right: 10px" class="fas fa-check-circle"></span>Konsumsi memori yang lebih rendah<br/>
                    <span style="padding-right: 10px" class="fas fa-check-circle"></span>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7<br/>
                    <span style="padding-right: 10px" class="fas fa-check-circle"></span>Fitur enkripsi IonCube dan Zend Guard Loaders<br/>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" width="500px" src="{{url('assets/niaga/svg/php7.svg')}}" alt="PHP7">
                </div>
            </div>

            <!-- hosting -->
            <div class="row" style="margin-top: 100px">
                <div class="col-md-3 offset-md-2">
                    <div class="container">
                        <div class="center">
                            <embed class="img-fluid" src="{{url('assets/niaga/svg/icon PHP Hosting_zendguard.svg')}}" 
                            alt="ZendGuard">
                            <p style="text-align: center">PHP Zend Guard Loader</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="container">
                        <div class="center">
                            <embed class="img-fluid" src="{{url('assets/niaga/svg/icon PHP Hosting_composer.svg')}}" 
                            alt="PHP Composer">
                            <p style="text-align: center">PHP Composer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container">
                        <div class="center">
                            <embed class="img-fluid" src="{{url('assets/niaga/svg/icon PHP Hosting_ioncube.svg')}}" 
                            alt="ionCube">
                            <p style="text-align: center">PHP ionCube Loader</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paket hosting -->
            <div class="row" style="margin-top: 100px">
                <div class="col-md-6 offset-md-3">
                    <h3 style="text-align: center; font-family: 'Montserrat'">Paket Hosting Singapura yang Tepat</h3>
                    <p style="text-align: center; font-size: 25px">Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
                </div>
            </div>

            <div id="app">
                <articles></articles>
            </div>

            <!-- Powerful -->
            <div class="row" style="margin-top: 100px">
                <div class="col-md-6 offset-md-3">
                    <h3 style="text-align: center; font-family: 'Montserrat'">Powerful dengan Limit PHP yang lebih besar</h3>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-md-3 offset-md-3">
                    <ul class="list-group list-group-striped">
                      <li class="list-group-item"><span style="padding-right: 10px" class="fas fa-check-circle"></span>max execution time 300s</li>
                      <li class="list-group-item"><span style="padding-right: 10px" class="fas fa-check-circle"></span>max execution time 300s</li>
                      <li class="list-group-item"><span style="padding-right: 10px" class="fas fa-check-circle"></span>php memory limit 1024</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-group list-group-striped">
                      <li class="list-group-item"><span style="padding-right: 10px" class="fas fa-check-circle"></span>post max size 128 MB</li>
                      <li class="list-group-item"><span style="padding-right: 10px" class="fas fa-check-circle"></span>upload max filesize 128 MB</li>
                      <li class="list-group-item"><span style="padding-right: 10px" class="fas fa-check-circle"></span>max input vars 2500</li>
                    </ul>
                </div>
            </div>

            <!-- Semua paket sdah termasuk -->
            <div class="row" style="margin-top: 100px">
                <div class="col-md-6 offset-md-3">
                    <h3 style="text-align: center; font-family: 'Montserrat'">Semua Paket Hosting Sudah Termasuk</h3>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-md-3 offset-md-1">
                    <center>
                        <embed class="img-fluid" src="{{url('assets/niaga/svg/icon PHP Hosting_PHP Semua Versi.svg')}}"
                        width="100px">
                    </center>
                    <p style="text-align: center"><b>PHP Semua Versi</b></p>
                    <p style="text-align: center">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka anda!</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <embed class="img-fluid" src="{{url('assets/niaga/svg/icon PHP Hosting_My SQL.svg')}}"
                        width="100px">
                    </center>
                    <p style="text-align: center"><b>MySQL Versi 5.6</b></p>
                    <p style="text-align: center">Nikmati MySQL versi terbaru, tercepat, dan kaya akan fitur</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <embed class="img-fluid" src="{{url('assets/niaga/svg/icon PHP Hosting_CPanel.svg')}}" 
                        width="100px">
                    </center>
                    <p style="text-align: center"><b>Panel Hosting cPanel</b></p>
                    <p style="text-align: center">Kelola website dengan panel canggih yang familiar di hati anda</p>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-md-3 offset-md-1">
                    <center>
                        <embed class="img-fluid" src="{{url('assets/niaga/svg/icon PHP Hosting_garansi uptime.svg')}}" 
                        width="100px">
                    </center>
                    <p style="text-align: center"><b>Garansi Uptime 99.9%</b></p>
                    <p style="text-align: center">Data center yang mendukung kelangsungan website anda 24/7</p>
                </div>
                <div class="col-md-4">
                    <center>
                        <embed class="img-fluid" src="{{url('assets/niaga/svg/icon PHP Hosting_InnoDB.svg')}}" 
                        width="100px">
                    </center>
                    <p style="text-align: center"><b>Database InnoDB Unlimited</b></p>
                    <p style="text-align: center">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan anda</p>
                </div>
                <div class="col-md-3">
                    <center>
                        <embed class="img-fluid" src="{{url('assets/niaga/svg/icon PHP Hosting_My SQL remote.svg')}}" 
                        width="100px">
                    </center>
                    <p style="text-align: center"><b>Wildcard Remote MySQL</b></p>
                    <p style="text-align: center">Mendukung s/d 25 max_user_connections dan 100 max_connections</p>
                </div>
            </div>

            <!-- Mendukung penuh framework laravel -->
            <div class="row" style="margin-top: 100px; font-size: ">
                <div class="col-md-6 offset-md-3">
                    <h3 style="text-align: center; font-family: 'Montserrat'">Mendukung penuh framework laravel</h3>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-md-6" style="margin-top: 50px">
                    <p>Tak perlu menggunakan dedicated server atau VPS yang mahal. Layanan PHP hosting murah kami mendukung framework penuh framework favorit anda</p>
                    <span style="padding-right: 10px" class="fas fa-check-circle"></span>Install Laravel <b>1 click</b> dengan Softaculous Installer<br/>
                    <span style="padding-right: 10px" class="fas fa-check-circle"></span>Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json, dan fileinfo</b><br/>
                    <span style="padding-right: 10px" class="fas fa-check-circle"></span>Tersedia <b>Composer dan SSH</b> untuk menginstal packages pilihan anda<br/>
                    <p style="font-size: 12px; margin-top: 20px">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
                    <button style="border-radius: 20px; border-width: 2px; margin-top: 20px" type="button" class="btn btn-primary"><b>Pilih hosting anda</b></button>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" width="500px" src="{{url('assets/niaga/svg/illustration banner support laravel hosting.svg')}}">
                </div>
            </div>

            <!-- Modul Lengkap -->
            <div class="row" style="margin-top: 100px">
                <div class="col-md-6 offset-md-3">
                    <h3 style="font-family: 'Montserrat'">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h3>
                </div>
            </div>
            <div class="row" style="margin-top: 20px">
                <div class="col-md-2 offset-md-2">
                    <span>IcePHP</span><br/>
                    <span>apc</span><br/>
                    <span>apcu</span><br/>
                    <span>apm</span><br/>
                    <span>ares</span><br/>
                    <span>bcmath</span><br/>
                    <span>big_int</span><br/>
                    <span>clamax</span><br/>
                    <span>crack</span><br/>
                    <span>dba</span><br/>
                </div>
                <div class="col-md-2">
                    <span>IcePHP</span><br/>
                    <span>apc</span><br/>
                    <span>apcu</span><br/>
                    <span>apm</span><br/>
                    <span>ares</span><br/>
                    <span>bcmath</span><br/>
                    <span>big_int</span><br/>
                    <span>clamax</span><br/>
                    <span>crack</span><br/>
                    <span>dba</span><br/>
                </div>
                <div class="col-md-2">
                    <span>oauth</span><br/>
                    <span>oci8</span><br/>
                    <span>odbc><br/>
                    <span>opcache</span><br/>
                    <span>pdf</span><br/>
                    <span>pdo</span><br/>
                    <span>pdo_mysql</span><br/>
                    <span>pdo_sqlite</span><br/>
                    <span>pgsql</span><br/>
                    <span>phalcon</span><br/>
                </div>
                <div class="col-md-2">
                    <span>stats</span><br/>
                    <span>stem</span><br/>
                    <span>stomp</span><br/>
                    <span>suhosin</span><br/>
                    <span>tidy</span><br/>
                    <span>timezonedb</span><br/>
                    <span>trader</span><br/>
                    <span>translit</span><br/>
                    <span>uplaod_progress</span><br/>
                    <span>uuid</span><br/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-2" style="padding-left: 70px">
                    <center><button style="border-radius: 20px; border-color: black; border-width: 2px; margin-top: 20px" type="button" class="btn"><b>Selengkapnya</b></button></center>
                </div>
            </div>

            <!-- Linux Hosting -->
            <div class="row" style="margin-top: 100px">
                <div class="col-md-6">
                    <h3 style="font-family: 'Montserrat'">Linux Hosting yang Stabil<br/>dengan Teknologi LVE</h3>
                    <p>
                        SuperMicro <b>Intel Xeon 24 Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda.
                    </p>
                    <button style="border-radius: 20px; border-width: 2px; margin-top: 20px" type="button" class="btn btn-primary"><b>Pilih hosting anda</b></button>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" width="500px" src="{{url('assets/niaga/images/Image support.png')}}">
                </div>
            </div>

            <!-- Perlu bantuan -->
            <div class="row" style="background-color: #d3d3d33b;">
                <div class="col-md-12">
                    <div style="height: 50px; position: relative">
                        <div style="margin: 0; position: absolute; top: 50%; left: 26%; transform: translate(-50%, -50%);">
                            <div style="color: black; font-size: 15px">
                                Bagikan jika anda menyukai halaman ini
                            </div>
                        </div>
                        <div style="margin: 0; position: absolute; top: 50%; left: 55%; transform: translate(-50%, -50%);">
                            <span><i class="fab fa-facebook-square" style="color: blue"></i>80k</span>
                            <span><i class="fab fa-twitter-square" style="color: lightblue"></i>
                                450
                            </span>
                            <span><i class="fab fa-google-plus-g" style="color: red"></i>1900</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="background-color: #007bff;">
                <div class="col-md-12">
                    <div style="height: 150px; position: relative">
                        <div style="margin: 0; position: absolute; top: 50%; left: 40%; transform: translate(-50%, -50%);">
                            <div style="color: white; font-size: 30px">
                                Perlu <b>BANTUAN?</b> Hubungi kami: <b>0274-5305505</b>
                            </div>
                        </div>
                        <div style="margin: 0; position: absolute; top: 50%; left: 75%; transform: translate(-50%, -50%);">
                            <button style="border-radius: 20px; border-color: white; border-width: 2px;" type="button" 
                            class="btn btn-primary"><i class="fas fa-comments"></i> Live chat</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- footer -->
            <div class="row" style="background-color: #333; color: white;">
                <div class="col-md-12" style="margin-top: 20px; margin-left: 50px">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <h5>Hubungi Kami</h5>
                            <p>
                                0274-2885822<br>
                                0895422447394<br>
                                Senin - Minggu<br>
                                24 Jam Non Stop
                            </p>
                            <p>
                                Jl. Palagan Tentara Pelajar<br>
                                No 81 Jongkang, Sariharjo,<br>
                                Ngaglik, Sleman<br>
                                Daerah Istimewa Yogyakarta<br>
                                55581
                            </p>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-sm-0">
                            <h5>Layanan</h5>
                            <ul class="footer__menu-list">
                                <li>Domain</li>
                                <li>Shared Hosting</li>
                                <li>Cloud VPS Hosting</li>
                                <li>Managed VPS Hosting</li>
                                <li>Web Builder</li>
                                <li>Keamanan SSL/HTTPS</li>
                                <li>Jasa Pembuatan Website</li>
                                <li>Program Afiliasi</li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <h5>Service Hosting</h5>
                            <ul>
                                <li>Hosting Murah</li>
                                <li>Hosting Indonesia</li>
                                <li>Hosting Singapore SG</li>
                                <li>Hosting Wordpress</li>
                                <li>Hosting PHP</li>
                                <li>Hosting Laravel</li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <h5>Tutorial</h5>
                            <ul>
                                <li>Ebook Gratis</li>
                                <li>Knowledgebase</li>
                                <li>Blog</li>
                                <li>Cara Pembayaran</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top: 20px; margin-left: 50px">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-sm-0">
                            <h5>Tentang Kami</h5>
                            <ul>
                                <li>Tim Niagahoster</li>
                                <li>Karir</li>
                                <li>Events</li>
                                <li>Penawaran dan promo spesial</li>
                                <li>Kontak Kami</li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3">
                            <h5>Kenapa Pilih Niagahoster?</h5>
                            <ul>
                                <li>Support terbaik</li>
                                <li>Garansi harga termurah</li>
                                <li>Domain Gratis selamanya</li>
                                <li>Datacenter Hosting terbaik</li>
                                <li>Review Pelanggan</li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <h5>Newsletter</h5>
                            <div style="border-radius: 20px; background-color: white; width: 230px">
                                <input style="border: none; width: 80px; margin-left: 20px" name="email" type="text" placeholder="Email"/>
                                <button style="border-radius: 20px;" type="button" class="btn btn-primary">Berlangganan</button>
                            </div>
                            <div class="row">
                                Dapatkan promo dan konten menarik dari penyedia hosting terbaik anda
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <ul id="sosmed" style="margin-top: 25px">
                                <li>
                                    <button style="border-radius: 20px; border-color: white; border-width: 2px;" type="button" class="btn">
                                        <i style="color: white" class="fab fa-facebook-f" alt="facebook"></i>
                                    </button>
                                </li>
                                <li>
                                    <button style="border-radius: 20px; border-color: white; border-width: 2px;" type="button" class="btn">
                                        <i style="color: white" class="fab fa-twitter" alt="twitter"></i>
                                    </button>
                                </li>
                                <li>
                                    <button style="border-radius: 20px; border-color: white; border-width: 2px;" type="button" class="btn">
                                        <i style="color: white" class="fab fa-google-plus-g" alt="google"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="font-size: 12px; margin-left: 50px; margin-top: 20px">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <p>
                                Copyright ©2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta.<br>
                                Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
                            </p>
                        </div>
                        <div class="col-12 col-md-5 mt-5 mt-md-0" style="text-align: right; right: 10%">
                            <div>
                                Syarat dan Ketentuan
                                <span>|</span>
                                Kebijakan Privasi
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!-- vuejs -->
        <script src="{{asset('js/app.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="{{url('assets/adminlte/plugins/jquery/jquery.min.js')}}"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{url('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="{{url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- ChartJS -->
        <script src="{{url('assets/adminlte/plugins/chart.js/Chart.min.js')}}"></script>
        <!-- Sparkline -->
        <script src="{{url('assets/adminlte/plugins/sparklines/sparkline.js')}}"></script>
        <!-- JQVMap -->
        <script src="{{url('assets/adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
        <script src="{{url('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{url('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
        <!-- daterangepicker -->
        <script src="{{url('assets/adminlte/plugins/moment/moment.min.js')}}"></script>
        <script src="{{url('assets/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{url('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
        <!-- Summernote -->
        <script src="{{url('assets/adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{url('assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{url('assets/adminlte/dist/js/adminlte.js')}}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{url('assets/adminlte/dist/js/pages/dashboard.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{url('assets/adminlte/dist/js/demo.js')}}"></script>

    </body>
</html>
