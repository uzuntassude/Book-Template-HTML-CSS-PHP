<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/anaSayfa.css">
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
                <li><a href="anaSayfa.php" style="color:white">ANA SAYFA</a></li>
                <li><a href="">TÜRLER</a></li>
                <li><a href="#oneriler">ÖNERİLER</a></li>
            </ul>
        </div>
        <div class="search">
            <input type="search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </div>


    <div class="alt-satir" style="margin-top:130px">
        <div class="baslik">
            <h3>Bilim Kurgu Kitapları</h3>
        </div>

        <div class="kitaplar">
            <?php
            // Veritabanı bağlantısı
            $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

            if (!$baglanti) {
                die("Bağlanamadı: " . mysqli_connect_error());
            }

            // Son 5 eklenen kitabın bilgilerini al
            $sql = "SELECT * FROM books WHERE kitap_tur = 1";
            $result = mysqli_query($baglanti, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="box">
                        <div class="kitap-foto">
                            <img src="<?php echo $row['kapak_fotografi']; ?>" alt="Kitap Fotoğrafı">
                        </div>
                        <div class="kitap-bilgi">
                            <h4>
                                <?php
                                echo "<a href='kitapdetaylari.php?kitap_id=" . $row['kitap_id'] . "&tur=" . $row['kitap_tur'] . "'>" . $row['kitap_adi'] . "</a>";
                                ?>
                            </h4>
                            <p>
                                <?php echo $row['kitap_fiyati']; ?> TL
                            </p>
                            <button>Sepete Ekle</button>
                        </div>

                    </div>
                    <?php
                }
            } else {
                echo "Veri bulunamadı";
            }

            mysqli_close($baglanti);
            ?>
        </div>

       

    </div>



    <div class="alt-satir">
        <div class="baslik">
            <h3>Biyografi Kitapları</h3>
        </div>


        <div class="kitaplar">
            <?php
            // Veritabanı bağlantısı
            $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

            if (!$baglanti) {
                die("Bağlanamadı: " . mysqli_connect_error());
            }

            // Son 5 eklenen kitabın bilgilerini al
            $sql = "SELECT * FROM books WHERE kitap_tur = 2";
            $result = mysqli_query($baglanti, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="box">
                        <div class="kitap-foto">
                            <img src="<?php echo $row['kapak_fotografi']; ?>" alt="Kitap Fotoğrafı">
                        </div>
                        <div class="kitap-bilgi">
                            <h4>
                                <?php
                                echo "<a href='kitapdetaylari.php?kitap_id=" . $row['kitap_id'] . "&tur=" . $row['kitap_tur'] . "'>" . $row['kitap_adi'] . "</a>";
                                ?>
                            </h4>
                            <p>
                                <?php echo $row['kitap_fiyati']; ?> TL
                            </p>
                            <button>Sepete Ekle</button>
                        </div>

                    </div>
                    <?php
                }
            } else {
                echo "Veri bulunamadı";
            }

            mysqli_close($baglanti);
            ?>
        </div>

    </div>


    <div class="alt-satir">
        <div class="baslik">
            <h3>Edebiyat Kitapları</h3>
        </div>


        <div class="kitaplar">
            <?php
            // Veritabanı bağlantısı
            $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

            if (!$baglanti) {
                die("Bağlanamadı: " . mysqli_connect_error());
            }

            // Son 5 eklenen kitabın bilgilerini al
            $sql = "SELECT * FROM books WHERE kitap_tur = 3";
            $result = mysqli_query($baglanti, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="box">
                        <div class="kitap-foto">
                            <img src="<?php echo $row['kapak_fotografi']; ?>" alt="Kitap Fotoğrafı">
                        </div>
                        <div class="kitap-bilgi">
                            <h4>
                                <?php
                                echo "<a href='kitapdetaylari.php?kitap_id=" . $row['kitap_id'] . "&tur=" . $row['kitap_tur'] . "'>" . $row['kitap_adi'] . "</a>";
                                ?>
                            </h4>
                            <p>
                                <?php echo $row['kitap_fiyati']; ?> TL
                            </p>
                            <button>Sepete Ekle</button>
                        </div>

                    </div>
                    <?php
                }
            } else {
                echo "Veri bulunamadı";
            }

            mysqli_close($baglanti);
            ?>
        </div>

    </div>



  


    <div class="alt-satir">
        <div class="baslik">
            <h3>Felsefe Kitapları</h3>
        </div>


        <div class="kitaplar">
            <?php
            // Veritabanı bağlantısı
            $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

            if (!$baglanti) {
                die("Bağlanamadı: " . mysqli_connect_error());
            }

            // Son 5 eklenen kitabın bilgilerini al
            $sql = "SELECT * FROM books WHERE kitap_tur = 4";
            $result = mysqli_query($baglanti, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="box">
                        <div class="kitap-foto">
                            <img src="<?php echo $row['kapak_fotografi']; ?>" alt="Kitap Fotoğrafı">
                        </div>
                        <div class="kitap-bilgi">
                            <h4>
                                <?php
                                echo "<a href='kitapdetaylari.php?kitap_id=" . $row['kitap_id'] . "&tur=" . $row['kitap_tur'] . "'>" . $row['kitap_adi'] . "</a>";
                                ?>
                            </h4>
                            <p>
                                <?php echo $row['kitap_fiyati']; ?> TL
                            </p>
                            <button>Sepete Ekle</button>
                        </div>

                    </div>
                    <?php
                }
            } else {
                echo "Veri bulunamadı";
            }

            mysqli_close($baglanti);
            ?>
        </div>

    </div>








    <div class="alt-satir">
        <div class="baslik">
            <h3>Hikaye Kitapları</h3>
        </div>


        <div class="kitaplar">
            <?php
            // Veritabanı bağlantısı
            $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

            if (!$baglanti) {
                die("Bağlanamadı: " . mysqli_connect_error());
            }

            // Son 5 eklenen kitabın bilgilerini al
            $sql = "SELECT * FROM books WHERE kitap_tur = 5 ";
            $result = mysqli_query($baglanti, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="box">
                        <div class="kitap-foto">
                            <img src="<?php echo $row['kapak_fotografi']; ?>" alt="Kitap Fotoğrafı">
                        </div>
                        <div class="kitap-bilgi">
                            <h4>
                                <?php
                                echo "<a href='kitapdetaylari.php?kitap_id=" . $row['kitap_id'] . "&tur=" . $row['kitap_tur'] . "'>" . $row['kitap_adi'] . "</a>";
                                ?>
                            </h4>
                            <p>
                                <?php echo $row['kitap_fiyati']; ?> TL
                            </p>
                            <button>Sepete Ekle</button>
                        </div>

                    </div>
                    <?php
                }
            } else {
                echo "Veri bulunamadı";
            }

            mysqli_close($baglanti);
            ?>
        </div>

    </div>




    <div class="alt-satir">
        <div class="baslik">
            <h3>Polisiye Kitapları</h3>
        </div>


        <div class="kitaplar">
            <?php
            // Veritabanı bağlantısı
            $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

            if (!$baglanti) {
                die("Bağlanamadı: " . mysqli_connect_error());
            }

            // Son 5 eklenen kitabın bilgilerini al
            $sql = "SELECT * FROM books WHERE kitap_tur = 6";
            $result = mysqli_query($baglanti, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="box">
                        <div class="kitap-foto">
                            <img src="<?php echo $row['kapak_fotografi']; ?>" alt="Kitap Fotoğrafı">
                        </div>
                        <div class="kitap-bilgi">
                            <h4>
                                <?php
                                echo "<a href='kitapdetaylari.php?kitap_id=" . $row['kitap_id'] . "&tur=" . $row['kitap_tur'] . "'>" . $row['kitap_adi'] . "</a>";
                                ?>
                            </h4>
                            <p>
                                <?php echo $row['kitap_fiyati']; ?> TL
                            </p>
                            <button>Sepete Ekle</button>
                        </div>

                    </div>
                    <?php
                }
            } else {
                echo "Veri bulunamadı";
            }

            mysqli_close($baglanti);
            ?>
        </div>

    </div>






    <div class="alt-satir">
        <div class="baslik">
            <h3>Tarih Kitapları</h3>
        </div>


        <div class="kitaplar">
            <?php
            // Veritabanı bağlantısı
            $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

            if (!$baglanti) {
                die("Bağlanamadı: " . mysqli_connect_error());
            }

            // Son 5 eklenen kitabın bilgilerini al
            $sql = "SELECT * FROM books WHERE kitap_tur = 7";
            $result = mysqli_query($baglanti, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="box">
                        <div class="kitap-foto">
                            <img src="<?php echo $row['kapak_fotografi']; ?>" alt="Kitap Fotoğrafı">
                        </div>
                        <div class="kitap-bilgi">
                            <h4>
                                <?php
                                echo "<a href='kitapdetaylari.php?kitap_id=" . $row['kitap_id'] . "&tur=" . $row['kitap_tur'] . "'>" . $row['kitap_adi'] . "</a>";
                                ?>
                            </h4>
                            <p>
                                <?php echo $row['kitap_fiyati']; ?> TL
                            </p>
                            <button>Sepete Ekle</button>
                        </div>

                    </div>
                    <?php
                }
            } else {
                echo "Veri bulunamadı";
            }

            mysqli_close($baglanti);
            ?>
        </div>

    </div>




    <div class="alt-satir" id="oneriler">
        <div class="baslik">
            <h3>Önerilen Kitaplar</h3>
        </div>


        <div class="kitaplar">
            <?php
            // Veritabanı bağlantısı
            $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

            if (!$baglanti) {
                die("Bağlanamadı: " . mysqli_connect_error());
            }

            // Son 5 eklenen kitabın bilgilerini al
            $sql = "SELECT * FROM books ORDER BY kitap_id DESC LIMIT 5";
            $result = mysqli_query($baglanti, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="box">
                        <div class="kitap-foto">
                            <img src="<?php echo $row['kapak_fotografi']; ?>" alt="Kitap Fotoğrafı">
                        </div>
                        <div class="kitap-bilgi">
                            <h4>
                                <?php
                                echo "<a href='kitapdetaylari.php?kitap_id=" . $row['kitap_id'] . "&tur=" . $row['kitap_tur'] . "'>" . $row['kitap_adi'] . "</a>";
                                ?>
                            </h4>
                            <p>
                                <?php echo $row['kitap_fiyati']; ?> TL
                            </p>
                            <button>Sepete Ekle</button>
                        </div>

                    </div>
                    <?php
                }
            } else {
                echo "Veri bulunamadı";
            }

            mysqli_close($baglanti);
            ?>
        </div>

    </div>














</body>

</html>