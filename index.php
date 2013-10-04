<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
	<meta name="keywords" content="Blog,HTML5,CSS3,JavaScript,Javascript,Portfolio,NathPaiva,Webmaster,Front-end" />
	<meta name="description" content="Exemplo do Livro HTML5" />
	<title>Blog Nath</title>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<!--<script type="text/javascript">
		alert(window.screen.width);
		alert(window.screen.height);
	</script>-->
</head>
<body>
	<div id="container">
		<!--  CABECARIO -->
		<header class="clearfix">
			<hgroup class="clearfix">
				<h6>@</h6>
				<h1>Nath</h1>
				<h1>Paiva</h1>
			</hgroup>

			<nav>
				<ul>
					<li>f</li>
					<li>f</li>
					<li>f</li>
				</ul>
				<input type="text" placeholder="Busca aqui" >
			</nav>
		</header>

		<nav id="meu-container">
			<ul>
				<li><a class="home" href="#">home</a></li>
				<li><a class="blog" href="#">blog</a></li>
				<li><a class="projetos" href="#">projetos</a></li>
				<li><a class="github" href="#">github</a></li>
				<li><a class="sobre" href="#">sobre</a></li>
				<li><a class="contato" href="#">contato</a></li>
			</ul>
		</nav>
		<section id="content" class="clearfix">
			<article class="bigArticle clearfix" id="bigArticle">
				<h1 class="blog">Dando o que falar!</h1>
				<div class="carouselGeral">
					<aside class="clearfix boxLeft" style="width: 100%; position: static; left: 0%; -webkit-transform-style: preserve-3d;">
						<span class="signal blog"></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Curabitur eu nisl at sapien commodo commodo.<br> Sed elementum dolor nulla, quis tempor lorem placerat quis.<br> Nullam diam neque, ultrices sit amet urna ac, fermentum placerat nisi. Duis vitae</p>
					</aside>

					<aside class="clearfix" style="width: 100%; position: absolute; left: 100%; top: 0%; -webkit-transform-style: preserve-3d;">
						<span class="signal blog"></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Curabitur eu nisl at sapien commodo commodo.<br> Sed elementum dolor nulla, quis tempor lorem placerat quis.<br> Nullam diam neque, ultrices sit amet urna ac, fermentum placerat nisi. Duis vitae </p>
					</aside>
					<aside class="clearfix boxLeft" style="width: 100%; position: absolute; left: 200%; top: 0%; -webkit-transform-style: preserve-3d;">
						<span class="signal blog"></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Curabitur eu nisl at sapien commodo commodo.<br> Sed elementum dolor nulla, quis tempor lorem placerat quis.<br> Nullam diam neque, ultrices sit amet urna ac, fermentum placerat nisi. Duis vitae </p>
					</aside>
					<aside class="clearfix" style="width: 100%; position: absolute; left: 300%; top: 0%; -webkit-transform-style: preserve-3d;">
						<span class="signal blog"></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Curabitur eu nisl at sapien commodo commodo.<br> Sed elementum dolor nulla, quis tempor lorem placerat quis.<br> Nullam diam neque, ultrices sit amet urna ac, fermentum placerat nisi. Duis vitae </p>
					</aside>
				</div>
			</article>

			<div class="divisor">...</div>

			<article class="smallArticle boxLeft">
				<h1 class="projetos">Um pouco do que já fiz!</h1>
				<aside class="clearfix boxLeft">
					<span class="signal projetos"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Curabitur eu nisl at sapien commodo commodo.<br> Sed elementum dolor nulla, quis tempor lorem placerat quis.<br> Nullam diam neque, ultrices sit amet urna ac, fermentum placerat nisi. Duis vitae </p>
				</aside>
			</article>
			<article class="smallArticle">
				<h1 class="github">Um pouco de código!</h1>
				<aside class="clearfix">
					<span class="signal github"></span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Curabitur eu nisl at sapien commodo commodo.<br> Sed elementum dolor nulla, quis tempor lorem placerat quis.<br> Nullam diam neque, ultrices sit amet urna ac, fermentum placerat nisi. Duis vitae </p>
				</aside>
			</article>
		</section>
		<section id="sidebar">
			<aside class="clearfix">
				<h1 class="sobre">Um pouco mais de mim!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Curabitur eu nisl at sapien commodo commodo.<br> Sed elementum dolor nulla, quis tempor lorem placerat quis.<br> Nullam diam neque, ultrices sit amet urna ac, fermentum placerat nisi. Duis vitae </p>
			</aside>
			<div class="divisor">...</div>
			<aside class="clearfix">
				<h1 class="contato">Fala ai!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Curabitur eu nisl at sapien commodo commodo.<br> Sed elementum dolor nulla, quis tempor lorem placerat quis.<br> Nullam diam neque, ultrices sit amet urna ac, fermentum placerat nisi. Duis vitae </p>
			</aside>
		</section>
		<footer>Todos os direitos de @NathPaiva - 2013</footer>
	</div>
</body>
</html>

<script src="js/teste.js"></script>