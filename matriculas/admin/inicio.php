<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
?>
<head>
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
              width: 300px;
              float: left;
              text-align:center;
              shape-margin:initial;
              margin-left:40px;
              margin-right:40px;

          }

          #right {            
              width: 300px;
              float: right;
              text-align: center;
              shape-margin:initial;
              margin-left:50px;
              margin-right:50px;
          }
  </style>
</head>
<body>
  <h1><a href="index.php"></i>  I.E.P. Esclavas del Sagrado Corazón de Jesús </a> <small>Visión y Misión</small></h1>
  <div class="row student">
  <content>
      <div id="left">
              <h1 style="text-align:center;">MISION</h1> 
              <div  class="panel-body" style="text-align:justify;">
              Somos una organización Educativa Privada que brinda servicio a la niñez y juventud de nuestra sociedad, 
              en una formación académica de excelencia y calidad humana teniendo como pilares la práctica de valores 
              y principios cristianos, con una educación personalizada encargada de desarrollar las aptitudes y actitudes
              para formar líderes que interactúen eficientemente en una sociedad competitiva en el contexto de un mundo en  
              permanente cambio.</div>
      </div> 
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <div id="right">    
              <h1 style="text-align:center;">VISION </h1>   
              <div  class="panel-body" style="text-align:justify;">         
              Ser una organización líder caracterizada por ofrecer una educación para la competitividad; La educación se fundamenta 
              en valores y busca la transformación de esos valores en actitudes cristianas que contribuyan a lograr el desarrollo 
              integral, fundamentada en raíces culturales propias de nuestra patria y en los principios éticos sociales; formando
              seres humanos autónomos, capaces, decididos, estables que trasciendan frente a un mundo competitivo.
      
          </div>
        <p>
      </div>
    </content>    
  </div>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/foto2.jpg" class="d-block w-100" src="..." alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="images/foto3.png" class="d-block w-100" src="..." alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</body>