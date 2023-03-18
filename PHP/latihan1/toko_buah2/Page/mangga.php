<?php require_once "../data.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mangga - Tentang Buah</title>
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
            
            <!-- Blok Section -->
            <section>
                <!-- Teks Heading 2 -->
                <h2>Mangga</h2>
                
                <!-- Image -->
                <img src="../Image/<?= $image[3] ?>">
                
                <!-- Paragraf 1 -->
                <p> <b>Mangga</b> atau <b>mempelam</b> adalah nama sejenis buah, demikian pula nama pohonnya. Mangga termasuk ke dalam genus <i>Mangifera</i>, yang terdiri dari 35-40 anggota dari famili Anacardiaceae.</p>
                    
                <p>Nama "<i>mangga</i>" berasal dari bahasa Tamil, <i>mankay</i>, yang berarti <i>man</i> "pohon mangga" + <i>kay</i>  "buah". Kata ini dibawa ke Eropa oleh orang-orang Portugis dan diserap menjadi <i>manga</i> (bahasa Portugis), <i>mango</i> (bahasa Spanyol dan Inggris) dan lainnya.</p>

                <p> Mangga berasal dari daerah di sekitar perbatasan India dengan Burma, dan mangga telah menyebar ke Asia Tenggara sekitar 1500 tahun yang silam. Buah ini dikenal pula dalam berbagai bahasa daerah, seperti <i>pelem</i> atau <i>poh</i> (Jw.), Poh (Bl.), dan Paok (Sas.)</p>
                
                <!-- Teks Heading 2 -->
                <h2>Khasiat Mangga</h2>
                
                <!-- Ordered List -->
                <ol>
                    <?php for( $i = 0; $i < count( $khasiat["mangga"] ); ++$i ) : ?>
                        <li>
                            <?= $khasiat["mangga"][$i] ?>
                        </li>
                    <?php endfor ?>
                </ol>

                <!-- Teks Heading 2 -->
                <h2>Daftar Harga</h2>

                <!-- Table -->
                <table>
                    <!-- Table Heading -->
                    <thead>
                        <tr>
                            <th rowspan="2"> Jenis Mangga </th>
                            <th colspan="2"> Harga </th>
                        </tr>

                        <tr>
                            <th>Per Kilo</th>
                            <th>Per Biji</th>
                        </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        <?php for( $row = 0; $row < count($harga["mangga"]); ++$row ) : ?>
                            <tr>
                                <?php for( $col = 0; $col < count( $harga["mangga"][$row] ); ++$col ) : ?>
                                    <td>
                                        <?= $harga["mangga"][$row][$col] ?>
                                    </td>
                                <?php endfor; ?>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </section>

            <!-- Blok Footer -->
            <footer>
                <p><i class="fa fa-copyright" aria-hidden="true">created by: smkrevit.com</i></p>
            </footer>
        </div>
    </div>
</body>
</html>