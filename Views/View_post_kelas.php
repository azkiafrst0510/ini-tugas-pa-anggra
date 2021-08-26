<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<form action="../Config/Routes.php?function=create_kelas" method="POST">
<input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
    <tr>
        <td>id_kelas</td>
        <td><input type="text" name="id_kelas"></td>
    </tr>
    <tr>
        <td>nama_kelas</td>
        <td><input type="text" name="nama_kelas"></td>
    </tr>
    <tr>
        <td>kompetensi_keahlian</td>
        <td>
            <select name="kompetensi_keahlian">
                <option value="rpl">rekayasa perangkat lunak</option>
                <option value="tkj">teknik komputer dan jaringan</option>
                 <option value="tflm">teknik fabrikasi logam manufaktur</option>
                <option value="tkro">teknik kendaraan ringan otomotif</option>
            </select>
        </td>
    </tr>
    <tr>
       
        
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>
