<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>RD Promoções</title>
<link href="estrutura.css" rel="stylesheet" type="text/css"/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="jquery.h5-lightbox.js"></script>
<script src="script_rota.js"></script>
</head>
<body>
<div id="all">
<div id="header">
  <?php include('menu.php'); ?>
</div>
<div id="mainframe">
  <div id="menuesquerda">
    <fieldset>
      Automotivo
      <hr>
      Esporte
      <hr>
      Eletrônico
      <hr>
      Eletrodomésticos
      <hr>
      Entretenimento
      <hr>
      Lazer
      <hr>
      Games
      <hr>
      Informática
      <hr>
      Móveis
    </fieldset>
  </div>
</div>
<div id="ban_rota"> 
  <script>
                    document.write("<div id='caixa'></div>");

                    bannerRotativo();

                    function bannerRotativo() {
                        setTimeout("mostraBanner1()", 0000);
                        setTimeout("mostraBanner2()", 4000);
                        setTimeout("mostraBanner3()", 8000);
                        setTimeout("mostraBanner4()", 12000);
                        setTimeout("bannerRotativo()", 16000);
                    }
                    function mostraBanner1() {
                        document.getElementById('caixa').innerHTML = "<div id='rotacao' style='width=550px; display: table; align: center; margin:auto;'>";
                    }
                     function mostraBanner2() {
                        document.getElementById('caixa').innerHTML = "<div id='rotacao2' style='width=550px; display: table; align: center; margin:auto;'>";
                    }
                    function mostraBanner3() {
                        document.getElementById('caixa').innerHTML = "<div id='rotacao3' style='width=550px; display: table; align: center; margin:auto;'>";
                    }
                    function mostraBanner4() {
                        document.getElementById('caixa').innerHTML = "<div id='rotacao4' style='width=550px; display: table; align: center; margin:auto;'>";
                    }
                    
                </script> 
</div>
<div class="wrapper"> <br>
  <div id="local"><br />
    <?php include('home.php'); ?>
  </div>
</div>
<?php include('rodape.php'); ?>
</div>
</body>
</html>