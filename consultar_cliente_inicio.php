
<!DOCTYPE html>
<head>
     

     

 <meta charset="utf-8">
        <LINK REL=StyleSheet href="css/estilo.css" TYPE="text/css">

                          <title >Consultar participante</title>


</head>

<header>
    <center>  <nav>
        <ul>
            <!-- <li><a href="insertar_participante.php">Registrar participante</a></li>
             <li><a href="alta_participante.php">Dar de alta participante</a></li> -->
               
                <!--<li><a href="insertar_ficha.php">Registrar ficha</a></li> -->
                 <li><a href="consultar_participante_inicio.php">Consultar usuario</a></li>

        </ul>
              
              </center>
            </nav>
</header>

<section class="contenido wrapper">


<body>

   
      
       <center><h1><font > Consultar usuario</font></h1></center>
    <br> 
    <div align="center">    
    <form method="POST" action="consultar_cliente.php"> 
        <table> 
            <tr> 
                <td><label for="direc"><font> ingrese el correo electronico  </font></label></td>
                <td><input type="text" name="usuario" required="true" autofocus="true" ></td> 
                <td> <input type="submit" value="consultar" class="button"></td>
            </tr> 
              </table>
        </form> 
   
</div>








  </body>
</section>
</html>