<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Photo Gallery</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

	<style>
		*{
			margin:0;
			padding:0;
			box-sizing:border-box;
		}

		body{
			font-family:'Poppins', sans-serif;
			background:linear-gradient(to bottom, #0a0a0a, #1a1210, #2a1d1a);
			color:#f5eee8;
			min-height:100vh;
		}

		/* Navbar */
		.navbar{
			list-style:none;
			display:flex;
			justify-content:center;
			align-items:center;
			gap:30px;
			background:#000000;
			padding:18px 20px;
			margin:0;
			box-shadow:0 4px 15px rgba(0,0,0,0.45);
			position:sticky;
			top:0;
			z-index:10;
		}

		.navbar li{
			display:inline-block;
		}

		.navbar a{
			text-decoration:none;
			color:#f5eee8;
			font-size:17px;
			font-weight:600;
			padding:8px 14px;
			border-radius:8px;
			transition:background 0.25s ease, color 0.25s ease;
		}

		.navbar a:hover,
		.navbar a.active{
			background:#8b5e4e;
			color:#fff;
		}

		.content{
			padding:50px 20px 60px;
			text-align:center;
		}

		.heading h1{
			font-size:32px;
			margin-bottom:10px;
		}

		.line{
			width:80px;
			height:3px;
			background:#8b5e4e;
			margin:0 auto 18px;
			border-radius:5px;
		}

		.intro{
			max-width:640px;
			margin:0 auto 40px;
			color:#d9b8a3;
			font-size:16px;
			line-height:1.6;
		}

		.gallery{
			max-width:1000px;
			margin:0 auto;
			display:grid;
			grid-template-columns:repeat(auto-fit, minmax(220px, 1fr));
			gap:26px;
		}

		.card{
			background:rgba(255,255,255,0.05);
			border:1px solid rgba(255,255,255,0.08);
			border-radius:16px;
			overflow:hidden;
			box-shadow:0 8px 25px rgba(0,0,0,0.30);
			transition:transform 0.25s ease, box-shadow 0.25s ease;
			cursor:pointer;
		}

		.card:hover{
			transform:translateY(-6px);
			box-shadow:0 14px 30px rgba(0,0,0,0.45);
		}

		.card img{
			width:100%;
			height:180px;
			object-fit:cover;
			display:block;
		}

		.card p{
			padding:14px;
			font-size:17px;
			font-weight:600;
		}

		@media(max-width:768px){
			.navbar{
				flex-wrap:wrap;
				gap:12px;
			}
			.navbar a{
				font-size:15px;
			}
			.heading h1{
				font-size:28px;
			}
		}
	</style>
</head>

<body>

	<ul class="navbar">
		<li><a href="index.php">Home</a></li>
		<li><a href="photo_gallery.php" class="active">Photo Gallery</a></li>
		<li><a href="about_us.php">About Us</a></li>
		<li><a href="comment.php">Comment</a></li>
	</ul>

	<div class="content">
		<div class="heading">
			<h1>Galeri Gambar Makanan</h1>
			<div class="line"></div>
		</div>

		<p class="intro">Berikut adalah gambar-gambar makanan yang disukai oleh rakyat Malaysia. Klik gambar bagi melihat dengan lebih jelas.</p>

		<div class="gallery">
			<div class="card">
				<img src="https://www.elmundoeats.com/wp-content/uploads/2021/02/FP-Nasi-lemak-with-all-its-trimmings.jpg" alt="Nasi Lemak">
				<p>Nasi Lemak</p>
			</div>

			<div class="card">
				<img src="https://www.theflavorbender.com/wp-content/uploads/2021/09/Roti-Canai-6501-2-500x375.jpg" alt="Roti Canai">
				<p>Roti Canai</p>
			</div>

			<div class="card">
				<img src="https://bizzakat.my/app/uploads/2021/01/sate-ayam.jpg" alt="Sate">
				<p>Sate</p>
			</div>

			<div class="card">
				<img src="https://thegourmandiseschool.com/wp-content/uploads/2025/05/rendang-spicy-and-tender-indonesian-beef-bowl_59519610-500x375.jpg" alt="Rendang">
				<p>Rendang</p>
			</div>
		</div>
	</div>

</body>
</html>
