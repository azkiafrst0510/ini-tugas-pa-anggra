<?php 

include '../Controllers/Controller_kelas.php';
 // Membuat Object dari Class kelas
$kelas = new Controller_kelas();
$Getkelas = $kelas->GetData_All();

// untuk mengecek di object $kelas ada berapa banyak Property
// echo var_dump($kelas);
?>


        <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
        <h2>CRUD and CSRF</h2>
        <h3>Table kelas</h3> <h3><a href="View_post_kelas.php">Add Data</a></h3>


        <table border="1">
            <tr>
                <th>No</th>
                <th>id</th>
                <th>kelas</th>
                <th>kompetensi keahlian</th>

            </tr>
            <?php
                // Decision validation variabel
                if(isset($Getkelas))
                {
                        $no = 1;
                        foreach($Getkelas as $Get){
                           
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['id_kelas']; ?></td>
                            <td><?php echo $Get['nama_kelas']; ?></td>
                            <td><?php echo $Get['kompetensi_keahlian']; ?></td>
                           
                            <td>
                                <a href="../Views/View_put_kelas.php?id_kelas=<?php echo $Get['id_kelas'] ?>">view</a>
                                <a href="../Config/Routes.php?function=delete_kelas&id_kelas=<?php echo $Get['id_kelas'] ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>