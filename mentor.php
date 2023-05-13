<?php
// require "head.php";
session_start();
?>



<!doctype html>
<html lang="en">


<!-- css datatable -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
</link>
<link href="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" rel="stylesheet ">

<body>
    <style>
        .text-white {
            color: white;
        }

        .test:hover {
            background-color: red;
        }
    </style>
    <div class="container-fluid text-center p-0">
        <div class="row">
            <div class="col-2 p-0" style="background-color: #E75959;">
                <img src="./assets/icon.jpg" style="height: 5rem" alt="Majar">


                <div class="test" style="margin-top: 10vh;">
                    <p class="text-white p-2"><i class="fa-solid fa-house fa-2x me-2" style="color: white;"></i> Eashboard</p>
                </div>
                <p><i class="fa-solid fa-house"></i> mentor</p>
                <p>mentor</p>
                <p> kelas</p>
                <p>partner</p>
                <p>pembayaran</p>
                <p style="margin-top: 30vh;"><i class="fa-solid fa-house fa-2x me-2" style="color: white;"></i> Eashboard</p>
            </div>
            <div class="col-10 text-start" style="background-color: #FFF4F4;">
                <div class="grid">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="mt-5">Siswa</h2>
                        </div>
                        <div class="col-md-6 text-end mt-5">
                            <div class="d-flex justify-content-end align-items-center">
                                <img src="your_image_url" alt="xx" class="img-fluid">

                                <p class="me-2 mb-0">Admini</p>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <p style="color: grey;">Hi, Nama Admin</p>
                    </div>
                </div>


                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>No Telepon</th>
                        <th>Course Yang Diambil</th>
                        <th>Status Course</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                            <td>Edinburgh</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- aos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        AOS.init();

        $(document).ready(function() {
            table = $('#example').DataTable();
        });
    </script>


    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <!-- js external -->
    <script src="./assets/js/script.js"></script>

    <!-- js data tabel -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>




</body>

</html>