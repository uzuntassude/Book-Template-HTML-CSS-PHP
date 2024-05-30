<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitap Ekle</title>
    <link rel="stylesheet" href="../Css/admin.css">
</head>

<body>


    <div class="container">
        <form action="yenikayit.php" method="post" enctype="multipart/form-data">

            <div class="form-box">
                <div class="sol-sutun">
                    <div class="form-satir">
                        <div class="satir"> <label for="kitapAdi">Kitap Adı : </label></div>
                        <input type="text" id="kitapAdi" name="kitapAdi">
                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="kYazari">Kitap Yazarı : </label></div>
                        <input type="text" id="kYazari" name="kYazari">
                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="kTuru">Kitap Türü : </label></div>
                        <select name="kTuru">
                            <?php
                            $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

                            if (!$baglanti) {
                                die("Bağlanamadı: " . mysqli_connect_error());
                            }

                            $sql = "SELECT * FROM books_type";
                            $result = $baglanti->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row["tur_id"] . "'>" . $row["tur_adi"] . "</option>";
                                }
                            } else {
                                echo "Veri bulunamadı";
                            }

                            $baglanti->close();
                            ?>
                        </select><br>

                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="yayinEvi">Yayın Evi : </label></div>
                        <input type="text" id="yayinEvi" name="yayinEvi">
                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="kDili">Kitap Dili : </label></div>
                        <input type="text" id="kDili" name="kDili">
                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="bYili">Basım Yılı : </label></div>
                        <input type="text" id="bYili" name="bYili">
                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="kFiyati">Kitap Fiyatı : </label></div>
                        <input type="text" id="kFiyati" name="kFiyati">
                    </div>
                </div>

                <div class="orta-sutun"></div>

                <div class="sag-sutun">
                    <div class="form-satir">
                        <div class="satir"> <label for="sSayisi">Sayfa Sayısı : </label></div>
                        <input type="text" id="sSayisi" name="sSayisi">
                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="kHamuru">Hamur Tipi : </label></div>
                        <input type="text" id="kHamuru" name="kHamuru">
                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="cDurumu">Cild Durumu : </label></div>
                        <input type="text" id="cDurumu" name="cDurumu">
                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="kBoyutu">Kitap Boyutu : </label></div>
                        <input type="text" id="kBoyutu" name="kBoyutu">
                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="kBarkod">Kitap Barkod : </label></div>
                        <input type="text" id="kBarkod" name="kBarkod">
                    </div>

                    <div class="form-satir">
                        <div class="satir"> <label for="kOzeti">Kitap Özeti : </label></div>
                        <textarea cols="90" rows="8" placeholder="Kitap Özeti." id="kOzeti" name="kOzeti"></textarea>
                    </div>

                    <div class="form-satir" style="margin-top:30px">
                        <div class="satir"> <label for="kapak_fotografi">Kapak Fotografı : </label></div>
                        <input type="file" id="kapak_fotografi" name="kapak_fotografi">
                    </div>
                </div>


            </div>
            <div class="form-satir">
                <button type="submit">Ekle</button>
            </div>




        </form>
    </div>

</body>

</html>