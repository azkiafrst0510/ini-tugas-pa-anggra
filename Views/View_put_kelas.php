<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_kelas.php';
// Membuat Object dari Class kelas
$kelas = new Controller_kelas();
$Getkelas = $kelas->GetData_Where($_GET['id_kelas']);

?>



<?php
    foreach($Getkelas as $Get){
?>

<form action="../Config/Routes.php?function=put" method="POST">
<input type="hidden" name="csrf_token" value="<?php echo CreateCSRF();?>"/>
<table border="1">
        <input type="hidden" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>">
    <tr>
        <td>nama_kelas</td>
        <td><input type="text" name="nama_kelas" value="<?php echo $Get['nama_kelas']; ?>"></td>
    </tr>
    <tr>
        <td>kompetensi_keahlian</td>
        <td>
            <select name="kompetensi_keahlian">

                <!-- Logic combo Get database -->
                <option value="<?php echo $Get['kompetensi_keahlian']; ?>">
                <?php echo $Get['kompetensi_keahlian']; ?>
                </option>
                <!-- Logic combo Get database -->



                <option value="rpl">rekayasa perangkat lunak</option>
                <option value="tkj">teknik komputer dan jaringan</option>
                <option value="tflm">teknik fabrikasi logam manufaktur</option>
                <option value="tkro">teknik kendaraan ringan otomatis</option>
            </select>
        </td>
    </tr>
    <tr>
        
        <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
    </tr>
</table>
</form>

<?php
    }
?>