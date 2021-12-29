@extends('main')

@section('title','Dashboard')
   
@section('breadcrumbs')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><b>Measuring BTS</b></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="content-body">
            
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="bootstrap-carousel">
                                    <div data-ride="carousel" class="carousel slide" id="carouselExampleCaptions">
                                        <ol class="carousel-indicators">
                                            <li class="" data-slide-to="0" data-target="#carouselExampleCaptions"></li>
                                            <li data-slide-to="1" data-target="#carouselExampleCaptions" class=""></li>
                                            <li data-slide-to="2" data-target="#carouselExampleCaptions" class="active"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="{{asset('style/images/big/img6.jfif')}}" alt="">
                                            </div>
                                            <div class="carousel-item">
                                                <img alt="" class="d-block w-100" src="{{asset('style/images/big/img5.png')}}">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                            <div class="carousel-item active">
                                                <img alt="" class="d-block w-100" src="{{asset('style/images/big/img7.jfif')}}">
                                                <div class="carousel-caption d-none d-md-block">
                                                </div>
                                            </div>
                                        </div><a data-slide="prev" href="#carouselExampleCaptions" class="carousel-control-prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a><a data-slide="next" href="#carouselExampleCaptions"
                                            class="carousel-control-next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-6">
                        <div class="card">
                            <div class="card-header"><h3 style="color: #49809a; text-align: center"><strong>Pembahasan</strong></h3></div>
                            <hr>
                            <div class="card-body">
                                    <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                        BTS adalah singkatan dari Base Transceiver Station atau dalam bahasa Indonesia Anda menyebutnya dengan stasiun pemancar. BTS kadang juga disebut sebagai Base Station (BS) dan Radio Base Station (RBS).  BTS adalah salah satu bentuk infrastruktur telekomunikasi yang berperan penting dalam mewujudkan komunikasi nirkabel antara jaringan operator dengan perangkat komunikasi. Tugas utama BTS adalah mengirimkan dan menerima sinyal radio ke perangkat komunikasi seperti telepon rumah,telepon seluler dan sejenis gadget lainnya. Kemudian sinyal radio tersebut akan diubah menjadi sinyal digital yang selanjutnya dikirim ke terminal lainnya menjadi sebuah pesan atau data.
                                    </p>
                                    <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                        Banyak orang yang sering salah kaprah dalam mengartikan BTS. Umumnya mereka menganggap tower BTS adalah BTS itu sendiri. Faktanya adalah tower BTS merupakan salah satu komponen dari perangkat BTS. Tower sendiri adalah suatu menara yang dibuat dari besi atau pipa. Dalam pembuatan tower BTS bentuknya bisa bervariasi, ada yang kaki segi empat, kaki segitiga, bahkan ada yang hanya berupa pipa panjang saja. Umumnya tower BTS memiliki panjang antara 40 hingga 75 meter. Tiap daerah memiliki panjang tower BTS yang berbeda-beda disesuaikan dengan kondisi geografis serta luas jangkauan jaringan yang ditargetkan.
                                    </p> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title" style="color: #49809a;"><strong>Macam-macam Tower BTS</strong></h3>
                            <hr>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <h4 style="color: #49809a;">1. Tower 4 kaki/ Rectangular Tower</h4>
                                    Sesuai dengan namanya, tower ini berbentuk segi empat dan memiliki 4 kaki. Karena konstruksinya yang kokoh tower ini diharapkan memiliki kekuatan yang optimal untuk menghindari kemungkinan roboh. Tingginya kurang lebih 42 meter serta mampu mencakup banyak antena dan radio. Tipe tower ini biasanya digunakan oleh perusahaan telekomunikasi terkemuka seperti Telkom, Indosat, XL, dll mengingat harganya yang cukup fantastis yakni mencapai  650 juta-1 milyar rupiah.
                                </p>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <h4 style="color: #49809a;">2. Tower 3 kaki/ Triangle Tower</h4>
                                    Menara segitiga ini terdiri dari 3 pondasi tower. Tiap pondasi disusun dalam beberapa potongan yang berkisar 4-5 meter. Untuk menghindari hal-hal yang tidak diinginkan, misal roboh sebaiknya tower ini memakai besi yang berdiameter diatas 2 centimeter. Rata-rata tower jenis tingginya berkisar antara 40 meter dan maksimal 60 meter. Makin pendek tower tingkat keamanannya lebih tinggi. Kelebihan dari menara ini adalah komponennya lebih ringan sehingga menghemat biaya produksi dan pengangkutan.
                                </p>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <h4 style="color: #49809a;">3. Tower 1 kaki/ Pole</h4>
                                    Sebenarnya tower jenis ini tidak direkomendasikan karena banyak kekurangannya. Dalam penerimaan sinyal tergolong tidak stabil, mudah goyang, dan mengganggu sistem koneksi data yang berakibat pencarian di komputer terjadi secara terus-terusan. Tower ini ada 2 macam, yang pertama dibuat dengan pipa/plat baja tanpa spanner dengan diameter 40 cm hingga 50 cm dan rata-rata tingginya 42 meter. Kedua, tower yang dibuat dengan spanner yang menurut ahli pembuatannya tidak melebihi 20 meter.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            
                            <div class="card-body">
                                <h3 class="card-title" style="color: #49809a;"><strong>Komponen pada Tower BTS</strong></h3>
                            <hr>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <b>1. Antena Sectoral :</b> antena ini letaknya ada di bagian paling atas dan berbentuk persegi panjang. Fungsinya adalah menghubungkan BTS dengan alat komunikasi misal handphone. Antena ini ada 2 macam yaitu monotype yang dipakai di daerah pedesaan dan pinggiran. Yang kedua adalah Dual type yang lokasinya biasanya di daerah perkotaan.
                                </p>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <b>2. Antena Microwave :</b> saat kita menjumpai tower BTS pasti ada satu bagian yang tampak seperti gendang rebana, itulah yang dimaksud antena microwave. Fungsinya menerima dan memancarkan gelombang radio dari BTS ke BSC atau dari BTS ke BTS.
                                </p>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <b>3. Shelter :</b> shelter ini berfungsi untuk menyimpan peralatan,biasanya ada di samping tower.
                                </p>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <b>4. Microwave System :</b> sistem ini dibagi dua yakni indoor unit dan outdoor unit. Keduanya terhubung melalui kabel coaxial. Indoor unit sesuai namanya berada di dalam shelter sedangkan outdoor unit menempel pada antena microwave.
                                </p>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <b>5. Rectifier System :</b> sistem ini bertugas untuk mengubah tegangan dari PLN 220/380 volt alternative current menjadi tegangan direct current untuk dikirim ke BTS.
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <b>6. Baterai :</b> didalam BTS terdapat baterai yang gunanya sebagai cadangan power apabila terjadi pemadaman listrik. Ketahanan baterai mencapai 3-4 jam.
                                </p>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <b>7. Tower sentral :</b> adalah tower itu sendiri serta sistem pertanahan yang mengaturnya. Fungsinya sebagai media untuk menginstal antena-antena dan feeder.
                                </p>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <b>8. Feeder :</b> merupakan kabel besar yang dijadikan media rambat gelombang radio antara BTS dengan antena sector.
                                </p>
                                <p style="text-align: justify; font-family:Arial, Helvetica, sans-serif; color: #49809a;">
                                    <b>9. Dynaspere :</b> merupakan alat yang digunakan untuk melindungi tower dari sambaran petir.
                                </p>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>   
    </div>
</div>   
@endsection