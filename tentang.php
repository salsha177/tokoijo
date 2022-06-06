<!DOCTYPE html>
<html lang="en">
<title>TOKOKUIJO</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-heart-o,.fa-leaf, .fa-tree,.fa-smile-o {font-size:200px}
</style>

<body>

     <!-- Navbar -->
     <div class="w3-top">
            <div class="w3-theme-d4">
            <div class="w3-bar w3-black w3-card w3-large">
            <div class="w3-left-align">
                    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-light-green w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                    <a href="beranda.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-green">Beranda</a>
                    <a href="katalog.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-green ">Katalog</a>
                    <a href="tentang.php" class="w3-bar-item w3-padding-large w3-light-green">Tentang kami</a>
                    </div>
                    <div class="w3-bar-item w3-right">
                        <p><button onclick="document.getElementById('keluar').style.display='block'" class="w3-bar-item w3-button ">KELUAR</button></p>
                    </div></div>
                </div>
            </div>
        </div>

    <!-- Header -->
    <header class="w3-container w3-black w3-center" style="padding:80px 5px">
        <h1 class="w3-margin w3-text-white w3-jumbo"><b> TOKOKUIJO</b></h1>
        <p class="w3-xlarge"><i>- Alam Ku Senyum Ku -</i></p>
    </header>

    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container w3-light-green">
        <div class="w3-content">
            <div class="w3-twothird">
            <h1><b> Haii Guys!</b></h1>
            <h5 class="w3-padding-32"><b>TOKOKUIJO</b> 
            Merupakan sebuah sistem website yang ikut mengupayakan Gerakan Go-Green dalam kehidupan masyarakat. Melalui penawaran berbagai bentuk tanaman yang mempercantik lingkungan anda dan juga menjaga kesehatan anda tentunya.
            Karena <b>"ALAM KU SENYUM KU"</b></h5>
            <p class="w3-text-black">Owner : Salsha Ristania<br>NIM : M3119080<br> Program Studi : Teknik Informatika<br>Universitas Sebelas Maret</p>
        </div>
        <div class="w3-third w3-center">
        <i class="fa fa-smile-o w3-padding-64 w3-text-light-black"></i>
        </div>
    </div>

    <div class="w3-row-padding w3-padding-64 w3-container w3-white " id="contact">
        <div class="w3-content">  
            <h2>Kontak kami</h2>
            <p>Jika ada kritik dan saran.</p>
            <i class="fa fa-map-marker w3-text-light-green" style="width:40px"></i> Solo, Indonesia<br>
            <i class="fa fa-phone w3-text-light-green" style="width:40px"></i> Phone: +62 85747895623<br>
            <i class="fa fa-envelope w3-text-light-green" style="width:40px"> </i> Email: salsharistania1@gmail.com<br>
            <form target="blank" class="w3-container w3-card-4 w3-text-black w3-margin" >
                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="nama" type="text" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <textarea class="w3-input w3-border" name="message" type="text" placeholder="Kritik & Saran"></textarea>
                    </div>
                </div>
                <p><button class="w3-button w3-light-green w3-padding-large w3-right" type="submit">SEND MESSAGE</button></p>
            </form>
        </div>
    </div>

    <!--Keluar Modal-->
    <div id="keluar" class="w3-modal ">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container w3-white">
                    <span onclick="document.getElementById('keluar').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                    <h1 class="w3-center">Apakah yakin, anda ingin keluar ?</h1>
                </div>
                <div class="w3-container">
                    <form action="index.php" method="get">
                        <form method="GET">
                            <p><button hreff="index.php" class="w3-button w3-red w3-right" type="submit" id="keluar" name="keluar" >KELUAR</button></p>
                        </form>
                    </form>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <div class="w3-container w3-light-grey w3-center w3-opacity w3-padding-20">
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
