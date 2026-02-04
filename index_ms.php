  <!DOCTYPE HTML><!--doc en html-->
<HTML LANG="ES"><!--doc en español-->
<HEAD>
<meta charset="UFT-8"><!--codifica caracteres-->
<meta neme="viewport" content="width=device-width, initial-scale=1.0">
<script src="al.js"></script>
<!--ajusta el diseño a moviles-->
<title> Importancia de estudiar EMS</title><!--titulo que aparece en la pestaña-->
<style>

 <body {
    margin: 0; /*elimina margenes por defecto */
    font-family:Arial, sans-serif;/*fuente de texto */
    }
/*estilo del menu principal */
nav{
   background: #2BAB75;/*fondo gris oscuro */
}
nav ul {
   list-style: none;/*quita viñetas de la lista */
   margin: 0;/*elimina margenes */
   padding: 0; /*elimina relleno */
   display: flex;/*coloca los <li> en linea (horizontal) */
}
nav ul li {
   position: relative;/*necesario para posicionar el submenu debajo */
}
nav ul li a {
   display: block;/*ase que todo el area sea clickeable */
   padding: 15px 20px; /*espacio interno */
   color: white;/*texto blanco */
   text-decoration: none;/*quita el subrayado */
}
nav ul li a:hover{
   background: #2BAB75;/* cambia el fondo al pasar el raton */
}

/* Estilo del submenu */
nav ul li ul{
   display: none; /*oculta el submenu por defecto */
   position: absolute; /*posiciona el submenu relativo al padre */ 
   top: 100%; /* lo coloca justo debajo del elemento padre */
   left: 0; /* aliniado a la izquirda */
   background: #444; /*fondo del subtema */
   padding: 0; /*sin espacio interno */
   min-width: 180px; /* ancho minimo del subtema */
}
nav ul li ul li a {
   padding: 10px 15px; /*espacio interno en las opciones */
}
nav ul li ul li a:hover {
   background: #2BAB75; /*coloca mas claro al pasar el raton */
}

/* mostar el submenu */
nav ul li:hover> ul {
   display: block; /*cuando paso el raton sobre el <li> , muestra el submenu */
}
</style>
</head>
<body>
    <body background="habitos.png">
   <!--menu principal-->
   <nav>
      <ul>
       <!--elemento simple sin subtema-->
       
      
      <!--Elemento con subtema-->
      <li>
         <img src="logo.png" width="80" height="110" align="center">

        </li>
          <li>
       <p> <form action="https://www.google.com/search" method="get">
  <input type="text" name="q" placeholder="Buscar en Google">
  <input type="submit" value="Buscar"></p>
  </form>
    </li>
    <li>
         <li> <p><a href="beneficios.html">INPORTANCIA DE EMS</a></p></li>  <!--Flecha indicando subtema-->
        
       </li>
      <li>
         <li> <p><a href="https://cecytem.edomex.gob.mx/mision_vision_objetivos">link adicional</a></p></li>  <!--Flecha indicando subtema-->
        
       </li>
       <li>
       <p><a href="index_a.php">VISITANTES</a></p>  <!--Flecha indicando subtema-->
        
        </li>
       
<li>
          <p><a href="">SERVICIOS</a></p>  <!--Flecha indicando subtema-->
        <ul>
        <li><a href="presentables.html">PRESENTABLES</a></li>
        
      </ul>
       </li>
      
        
     </nav> 
     <center> 
     
      
   </body>
   </html>
