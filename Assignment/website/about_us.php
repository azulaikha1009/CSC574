<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tentang Kami</title>
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
			margin:0 auto 40px;
			border-radius:5px;
		}

		.grid{
			max-width:820px;
			margin:0 auto;
			display:grid;
			grid-template-columns:repeat(2, 1fr);
			gap:24px;
			text-align:left;
		}

		.card{
			background:rgba(255,255,255,0.05);
			border:1px solid rgba(255,255,255,0.08);
			border-radius:16px;
			padding:26px 24px;
			box-shadow:0 8px 25px rgba(0,0,0,0.30);
			transition:transform 0.25s ease;
		}

		.card:hover{
			transform:translateY(-4px);
		}

		.card .icon{
			font-size:26px;
			margin-bottom:10px;
		}

		.card h2{
			font-size:19px;
			color:#e7a488;
			margin-bottom:10px;
			letter-spacing:0.3px;
		}

		.card p{
			font-size:15.5px;
			color:#d9b8a3;
			line-height:1.6;
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
			.grid{
				grid-template-columns:1fr;
			}
		}
	</style>
</head>

<body>

	<ul class="navbar">
		<li><a href="index.php">Home</a></li>
		<li><a href="photo_gallery.php">Photo Gallery</a></li>
		<li><a href="about_us.php" class="active">About Us</a></li>
		<li><a href="comment.php">Comment</a></li>
	</ul>

	<div class="content">
		<div class="heading">
			<h1>Tentang Kami</h1>
		</div>
		<div class="line"></div>

		<div class="grid">
			<div class="card">
				<div class="icon">🎯</div>
				<h2>Misi Kami</h2>
				<p>To learn something new and improve every day.</p>
			</div>

			<div class="card">
				<div class="icon">📌</div>
				<h2>Objektif Kami</h2>
				<p>Finish all tasks on time.</p>
			</div>

			<div class="card">
				<div class="icon">🤝</div>
				<h2>Janji Kami</h2>
				<p>I will do my best and stay positive today.</p>
			</div>

			<div class="card">
				<div class="icon">🌱</div>
				<h2>Motivasi Kami</h2>
				<p>Small progress is still progress.</p>
			</div>
		</div>
	</div>

</body>
</html>
