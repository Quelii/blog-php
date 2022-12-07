<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prova Queliane Gramacho</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<!--icone bootstrap-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
	<header>
		<div class="container" id="header">
			<a href="index.html">
				logo
			</a>
			<nav>
				<ul class="navbar">
					<li><a href="#">Home</a></li>
					<li><a href="#">Empresa</a></li>
					<li><a href="#">Serviços</a></li>
					<li><a href="#">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!--Aqui inicia o slide-->
	<div class="slideshow-container">

	<div class="mySlides fade">
	  <div class="numbertext">1 / 3</div>
	  <img src="img/img_nature_wide.jpg" style="width:100%">
	  <div class="text">Imagem 01</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">2 / 3</div>
	  <img src="img/img_snow_wide.jpg" style="width:100%">
	  <div class="text">Imagem 02</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">3 / 3</div>
	  <img src="img/img_mountains_wide.jpg" style="width:100%">
	  <div class="text">Imagem 03</div>
	</div>

	<a class="prev" onclick="plusSlides(-1)">❮</a>
	<a class="next" onclick="plusSlides(1)">❯</a>

	</div>
	<br>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
	</div>

	<!--Aqui Termina o slide-->

		<main>
			<div class="container" id="main">
				<div class="photo">
					Aqui entra uma foto
				</div>
				<div class="description">
					<h1>Nome Da Empresa</h1>

					<p>
						Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Officiis velit molestias totam excepturi. Explicabo, quaerat animi ea aliquid deleniti odio voluptatibus ad maxime numquam eum, nulla minima dignissimos laboriosam? Adipisci!<br>
						Laboriosam repellat odio dolor, eos. Nemo tenetur expedita aut rerum doloremque molestias ullam aperiam quisquam dolores animi illo voluptatibus odit quae, reprehenderit sunt minima, et ratione. Dicta officia dolores quia?<br>
						Eos eum quae, consequuntur fuga modi magni iusto alias asperiores provident corporis deserunt repudiandae ad accusamus esse repellendus at, voluptatem veniam, mollitia, laborum sapiente laudantium ab repellat nemo aliquid. Perspiciatis?<br>
						Cumque aliquid accusamus, error, impedit esse rerum deserunt? Ducimus, fugit quasi nam quibusdam facilis est voluptates tenetur odit possimus ad adipisci placeat temporibus quos aperiamBR sapiente quas quo pariatur maxime!<br>
						Molestiae, molestias est necessitatibus maiores rem perspiciatis commodi voluptas obcaecati, tempore iusto suscipit alias qui voluptate repellat delectus, tenetur omnis quis, similique in facilis voluptates corrupti sunt nisi. Modi, obcaecati!<br>

					</p>
				</div>
			</div>
		</main>
		<footer>
			<div class="container" id="footer">
				<div id="text">
					Todos os direitos reservador&copy;
				</div>
				<div id="social-media">
					<ul class="navbar">
						<li><a href="#"><i class="bi bi-instagram"></i></a></li>
						<li><a href="#"><i class="bi bi-github"></i></a></li>
					</ul>
				</div>
			</div>
		</footer>
		<!--script aqui-->
			<script>
	let slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	    slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	    dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
	</script>

		<!--fim script-->
	
</body>
</html>