<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <table>
    <thead>
                <tr>
                  <th rowspan="2" align="center"><small>Cabang</small></th>
                  <th rowspan="2" align="center"><small>Tim</small></th>
                  <th rowspan="2" align="center"><small>Sub</small></th>
                  <th rowspan="2" align="center"><small>Nama</small></th>
                  <th rowspan="2" align="center"><small>Demo</small></th>
                  <th colspan="3" align="center"><small>Unit</small></th>
                  <th colspan="3" align="center"><small>Rupiah</small></th>
                  <!-- <th><small>Unit Tunai</small></th> -->
                  <!-- <th><small>Unit Angsuran</small></th> -->
                  <!-- <th><small>Unit Total</small></th> -->
                  <!-- <th><small>Rupiah Tunai</small></th> -->
                  <!-- <th><small>Rupiah Angsuran</small></th> -->
                  <!-- <th><small>Rupiah Total</small></th> -->
                </tr>
                <tr>
                  <th><small>Tunai</small></th>
                  <th><small>Angsuran</small></th>
                  <th><small>Total</small></th>
                  <th><small>Tunai</small></th>
                  <th><small>Angsuran</small></th>
                  <th><small>Total</small></th>
                </tr>
                </thead>
    <tbody>
                <?php foreach($list_penjualan as $penjualan){?>
                <tr>
                  <td><?php echo $penjualan->id_cabang;?></td>
                  <td><?php echo $penjualan->id_karyawan;?>
                  </td>
                  <td><?php echo $penjualan->id_karyawan;?>
                  </td>
                  <td><?php echo $penjualan->id_karyawan;?>
                  </td>
                  <td><?php echo $penjualan->demo;?>
                  </td>                  <td><?php echo $penjualan->demo;?>
                  </td>                  <td><?php echo $penjualan->demo;?>
                  </td>                  <td><?php echo $penjualan->demo;?>
                  </td>                  <td><?php echo $penjualan->demo;?>
                  </td>                  <td><?php echo $penjualan->demo;?>
                  </td>                  <td><?php echo $penjualan->demo;?>
                  </td>
                </tr>
                <?php }?>
                </tbody>
    <tfoot>
    </tfoot>
  </table>

</body>
</html>