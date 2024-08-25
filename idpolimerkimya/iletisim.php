<!DOCTYPE html>
<html lang="tr">
<head>
    <title>İletişim - İd Polimer Kimya</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "link.php";
    ?>
</head>
<body>
<?php
include "header.php";
?>
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">İletişim</h1>
        </div>
    </div>
</div>
<div class="breadcumb-menu-wrap">
    <div class="container">
        <ul class="breadcumb-menu">
            <li><a href="index.php"><i class="fas fa-home-lg"></i>Anasayfa</a></li>
            <li>İletişim</li>
        </ul>
    </div>
</div>
<section class="space-top space-extra-bottom">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-6 col-xl-5 pb-20 pb-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                <div class="info-box">
                    <h3 class="info-box-title">İletişim</h3>
                    <div>
                        <div class="vs-media">
                            <div class="media-icon">
                                <img src="assets/img/icon/info-1-1.png" alt="info-icon">
                            </div>
                            <div class="media-body">
                                <p class="media-info">Telefon:<br>
                                    <a href="tel:02166343430" class="text-inherit">0(216)634 34 30</a>
                                </p>
                            </div>
                            <div class="media-body">
                                <p class="media-info">Telefon:<br>
                                    <a href="tel:02166343431" class="text-inherit">0(216)634 34 31</a>
                                </p>
                            </div>
                        </div>
                        <div class="vs-media">
                            <div class="media-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="media-body">
                                <p class="media-info">İnkilap Mahallesi Küçüksu Caddesi
                                    Kent Plaza B Blok 107.Numara 3.Kat No:14
                                    Ümraniye / İstanbul
                                </p>
                            </div>
                        </div>
                        <div class="vs-media">
                            <div class="media-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <p class="media-info">E-Posta:<br>
                                    <a class="text-inherit" href="mailto:info@idpolimerkimya.com">info@idpolimerkimya.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInUp" data-wow-delay="0.4s">
                <form class="form-style2 layout2 ajax-contact" action="mail.php" method="POST">
                    <h3 class="form-title">
                        Bizimle İletişime Geçin
                    </h3>
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="name">İsmin Giriniz</label>
                            <input name="name" id="name" type="text" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">E-Posta Giriniz</label>
                            <input name="email" id="email" type="email" placeholder="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="number">Telefon Giriniz</label>
                            <input name="number" id="number" type="number" placeholder="">
                        </div>
                        <div class="col-12 form-group">
                            <label for="message">Mesajınızı Giriniz</label>
                            <textarea name="message" id="message" placeholder=""></textarea>
                        </div>
                        <div class="col-12 form-group">
                            <button type="submit" class="vs-btn">Gönder</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="container space-bottom">
    <div class="ratio ratio-21x9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223.69238340949508!2d29.110286049158354!3d41.03326321294536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7eb55fa871148bb0!2zNDHCsDAyJzAwLjAiTiAyOcKwMDYnMzcuMyJF!5e0!3m2!1str!2str!4v1675252709483!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<?php
include "footer.php";
include "script.php";
?>
</body>
</html>

