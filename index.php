<!DOCTYPE html>
<html lang="en">
<title>TOKOKUIJO</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-heart-o,.fa-leaf, .fa-tree {font-size:200px}
</style>

<body >

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-theme-d4">
            <div class="w3-bar w3-black w3-card w3-right-align w3-large">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-padding-large w3-hover-light-green w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <p><button onclick="document.getElementById('masuk').style.display='block'" class="w3-button w3-black">MASUK</button></p>
                    <p><button onclick="document.getElementById('daftar').style.display='block'" class="w3-button w3-black">DAFTAR</button></p>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-container w3-black w3-center" style="padding:128px 16px">
   
    <h1 class="w3-margin w3- white w3-jumbo"><b>TOKOKUIJO</b></h1>
    <p class="w3-xlarge"><i>- Alam Ku Senyum Ku -</i></p>
    </header>

    <!-- Allert Notif -->
    <div class="w3-container">
        <div class="alert alert-success alert-dismissible w3-center">
            <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <strong>
                <?php
                    echo date("l jS \of F Y H:i:s ") ;
                ?><br>
            </strong> 
            <stong>
                <h3>Jangan Lupa Siram Tanamanmu!</h3>
            <strong> 
                Pagi hari 08.00 <br> Sore hari 15.00<br>
            </strong>
        </div>
    </div>

    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-twothird">
                <h1> Alam </h1>
                <h4 class="w3-padding-32">Alam adalah ibu. Dia adalah sekolah terbaik untuk anak-anaknya. Tempat terbaik untuk pulang, tempat terbaik untuk pelarian di saat kita membutuhkan semangat baru.<br><br>
                Bagi mereka yang bersedih, lihatlah keindahan alam. Bagi mereka yang merasa sempit, lihatlah luasnya semesta. Dan bagi orang-orang kecil, lihatlah besarnya alam semesta ini. Kemudian lihatlah Sang Perkasa yang telah menciptakannya.<br><br>
                <i>"Ketika pohon terakhir ditebang, ketika sungai terakhir dikosongkan, ketika ikan terakhir ditangkap, Barulah manusia akan menyadari bahwa dia tidak dapat memakan uang."</i></h4>
            </div>
                <div class="w3-third w3-center">
                <i class="fa fa-tree w3-padding-64 w3-text-light-green"></i>
            </div>
        </div>
    </div>

    <!-- Second Grid -->
    <div class="w3-row-padding w3-light-green w3-padding-64 w3-container">
        <div class="w3-content">
            <div class="w3-third w3-center">
                <i class="fa fa-heart-o w3-padding-64 w3-text-black w3-margin-right"></i>
            </div>

            <div class="w3-twothird">
                <h1> Kesehatan </h1>
                <h4 class="w3-padding-32">Kita diberikan cinta, tapi cinta itu layaknya sebuah tanaman berharga. Kamu tidak bisa hanya menerima dan meninggalkannya di lemari atau hanya berpikir itu akan bertumbuh dengan sendirinya. Kamu harus tetap menyiramnya. Kamu harus benar-benar menjaga dan merawatnya.<br><br>
                Merawat tanaman tidak hanya memberi pupuk, menyiram tiap hari. Sama seperti layaknya makhluk hidup lainnya, tanaman akan tumbuh baik dengan cinta dan kasih. Dan ketika semua tekah membuahkan hasil, maka kita akan memperoleh emosi positif dari tanaman tersebut. Memperoleh kepuasan tersendiri, sehingga hal tersebut juga baik untuk kesehatan kita baik secara jiwa maupun rohani. </h4>
            </div>
        </div>
    </div>

    <!-- Masuk Modal -->
    <div id="masuk" class="w3-modal ">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-light-green">
        <span onclick="document.getElementById('masuk').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
        <h1 class="w3-center">Ayo berkebun sekarang juga</h1>
        </div>
        <div class="w3-container">
        <p class="w3-center">Gunakan akun member mu</p>
        <form action="beranda.php" method="post">
            <form method="POST">
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Username" name="username" required></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Kata Sandi" name="kata_sandi" required></p>
                <p><button class="w3-button w3-light-green w3-right" type="submit" id="masuk" name="masuk" >MASUK</button></p>
            </form>
        </form>
        </div>
    </div>
    </div>

    <!-- Daftar Modal -->
    <div id="daftar" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
        <div class="w3-container w3-light-green">
        <span onclick="document.getElementById('daftar').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
        <h1 class="w3-center">Ayo jadi member sekarang juga!!</h1>
        </div>
        <div class="w3-container">
        <p class="w3-center">Dapatkan pelatihan berkebun secara gratis</p>
        <form action="beranda.php" method="post" >
            <form method="POST">
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Username" name="username" required></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nama Lengkap" name="nama" required></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="E-mail" name="email" required></p>
                <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Kata Sandi" name="kata_sandi" required></p>
                <p><button class="w3-button w3-light-green w3-right" type="submit" id="daftar" name="daftar" value="daftar">DAFTAR</button></p>
            </form>
        </form>
        </div>
    </div>
    </div>

    <!-- Footer -->
    <div class="w3-container w3-white w3-center w3-opacity w3-padding-20">
        <footer class="w3-container w3-padding-20 w3-center w3-opacity">  
        <div class="w3-xlarge w3-padding-20">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
        </div >
        <p>Copyright TOKOKUIJO 2020</p>
        </footer>
    </div >
</body>
</html>
