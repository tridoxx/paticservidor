

<!DOCTYPE html>
<head>
     

     

 <meta charset="utf-8">
        <!--<LINK REL=StyleSheet href="css/estilo.css" TYPE="text/css"> -->

                          <title >consulta</title>


</head>

<header>
     <center>  <nav>
        <ul>
            <!-- <li><a href="insertar_participante.php">Registrar participante</a></li>
             <li><a href="alta_participante.php">Dar de alta participante</a></li> -->
               
                <!--<li><a href="insertar_ficha.php">Registrar ficha</a></li> -->
                  <!--<li><a href="consultar_participante_inicio.php">Consultar todos los usuarios</a></li>-->

        </ul>
              
              </center>
            </nav>
</header>

<section class="contenido wrapper">

<body>  
<?PHP
 /* Establecer la conexiÃ³n y seleccionar los datos de la tabla */
include('config.php');
    
 $consulta = "SELECT * FROM list_app ORDER BY date_update DESC ";
 $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
 
/*  MOstrar resultados en un formulario */
  

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


?>  <table border="0" width="30%" height="30%">
    <tr class="spaceUnder">
                        <td><label><font> usuario</font></label></td>
                        <td><label><font> drive</font></label> </td>
                        <td><label><font> skype</font></label> </td>
                        <td><label><font> hangoust</font></label> </td>
                        <td><label><font> maps</font></label> </td>
                        <td><label><font> remote</font></label> </td>
                        <td><label><font> gmail</font></label> </td>
                        <td><label><font> keep</font></label> </td>
                        <td><label><font> fotos</font></label> </td>
                        <td><label><font> ultima actualización</font></label> </td>

                        </tr>
                        <tr>
                        <td><input name="usuario"  type="text" readonly="true"  value="<?php echo $fila['usuario']; ?>" >  </td>
    
                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $drive ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                        if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);
                           if($drive = 0){ ?> <?php echo " <td><input name='app' type='text' style='background-color:red;' readonly='true' "; value='<?php  echo $fila['estado']; ?>'  >  </td>   ";              
                        <?php}
                        else { ?>
                        <td><input name="app" type="text"  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                         <?php }?><?php }} ?>

                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $skype ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                       if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);
                           if ($skype== 0){ ?>
                          <td><input name="app" type="text" style="background-color:red; "  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                        <?php}
                        else { ?>
                        <td><input name="app" type="text"  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                         <?php }?><?php }} ?>
                       

                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $hangoust ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                       if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);
                           if ($hangoust== 0){ ?>
                          <td><input name="app" type="text" style="background-color:red; "  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                        <?php}
                        else { ?>
                        <td><input name="app" type="text"  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                         <?php }?><?php }} ?>
                      
                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $maps ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                       if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);
                           if ($maps== 0){ ?>
                          <td><input name="app" type="text" style="background-color:red; "  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                        <?php}
                        else { ?>
                        <td><input name="app" type="text"  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                         <?php }?><?php }} ?>
                      
                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $remote ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                      if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);
                           if ($remote == 0){ ?>
                          <td><input name="app" type="text" style="background-color:red; "  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                        <?php}
                        else { ?>
                        <td><input name="app" type="text"  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                         <?php }?><?php }} ?>
                       
                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $gmail ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                      if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);
                           if ($gmail== 0){ ?>
                          <td><input name="app" type="text" style="background-color:red; "  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                        <?php}
                        else { ?>
                        <td><input name="app" type="text"  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                         <?php }?><?php }} ?>
              
                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $keep ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                      if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);
                           if ($keep== 0){ ?>
                          <td><input name="app" type="text" style="background-color:red; "  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                        <?php}
                        else { ?>
                        <td><input name="app" type="text"  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                         <?php }?><?php }} ?>

                          <?php  $consulta = "SELECT * FROM estado WHERE  id = $fotos ";
                        $resultado=mysqli_query($con,$consulta) or die ("no se pudo ejecutar la consulta.");
                      if( mysqli_num_rows($resultado) >0){while ($fila =mysqli_fetch_array($resultado)){extract($fila);
                           if ($fotos== 0){ ?>
                          <td><input name="app" type="text" style="background-color:red; "  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                        <?php}
                        else { ?>
                        <td><input name="app" type="text"  readonly="true" value="<?php  echo $fila['estado']; ?>" >  </td>                 
                         <?php }?><?php }} ?>
                         <td><input name="fecha"  type="text" readonly="true"  value="<?php echo $fecha; ?>" >  </td>
                        </tr>
                  
            <?php
  
  }
}
?>


