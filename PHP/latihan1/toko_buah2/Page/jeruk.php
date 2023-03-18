<?php require_once "../data.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jeruk - Tentang Buah</title>
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
                <h2>Jeruk</h2>
                
                <!-- Image -->
                <img src="../Image/<?= $image[2] ?>">
                
                <!-- Paragraf 1 -->
                <p> Jeruk (bahasa Inggris: <i>orange</i>) adalah buah dari berbagai spesies citrus dalam famili Rutaceae; terutama mengacu pada <i>Citrus</i> × <i>sinensisi</i>, yang juga disebut <b>jeruk manis</b>, untuk membedakannya dari <i>Citrus</i> × <i>aurantium</i> terkait, yang disebut jeruk pahit. Jeruk manis bereproduksi secara aseksual (apomiksis melalui <i>nucellar embryony</i>); varietas jeruk manis muncul melalui mutasi.</p>
                
                <!-- Paragraf 2 -->
                <p>Jeruk adalah hibrida antara jeruk bali (<i>Citrus maxima</i>) dan mandarin (<i>Citrus reticulata</i>). Genom kloroplas, dan karena itu garis ibu, adalah jeruk bali. Jeruk manis telah memiliki genom lengkap yang diurutkan.</p>
                 
                <!-- Paragraf 3 -->      
                <p> Jeruk berasal dari wilayah yang meliputi Tiongkok Selatan, India Timur Laut, dan Myanmar, dan penyebutan jeruk manis paling awal adalah dalam literatur Tiongkok pada 314 SM. Hingga 1987, pohon jeruk ditemukan sebagai pohon buah yang paling banyak dibudidayakan di dunia.Pohon jeruk banyak ditanam di iklim tropis dan subtropis untuk buahnya yang manis. Buah jeruk dapat dimakan segar, atau diolah untuk jus atau kulitnya yang harum.Hingga 2012, jeruk manis menyumbang sekitar 70% dari produksi citrus.</p>
                
                <!-- Teks Heading 2 -->
                <h2>Khasiat Jeruk</h2>
                
                <!-- Ordered List -->
                <ol>
                    <?php for( $i = 0; $i < count( $khasiat["jeruk"] ); ++$i ) : ?>
                         <li>
                            <?= $khasiat["jeruk"][$i] ?>
                         </li>
                    <?php endfor; ?>
                </ol>
                
                <!-- Teks Heading -->
                <h2>Daftar Harga</h2>
                
                <!-- Table -->
                <table>
                    <!-- Table Heading -->
                    <thead>
                        <tr>
                            <th rowspan="2"> Jenis Jeruk </th>
                            <th colspan="2"> Harga </th>
                        </tr>

                        <tr>
                            <th>Per Kilo</th>
                            <th>Per Biji</th>
                        </tr>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        <?php for( $row = 0; $row < count($harga["jeruk"]); ++$row ) : ?>
                            <tr>
                                <?php for( $col = 0; $col < count( $harga["jeruk"][$row] ); ++$col ) : ?>
                                    <td>
                                        <?= $harga["jeruk"][$row][$col] ?>
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