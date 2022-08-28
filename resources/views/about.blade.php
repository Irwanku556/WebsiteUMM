<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My About</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar">
        <h2 class="brand">MyWebsite</h2>
        <ul class="menu">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/blog">Posts</a>
            </li>
        </ul>
    </nav>
    <div class="tentang">
        <h1>Halaman About</h1>
        <p>
            Fakultas Teknik
        </p>
        <ul>
            <li>Nama : <?php echo $Name; ?></li>
            <li>Jurusan : <?php echo $Jurusan; ?></li>
            <li>NIM : <?php echo $NIM; ?></li>
            <img src="img/<?php echo $image; ?>" alt="<?php echo $Name; ?> " width="200">
        </ul>
        <ul>
            <li>Nama : <?php echo $Name1; ?></li>
            <li>Jurusan : <?php echo $Jurusan1; ?></li>
            <li>NIM : <?php echo $NIM1; ?></li>
            <img src="img/<?php echo $image1; ?>" alt="<?php echo $Name1; ?>" width="300">
        </ul>
        <ul>
            <li>Nama : <?php echo $Name2; ?></li>
            <li>Jurusan : <?php echo $Jurusan2; ?></li>
            <li>NIM : <?php echo $NIM2; ?></li>
            <img src="img/<?php echo $image2; ?>" alt="<?php echo $Name2; ?>" width="300">
        </ul>
        <ul>
            <li>Nama : <?php echo $Name3; ?></li>
            <li>Jurusan : <?php echo $Jurusan3; ?></li>
            <li>NIM : <?php echo $NIM3; ?></li>
            <img src="img/<?php echo $image3; ?>" alt="<?php echo $Name3; ?>" width="300">
        </ul>
        <ul>
            <li>Nama : <?php echo $Name4; ?></li>
            <li>Jurusan : <?php echo $Jurusan4; ?></li>
            <li>NIM : <?php echo $NIM4; ?></li>
            <img src="img/<?php echo $image4; ?>" alt="<?php echo $Name4; ?>" width="300">
        </ul>


    </div>
    <footer class="bagian_akhir">
        <h3 class="bagian_akhir">MY UMM</h3>
    </footer>

</body>

</html>
