<!doctype html>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$pag=$_GET['pag']; 
?>
<style>
.lb-loader,.lightbox{text-align:center;line-height:0;position:absolute;left:0}body.lb-disable-scrolling{overflow:hidden}.lightboxOverlay{position:absolute;top:0;left:0;z-index:9999;background-color:#000;filter:alpha(Opacity=80);opacity:.8;display:none}.lightbox{width:100%;z-index:10000;font-weight:400;outline:0}.lightbox .lb-image{display:block;height:auto;max-width:inherit;max-height:none;border-radius:3px;border:4px solid #fff}.lightbox a img{border:none}.lb-outerContainer{position:relative;width:250px;height:250px;margin:0 auto;border-radius:4px;background-color:#fff}.lb-outerContainer:after{content:"";display:table;clear:both}.lb-loader{top:43%;height:25%;width:100%}.lb-cancel{display:block;width:32px;height:32px;margin:0 auto;background:url(../images/loading.gif) no-repeat}.lb-nav{position:absolute;top:0;left:0;height:100%;width:100%;z-index:10}.lb-container>.nav{left:0}.lb-nav a{outline:0;background-image:url(data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==)}.lb-next,.lb-prev{height:100%;cursor:pointer;display:block}.lb-nav a.lb-prev{width:34%;left:0;float:left;background:url(../images/prev.png) left 48% no-repeat;filter:alpha(Opacity=0);opacity:0;-webkit-transition:opacity .6s;-moz-transition:opacity .6s;-o-transition:opacity .6s;transition:opacity .6s}.lb-nav a.lb-prev:hover{filter:alpha(Opacity=100);opacity:1}.lb-nav a.lb-next{width:64%;right:0;float:right;background:url(../images/next.png) right 48% no-repeat;filter:alpha(Opacity=0);opacity:0;-webkit-transition:opacity .6s;-moz-transition:opacity .6s;-o-transition:opacity .6s;transition:opacity .6s}.lb-nav a.lb-next:hover{filter:alpha(Opacity=100);opacity:1}.lb-dataContainer{margin:0 auto;padding-top:5px;width:100%;border-bottom-left-radius:4px;border-bottom-right-radius:4px}.lb-dataContainer:after{content:"";display:table;clear:both}.lb-data{padding:0 4px;color:#ccc}.lb-data .lb-details{width:85%;float:left;text-align:left;line-height:1.1em}.lb-data .lb-caption{font-size:13px;font-weight:700;line-height:1em}.lb-data .lb-caption a{color:#4ae}.lb-data .lb-number{display:block;clear:left;padding-bottom:1em;font-size:12px;color:#999}.lb-data .lb-close{display:block;float:right;width:30px;height:30px;background:url(../images/close.png) top right no-repeat;text-align:right;outline:0;filter:alpha(Opacity=70);opacity:.7;-webkit-transition:opacity .2s;-moz-transition:opacity .2s;-o-transition:opacity .2s;transition:opacity .2s}.lb-data .lb-close:hover{cursor:pointer;filter:alpha(Opacity=100);opacity:1}

p {
  text-indent: 50px;
  font-family: Century;
  font-size: 17px;
}

.sbtitle{
	text-indent:30px;
}

.pozcentru{
	text-indent:60px;
}
.bgcolor{
	background-color: #ffe6e6;
}
.intitle{
	text-indent:75px;
}
.footer {
  
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #ffcccc;
  color: black;
  text-align: center;
  padding: 5px;
}

.gallery{
	margin: 10px 50px;
}

.gallery img{
	transition: 1s;
	padding: 10px;
	width: 350px;
}

.gallery img:hover{
	filter: grayscale(100%);
	transform: scale(1.1);
}

.button1 {
  background-color: #4CAF50; 
}

.clsimg1{
	text-align: right;
}
.clsimg2{
	text-align: left;
}
</style>


<html lang="en">
  	<head>
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<script src="js/lightbox-plus-jquery.mim.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<?php
		if($pag=='')
		{
			?>
    		<title>Locuri de vizitat în România</title>
	<?php
		}
		else
			if($pag=='castelulbran')
			{
				?>
				<title>Castelul Bran</title>
	<?php
		}
		else
			if($pag=='castelulcorvinilor')
			{
				?>
				<title>Castelul Corvinilor</title>
	<?php
		}
		else
			if($pag=='casteluljidvei')
			{
				?>
				<title>Castelul Jidvei</title>
	<?php
		}
		else
			if($pag=='castelulpeles')
			{
				?>
				<title>Castelul Peleș</title>
	<?php
		}
		else
			if($pag=='castelulpelisor')
			{
				?>
				<title>Castelul Pelișor</title>
	<?php
		}
		else
			if($pag=='castelulsavarsin')
			{
				?>
				<title>Castelul Săvârșin</title>
	<?php
		}
		else
			if($pag=='castelulsturdza')
			{
				?>
				<title>Castelul Sturdza</title>
	<?php
		}
		else
			if($pag=='palatulculturii')
			{
				?>
				<title>Palatul Culturii</title>
	<?php
		}
		else
			if($pag=='palatulmogosoaia')
			{
				?>
				<title>Palatul Mogoșoaia</title>	
				<?php
		}
		else
			if($pag=='cetateafagarasului')
			{
				?>
				<title>Cetatea Făgărașului</title>
				<?php
		}
		else
			if($pag=='cetatearasnov')
			{
				?>
				<title>Cetatea Râșnov</title>
				<?php
		}
		else
			if($pag=='bisericabiertan')
			{
				?>
				<title>Biserica fortificată din Biertan</title>
				<?php
		}
		else
			if($pag=='bisericasaschiz')
			{
				?>
				<title>Biserica fortificată din Saschiz</title>
				<?php
		}
		else
			if($pag=='bisericavaleaviilor')
			{
				?>
				<title>Biserica fortificată din Valea Viilor</title>
				<?php
		}
		else
			if($pag=='bisericaviscri')
			{
				?>
				<title>Biserica fortificată din Viscri</title>		
	<?php
		}
		?>
		
			
  	</head>



	<body>
		<div class="bg-danger bg-opacity-25">
				
			<div class="container p-2 text-dark text-center bg-light " >	
			
				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					
					<button type="button" class="btn btn-danger opacity-50"><a  href="index.php"><font color='white'>Pagina principală</font></a></button>

					<div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-danger opacity-50 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Castele</button>
						<ul class="dropdown-menu " aria-labelledby="btnGroupDrop1">
							<li><a class="dropdown-item " href="?pag=castelulbran">Castelul Bran</a></li>
							<li><a class="dropdown-item bg-danger bg-opacity-25" href="?pag=castelulcorvinilor">Castelul Corvinilor</a></li>
							<li><a class="dropdown-item " href="?pag=casteluljidvei">Castelul Jidvei</a></li>
							<li><a class="dropdown-item bg-danger bg-opacity-25" href="?pag=castelulpeles">Castelul Peleș</a></li>
							<li><a class="dropdown-item " href="?pag=castelulpelisor">Castelul Pelișor</a></li>
							<li><a class="dropdown-item bg-danger bg-opacity-25" href="?pag=castelulsavarsin">Castelul Săvârșin</a></li>
							<li><a class="dropdown-item " href="?pag=castelulsturdza">Castelul Sturdza</a></li>
						</ul>
					</div>

					<div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-danger opacity-50 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Palate</button>
						<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
							<li><a class="dropdown-item " href="?pag=palatulculturii">Palatul Culturii</a></li>
							<li><a class="dropdown-item bg-danger bg-opacity-25" href="?pag=palatulmogosoaia">Palatul Mogoșoaia</a></li>
						</ul>
					</div>

					<div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-danger opacity-50 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Cetăți</button>
						<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
							<li><a class="dropdown-item " href="?pag=cetateafagarasului">Cetatea Făgărașului</a></li>
							<li><a class="dropdown-item bg-danger bg-opacity-25" href="?pag=cetatearasnov">Cetatea Râșnov</a></li>
						</ul>
					</div>

					<div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-danger opacity-50 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Biserici fortificate</button>
						<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
							<li><a class="dropdown-item " href="?pag=bisericabiertan">Biserica fortificata din Biertan</a></li>
							<li><a class="dropdown-item bg-danger bg-opacity-25" href="?pag=bisericasaschiz">Biserica fortificata din Saschiz</a></li>
							<li><a class="dropdown-item" href="?pag=bisericavaleaviilor">Biserica fortificata din Valea Viilor</a></li>
							<li><a class="dropdown-item bg-danger bg-opacity-25" href="?pag=bisericaviscri">Biserica fortificata din Viscri</a></li>
						</ul>
					</div>

					
				
			</div>
			

				<?php
					if($pag=='')
					{
						?>
					<div class="container-fluid  p-2 text-dark text-center">
						<h1><font size='15' color='silver' face='Impact'><i>Locuri de vizitat în România</i></font></h1>
					</div>
					<div class="container text-center  p-2 text-dark  ">
						<div class="row">
							<div class="col-4 offset-4 ">
								<div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
									<div class="carousel-indicators">
										<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
										<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
										<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
									</div>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="imagini/castelul-corvinilor.jpg.webp" class="d-block w-100" alt="...">
											<div class="carousel-caption d-none d-md-block">
												<h5><font color="black"><b>Castelul Corvinilor</b></font></h5>
												<p><font color="black"><b>Hunedoara, România</b></font></p>
											</div>
										</div>
										<div class="carousel-item">
											<img src="imagini/cetatea-fagarasului.jpg.webp" class="d-block w-100" alt="...">
											<div class="carousel-caption d-none d-md-block">
												<h5><b>Cetatea Făgărașului</b></h5>
												<p><b>Brașov, România</b></p>
											</div>
										</div>
										<div class="carousel-item">
											<img src="imagini/castelul-sturdza.jpg.webp" class="d-block w-100" alt="...">
											<div class="carousel-caption d-none d-md-block">
												<h5><font color="black"><b>Castelul Sturdza</b></font></h5>
												<p><font color="black"><b>Iași, România</b></font></p>
											</div>
										</div>
									</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>
							</div>
						</div>
					</div>
					
					<div class="container p-2 text-dark ">
						<div class="clearfix">
							<img src="imagini/obiective-turistice-iasi.jpg" class="rounded float-start" style="width:27%">
							<img src="imagini/biserica-fortificata-din-biertan.jpg.webp" class="rounded float-end"style="width:27%" >
							<img src="imagini/castele-din-romania.jpg" class="img-fluid rounded mx-auto d-block" style="width:40%">
						</div>
					</div>
					
					<div class="container  p-2 text-dark ">
						<p align="justify">România este țara cu o multitudine de obiective turistice, iar în topul preferințelor turiștilor români și străini se află cele mai frumoase castele din România. Situate în zone de poveste, 
							încărcate de istorie și cultură, castelele de la noi din țară ne surprind și astăzi prin construcțiile și arhitectura deosebită.
						</p>

						<p align="justify">Castelele reprezintă unul dintre cele mai proeminente monumente naționale din Romania, iar unele sunt atât de recunoscute pe scară largă 
							încât faima lor răsună în întreaga lume. Acestea sunt, desigur, castele din România asociate cu regiunea faimoasă a Transilvaniei și poveștile despre contele Dracula.
						</p>

						<p align="justify">Cu toate acestea, există multe alte castele în țară și fiecare este la fel de unic ca celelalte. În timp ce majoritatea sunt situate în Transilvania, există castele în toată țara.
							Interesant este că Romnânia are o mulțime de biserici fortificate, acestea constituind o parte importantă a moștenirii culturale.
						</p>

						<p align="justify">Mai mult decât atât, multe dintre ele arată mai mult a castele decât biserici datorită faptului că sunt fortificate, astfel încât vă puteți aștepta să gasiți multe structuri 
							arhitecturale surprinzătoare în toată țara.
						</p>

						<p align="justify">Cu o istorie bogată, povești cu prinți și prințese și legende care stârnesc interesul și celui mai indiferent turist, castelele din România atrag anual mii de vizitatori.
							Orice turist care vine în România a auzit de castelul Bran, datorită contelului Dracula, iar Castelul Peleș este locul în care se desfășoară acțiunea din câteva producții cinematografice internaționale de succes.
						</p>
						
					</div>
							

			</div>
			<?php
					}
				
					else 
					{
						print '<div class="container p-2 text-dark">';
						if(file_exists($pag.".php")) include($pag.".php"); 	
						else print 'Under construction';
						print '</div>';
					}
				?>
		</div>


			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
			<div class="footer">
				<p>Proiect realizat de Chindriș Alexandra-Maria</p>
			</div>
		
 	 </body>
</html>