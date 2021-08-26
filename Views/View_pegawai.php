-<?php 

include '../Controllers/Controller_kelas.php';
 // Membuat Object dari Class kelas
$kelas


 = new Controller_kelas();
$Getkelas = $kelas->GetData_All();

// untuk mengecek di object $kelas ada berapa banyak Property
//echo var_dump($kelas);
?>


        <h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
        <h2>CRUD and CSRF</h2>
        <h3>Table kelas</h3> <h3><a href="View_post_kelas.php">Add Data</a></h3>


        <table border="1">
            <tr>
                <th>id_kelas</th>
                <th>nama_kelas</th>
                <th>kompetensi_keahlian</th>
                
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
                            <td><?php echo $Get['nip']; ?></td>
                            <td><?php echo $Get['nama']; ?></td>
                            <td>
                                <?php
                                 if($Get['jns_kel']=="L")
                                    {
                                        echo "Laki-Laki";
                                    }
                                    else{
                                        echo "Perempuan";
                                    }
                                ?>
                            </td>
                            <td><?php echo $Get['tgl_lahir']; ?></td>
                            <td>
                                <?php
                                 if($Get['status']=="B")
                                    {
                                        echo "Belum Menikah";
                                    }
                                    else{
                                        echo "Menikah";
                                    }
                                ?>
                            </td>
                            <td><?php echo $Get['mulai_kerja']; ?></td>
                            <td>
                                <a href="../Views/View_put_pegawai.php?nip=<?php echo $Get['nip'] ?>">view</a>
                                <a href="../Config/Routes.php?function=delete&nip=<?php echo $Get['nip'] ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>