<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Komen Anda</title>
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
			padding:50px 20px;
			display:flex;
			justify-content:center;
		}

		.box{
			width:100%;
			max-width:560px;
			padding:40px 35px;
			border-radius:20px;
			background:rgba(255,255,255,0.05);
			border:1px solid rgba(255,255,255,0.08);
			box-shadow:0 8px 25px rgba(0,0,0,0.30);
			text-align:center;
		}

		.box h1{
			font-size:30px;
			margin-bottom:6px;
		}

		.box .subtitle{
			color:#d9b8a3;
			font-size:15px;
			margin-bottom:10px;
		}

		.line{
			width:70px;
			height:3px;
			background:#8b5e4e;
			margin:14px auto 26px;
			border-radius:5px;
		}

		form{
			text-align:left;
		}

		.field{
			margin-bottom:20px;
		}

		label{
			display:block;
			font-size:14px;
			font-weight:600;
			color:#d9b8a3;
			margin-bottom:6px;
			letter-spacing:0.3px;
		}

		input[type="text"],
		textarea{
			width:100%;
			padding:11px 14px;
			border-radius:10px;
			border:1px solid rgba(255,255,255,0.15);
			background:rgba(255,255,255,0.06);
			color:#f5eee8;
			font-family:'Poppins', sans-serif;
			font-size:15px;
			outline:none;
			transition:border-color 0.2s ease, background 0.2s ease;
		}

		input[type="text"]:focus,
		textarea:focus{
			border-color:#8b5e4e;
			background:rgba(255,255,255,0.09);
		}

		textarea{
			resize:vertical;
			min-height:110px;
		}

		.gender-group{
			display:flex;
			gap:24px;
			padding-top:4px;
		}

		.gender-option{
			display:flex;
			align-items:center;
			gap:8px;
			font-weight:500;
			color:#f5eee8;
			cursor:pointer;
		}

		.gender-option input{
			accent-color:#8b5e4e;
			width:16px;
			height:16px;
			cursor:pointer;
		}

		.submit-btn{
			width:100%;
			padding:13px;
			margin-top:10px;
			border:none;
			border-radius:10px;
			background:#8b5e4e;
			color:#fff;
			font-family:'Poppins', sans-serif;
			font-size:16px;
			font-weight:600;
			cursor:pointer;
			transition:background 0.2s ease, transform 0.15s ease;
		}

		.submit-btn:hover{
			background:#a5715e;
			transform:translateY(-1px);
		}

		@media(max-width:768px){
			.navbar{
				flex-wrap:wrap;
				gap:12px;
			}
			.navbar a{
				font-size:15px;
			}
			.box{
				padding:30px 22px;
			}
		}
	</style>
</head>

<body>

	<ul class="navbar">
		<li><a href="index.php">Home</a></li>
		<li><a href="photo_gallery.php">Photo Gallery</a></li>
		<li><a href="about_us.php">About Us</a></li>
		<li><a href="comment.php" class="active">Comment</a></li>
	</ul>

	<div class="content">
		<div class="box">
			<h1>Borang Komentar</h1>
			<p class="subtitle">Kongsikan pandangan anda dengan kami</p>
			<div class="line"></div>

			<form action="comment.php" method="post">

				<div class="field">
					<label for="nama">Nama</label>
					<input type="text" id="nama" name="Nama" value="Nama Anda">
				</div>

				<div class="field">
					<label>Jantina</label>
					<div class="gender-group">
						<label class="gender-option">
							<input type="radio" name="gender" value="lelaki" checked>
							Lelaki
						</label>
						<label class="gender-option">
							<input type="radio" name="gender" value="female">
							Perempuan
						</label>
					</div>
				</div>

				<div class="field">
					<label for="emel">Emel</label>
					<input type="text" id="emel" name="Emel" value="Emel Anda">
				</div>

				<div class="field">
					<label for="komen">Komen</label>
					<textarea id="komen" name="Komen">Masukkan komen anda di sini</textarea>
				</div>

				<button type="submit" class="submit-btn">Hantar</button>
			</form>
		</div>
	</div>

</body>
</html>
