<?php
  require ('../config/conexao.php');
  if(ISSET($_POST['buscar'])){
    $date1 = date("Y-m-d", strtotime($_POST['date1']));
    $date2 = date("Y-m-d", strtotime($_POST['date2']));
    $query=mysqli_query($Conexao, "SELECT * FROM reserva WHERE fechar BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
    $row=mysqli_num_rows($query);
    if($row>0){
      while($fetch=mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $cont; $cont++; ?></td>
    <td><?php echo $resultado['nomes']; ?></td>
    <td><?php echo $resultado['quantidade']; ?></td>
    <td><?php echo $resultado['fechar']; ?></td>
    <td><?php echo $resultado['tipo']; ?></td>
    <td><?php echo $resultado['hora']; ?></td>
    <td><?php echo $resultado['status']; ?>&nbsp; &nbsp; &nbsp;<a href="atualizarstatus.php?id=<?php echo $resultado['idr']?>&estado=<?php echo $resultado['status'];?>" class="btn btn-primary"><i class="fas fa-marker"></i></a></td>
    <td>
        <a href="detallesReserva.php?id=<?php echo $resultado['idr']?>" class="btn btn-primary"><i class="fas fa-list"></i></a>
        <a href="https://api.whatsapp.com/send?phone=51<?php echo $resultado['numero']?>&text=Bom%20dia%20, <?php echo $resultado['nomes']?>%20<?php echo $resultado['apelidos'] ?>%20você
%20tem%20uma%20reserva%20dia%20hoje%20as%20<?php echo $resultado['hora']?>" class="btn btn-success"><i class="fas fa-share"></i></a>
    </td>
</tr>
    
<?php
      }
    }else{
      echo'
      <tr>
        <td colspan = "4"><center>Registros no Existen</center></td>
      </tr>';
    }
  }else{
    $query=mysqli_query($conn, "SELECT * FROM reserva") or die(mysqli_error());
    while($fetch=mysqli_fetch_array($query)){
?>
<tr>
    <td><?php echo $cont; $cont++; ?></td>
    <td><?php echo $resultado['nomes']; ?></td>
    <td><?php echo $resultado['quantidade']; ?></td>
    <td><?php echo $resultado['fechar']; ?></td>
    <td><?php echo $resultado['tipo']; ?></td>
    <td><?php echo $resultado['hora']; ?></td>
    <td><?php echo $resultado['status']; ?>&nbsp; &nbsp; &nbsp;<a href="atualizarstatus.php?id=<?php echo $resultado['idr']?>&estado=<?php echo $resultado['status'];?>" class="btn btn-primary"><i class="fas fa-marker"></i></a></td>
    <td>
        <a href="detallesReserva.php?id=<?php echo $resultado['idr']?>" class="btn btn-primary"><i class="fas fa-list"></i></a>
        <a href="https://api.whatsapp.com/send?phone=51<?php echo $resultado['numero']?>&text=Bom%20dia%20, <?php echo $resultado['nomes']?>%20<?php echo $resultado['apelidos'] ?>%20você
%20tem%20uma%20reserva%20dia%20hoje%20as%20<?php echo $resultado['hora']?>" class="btn btn-success"><i class="fas fa-share"></i></a>
    </td>
</tr>
<?php
    }
  }
?>