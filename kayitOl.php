<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- icon kütüphanesi -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <!-- css -->
    <link rel="stylesheet" href="header-footer.css" />
    <!-- document icon -->
    <link
      rel="shortcut icon"
      href="img/alıntıatlası.png"
      type="image/x-icon"
    />
    <link rel="shortcut icon" href="img/alıntıatlası.png" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KayıtOl</title>
  </head>
  <style>
    body {
      font-size: 62.5%;
      margin: 0;
    }

    main {
      background-image: linear-gradient(#fff, #d9d9d9);
      margin-top: 10rem;
    }
    h1 {
      margin-top: 20rem;
      text-align: center;
      font-size: 4rem;
    }
    .bilgiler {
      font-size: 1.4rem;
      font-weight: 600;
      width: 40%;
      margin: auto;
      display: block;
      margin-top: 1rem;
    }
    p {
      font-size: 1.4rem;
    }
    a {
      color: red;
      text-decoration: none;
    }
    a:hover {
      color: rgb(91, 90, 90);
    }

    #email,
    #nickname,
    #date,
    #number,
    #name,
    #password {
      width: 100%;
      border: 2px solid rgb(175, 174, 174);
      padding: 1rem 1.5rem;
      border-radius: 2rem;
    }
    #email:focus,
    #number:focus,
    #name:focus,
    #date:focus,
    #nickname:focus,
    #password:focus {
      background-color: rgb(193, 192, 192);
      color: white;
    }
    button {
      color: #000;
      padding: 0.9 1.8rem;
      border-radius: 1.5rem;
      margin: 2rem 0rem 5rem 1.3rem;
    }
    button:hover {
      color: white;
      background-color: gray;
      transition: 0.5s;
      transform: translateY(10px);
    }
    .farkli-giris {
      text-align: center;
      font-size: 1.2rem;
    }
    .giris {
      border-radius: 4rem;
      padding: 0rem 3rem;
    }
    .b1 {
      background-image: linear-gradient(white, #ffe6e6);
    }
    .b1:hover {
      background-image: linear-gradient(#f4bdbd, black);
      transform: translateY(-5px);
      transition: 0.5s;
    }
    .b2 {
      background-image: linear-gradient(white, #99d6ff);
    }
    .b2:hover {
      background-image: linear-gradient(#7bc5f7, black);
      transform: translateY(-5px);
      transition: 0.5s;
    }
    #a {
      color: black;
    }
    #a:hover {
      color: white;
    }
    @media (max-width: 576px) {
      button {
        padding: 1px;
        margin-bottom: 2rem;
      }
      h1 {
        font-size: 1.5rem;
      }
      .bilgiler {
        width: 50%;
        font-size: 1rem;
        margin-top: 1rem;
      }
      p {
        font-size: 1rem;
      }
      .farkli-giris {
        font-size: 0.3rem;
      }
      .giris {
        padding: 0rem 1rem;
      }
      h4 {
        font-size: 0.8rem;
      }
    }
    @media (min-width: 577px) and (max-width: 992px) {
      button {
        padding: 1px;
        margin: 0;
      }
      .h1 {
        font-size: 2rem;
      }
      .bilgiler {
        width: 40%;
        font-size: 1.7rem;
        margin-top: 1.7rem;
      }
      p {
        font-size: 1.2rem;
      }
      .farkli-giris {
        font-size: 1rem;
      }
      .giris {
        padding: 0rem 2rem;
      }
      h4 {
        font-size: 1.1rem;
      }
    }
  </style>
  <body>
    <header>
      <div class="row">
        <div class="col col-1">
        <a href="index.html">
            <img class="logo" src="img/alıntıatlası.png" alt=""
          /></a>
          <div class="col col-2">
            <h1 class="head">Alıntı Atlası</h1>
          </div>
        </div>
        <div class="col col-4">
          <ul class="kayitol" id="kayitol">
            <a href="#"><li>Kayıt ol</li></a>
            <a href="girisYap.php"> <li>Giriş Yap</li></a>
          </ul>
        </div>
      </div>
      <div class="row-2">
        <div class="col col-3">
          <ul class="item">
            <a href="../index.php #bolum2"> <li>Keşfet</li></a>
            <a class="hakkimizda" href="#footer"><li>Hakkımızda</li></a>
            <a href="header/alintilarVeSozler.html">Alıntılar ve Sözler</a>
            <a href="header/yazarVeSairler.html"> <li>Yazarlar ve Şairler</li></a>
            <a href="header/klasikKitapZirvesi.html"> <li>Kitap Zirvesi</li></a>
          </ul>
        </div>
      </div>
    </header>

    <main>
      <div class="div-ana">
        <div class="giris-h1">
          <h1>Kayıt OL</h1>
        </div>
        <form action="kayitOl.php" method="post">
          <div class="ana-form">
            <div class="genel">
              <div class="bilgiler">
                <h3>İsminiz ve Soyisminiz</h3>
              </div>
              <div class="bilgiler">
                <input type="text" id="name" required name="name" />
              </div>
              <div class="bilgiler">
                <h3>Kullanıcı Adınız</h3>
              </div>
              <div class="bilgiler">
                <input type="text" id="nickname" required name="nickname" />
              </div>
              <div class="bilgiler">
                <h3>E-mail</h3>
              </div>
              <div class="bilgiler">
                <input type="email" id="email" required name="email" />
              </div>
              <div class="bilgiler">
                <h3>Telefon Numaranız</h3>
              </div>
              <div class="bilgiler">
                <input type="tel" id="number" required name="number" />
              </div>
              <div class="bilgiler">
                <h3>Şifreniz</h3>
              </div>
              <div class="bilgiler">
                <input type="password" id="password" required name="password" />
              </div>
              <div class="bilgiler">
                <h3>Doğum Tarihiniz</h3>
              </div>
              <div class="bilgiler">
                <input type="date" id="date" required name="date" />
              </div>
            </div>
            <div class="bilgiler">
              <button type="submit">Kayıt Ol</button>
            </div>
          </div>
        </form>
        <div class="bilgiler">
          <p>
            Kaydolarak ve alıntıatlası'nı kullanarak alıntıatlası
            <a href="../footer/kullaniciSozlesmesi.html">Kullanım Şartlarını</a>
            ve
            <a href="../footer/gizlilikPolitikasi.html">Topluluk Kurallarını</a>
            kabul ettiğinizi beyan etmiş olursunuz.
          </p>
        </div>
        <div class="farkli-giris">
          <button class="giris b1">
            <a href="../index.html.html" id="a">
              <h4>Google İle Kayıt Ol</h4></a
            >
          </button>
          <button class="giris b2">
            <a href="../index.php" id="a"> <h4>Meta İle Kayıt Ol</h4></a>
          </button>
        </div>
      </div>
    </main>

    <footer id="footer">
      <div class="footer-genel">
        <div class="footer">
          <ul id="logo2-ul">
            <li id="logo2">
              <!-- logo footer sayfa -->
              <a class="img-logo" href="index.html">
                <img
                  class="img-logo2"
                  src="img/fuuter.png"
                  alt="Logo"
                  width="150"
                  height="150"
              /></a>
              <h4 id="footer-h4">
                © 2023 Alıntı Atlası. Tüm Hakları Saklıdır.
              </h4>
            </li>
          </ul>
        </div>
        <div class="footer">
          <ul id="sss-ul">
            <h3 class="h3-sss">SSS</h3>
            <li class="sss-li">
              <a href="../footer/hakkimizda.html">Hakkımızda</a>
            </li>
            <li class="sss-li">
              <a href="../footer/iletisim.html">İletişim</a>
            </li>
            <li class="sss-li">
              <a href="../footer/kullaniciSozlesmesi.html"
                >Kullanıcı Sözleşmesi</a
              >
            </li>
            <li class="sss-li">
              <a href="../footer/gizlilikPolitikasi.html"
                >Gizlilik Politikası</a
              >
            </li>
          </ul>
        </div>
        <div class="footer">
          <ul id="sss-ul">
            <h3 class="h3-sss">Bizi Takip Edin</h3>
            <li class="takipet-li">
              <a href="https://instagram.com/dengnekir_?igshid=YTQwZjQ0NmI0OA=="
                ><i class="fa-brands fa-instagram fa-2xl"></i
              ></a>
            </li>
            <li class="takipet-li">
              <a href="https://web.telegram.org/k/"
                ><i class="fa-brands fa-telegram fa-2xl"></i
              ></a>
            </li>
            <li class="takipet-li">
              <a href="https://twitter.com/">
                <i class="fa-brands fa-x-twitter fa-2xl"></i
              ></a>
            </li>
            <ul class="iletisim">
              <li class="iletisim-footer">
                <i class="fa-solid fa-envelope"></i>
              </li>
              <li class="iletisim-footer">ferhatuslu@stu.topkapi.edu.tr</li>
            </ul>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
<?php
include("alintiatlasi_kayit.php");

if(isset($_POST["name"], $_POST["nickname"], $_POST["email"], $_POST["number"], $_POST["password"], $_POST["date"])){
  $adSoyad = $_POST["name"];
  $kullaniciAdi = $_POST["nickname"];
  $kullaniciMail = $_POST["email"];
  $telefon = $_POST["number"];
  $sifre = $_POST["password"];
  $dogumTarihi = $_POST["date"];
  $eklem="";
  $eklem = "INSERT INTO kayitoll(adsoyad, kullaniciAdi, email, telefon, sifre, dogumTarihi) VALUES ('".$adSoyad."', '".$kullaniciAdi."', '".$kullaniciMail."', '".$telefon."', '".$sifre."', '".$dogumTarihi."')";

  if($baglan->query($eklem) === TRUE){
    echo "<script>alert('Kayıt başarıyla oluşturuldu.')</script>";

  } 
}
?>
