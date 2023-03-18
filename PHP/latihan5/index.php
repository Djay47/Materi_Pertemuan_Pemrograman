<?php require_once "content.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 3</title>
</head>
<body>
	<div>
		<div>
			<ul>
				<!-- Cara 1 -->
				
				<?php for($i = 0; $i < count($menu); ++$i) : ?>
					<li>
						<a href="<?= $page[$i] ?>">
							<?= $menu[$i] ?>
						</a>
					</li>
				<?php endfor; ?>


				<!-- Cara 2 -->
				<!--
				<?php 
					for($i = 0; $i < count($menu); ++$i)
					{
						echo "<li><a href='$page[$i]'>$menu[$i]</a></li>";
					}
				?>
				-->
			</ul>
		</div>

		<div>
			<ol>
				<!-- Cara -->
				 
				<?php for( $i = 0; $i < count($judul); ++$i ) : ?>
					<li>
						<a href="?isi=<?= $i ?>">
							<?= $judul[$i] ?>
						</a>
					</li>
				<?php endfor; ?>
				

				 <!-- Cara 2 -->
				 <!-- 
				 <?php 
				 	for( $i = 0; $i < count($judul); ++$i )
				 	{
				 		echo "<li><a href='?isi=$i'>$judul[$i]</a></li>";
				 	}

				 ?>
				  -->
			</ol>
		</div>

		<div>
			<?php 
				
				if( isset($_GET["isi"]) )
				{
					// $isi = $_GET["isi"];

					// echo $deskripsi[$isi];

					echo $deskripsi[$_GET["isi"]];		
				}
				else
				{
					echo "Silahkan pilih buahnya!";
				}

			?>
		</div>
	</div>
</body>
</html>
