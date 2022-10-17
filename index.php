<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <style>
    @import url("http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css");
    .menu, .menu-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        height: 100%;
        list-style-type: none;
        margin: 0;
        padding: 0;
        background: #f7f7f7;
        z-index:10;  
        overflow:hidden;
        box-shadow: 2px 0 18px rgba(0, 0, 0, 0.26);
    }
    .menu li a{
      display: inline-block;
      text-indent: -500em;
      height: 5em;
      width: 5em;
      line-height: 5em;
      text-align:center;
      color: #03bb85;
      position: relative;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      transition: background 0.1s ease-in-out;
    }
    .menu li a:before {
      font-family: FontAwesome;
      speak: none;
      text-indent: 0em;
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      font-size: 1.4em;
    }
    .menu li a.search:before {
      content: "\f002";
    }
    
    .menu li a.home:before {
      content: "\f039";
    }
    .menu-bar li a:hover,
    .menu li a:hover,
    .menu li:first-child a {
      background: #03bb85;
      color: #fff;
    }
    .menu-bar{
        overflow:hidden;
        left:5em;
        z-index:5;
        width:0;
        height:0;
        transition: all 0.1s ease-in-out;
    }
    .menu-bar li a{
      display: block;
      height: 4em;
      line-height: 4em;
      text-align:center;
      color: #03bb85;
      text-decoration:none;  
      position: relative;
      font-family:verdana;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      transition: background 0.1s ease-in-out;
    }
    .menu-bar li:first-child a{
        height:5em;
        background: #03bb85;
        color: #fff;    
        line-height:5
    }
    
    
    .para{
        color:#03bb85;
        padding-left:100px;
        font-size:3em;
        margin-bottom:20px;
    }
    
    .open{
        width:10em;
        height:100%;
    }
    
    @media all and (max-width: 500px) {
        .container{
            margin-top:100px;
        }
        .menu{
            height:5em;
            width:100%;
        }
        .menu li{
            display:inline-block;
        }
        .menu-bar li a{
            width:100%;
        }
        .menu-bar{
            width:100%;
            left:0;
          bottom: 0;
            height:0;
        }
        .open{
            width:100%;
            height:auto;
        }
        .para{
        padding-left:5px;
    }  
    }
    @media screen and (max-height: 34em){
      .menu li,
      .menu-bar {
        font-size:70%;
      }
    }
    @media screen and (max-height: 34em) and (max-width: 500px){
      .menu{
            height:3.5em;
        }
    }
    </style>
  </head>
  <body>
   
   <header>
    <nav>
   <div class="container">
  <div class="row">
    <div class="col-sm">
    <ul class="menu">
      
      <li title="home"><a href="#" class="menu-button home">menu</a></li>
      
    </ul>
    
    <ul class="menu-bar">
        <li><a href="index.php" class="menu-button">Início</a></li>
        <li><a href="./bebidas.php">Bebidas</a></li>
        <li><a href="#">Alimentos</a></li>
        <li><a href="#">Padaria</a></li>
        <li><a href="#">Cereais e grãos</a></li>
        <li><a href="#">Congelados e frios</a></li>
        <li><a href="#">Hortifruti</a></li>
        <li><a href="#">Limpeza</a></li>
        <li><a href="#">Higiene pessoal</a></li>
        <li><a href="#">Papelaria</a></li>
    </ul>
    </div>
    <div class="col-sm">
      <img src="./contents/logo.png" id="logo">
    </div>
  </div>
</div>
</nav>
   </header>

   <main id="inicio">
    <div>
   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="O que deseja achar?" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="./contents/searchicon.png" id="searchicon" style="width: 25px;"></button>
    </form>
    </div>
   </main>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script id="rendered-js" >
      $(document).ready(function () {
        $(".menu-button").click(function () {
          $(".menu-bar").toggleClass("open");
        });
      });
      
          </script>

</body>
</html>