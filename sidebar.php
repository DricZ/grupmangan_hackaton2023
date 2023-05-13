<div class="col-2 p-0" style="background-color: #E75959;">
    <div class="row">
        <div class="col-sm-12">
            <img src="./assets/icon.jpg" style="height: 5rem" alt="Majar">
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Dashboard'){echo "active";} ?>' href='dashboard.php'><i class="fa-solid fa-house me-2 <?php if($_SESSION['page'] == 'Dashboard'){echo "fa-2x";} ?>" style="color: white;"></i>Dashboard</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Siswa'){echo "active";} ?>' href='siswa.php'><i class="fa-solid fa-user me-2 <?php if($_SESSION['page'] == 'Siswa'){echo "fa-2x";} ?>"></i>Siswa</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Mentor'){echo "active";} ?>' href='mentor.php'><i class="fa-solid fa-person-chalkboard me-2 <?php if($_SESSION['page'] == 'Mentor'){echo "fa-2x";} ?>"></i>Mentor</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Kelas'){echo "active";} ?>' href='kelas.php'><i class="fa-solid fa-school me-2 <?php if($_SESSION['page'] == 'Kelas'){echo "fa-2x";} ?>"></i>Kelas</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Partner'){echo "active";} ?>' href='partner.php'><i class="fa-solid fa-building me-2 <?php if($_SESSION['page'] == 'Partner'){echo "fa-2x";} ?>"></i>Partner</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white <?php if($_SESSION['page'] == 'Pembayaran'){echo "active";} ?>' href='pembayaran.php'><i class="fa-solid fa-money-bill me-2 <?php if($_SESSION['page'] == 'Pembayaran'){echo "fa-2x";} ?>"></i>Pembayaran</a>
        </div>
        <div class="col-sm-12 sidebar">
            <a class='nav-link p-4 text-white' href='phps/logout.php'><i class="fa-solid fa-arrow-right-from-bracket me-2"></i>Log Out</a>
        </div>
    </div>
</div>
    


    
    
    