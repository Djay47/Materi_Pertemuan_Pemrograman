<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kontak - Tentang Buah</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>
        <div class="wrapper">
            <div class="content">
                <!-- Header -->
                <header>
                    <!-- Logo -->
                    <img src="../img/buah.png">
                    
                    <h1>TentangBuah</h1>

                    <!-- Navigasi -->                   
                    <nav>
                        <ul>
                            <li> <a href="../index.php">Home</a> </li>
                            
                            <li> <a href="#">Buah</a>
                                <ul>
                                    <li> <a href="apel.php">Apel</a> </li>
                                    <li> <a href="jeruk.php">Jeruk</a> </li>
                                    <li> <a href="mangga.php">Mangga</a> </li>
                                    <li> <a href="pisang.php">Pisang</a> </li>
                                </ul>
                            </li>
                            
                            <li> <a href="kontak.php">Kontak</a> </li>
                        </ul>
                    </nav>
                </header>

                <section>
                    <h2>Kontak Kami</h2>

                    <!-- Form -->
                    <form method="post">
                        <fieldset>
                            <legend>Formulir Pemesanan</legend>
                                
                            <label for="nama">Nama:</label><br>
                            <input type="text" id="nama" placeholder="Nama" required><br><br>
                                    
                            <label for="email">Email:</label><br>
                            <input type="email" id="email" placeholder="Email" required><br><br>
                                    
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