<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detaylar</title>
    <link rel="stylesheet" href="../Css/anaSayfa.css">
    <link rel="stylesheet" href="../Css/kitapdetay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="navbar">
    <div class="logo">
           <a href="anaSayfa.php"> <img src="../logos.png" alt=""></a>
            <img src="../isim.png" alt="">
        </div>
        <div class="menu">
            <ul>
                <li><a href="anaSayfa.php">ANA SAYFA</a></li>
                <li><a href="turler.php">TÜRLER</a></li>
                <li><a href="">ÖNERİLER</a></li>
            </ul>
        </div>
        <div class="search">
            <input type="search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </div>

    <div class="genel">

        <?php
        $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db"); // Veri tabanı Bağlantısı
        
        if (!$baglanti) {
            die("Bağlanamadı: " . mysqli_connect_error()); // bağlantı sağllanmazsa hata döndürür
        }


        if (isset($_GET['kitap_id'])) {
            $book_id = $_GET['kitap_id'];


            $sql = "SELECT * FROM books WHERE kitap_id = $book_id";
            $result = mysqli_query($baglanti, $sql);

            if (mysqli_num_rows($result) > 0) {
                $book_details = mysqli_fetch_assoc($result);
                ?>
                <div class="genel">
                    <div class="sol-kitap">
                        <div class="fotog">
                            <img src="<?php echo $book_details['kapak_fotografi']; ?>" alt="Kitap Fotoğrafı">
                        </div>
                    </div>

                    <div class="sag-kitap">

                        <!--En Baştaki Div-->
                        <div class="start-line">
                            <div class="bkName">
                                <p>
                                    <?php echo $book_details['kitap_adi']; ?>

                                </p>


                                <div class="end-colum">
                                    <h6>Yayın Evi :</h6>
                                    <p>
                                        <?php echo $book_details['kitap_yayin_evi']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="bk-writer">

                                <div class="bk-sol">
                                    <div class="prize-line">
                                        <b>Fiyatı : </b>
                                        <p>
                                            <?php echo $book_details['kitap_fiyati']; ?> TL
                                        </p>
                                    </div>
                                    <div class="start-colum">
                                        <p> <b>Yazarı :</b>
                                            <?php echo $book_details['kitap_yazari']; ?>
                                        </p>
                                    </div>
                                    <div class="midle-colum">
                                        <p><b>Dili :</b>
                                            <?php echo $book_details['kitap_dili']; ?>
                                        </p>
                                    </div>

                                    <div class="right-E-line">
                                        <p><b>Ebatı :</b>
                                            <?php echo $book_details['kitap_boyutu']; ?>
                                        </p>
                                    </div>

                                    <div class="left-S-line">
                                        <p><b>Cilt :</b> :
                                            <?php echo $book_details['kitap_cildi']; ?>
                                        </p>
                                    </div>
                                </div>


                                <div class="bk-sag">
                                    <div class="general-line">
                                        <div class="left-colum">

                                            <div class="left-M-line">
                                                <p><b>Basım Yılı :</b>
                                                    <?php echo $book_details['basim_yili']; ?>
                                                </p>
                                            </div>

                                            <div class="left-E-line">
                                                <p><b>Medya Tipi :</b>
                                                    <?php echo $book_details['kitap_cildi']; ?>
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Detaylar Sağ Taraf-->
                                        <div class="right-colum">
                                            <div class="right-S-line">
                                                <p> <b>Sayfa Sayısı :</b>
                                                    <?php echo $book_details['sayfa_sayisi']; ?>
                                                </p>
                                            </div>
                                            <div class="right-M-line">
                                                <p><b>Hamur Tipi :</b>
                                                    <?php echo $book_details['hamur_tipi']; ?>
                                                </p>
                                            </div>
                                            <div class="right-E-line">
                                                <p><b>Ebatı :</b>
                                                    <?php echo $book_details['kitap_boyutu']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="daha-fazla">
                                <a href="#oneri">Daha Fazla</a>
                            </div>
                        </div>
                        <!-- Sonrdaki Div-->
                        <div class="end-line">
                            <Button>Sepete Ekle</Button>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "Kitap bulunamadı";
            }
        } else {
            echo "Geçersiz istek";
        }

        mysqli_close($baglanti);
        ?>
    </div>



    <div class="oneri-satir" id="oneri">

        <div class="baslik">Kitabı Özeti</div>

        <?php
        $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db"); // Veri tabanı Bağlantısı
        
        if (!$baglanti) {
            die("Bağlanamadı: " . mysqli_connect_error()); // bağlantı sağllanmazsa hata döndürür
        }


        if (isset($_GET['kitap_id'])) {
            $book_id = $_GET['kitap_id'];


            $sql = "SELECT * FROM books WHERE kitap_id = $book_id";
            $result = mysqli_query($baglanti, $sql);

            if (mysqli_num_rows($result) > 0) {
                $book_details = mysqli_fetch_assoc($result);
                ?>
                <div class="k-ozet">
                    <p><?php echo $book_details['kitap_ozeti'];?></p>
                </div>
                <?php
            } else {
                echo "Kitap bulunamadı";
            }
        } else {
            echo "Geçersiz istek";
        }

        mysqli_close($baglanti);
        ?>

    </div>


</body>

</html>