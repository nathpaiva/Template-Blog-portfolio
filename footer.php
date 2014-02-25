
			<footer>Todos os direitos de @NathPaiva (<?php bloginfo('nome'); ?>) - 2014</footer>
		</div>
	</body>
</html>

<?php wp_footer(); ?>

<script>

$.map($('.menu-item a'), function(val, i){
	$(val).addClass($(val).text());
});

$.map($('.contentBlog'), function(val, i){
	if(i%2==0){
		$(val).addClass('boxLeft');
	} else{
		$(val).addClass('');
	}
});


</script>