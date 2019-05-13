

<!DOCTYPE html>
<head>
     

     

 <meta charset="utf-8">
        <LINK REL=StyleSheet href="css/estilo.css" TYPE="text/css">

                          <title >consulta</title>


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
<?PHP
 /* Establecer la conexiÃ³n y seleccionar los datos de la tabla */
include('config.php');

 $codigo=$_REQUEST["usuario"]; 
 if ($codigo){    
 $consulta = "SELECT * FROM list_app WHERE usuario= '$codigo' ";
 $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
 
/*  MOstrar resultados en un formulario */
  $codigo = $_REQUEST["usuario"];
  

 if( mysqli_num_rows($resultado) >0){ 



 while ($fila =mysqli_fetch_array($resultado))
  {
   extract($fila);   
   
      $drive=$fila['drive'];
      $skype=$fila['skype'];
      $hangoust=$fila['hangoust'];
      $maps=$fila['maps'];
      $remote=$fila['remote'];
      $gmail=$fila['gmail'];
      $keep=$fila['keep'];
      $fotos=$fila['fotos'];
      $fecha=$fila['date_update'];
?>
<form id="frmdatos" name="frmdatos" method="POST" action="destino_participante.php" class="pure-form">
  <table >
    <tr class="spaceUnder">
                        <td><label><font> usuario</font></label></td>
                        <td><input name="usuario"  type="text" readonly="true"  value="<?php echo $fila['usuario']; ?>" >  </td>
                    </tr>
                      

                                <tr class="spaceUnder"> 
                        <td><label><font> drive</font></label> </td>


                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $drive ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                        if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);?>       
                        <td><input name="app" type="text"  readonly="true" value="<?php echo $fila['estado']; ?>" >  </td>                 
                         <?php   }
                       }  ?>
                        </tr>

                                <tr class="spaceUnder"> 
                        <td><label><font> skype</font></label> </td>


                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $skype ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                        if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);?>       
                        <td><input name="app" type="text"  readonly="true" value="<?php echo $fila['estado']; ?>" >  </td>                 
                         <?php   }
                       }  ?>
                        </tr>

                                <tr class="spaceUnder"> 
                        <td><label><font> hangoust</font></label> </td>


                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $hangoust ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                        if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);?>       
                        <td><input name="app" type="text"  readonly="true" value="<?php echo $fila['estado']; ?>" >  </td>                 
                         <?php   }
                       }  ?>
                        </tr>

                                <tr class="spaceUnder"> 
                        <td><label><font> maps</font></label> </td>


                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $maps ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                        if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);?>       
                        <td><input name="app" type="text"  readonly="true" value="<?php echo $fila['estado']; ?>" >  </td>                 
                         <?php   }
                       }  ?>
                        </tr>
                        

                             <tr class="spaceUnder"> 
                        <td><label><font> remote</font></label> </td>


                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $remote ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                        if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);?>       
                        <td><input name="app" type="text"  readonly="true" value="<?php echo $fila['estado']; ?>" >  </td>                 
                         <?php   }
                       }  ?>
                        </tr>
                             <tr class="spaceUnder"> 
                        <td><label><font> gmail</font></label> </td>


                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $gmail ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                        if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);?>       
                        <td><input name="app" type="text"  readonly="true" value="<?php echo $fila['estado']; ?>" >  </td>                 
                         <?php   }
                       }  ?>
                        </tr>
                  
                       <tr class="spaceUnder"> 
                        <td><label><font> keep</font></label> </td>


                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $keep ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                        if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);?>       
                        <td><input name="app" type="text"  readonly="true" value="<?php echo $fila['estado']; ?>" >  </td>                 
                         <?php   }
                       }  ?>
                        </tr>
                  
                       <tr class="spaceUnder"> 
                        <td><label><font> fotos</font></label> </td>


                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $fotos ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                        if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);?>       
                        <td><input name="app" type="text"  readonly="true" value="<?php echo $fila['estado']; ?>" >  </td>                 
                         <?php   }
                       }  ?>
                        </tr>

                         <td><label><font> ultima actualización</font></label> </td>
                         <td><input name="fecha"  type="text" readonly="true"  value="<?php echo $fecha; ?>" >  </td>
                        </tr>
                  
                  
         




























                         <?php
  
  }
}}
?>


