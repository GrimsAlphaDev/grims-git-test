
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $result = [
        'name' => $name,
        'email' => $email,
        'message' => $message
    ];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Git Remote</title>
</head>
<body>

    <h1>HELLO</h1>

    <form action="" method="post">
    <label for="">Masukan Nama</label>
    <input type="text" name="name"><br>

    <label for="">Masukan Email</label>
    <input type="email" name="email"><br>

    <label for="">Masukan Pesan</label>
    <input type="text" name="message"><br>

    <button type="submit" name="submit">Kirim</button>

    </form>



</body>
</html>

<?php if (isset($result)) : ?>

    <h1>Hasil</h1>
    <label for=""> Nama Anda : <?= $result['name'] ?></label><br>
    <label for=""> Email Anda : <?= $result['email'] ?></label><br>
    <label for=""> Pesan Anda : <?= $result['message'] ?></label><br>


<?php endif ?>