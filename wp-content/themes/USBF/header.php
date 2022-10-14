<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta property="og:title" content="BOILERPLATE FRONTEND" />
  <meta property="og:description" content="BOILERPLATE FRONTEND" />
  <meta property="og:site_name" content="BOILERPLATE FRONTEND" />
  <meta property="og:url" content="http://localhost/" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://uploaddeimagens.com.br/images/003/855/901/full/catskillet.png" />
  <title>Catskillet - Artigos</title>
  <link
    rel="shortcut icon"
    href="../static/images/favicon.png"
    type="image/png"
  />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/public/app.css" />
  <script defer src="<?= get_template_directory_uri(); ?>/public/app.js"></script>
</head>

<body>
<main>
  
  <header id="mainHeader" class="main-header">
    <div class="container">
        <nav class="main-nav">
            <a class="logo" href="http://localhost/Projeto_wp_usbf/" target="_blank">
                <figure><img src="<?= get_template_directory_uri(); ?>/src/images/img3.png" alt=""></figure>
            </a>
            <button id="btnToggleMenu" class="main-nav__hamburguer">
              <span class="bar"></span><span class="bar"></span><span class="bar"></span>
            </button>
            <ul class="main-nav__ul">
                <li><a href="#" target="_blank"><strong>Home</strong></a></li>
                <li><a href="#" target="_blank" class="active"><strong>Artigos</strong></a></li>
                <li><a href="#" target="_blank"><strong>Ciclo</strong></a></li>
                <li><a href="#" target="_blank"><strong>CONTATOS</strong></a></li>
            </ul>
        </nav>
    </div>
  </header>