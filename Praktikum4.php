<?php

//pewarisan (inheritence)
/*
// parent class
class manusia{
    public $nama_saya;

    function berinama($saya){
        $this->nama_saya=$saya;
    }
}

//child class
class teman extends manusia{
    public $nama_teman;

    function berinamateman($teman){
        $this->nama_teman =$teman;
    }
}

//instansiasi
$malasngoding = new teman;
// memberi isi pada method
$malasngoding -> berinama (" siska ");
$malasngoding -> berinamateman (" Diki ");

//menampilkan hasil
echo "Nama saya :" . $malasngoding -> nama_saya."<br/>";
echo "Nama teman:".  $malasngoding -> nama_teman."</br>";
*/
//parent

class manusia{
    public $nama_saya;

    function berinama($saya){
        $this->nama_saya=$saya;
    }
}

//child class
class teman extends manusia{
    public $nama_teman;

    function berinamateman($teman){
        $this->nama_teman =$teman;
        return $teman*1;
    }
}

class parttime extends manusia{
    public $level;

    function gajipartime($part){
        $this->level=$part*0.5;
      
    }
}



//instansiasi
$malasngoding = new teman;
$rajinngoding = new parttime;
// memberi isi pada method


//menampilkan hasil





 $no =  $_POST['no'];
 $name = $_POST ['name'];
 $tanggal = $_POST ['tanggal'];
 $jeniskelamin = $_POST ['jeniskelamin'];
 $level = $_POST['level'];
 $status = $_POST['status'];
 $gaji = $_POST ['gaji'];


for ($i=0; $i<3;$i++){
    echo "Nama : ". "$name[$i]"."</br>";
    echo"Tempat tanggal lahir: "."$tanggal[$i]"."<br/>";
    echo"Jenis kelamin: "."$jeniskelamin[$i]" ."<br/>";
    echo"Level: "."$level[$i]" ."<br/>";
    echo"Status: "."$status[$i]" ."<br/>";
    echo"Gaji: "."$gaji[$i]" ."<br/>";

    if ($status[$i]=="Fulltime"){
        $malasngoding -> berinama ("$name[$i]");
        $malasngoding -> berinamateman (" $gaji[$i]");
        echo "Karyawan dengan nama " . $malasngoding -> nama_saya.", ";
        echo "gaji anda sebesar".  $malasngoding -> nama_teman."</br><br/><br/>";
    } else if($status[$i]=="Parttime"){
        $rajinngoding -> berinama ("$name[$i]");
        $rajinngoding -> gajipartime ("$gaji[$i]");
        echo "Karyawan dengan nama " . $rajinngoding -> nama_saya.", ";
        echo "gaji anda sebesar ".  $rajinngoding -> level."</br><br/><br/>";
    }
    else {
        echo "gaji ditunda";
    }
    
}



 
?>