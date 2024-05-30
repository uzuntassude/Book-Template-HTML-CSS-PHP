<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

  if (!$baglanti) {
    die("Bağlanamadı: " . mysqli_connect_error());
  }

  $kAdi = $_POST["kitapAdi"];
  $yazari = $_POST["kYazari"];
  $secilen_tur = $_POST["kTuru"];
  $yayin_evi = $_POST["yayinEvi"];
  $dili = $_POST["kDili"];
  $basim_yili = $_POST["bYili"];
  $fiyat = $_POST["kFiyati"];
  $sayfa_sayisi = $_POST["sSayisi"];
  $hamur_tipi = $_POST["kHamuru"];
  $medyaC = $_POST["cDurumu"];
  $ebati = $_POST["kBoyutu"];
  $barkod = $_POST["kBarkod"];
  $kOzeti = $_POST["kOzeti"];

  $dosya_adi = basename($_FILES["kapak_fotografi"]["name"]);
  $dosya_yolu = "../uploads/" . $dosya_adi;

  $kapak_fotografi = $_FILES["kapak_fotografi"];

  if (move_uploaded_file($_FILES["kapak_fotografi"]["tmp_name"], $dosya_yolu)) {
    $sql = "INSERT INTO books (kitap_adi, kitap_yazari, kitap_tur, kitap_yayin_evi, kitap_dili, basim_yili, kitap_fiyati, sayfa_sayisi, hamur_tipi, kitap_cildi, kitap_boyutu, kitap_barkodu, kitap_ozeti, kapak_fotografi)
    VALUES ('$kAdi', '$yazari', '$secilen_tur', '$yayin_evi', '$dili', '$basim_yili', '$fiyat', '$sayfa_sayisi', '$hamur_tipi', '$medyaC', '$ebati', '$barkod', '$kOzeti', '$dosya_yolu')";

    if (mysqli_query($baglanti, $sql)) {
      echo "Yeni Kitap Eklendi";
      // Ekleme başarılı olduğunda mesajı görüntüle
      // Yeni kitap eklendi uyarısını göndermek için bir parametre kullanarak sayfayı yönlendirin
      // header("Location: admin.php?ekle=ok");
      //exit();
    } else {
      echo "Hata: " . $sql . "<br>" . mysqli_error($baglanti);
    }
  } else {
    echo "Dosya yükleme hatası.";
  }

  mysqli_close($baglanti);
}
?>
