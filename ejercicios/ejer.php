
<body>
<br>
<center>
<br>
 <?php

  echo "==INICIO== <br>";
  echo "caso 1.  recorrido_array <br> ";
  echo "caso 2.  area_del_cuadrado <br> ";
  echo "caso 3.  volumen_del_cubo <br> ";
  echo "caso 4.  area_del_circulo <br> ";

  $opcion =4;
 
  switch($opcion){


    case 1:
        require "recorrido_array.php";
        break;

    case 2:
        require  "area_del_cuadrado.php";
        break;
    
    case 3:
        require "volumen_del_cubo.php";
        break; 
    
    case 4:
        require "area_del_circulo.php";
        break;

    default:

 }

 

?>

</body>
</html>