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
                    <a href="beranda.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-light-green">> KEMBALI</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- Header -->
    <header class="w3-container w3-black w3-center" style="padding:50px 5px">
        <h1 class="w3-margin w3-text-white w3-jumbo"><b> TOKOKUIJO</b></h1>
    </header>

    <!--Sapaan-->
    <div class="w3-row-padding w3-padding-64 w3-container w3-white w3-text-black w3-center">
    <h1><b>Melanjutkan proses pembayaran</b></h1><hr>
        <div class="w3-content">
        <h1>
            <?php
            $nama = $_GET['nama'];
            $produk = $_GET['produk'];
            $harga = $_GET['harga'];
            $jumlah = $_GET['jumlah'];
            $nama = $_GET['nama'];
            
     
            ?>
            <div class="w3-container">
            <table class="w3-table">
                <tr>
                <th>Nama</th>
                <td>: <?php echo $nama;?></td>
                </tr>
                <tr>
                <th>Tanaman</th>
                <td>: <?php echo $produk;?></td>
                </tr>
                <tr>
                <th>Jumlah</th>
                <td>: <?php echo $jumlah;?></td>
                </tr>
                <tr>
                <th>Total Harga</th>
                <td>: <?php echo "Rp " .$jumlah*$harga. ",00";?></td>
                </tr>
            </table>
            </div>
            <p><button onclick="document.getElementById('bayar').style.display='block'" class="w3-button w3-right w3-hide-small w3-padding-large w3-light-green w3-hover-black">BAYAR</button></p> 
        </div>
    </div>

    <!--Bayar Modal-->
    <div id="bayar" class="w3-modal ">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container w3-light-green">
                    <span onclick="document.getElementById('beli').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                    <h1 class="w3-center w3-light-green">Upload Bukti Pembayaran mu ?</h1>
                </div>
                <div class="w3-container">
                <table class="w3-table">
                    <tr>
                    <th>OVO</th>
                    <td>: 0831731578</td>
                    </tr>
                    <tr>
                    <th>DANA</th>
                    <td>: 0831731578</td>
                    </tr>
                    <tr>
                    <th>Rek BNI</th>
                    <td>: 9983971-848-41</td>
                    </tr>
                    <tr>
                    <th>Rek BRI</th>
                    <td>: 4332247-3234-28-2</td>
                    </tr>
                </table>
                </div>
                <div class="w3-container">
                    <form action="bayar.php" method="post">
                        <form method="POST">
                        <p><input class="w3-input w3-padding-16 w3-border" type="file" placeholder="Browse " name="id_produk" required></p>
                            <p><button hreff="keranjang.php" class="w3-button w3-right w3-hide-small w3-padding-large w3-light-green w3-hover-black" type="submit" id="bayar" name="bayar" >SUBMIT</button></p>
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
