<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Profil Sosial Media</title>
                <link rel="stylesheet" href="style.css">

                <style>
                    .profile {
                        width: 300px;
                        margin: 0 auto;
                        background-color: #ffffff;
                        border-radius: 10px;
                        padding: 20px;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                        text-align: center;
                    }

                    .profile img {
                        width: 150px;
                        height: 150px;
                        border-radius: 50%;
                        object-fit: cover;
                        margin-bottom: 10px;
                    }

                    .profile h2 {
                        margin-bottom: 10px;
                    }

                    .social-links {
                        list-style-type: none;
                        padding: 0;
                        margin: 0;
                    }

                    .social-links li {
                        margin-bottom: 10px;
                    }

                    .social-links li a {
                        display: block;
                        background-color: #eeeeee;
                        padding: 8px;
                        border-radius: 5px;
                        text-decoration: none;
                        color: #000000;
                        transition: background-color 0.3s ease;
                    }

                    .social-links li a:hover {
                        background-color: #dddddd;
                    }
                </style>

            </head>

            <body><br>
                <header>
                </header>

                <main>
                    <section class="profile">
                        <img src="../img/Diky.jpg" alt="Foto Profil">
                        <h2>M. Diki Iswari</h2>
                        <ul class="social-links">
                            <li><a href="https://www.instagram.com/dikymonz03/"><i class="bi bi-instagram"></i> Instagram</a></li>
                            <li><a href="#"><i class="bi bi-discord"></i> Discord</a></li>
                            <li><a href="#"> <i class="bi bi-github"></i> GitHub</a></li>
                            <li><a href="https://wa.link/eq38cx"> <i class="bi bi-whatsapp"></i> WhatsApp</a></li>

        </div>
    </div>

    </br>
</div>
</div>
</div>
<?= $this->endSection(); ?>