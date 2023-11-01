<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" sizes="32x32" href="./src/favico/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./src/favico/favicon-16x16.png" />

  <link rel="stylesheet" href="src/style.css" />
</head>

<body class="" id="page-top" onload="translate('en','lng-tag')">
  <div class="layer"><img src="./src/layer.svg" alt="" loading="" /></div>
  <header>
  </header>
  <main>
    <section class="hero" id="hero">
      <div class="left">
        <div>
          <div class="welcome">
            <div id="line"></div>
            <span id="welcome">Selamat Datang!</span>
          </div>
          <h1><span class="text-danger">Saya <span class="glow">M</span><span class="text-danger">. </span><span class="glow">Diki</span></span><span class="glow"> Iswari</span></h1>
          <div class="titles">
            <span id="title-1">Web Developer</span>
            <span>|</span>
            <span id="title-2">Graphic Designer</span>
            <span>|</span>
            <span id="title-3">UI/UX Designer</span>
          </div>
        </div>

        <div class="buttons">
          <a href="pages/contact" class="btn btn-danger"><span id="download">Contact Me</span><i class="bi bi-person-circle"></i></a>
        </div>
      </div>
      <div class="right">
        <img src="/img/Me1.png " class="glow" alt="Me" srcset="" loading="lazy" />
      </div>
      <div class="scroll-down">
        <span id="scroll-down">Scroll Ke Bawah</span>
      </div>
    </section>
    <section class="about" id="about">
      <h2><span id="about-title">Tentang</span> <i data-feather="info"></i></h2>
      <div class="container">
        <img src="/img/Me.png" alt="" />
        <div id="about-text">
          <p id="about-text-1">
            Halo, saya <strong>Diki Iswary</strong>, seorang Desainer Grafis dan Pengembang Web. Saya memiliki keahlian di Front-End (HTML, CSS, JS, Bootstrap),
            Back-End (Python), dan Desain Grafis (Photoshop, Illustrator). Selain itu, saya juga memiliki keterampilan tambahan di Desain UI/UX (Figma) dan IoT.
          </p>
          <p id="about-text-2">
            Terima kasih telah mengunjungi website saya. Saya berharap dapat berkolaborasi dengan Anda dalam proyek yang menarik dan bermanfaat. Jangan ragu untuk
            menghubungi saya jika Anda memiliki pertanyaan atau ingin membahas lebih lanjut bagaimana saya dapat membantu Anda.
          </p>
        </div>
      </div>
      <hr />

  </main>
  <footer>
    <small>Copyright &copy; M. Diki Iswari All rights Reserved.</small>
    <small id="created">Dibuat mengguankan CodeIgniter</small>
  </footer>

  <!-- Script -->
  <script>
    feather.replace();
  </script>
  <!-- <script src="./src/translate.js"></script> -->
  <script src="./src/main.js"></script>
</body>

</html>
<?= $this->endSection(); ?>