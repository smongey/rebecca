<?php /* Template Name: Profile */ ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>

<body class="yellow">
	<div id="wrap">

		<nav>
			<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/nav' ) ); ?>
		</nav>

		<section>
			<img src="<?php bloginfo( 'template_url' ); ?>/img/profile.jpg" class="profile">
			<div class="item">
				<div class="left"><p>Born:</p></div>
				<div class="right"><p>Belfast</p></div>
			</div>
			<div class="item">
				<div class="left"><p>Educated:</p></div>
				<div class="right"><p>Belfast</p></div>
			</div>
			<div class="item">
				<div class="left"><p>Lives:</p></div>
				<div class="right"><p>Dublin</p></div>
			</div>
			<div class="item">
				<div class="left"><p>Family:</p></div>
				<div class="right"><p>Husband and three adult children, as well as two adorable grandchildren and lots of nephews and nieces.</p></div>
			</div>
			<div class="item">
				<div class="left"><p>Before becoming a full-time writer:</p></div>
				<div class="right"><p>Worked as a teacher of history and english, a professional actress, ran her own drama classes and founded Galway Youth Theatre</p></div>
			</div>
			<div class="item">
				<div class="left"><p>Writes:</p></div>
				<div class="right"><p>In a house filled with books, including her own favourite childhood stories.</p></div>
			</div>
			<div class="item">
				<div class="left"><p>Believes:</p></div>
				<div class="right"><p>In the magic of theatre and dramatic story telling.</p></div>
			</div>
			<div class="item">
				<div class="left"><p>As a writer I care about:</p></div>
				<div class="right"><p>Quality and excellence in the work that I do.</p><p>Creating characters who will tell a good story.</p><p>Constantly re-thinking the role of voice in radio drama.</p><p>Working for and with young people, on projects which will create moments of success and joy in their lives.</p></div>
			</div>
			<div class="item">
				<div class="left"><p>As an Arts Consultant<br/>I bring experience in:</p></div>
				<div class="right"><p>The design &amp; development of innovative arts based programmes, projects and modular courses.</p><p>Youth theatre practice and educational drama.</p><p>Arts organisation policy, structures and programming.</p><p>Facilitation and mentoring.</p></div>
			</div>
			<div class="item">
				<div class="left"><p>Email:</p></div>
				<div class="right"><p><a href="mailto:hello@rebeccabartlettwrites.com">hello@rebeccabartletwrites.com</a></p></div>
			</div>
			
			<img src="<?php bloginfo( 'template_url' ); ?>/img/mark.png" class="mark">
			

		</section>

	</div>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/scripts' ) ); ?>

</body>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer' ) ); ?>