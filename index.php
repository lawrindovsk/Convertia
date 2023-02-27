<?php
namespace MP3\PHP;
require_once('../PHP/conversor.php');
use MP3\PHP\Conversor;
$conver = new Conversor();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Links -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../static/CSS/style.css">
  <link rel="stylesheet" type="text/css" href="../static/CSS/convertia.css">
  
  <title>Convertia</title>

</head>

<body>
     <!--    Navbar.   -->
     <nav id="nav" class="navbar navbar-expand-lg ">
    <!-- Icone do site --> <svg id="musica" xmlns="http://www.w3.org/2000/svg" width="36" height="56" fill="white" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
    <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
    <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
    <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
</svg>
<div id="tituloRainbow">
  <ul class="c-rainbow">
    <li class="c-rainbow__layer c-rainbow__layer--white">CONVERTIA</li>
    <li class="c-rainbow__layer c-rainbow__layer--orange">CONVERTIA</li>
    <li class="c-rainbow__layer c-rainbow__layer--red">CONVERTIA</li>
    <li class="c-rainbow__layer c-rainbow__layer--violet">CONVERTIA</li>
    <li class="c-rainbow__layer c-rainbow__layer--blue">CONVERTIA</li>
    <li class="c-rainbow__layer c-rainbow__layer--green">CONVERTIA</li>
    <li class="c-rainbow__layer c-rainbow__layer--yellow">CONVERTIA</li>
  </ul>
 </div>
  <ul class="navbar-nav ms-auto">
      <li class="nav-item-home"><a id="aHome" class="nav-link active" aria-current="page" href="../Screen/index.php"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="56" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
<path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
</svg></a></li>
      <li class="nav-item-github"><a id="aGitHub" class="nav-link" href="https://github.com/lawrindovsk/Convertia"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="56" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
</svg></a></li>
    </ul>
  </nav>
  <!--   Fim Navbar.  -->
  
<section id="corpo-body">
  <div id="welcome">
    <h2><b>BEM-VINDO AO SITE CONVERTIA!</b></h2>
    <br>
    <p class ="iText">
      <b>O site destinado a conversão de aquivos! MP4 para MP3.</b><br>
      <b>O nosso conversor é extramente simples e rápido de se ultilizar!</b>
    </p>
  </div>

  <div id="rules">
    <ol>
      <li>Clique no botão <b>“Escolher arquivo”</b> para selecionar seu arquivo MP4.</li>
      <li>Clique no botão <b>“Download”</b> para iniciar a conversão.</li>
      <li>Assim ele irá fazer todo o processo de conversão e logo mostrará uma tela para você onde indicará o <b>local de download!</b></li>
      <li>E pronto! Arquivo convertido com <b>sucesso!</b></li>
    </ol>
  </div>

  <br><br>

<!-- Conteúdo do site -->
<div id='divUrl'>
    <form id='downloadForm' enctype='multipart/form-data' method='POST'>
      <input id="inputMidia" accept=".mp4" name="video" type="file">
      <br><br><br>
      <button id="botaoDownload" type="submit" name="download">
      <img src="../static/Images/botaoDownload.png" alt="btDownload" width="50" height="50">
      </button>
    </form>
  </div>
    <br><br><br><br><br><br>
</section>
    <div id="fundo" class="home-conversion-guide__usps row" data-v-79e2f69d="">
  <div class="usp-card col-md-4" style="text-align: left;" data-v-79e2f69d="">
  <div class="usp-card__icon">
    <svg viewBox="0 0 24 24" width="56" height="56" stroke="#ffffff" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
      <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14">
        
      </path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></div> <div><h2>Fácil de usar</h2>
      <p> Basta carregar seus arquivos MP4 e clicar no botão converter. Você também pode converter em lote o formato <span style="font-style: normal; font-weight: 400;">
      MP4</span> para MP3.</p></div></div><div class="usp-card col-md-4" style="text-align: left;" data-v-79e2f69d="">
      <div class="usp-card__icon">
        <svg viewBox="0 0 24 24" width="56" height="56" stroke="#ffffff" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
          <circle cx="12" cy="8" r="7">
            
          </circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg></div> <div><h2>Melhor qualidade</h2><p> Usamos software de código aberto e personalizado para garantir que nossas conversões sejam da mais alta qualidade.</p></div></div><div class="usp-card col-md-4" style="text-align: left;" data-v-79e2f69d=""><div class="usp-card__icon"><svg viewBox="0 0 24 24" width="56" height="56" stroke="#ffffff" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div> <div><h2>Gratuito e seguro</h2><p> Nosso Conversor MP4 para MP3 é gratuito e funciona em qualquer navegador da web. Garantimos a segurança e privacidade dos arquivos.</p></div></div></div>
    </section>
    
  
<!-- Fim do Conteúdo -->



<!-- php -->
  <?php
  if(isset($_POST['download'])){
    echo $conver->converterMp3($_FILES['video']['tmp_name'], $_FILES['video']['name']);
  }
  ?>
</body>
</html>