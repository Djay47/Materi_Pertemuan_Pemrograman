<?php require_once "../data.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pisang - Tentang Buah</title>
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
                <h2>Pisang</h2>

                <!-- Image -->
                <img src="../Image/<?= $image[4] ?>">

                <!-- Paragraph 1 -->
                <p><strong>Pisang</strong> adalah nama umum yang diberikan pada tumbuhan terna berukuran besar dengan daun memanjang dan besar yang tumbuh langsung dari bagian tangkai. Batang pisang bersifat lunak karena terbentuk dari lapisan pelepah yang lunak dan panjang. Batang yang agak keras berada di bagian permukaan tanah. Pisang memiliki daun bertangkai yang berpencar dan mudah robek dengan bagian batang yang meruncing. Ukuran daun pada tiap spesies pisang juga berbeda-beda. Tangkai pisang menghasilkan bunga dalam jumlah yang banyak. Bagian bunga pada pisang akan membentuk buah yang disebut sisir. Buah pisang berkelompok dalam satu bunga majemuk dengan ukuran yang makin ke bawah makin mengecil.</p>
                
                <!-- Paragraph 2 -->
                <p>Dalam taksonomi, pisang termasuk dalam genus Musa dan famili Musaceae. Beragam spesies pisang tersebar di kawasan Malesia. Spesies pisang yang paling banyak dibudidayakan di dunia adalah pisang hutan. Jenis pisang hutan dapat tumbuh di hutan, bukit maupun di dataran rendah. Selain itu, pisang juga dapat ditanam bersama dengan tanaman lain seperti jagung dan ketela pohon.</p>
                
                <!-- Paragraph 3 -->
                <p>Pisang dapat dipanen kapan saja, karena pertumbuhannya yang sesuai dengan segala jenis musim. Kematian pohon pisang hanya terjadi ketika berbuah hanya sekali semasa hidupnya. Buah pisang dapat langsung dimakan atau dimasak terlebih dahulu. Nutrisi di dalam pisang bermanfaat bagi kesehatan tubuh manusia dan dapat pula dibuat sebagai obat tradisional.</p>

                <!-- Paragraph 4 -->
                <p>Di berbagai daerah dan mancanegara pisang memiliki nama-nama khas tersendiri, beberapa diantaranya: <i>gadang</i> atau <i>gedhang</i> (Jawa), <i>biyu</i>(Bali), <i>chawuk</i> atau <i>cau</i> (Sunda), <i>punti</i> (Lampung), <i>unti</i> (Bugis), <i>koyo</i> (Ternate), <i>kula</i> (Banda), <i>uri</i> (Ambon), <i>tema</i> (Seram) dan <i>ounche</i> (Madagaskar). </p>

                <!-- Teks Heading 2 -->
                <h2>Khasiat Pisang</h2>

                <!-- Teks Heading 2 -->
                <ol>
                    <?php for( $i = 0; $i < count( $khasiat["pisang"] ); ++$i ) : ?>
                        <li><?= $khasiat["pisang"][$i] ?></li>
                    <?php endfor; ?>
                </ol>

                <!-- Teks Heading 2 -->
                <h2>Daftar Harga</h2>

                <!-- Table -->
                <table>
                    <!-- Table Heading -->
                    <thead>
                        <tr>
                            <th rowspan="2"> Jenis Pisang </th>
                            <th colspan="2"> Harga </th>
                        </tr>

                        <tr>
                            <th>Per Kilo</th>
                            <th>Per Biji</th>
                        </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        <?php for( $row = 0; $row < count($harga["pisang"]); ++$row ) : ?>
                            <tr>
                                <?php for( $col = 0; $col < count( $harga["pisang"][$row] ); ++$col ) : ?>
                                    <td>
                                        <?= $harga["pisang"][$row][$col] ?>
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