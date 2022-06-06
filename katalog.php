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
            <div class="w3-bar w3-black w3-card w3-large">
            <div class="w3-left-align">
                    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-light-green w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                    <a href="beranda.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-green">Beranda</a>
                    <a href="katalog.php" class="w3-bar-item w3-padding-large w3-light-green">Katalog</a>
                    <a href="tentang.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-green">Tentang kami</a>
                    </div>
                    <div class="w3-bar-item w3-right">
                        <p><button onclick="document.getElementById('keluar').style.display='block'" class="w3-bar-item w3-button ">KELUAR</button></p>
                    </div></div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header class="w3-container w3-black w3-center" style="padding:50px 16px">
        <h1 class="w3-margin w3- white w3-jumbo"><b>TOKOKUIJO</b></h1>
        </header>

        <!-- Katalog Array -->
        <?php
        $harga = array("150000","145000","95000","100000","90000","55000");
        $produk = array("Mangkok variegata","Alocasia amazon","Bambu Ayam","Epipernum Amplicinum","Begonia Aconitifolia","Sirih Merah")

        ?>

        <!--Kolom 1-->
        <div class="w3-row w3-container"  style="padding:30px 16px">
            <div class="w3-col s4 w3-white w3-center">
                <header class="w3-container w3-light-grey w3-center">
                    <h2><?php echo $produk[0];?></h2>
                </header>
                <div class="w3-container">
                    <hr>
                    <img src="1.png" alt="tanaman" style="width:200px">
                    <hr>
                    <h3><?php echo "Rp ".$harga[0];?></h3>
                </div>
                <p><button onclick="document.getElementById('beli').style.display='block'" 
                        class="w3-bar-item w3-button w3-light-green w3-xlarge ">MAU BELI</button></p>
            </div>
            <div class="w3-col s4 w3-white w3-center">
                <header class="w3-container w3-dark-grey w3-text-white w3-center">
                <h2><?php echo $produk[1];?></h2>
                </header>
                <div class="w3-container">
                    <hr>
                    <img src="2.png" alt="tanaman" style="width:200px">
                    <hr>
                    <h3><?php echo "Rp ".$harga[1];?></h3>
                </div>
                <p><button onclick="document.getElementById('beli').style.display='block'" 
                        class="w3-bar-item w3-button w3-light-green w3-xlarge ">MAU BELI</button></p>
            </div> 
            <div class="w3-col s4 w3-white w3-center">
                <header class="w3-container w3-light-grey w3-center">
                    <h2><?php echo $produk[2];?></h2>
                </header>
                <div class="w3-container">
                    <hr>
                    <img src="3.png" alt="tanaman" style="width:200px">
                    <hr>
                    <h3><?php echo "Rp ".$harga[2];?></h3>
                </div>
                <p><button onclick="document.getElementById('beli').style.display='block'" 
                        class="w3-bar-item w3-button w3-light-green w3-xlarge ">MAU BELI</button></p>
            </div>
        </div>

        <!--Kolom 2-->
        <div class="w3-row w3-container"  style="padding:30px 16px">
            <div class="w3-col s4 w3-white w3-center">
                <header class="w3-container w3-dark-grey w3-text-white w3-center">
                    <h2><?php echo $produk[3];?></h2>
                </header>
                <div class="w3-container">
                    <hr>
                    <img src="4.png" alt="tanaman" style="width:200px">
                    <hr>
                    <h3><?php echo "Rp ".$harga[3];?></h3>
                </div>
                <a href="#" class="w3-button w3-red w3-xlarge">SOLD</a>
            </div>
            <div class="w3-col s4 w3-white w3-center">
                <header class="w3-container w3-light-grey w3-center">
                    <h2><?php echo $produk[4];?></h2>
                </header>
                <div class="w3-container">
                    <hr>
                    <img src="5.png" alt="tanaman" style="width:200px">
                    <hr>
                    <h3><?php echo "Rp ".$harga[4];?></h3>
                </div>
                <a href="#" class="w3-button w3-red w3-xlarge">SOLD</a>
            </div>
            <div class="w3-col s4 w3-white w3-center">
                <header class="w3-container w3-dark-grey w3-text-white w3-center">
                    <h2><?php echo $produk[5];?></h2>
                </header>
                <div class="w3-container">
                    <hr>
                    <img src="6.png" alt="tanaman" style="width:200px">
                    <hr>
                    <h3><?php echo "Rp ".$harga[5];?></h3>
                </div>
                <a href="#" class="w3-button w3-red w3-xlarge">SOLD</a>
            </div>
        </div>

        <!--Beli Modal-->
        <div id="beli" class="w3-modal ">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container w3-light-green">
                    <span onclick="document.getElementById('beli').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                    <h1 class="w3-center w3-light-green">Tanaman apa yang ingin kamu ?</h1>
                </div><br>
                <div class="w3-container">
                    <form action="keranjang.php" method="get">
                        <form method="GET">
                        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nama Pemesan" id="nama" name="nama" required></p>
                        <p><select class="w3-select w3-input  w3-border w3-padding-16 w3-border" placeholder="Pilih Tanaman kamu" id="produk" name="produk" required>
                            <option value="" disabled selected>Pilih Tanaman kamu</option>
                            <option value="Mangkok Variegata"<?php $produk[0];?>"><?php echo $produk[0];?></option>
                            <option value="Alocasia Amazon"><?php echo $produk[1];?></option>
                            <option value="Bambu Ayam"><?php echo $produk[2];?></option>
                            <option value="4" disabled ><?php echo $produk[3];?></option>
                            <option value="5" disabled ><?php echo $produk[4];?></option>
                            <option value="6" disabled ><?php echo $produk[5];?></option>
                        </select></p>
                        <p><select class="w3-select w3-input  w3-border w3-padding-16" placeholder="Pilih Tanaman kamu" id="harga" name="harga" required>
                            <option value="" disabled selected>Harga Rp. </option>
                            <option value="150000"><?php echo $harga[0];?></option>
                            <option value="145000"><?php echo $harga[1];?></option>
                            <option value="95000"><?php echo $harga[2];?></option>
                            <option value="4" disabled ><?php echo $harga[3];?></option>
                            <option value="5" disabled ><?php echo $harga[4];?></option>
                            <option value="6" disabled ><?php echo $harga[5];?></option>
                        </select></p>
                        <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Jumlah produk" id="jumlah" name="jumlah" required></p>
                            <p><button hreff="keranjang.php" class="w3-button w3-green w3-right" type="submit" id="beli" name="beli" >BELI</button></p>
                        </form>
                    </form>
                </div>
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
