<?php require_once "../data.php" ?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Apel - Tentang Buah</title>
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
                <h2>Apel</h2>
                
                <!-- Image -->
                <img src="../Image/<?= $image[1] ?>">
                
                <!-- Paragraf 1 -->
                <p><strong>Apel</strong> adalah jenis buah-buahan, atau buah yang dihasilkan dari pohon buah apel. Buah apel biasanya berwarna merah kulitnya jika masak dan (siap dimakan), namun bisa juga kulitnya berwarna hijau atau kuning. Kulit buahnya agak lembek, daging buahnya keras. Buah ini memiliki beberapa biji didalamnya.</p>

                <!-- Paragraf 2 -->
                <p>Orang mulai pertama kali menanam apel di Asia Tengah. Kini apel berkembang dibanyak daerah di dunia yang suhu udaranya lebih dingin. Nama ilmiah pohon apel dalam bahasa latin ialah <em>Malus domestica</em>. Apel budidaya adalah keturunan dari <em>Malus sieversii</em> asal Asia Tengah, dengan sebagian genom dari <em>Malus sylvestris</em> (apel hutan/apel liar).</p>

                <!-- Paragraf 3 -->
                <p>Kebanyakan apel bagus dimakan mentah-mentah (tak dimasak), dan juga digunakan bnayak jenis makanan pesta. Apel dimasak sampai lembek untuk dibuat saus apel. Apel juga dibuat untuk menjadi minuman sari buah apel. </p>
                
                <!-- Teks Heading 2 -->
                <h2>Khasiat Apel</h2>
                
                <!-- Ordered List -->
                <ol>
                    <?php for( $i = 0; $i < count( $khasiat["apel"] ); ++$i ) : ?>
                         <li>
                            <?= $khasiat["apel"][$i] ?>
                         </li>
                    <?php endfor; ?>
                </ol>
                
                <!-- Teks Heading 2 -->
                <h2>Daftar Harga</h2>
                
                <!-- Table -->
                <table>
                    <!-- Table Heading -->
                    <thead>
                        <tr>
                            <th rowspan="2"> Jenis Apel </th>
                            <th colspan="2"> Harga </th>
                        </tr>

                        <tr>
                            <th>Per Kilo</th>
                            <th>Per Biji</th>
                        </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        <?php for( $row = 0; $row < count($harga["apel"]); ++$row ) : ?>
                            <tr>
                                <?php for( $col = 0; $col < count( $harga["apel"][$row] ); ++$col ) : ?>
                                    <td>
                                        <?= $harga["apel"][$row][$col] ?>
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