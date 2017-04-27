<!DOCTYPE html>
<html>
<head>
	<title>Raportku</title>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: arial;
			font-size: 16px;
			padding: 0;
			margin: 0;
		}

		#header{
			padding: 20px;
			background-color: #14143c;
			color: #fff;
			width: 100%;
			position: fixed;
		}

		.search{
			float: right;
			margin-right: 50px;
		}

		#menu{
			display: block;
			padding: 0;
			min-height: 580px;
			float: left;
			background-color: #fff;
			margin-top: 58px;
			position: fixed;
		}

		.dft-menu ul{
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.dft-menu ul li a{
			text-decoration: none;
			display: block;
			color: #000;
			font-size: 14px;
		}

		.aktif{
			font-weight: bold;
			color: #fff;
		}


		/* Style the buttons that are used to open and close the accordion panel */
		button.accordion {
		    background-color: #fff;
		    color: #444;
		    cursor: pointer;
		    padding: 13px;
		    width: 100%;
		    border: none;
		    text-align: left;
		    outline: none;
		    font-size: 1px;
		    transition: 0.4s;
		    color: #505054;
		}

		/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
		button.accordion:hover {
		    background-color: #ccc;
		    font-weight: bold;
		}

		/* Style the accordion panel. Note: hidden by default */
		div.panel {
		    padding: 0px;
		    background-color: #fff;
		    display: none;
		    overflow: hidden;
		    transition: max-height 0.2s ease-out;
		}

		.sub-menu{
			background-color: #fff;
		    color: #505054;
		    cursor: pointer;
		    padding: 13px;
		    width: 100%;
		    text-align: left;
		    border: none;
		    outline: none;
		    display: block;
		    padding-left: 30px;
		}

		.sub-menu:hover{
			background-color: #efeff2;
		}

		.fa{
			width: 20px;
			font-size: 17px;
		}

		.profil{
			background-image: url("./asset/profil.jpg");
			width: 260px;
			height: 120px;
			position: all;
		}

		.foto img{
			padding: 15px;
			width: 90px;
			height: 90px;
			border-radius: 100px;
		}

		#konten{
			display: inline-block;
			padding: 10px;
			min-height: 560px;
			width: 1070px;
			float: right;
			background-color: #ccc;
			margin-top: 58px;
			position: all;
		}

		.isi{
			background-color: #fff; 
			min-height: 500px;
			padding: 20px;
			color: #505054;
		}

		.footer{
			background-color: #14143c;
			padding: 5px;
			text-align: center;
			color: #fff;
		}

	</style>
</head>
<body>
<div id="container">
	<div id="header">
		<b>Raportku</b>
		<div class="search">
			<i class="fa fa-search"></i>
		</div>
	</div>
	<div id="menu">
		<div class="profil">
			<div class="foto">
				<img src="./asset/bg.jpg">
			</div>
		</div>
		<span class="dft-menu">
				<ul>
					<li>
						<button class="accordion"><a href="#"><i class="fa fa-home"></i> Dashboard</a></button>
					</li>
				</ul>

				<ul>
					<li><button class="accordion"><a href="#"><i class="fa fa-user"></i> Guru</a></button>
					</li>
				</ul>

				<ul>
					<li><button class="accordion"><a href="#"><i class="fa fa-group"></i> Siswa</a></button></li>
				</ul>

				<ul>
					<li><button class="accordion"><a href="#"><i class="fa fa-graduation-cap"></i> Akademik</a></button>
						<div class="panel">
							<button class="sub-menu"><a href="#"><i class="fa fa-file"></i> Mata Pelajaran</a></button>
							<button class="sub-menu"><a href="#"><i class="fa fa-file"></i> Kelas</a></button>
							<button class="sub-menu"><a href="#"><i class="fa fa-file"></i> Kelas Siswa</a></button>
							<button class="sub-menu"><a href="#"><i class="fa fa-file"></i> Nilai</a></button>
						</div>
					</li>
				</ul>

				<ul>
					<li><button class="accordion"><a href="#"><i class="fa fa-print"></i> Cetak</a></button>
						<div class="panel">
							<button class="sub-menu"><a href="#"><i class="fa fa-file"></i> Laporan Guru</a></button>
							<button class="sub-menu"><a href="#"><i class="fa fa-file"></i> Laporan Siswa</a></button>
							<button class="sub-menu"><a href="#"><i class="fa fa-file"></i> Laporan Kelas</a></button>
							<button class="sub-menu"><a href="#"><i class="fa fa-file"></i> Laporan Nilai</a></button>
							<button class="sub-menu"><a href="#"><i class="fa fa-file"></i> Lap. Pelajaran</a></button>
						</div>
					</li>
				</ul>
			</div>
		</span>

		<script type="text/javascript">
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			    acc[i].onclick = function(){
			        /* Toggle between adding and removing the "active" class,
			        to highlight the button that controls the panel */
			        this.classList.toggle("active");

			        /* Toggle between hiding and showing the active panel */
			        var panel = this.nextElementSibling;
			        if (panel.style.display === "block") {
			            panel.style.display = "none";
			        } else {
			            panel.style.display = "block";
			        }
			    }
			}
		</script>
	</div>
	<div id="konten">
	HOME
		<div class="isi">
			<h3>Halaman Dashboard</h3>
			<h5>Selamat Datang di Aplikasi Raportku!</h5>
			<hr/>
		</div>
		<div class="footer">
			<p>Copyright &copy; Yopi Pratama - 2017</p>
		</div>
	</div>
</div>
</body>
</html>