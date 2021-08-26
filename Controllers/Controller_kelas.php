<?php

// Class pegawai (CRUD pegawai)
class Controller_kelas{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $Mkelas;

     var $id;
     var $kelas;
     var $kompetensi_keahlian;

     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module pegawai
            include '../Models/Model_kelas.php';
            $this->Mkelas = new Model_kelas();
        }




    // Method untuk memasukan data ke dalam table
    function POSTData ( ){

        // perintah POST data
        $this->Mkelas->POST($id,$kelas,$kompetensi_keahlian);

    }



    
    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        return $this->Mkelas->GET();
        

    }


    // Method untuk mengambil data seleksi dari table
    function GetData_Where ($nip){

        // perintah GET data
        return $this->Mkelas->GET_Where($nip);
    }




    // Method untuk memasukan data ke dalam table
    function PUTData ($id,$kelas,$kompetensi_keahlian){

        // perintah PUT data
        $this->Mkelas->PUT($id,$kelas,$kompetensi_keahlian);

    }




    // Method untuk menghapus data dari table
    function DELETEData ($id){

        // perintah DELETE data
        $this->Mkelas->DELETE($id);

    }


 


}


?>