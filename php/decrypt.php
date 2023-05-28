<!-- NOTES PROGRAM INI TIDAK BOLEH MENGGUNAKAN SPASI DALAM PENGISIAN NILAI NYA-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Decrypt Vignere Chiper</title>
</head>
<body>
<br><br><br><br><br>
<div class="container">
<h1>Mesin Dekripsi Vignere Chiper</h1>
<br><br><br>
<form action="deskripsi.php" method="post">
<div class="textarea">
        <div class="textkunci">
        <h3>Masukan Kunci</h3>
        <textarea name="kunci" cols="30" rows="8"></textarea>
        </div>
        <div class="textpesan">
        <h3>Masukan Ciphertext</h3>
        <textarea name="pesan" cols="30" rows="8"></textarea>
        </div>
</div>        
        <br>
        <input class="tombol" type="submit" value="Decrypt" />
</div>

</form>
</body>
</html>











 <!-- for($i=0;$i<count($outputs);$i++){
     $ciphertext[]=str_replace(array_keys($key2), $key2, $outputs[$i]);
 }
 print($ciphertext);

$outputss=$outputs;
echo($outputss);
$ciphertext=str_replace(array_keys($key2), $key2, $outputs);
print($ciphertext);
 $kalimat = implode(",",$ciphertext);
 echo $kalimat;
 echo("ini hasil enkripsi $kalimat"); -->
