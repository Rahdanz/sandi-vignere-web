<!-- NOTES PROGRAM INI TIDAK BOLEH MENGGUNAKAN SPASI DALAM PENGISIAN NILAI NYA-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Encrypt Vignere Chiper</title>
</head>
<body>
<br><br><br><br><br>
<div class="container">
<h1>Mesin Enkripsi Vignere Chiper</h1>
<br><br><br>
<!-- menentukan arah data dikirim serta submit akan langsung menuju ke file tersebut -->
<form action="enkripsi.php" method="post">
<div class="textarea">
        <div class="textkunci">
        <h3>Masukan Kunci</h3>
        <textarea name="kunci" cols="30" rows="8"></textarea>
        </div>
        <div class="textpesan">
        <h3>Masukan Plaintext</h3>
        <textarea name="pesan" cols="30" rows="8"></textarea>
        </div>
</div>        
        <br>
        <input class="tombol" type="submit" value="Encrypt" />
</div>

</form>
</body>
</html>