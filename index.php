<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
	<?php wp_head(); ?>
	<style type="text/css">
		* {
			box-sizing: border-box;
			width: 100%;
			margin: 0;
			padding: 0;
		}

		html,
		body {
			color: #fff;
			font-weight: 400;
			font-size: 1rem;
			font-family: sans-serif;
			background-image: linear-gradient(90deg, #451D39 0%, #f80759 100%);
			display: flex;
			flex-direction: column;
			justify-content: center;
			min-height: 100vh;
			text-align: center;
			overflow: hidden;
		}

		.xdebug-var-dump {
			padding: 1rem;
			color: darkslategray;
			background-color: whitesmoke;
			font-size: 1.25rem;
			text-overflow: wordwrap;
		}

		header,
		footer {
			margin: 1rem 0;
			display: flex;
			flex-direction: column;
			align-content: center;
		}

		a {
			color: #fff;
			text-decoration: underline;
		}
	</style>
</head>

<body <?php body_class(); ?>>
	<header>
		<h1 class="site-title" style="margin: 0 0 20px;">
			<?php echo get_bloginfo('name'); ?>
		</h1>
		<p class="tagline" style="font-style: italic;"><?php echo get_bloginfo('description'); ?>
		</p>
	</header>
	<footer>
		<p class="powered-by">
			<a href="https://wordpress.org">
				Proudly Powered by WordPress
			</a>
		</p>
	</footer>
	<?php wp_footer(); ?>
</body>

</html>