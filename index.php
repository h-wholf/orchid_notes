<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
    <title>ORCHID NOTES</title>
    <link id="cambiar" rel="stylesheet" href="estilo.css" type="text/css" media="all" />
  </head>
  <script src="script.js" type="text/javascript" charset="utf-8"></script>
  <body class="body">
    <div class="titulo">
      <p><h1>ORCHID NOTES </h1> </p>
    </div>
    
    
    <div class="entrada">
         <?php
#esta es la variable de el nombre de la nota
if(isset($_POST['add'])){
 $nombre = "";
  if (!empty($_REQUEST['name'])){
   $nombre = $_REQUEST['name'];
}
#esta es la variable de la nota de texto
$post = "";
if (!empty($_REQUEST['post'])){
 $post = $_REQUEST['post'];
}
#este bloque guarda el congenido de las variables
$archivo = "notas.txt";
$file = fopen($archivo,"a");
fwrite($file,"<br>".$nombre."<br>"."<code class='code'>".$post."</code>"."<br>");
fclose($file);
}
?>




  <form class="formulario" method="post" action="">
        <br>
<p class="p">nombre de la nota</p>

<input class="notas" type="text" name="name" value="" placeholder="Notas"><br>
<br>
<p class="p">ingres el contenido de la nota</p>
<textarea name="post" placeholder="ESCRIBE EL CONTENIDO DE LA NOTA"></textarea><br>
<input class="boton1" type="submit" name="add" value="AGREGAR CONTENIDO">
</form>
    </div>
    <div class="boton">
      
    
    <button class="boton2" onclick="myFunction()">MOSTRAR NOTAS</button>

     </div>


    
    <div class="contenido" id='ocultar-y-mostrar'>
      <p> <?php
$ar = fopen("notas.txt","r") or die("INGRESA UNA NOTA PARA MOTRAR EL CONTENIDO");
while (!feof($ar)){
 $linea = fgets($ar);
 $lineasalto = nl2br($linea);
 echo $lineasalto;
}
fclose($ar);
?>
      </p>
    </div>
  <div class="eliminar">
      <form class="" action='elimina.php'method="post" accept-charset="utf-8">
        
        <input class="eliminar1" id="boton1" type="submit" name="eli" value="eliminar notas">

      </form>
      
    </div>
  </body>
</html>