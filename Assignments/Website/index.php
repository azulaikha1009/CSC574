<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Homepage</title>
<link rel="stylesheet" href="css/bootstrap.css">
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

	/* Header Image */
	.header-img{
		width:100%;
		height:500px;
		object-fit:cover;
		display:block;
		filter:brightness(75%);
	}

	/* Content */
	.content{
    padding:45px 20px;
    text-align:center;
	}

	.box{
		max-width:720px;      /* smaller width */
		margin:auto;
		padding:35px 25px;    /* smaller padding */
		border-radius:20px;
		background:rgba(255,255,255,0.05);
		border:1px solid rgba(255,255,255,0.08);
		box-shadow:0 8px 25px rgba(0,0,0,0.30);
	}

	.box h1{
		font-size:34px;       /* smaller title */
		margin-bottom:12px;
	}

	.line{
		width:80px;
		height:3px;
		background:#8b5e4e;
		margin:12px auto 20px;
		border-radius:5px;
	}

	.box p{
		font-size:18px;       /* smaller text */
		color:#d9b8a3;
	}

	/* Responsive */
	@media(max-width:768px){
		.navbar{
			flex-wrap:wrap;
			gap:12px;
		}

		.navbar a{
			font-size:15px;
		}

		.header-img{
			height:300px;
		}

		.box h1{
			font-size:32px;
		}

		.box p{
			font-size:18px;
		}
	}
	</style>
	</head>

	<body>

	<ul class="navbar">
		<li><a href="index.php" class="active">Home</a></li>
		<li><a href="photo_gallery.php">Photo Gallery</a></li>
		<li><a href="about_us.php">About Us</a></li>
		<li><a href="comment.php">Comment</a></li>
	</ul>

	<img class="header-img" src="https://i.pinimg.com/1200x/ef/a3/28/efa3288ae1a9c9a2e6bbd6ab43b580b7.jpg">

	<div class="content">
		<div class="box">
			<h1>Selamat Datang ke Homepage Saya</h1>
			<div class="line"></div>
			<p>Ini adalah laman web saya yang pertama!</p>
		</div>
	</div>

	</body>
</html>
