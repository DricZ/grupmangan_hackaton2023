<?php
session_start();
?>
<!doctype html>
<html lang="en">

<?php
include "head-lp.php";
?>

<body>
    <style>
        .inline-p {
            display: flex;
            flex-wrap: wrap;
        }

        .inline-p p {
            margin-right: 10px;
            /* Optional: Add some space between the elements */
        }
    </style>
    <nav class="navbar navbar-expand-lg shadow fixed-top" style="background-color: #E75959;">
        <div class="container">
            <a class="navbar-brand text-center" href="#">
                <img src="./assets/icon.jpg" style="height: 5rem" alt="Majar">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2 underliners">
                        <a class="nav-link active text-white pb-0" aria-current="page" href="#tentangkami">Tentang
                            Kami</a>
                    </li>
                    <li class="nav-item mx-2 underliners">
                        <a class="nav-link active text-white pb-0" aria-current="page" href="#yangkami">Pelatihan</a>
                    </li>
                    <li class="nav-item mx-2 underliners">
                        <a class="nav-link text-white pb-0" href="#contactus">Kontak</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class=" btn btn-outline-dark btn-light" href="./login.php"><i
                                class="fa-solid fa-user-plus"></i> Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-start" style="margin-top: 100px;">
        <div class="row">
            <h1>php</h1>
            <p>button keluar</p>
        </div>
        <div class="row">
            <div class="col-2"><img
                    src="https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80https://plus.unsplash.com/premium_photo-1683288125490-871195ac4b99?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80"
                    class="rounded-circle border border-dark" alt="..." width="100px" height="100px"></div>
            <div class="col-6">
                <div class="row">
                    <h3>Kasim Sempurna</h3>
                    <p class="inline-p">icon, nama</p>
                    <p class="inline-p">x</p>
                    <p class="inline-p">y</p>
                    <p class="inline-p">zxx</p>
                </div>
            </div>

            <div class="col-4">button</div>
        </div>
        <div class="row">
            <div class="col-4">card</div>
            <div class="col-4">card</div>
            <div class="col-4">c</div>

        </div>
    </div>

    <div class="container text-start">
        <div class="row">
            <h1>Aktifitas</h1>
            <hr>underline
        </div>
        <div class="row">
            <div class="col-12">
                <div class="inline-p">
                    <p class="text-start">php status</p>
                    <p class="text-end">belum bay</p>
                </div>
                <p>php nama kelas</p>
                <p>php nama pengajar</p>
                <p>php tanggal</p>
                <p>php jam</p>
                <p>php lokasi</p>
                <p>php penilaian</p>
            </div>
        </div>

    </div>


    <!-- <div class="container" style="margin-top: 9rem; height: 100vh; background-color: black;">
        <div class="row">
            <div class="col-6">
                <h1>Selamat datang, Pak Kasim</h1>
            </div>
            <div class="col-6" style="float: right;margin-right: 10px">
                <a class=" btn btn-outline-dark btn-light" href="./login.php"><i class="fa-solid fa-user-plus"></i>
                    Keluar</a>
            </div>
        </div>
        <div class="row" style="">
            <div class="col-6">
                <h1>Selamat datang, Pak Kasim</h1>
            </div>
            <div class="col-6">
                <a class=" btn btn-outline-dark btn-light" href="./login.php"><i class="fa-solid fa-user-plus"></i>
                    Keluar</a>
            </div>
        </di v>
    </div> -->

</body>