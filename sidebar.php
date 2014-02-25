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


	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
		<div class="divisor">...</div>
	<?php endif ?>

</section>
