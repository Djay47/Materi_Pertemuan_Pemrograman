<?php require_once "data.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home - Tentang Buah</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <!-- Blok Header -->
            <header>
                <!-- Image -->
                <img src="Image/<?= $image[0] ?>">
                
                <!-- Teks Heading 1 -->
                <h1><?= $navbar[0] ?></h1>

                <!-- Unordered List -->                   
                <nav>
                    <ul>
                        <li> <a href="index.php"><?= $navbar[1] ?></a> </li>
                        <li> <a href="#"><?= $navbar[2] ?></a>
                            <ul>
                                <li> <a href="page/apel.php"><?= $navbar[3] ?></a> </li>
                                <li> <a href="page/jeruk.php"><?= $navbar[4] ?></a> </li>
                                <li> <a href="page/mangga.php"><?= $navbar[5] ?></a> </li>
                                <li> <a href="page/pisang.php"><?= $navbar[6] ?></a> </li>
                            </ul>
                        </li>
                        <li> <a href="page/kontak.php"><?= $navbar[7] ?></a> </li>
                    </ul>
                </nav>
            </header>

            <!-- Blok Section -->
            <section>
                <!-- Teks Heading 2-->
                
                <h2>Definisi</h2>
                
                <!-- Paragraf 1 -->
                <p><strong>Buah</strong> adalah organ pada tumbuhan berbunga yang merupakan perkembangan lanjutan dari bakal buah (ovarium). Buah biasanya membungkus dan melindungi biji. Aneka rupa dan bentuk buah tidak terlepas kaitannya dengan fungsi utama buah, yakni sebagai pemencar biji tumbuhan.</p>

                <!-- Paragraf 2 -->
                <p>Pengertian buah dalam lingkup pertanian (<em>hortikultular</em>) atau pangan adalah lebih luas daripada pengertian buah diatas dan biaanya disebut sebagai <strong>buah-buahan</strong>. Buah dalam pengertian ini tidak terbatas yang terbentuk dari bakal buah, melainkan dapat berasal dari perkembangan organ yang lain. Karena itu, untuk membedakan, buah yang sesuai menurut pengertian botani biasa disebut <strong>buah sejati</strong>.</p>
                
                <!-- Paragraf 3 -->
                <p>Buah sering kali memiliki nilai ekonomi sebagai bahan pangan maupun bahan baku industri karena didalamnya disimpan berbagai macam produk metabolisme tumbuhan, mula dari karbohidat, protein, lemak, vitamin, mineral, alkaloid, hingga, terpena dan terpenoid. Ilmu yang mempelajari segala hal tentnang buah dinamakan <strong>pomologi</strong>. </p>
            </section>

            <!-- Blok Footer -->
            <footer>
                <p><i class="fa fa-copyright" aria-hidden="true">created by: smkrevit.com</i></p>
            </footer>
        </div>
    </div>
</body>
</html>