<?php
include('phps/connect.php');
// include('phps/check_integrity.php');

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
    <div class="container-fluid text-center p-0" >
        <div class="row">
            <?php include './sidebar.php'; ?>
            <div class="col-10 text-start" style="background-color: #FFF4F4;">
                <h2>Kelas</h2>
                <p>hi,nama admin</p>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <th data-sortable="true">Nama</th>
                        <th data-sortable="true">Tanggal buka</th>
                        <th data-sortable="true">Tangal tutup</th>
                        <th data-sortable="true">Harga</th>
                        <th data-sortable="true">Kelas</th>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT c.name, c.tanggal_buka, c.tanggal_berakhir, c.harga, c.kelas
                            FROM `course` c ";

                            $result = $conn->prepare($sql);
                            $result->execute();
                            
                            foreach($result as $row){
                        ?>
                        <tr>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['tanggal_buka'] ?></td>
                            <td><?php echo $row['tanggal_berakhir'] ?></td>
                            <td><?php echo $row['harga'] ?></td>
                            <td><?php echo $row['kelas'] ?></td>
                        </tr>
                        <?php
                            }
                        ?>
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