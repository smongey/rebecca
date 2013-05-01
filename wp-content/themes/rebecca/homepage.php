<?php /* Template Name: Homepage */ ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>

<body class="blue">
	<div id="wrap">

		<nav>
			<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/nav' ) ); ?>
		</nav>

		<section>
			<div id="intro">
				<p>I love to write.</p>
				<p>I&rsquo;ve always been fascinated by language, the colour and rhythms of speech, how we use words to portray our emotions in different settings.</p>
				<p>In my writing I&rsquo;m constantly trying to discover the conscious and the unconscious voice. To explore the forces in people’s lives which are at the heart of my story and give voice to them.</p>
				<p>I&rsquo;ve been lucky enough to share those stories with audiences in radio, television and theatre.</p>
			</div>
			<div id="quote">
				<p>&lsquo;It takes a thousand voices to tell a single story&rsquo;</p>
				<span>Native American Saying</span>
			</div>
			<img src="<?php bloginfo( 'template_url' ); ?>/img/home-1.png" class="left">
			<img src="http://placehold.it/250x250" class="right">
		</section>

	</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/scripts' ) ); ?>

</body>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer' ) ); ?>