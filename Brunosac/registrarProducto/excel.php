<?php 
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=reporte_registro.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);
?>




<table>
            
            <tr>
            <th>idRegPro</th>
            <th>Codigo</th>
            <th>Nombre</th>
            
        </tr>
           
        <?php

include('../conexion/db.php');
$sql="select * from registrpProducto";
$result=mysqli_query($conexion,$sql);
?>
        <?php while($mostrar=mysqli_fetch_array($result)){
        ?>
<tr>
  <td><?php echo $mostrar['idRegPro']?></td>
  <td><?php echo $mostrar['codigo']?></td>
  <td><?php echo $mostrar['nombre']?></td>
  
</tr>
<?php
        }
?>

      </tbody>
</table>

