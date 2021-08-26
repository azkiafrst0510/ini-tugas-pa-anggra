<?php

  // Memanggil fungsi dari CSRF
  include('Csrf.php');


include '../Controllers/Controller_kelas.php';
 // Membuat Object dari Class kelas
$db = new Controller_kelas();

// Membuat variabel dari Get URL
$function = $_GET['function'];

// Decision variabel create
if($function == "create"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['nip'],
            $_POST['nama'],
            $_POST['jns_kel'],
            $_POST['tgl_lahir'],
            $_POST['status'],
            $_POST['mulai_kerja']
        );
    }
    header("location:../Views/View_kelas.php");
}
// Decision variabel put
elseif($function == "put"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['nip'],
            $_POST['nama'],
            $_POST['jns_kel'],
            $_POST['tgl_lahir'],
            $_POST['status'],
            $_POST['mulai_kerja']
        );   
    }
    header("location:../Views/View_pegawai.php");
}
// Decision variabel delete
elseif($function == "delete"){
    $db->DELETEData($_GET['nip']);
    header("location:../Views/View_pegawai.php");
}

// untuk kelas

// Decision variabel create
if($function == "create_kelas"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id'],
            $_POST['kelas'],
            $_POST['kompetensi_keahlian'],
        );
    }
    header("location:../Views/View_kelas.php");
}
// Decision variabel put
elseif($function == "put_kelas"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id'],
            $_POST['kelas'],
            $_POST['kompetensi_keahlian'],
         
        );   
    }
    header("location:../Views/View_kelas.php");
}
// Decision variabel delete
elseif($function == "delete_kelas"){
    $db->DELETEData($_GET['nip']);
    header("location:../Views/View_kelas.php");
}


?>