<!DOCTYPE html>
<html lang="sr-RS">
<head>
    <meta charset="utf-8">
    <title>MCMP-Design - Mi kao nešto dizajniramo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/app.css">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="images/Logo.png" id="logo" alt="MCMP-Design"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/o-nama">O nama</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-secondary callForAction"><a class="nav-link" href="/kontakt">Kontakt</a></button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 widgetBox">
                <p class="textbox">
                    <span style="font-size: 6rem; color: #2C3333">Ćao,</span> <br><span style="font-size: 2rem; color: #395B64;"> malo si poranio/poranila. Razumemo veliko interesovanje za naš rad tako da radimo punom parom!! U međuvremenu možeš da nas kontaktiraš na: <br>
                         <span style="color:#2C3333; text-decoration:underline">kontakt@mcmp-design.com</span></span>
                </p>
            </div>
            <div class="col-sm-4 widgetBox">

                <img id="logoOnPage" src="images/Logo.png">
                <div class="socialMediaButtons">
                    <a href="https://www.facebook.com/mcmpdesign" class="fa fa-facebook" target="_blank"></a>
                    <a href="https://www.instagram.com/mcmp_design/" class="fa fa-instagram" target="_blank"></a>
                    <a href="#" class="fa fa-dribbble"></a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Site footer -->
@include('layouts/footer')
