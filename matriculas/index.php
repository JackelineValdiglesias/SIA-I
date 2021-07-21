<?php require_once 'admin/db_con.php'; ?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title> Matrícula de Estudiantes I.E.P </title>    
    <style>
        #content {
            column-count: 2;
            column-gap: 80px; /* ancho de columnas */
            column-rule: 5px outset #999999;
            text-align: left;
            width: 100%;
            margin: auto;
            list-style: none;
        }
        #left {
            width: 400px;
            float: left;
            text-align:center;
            shape-margin:initial;
             margin-left:40px;
            margin-right:40px;

        }

        #right {            
            width: 400px;
            float: right;
            text-align: center;
            shape-margin:initial;
             margin-left:50px;
            margin-right:50px;
        }
</style>
</head>
<body>
  <header>  
    <div class="p-5 text-center bg-image" style="background-image: url(images/fondo.jpg); height: 400px; " >
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">I.E.P. Cristo Redentor</h1>
            <h4 class="mb-3">Desde el año 1994</h4>
            <a class="btn btn-outline-light btn-lg"  role="button">Informes</a>
            <a class="btn btn-outline-light btn-lg"  role="button" href="admin/login.php">Panel Administrativo</a>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
