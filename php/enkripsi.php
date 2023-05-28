<!-- NOTES PROGRAM INI TIDAK BOLEH MENGGUNAKAN SPASI DALAM PENGISIAN NILAI NYA-->
<?php
$pesan=$_POST["pesan"];
$kunci=$_POST["kunci"];
if($pesan==null || $kunci==null){
    error_reporting(0);
     
    $hasil="MAAF HARAP ISI PANEL PESAN DAN KUNCI TERLEBIH DAHULU";
}


else{
error_reporting(0);
 
$pesan=strtolower($pesan);
$kunci=strtolower($kunci);
$perbedaan=0;
if(strlen($kunci)<strlen($pesan)){
  $perbedaan=strlen($pesan)-strlen($kunci);
  for($i=0;$i<$perbedaan;$i++){
    $kunci=$kunci.$kunci[$i];

}
}
elseif(strlen($kunci)>strlen($pesan)){
    $perbedaan=strlen($kunci)-strlen($pesan);
    for($i=0;$i<$perbedaan;$i++){
        $pesan=$pesan.$pesan[$i]; 
}
}
else if(strlen($kunci)===strlen($pesan)){
    $perbedaan=0;
}


$key = array(
 'z' => '25',
 'y' => '24',
 'x' => '23',
 'w' => '22',
 'v' => '21',
 'u' => '20',
 't' => '19',
 's' => '18',
 'r' => '17',
 'q' => '16',
 'p' => '15',
 'o' => '14',
 'n' => '13',
 'm' => '12',
 'l' => '11',
 'k' => '10',
 'j' => '9',
 'i' => '8',
 'h' => '7',
 'g' => '6',
 'f' => '5',
 'e' => '4',
 'd' => '3',
 'c' => '2',
 'b' => '1',
 'a' => '0',
);
$key2=array(
'25' =>'z',
'24' =>'y',
'23' =>'x',
'22' =>'w',
'21' =>'v',
'20' =>'u',
'19' =>'t',
'18' =>'s',
'17' =>'r',
'16' =>'q',
'15' =>'p',
'14' =>'o',
'13' =>'n',
'12' =>'m',
'11' =>'l',
'10' =>'k',
'9'  =>'j',
'8'  =>'i',
'7'  =>'h',
'6'  =>'g',
'5'  =>'f',
'4'  =>'e',
'3'  =>'d',
'2'  =>'c',
'1'  =>'b',
'0'  =>'a',
);

$outputpesan = str_replace(array_keys($key), $key, $pesan);
$outputkey=str_replace(array_keys($key), $key, $kunci);

for($i=0;$i<strlen($pesan);$i++){
    $output=str_replace(array_keys($key), $key, $pesan[$i])+str_replace(array_keys($key), $key, $kunci[$i]);
    if($output>25){
    $sisa=$output-26;
    $output=0+$sisa;
    }
    $outputs[]=$output;
}
$ciphertext=str_replace(array_keys($key2), $key2, $outputs);
$kalimat = implode($ciphertext);
$hasil=strtoupper($kalimat);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hasil Enkripsi</title>
</head>
<body>
<br><br><br><br><br>
<div class="container">
<h1>Hasil Teks Enkripsi Vignere Chiper</h1>
<br><br><br><br><br><br><br>
    <div class="content">
    <h3><?php echo($hasil)  ?></h3>
    </div>
    
</div>
</body>
</html>