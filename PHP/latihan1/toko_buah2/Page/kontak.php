<?php require_once "../data.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kontak - Tentang Buah</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <!-- Blok Header -->
            <header>
                <!-- Image -->
                <img src="../Image/<?= $image[0] ?>">
                
                <!-- Teks Heading 1 -->
                <h1><?= $navbar[0] ?></h1>

                <!-- Unordered List -->                   
                <nav>
                    <ul>
                        <li> <a href="../index.php"><?= $navbar[1] ?></a> </li>
                        <li> <a href="#"><?= $navbar[2] ?></a>
                            <ul>
                                <li> <a href="apel.php"><?= $navbar[3] ?></a> </li>
                                <li> <a href="jeruk.php"><?= $navbar[4] ?></a> </li>
                                <li> <a href="mangga.php"><?= $navbar[5] ?></a> </li>
                                <li> <a href="pisang.php"><?= $navbar[6] ?></a> </li>
                            </ul>
                        </li>
                        <li> <a href="kontak.php"><?= $navbar[7] ?></a> </li>
                    </ul>
                </nav>
            </header>

            <section>
                <!-- Teks Heading 2 -->
                <h2>Kontak Kami</h2>

                <!-- Form -->
                <form action="" method="post">
                    <fieldset>
                        <legend>Informasi Pemesanan</legend>
                            
                        <label for="nama">Nama:</label><br>
                        <input type="text" id="nama" placeholder="Nama" required><br><br>
                                
                        <label for="email">Email:</label><br>
                        <input type="email"  id="email" placeholder="Email" required><br><br>
                                
                        <label for="alamat">Alamat:</label><br>
                        <textarea name="alamat" id="alamat"></textarea><br><br>
                                
                        <button type="submit">Kirim</button>
                    </fieldset>
                </form>
            </section>
        </div>
    </div>
</body>
</html>