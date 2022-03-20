<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blanktheme
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="bg-grey">
		<section class="container pb-5 pt-5 sliders">
			<div class="row">
				<div class="col">
					<div class="section-news">
						<h1>Toutes nos nouveautés</h1>
						<h4>Venez découvrir nos nouveaux tissus importés directement du Japon !</h4>
						<button class="cta-home">C'est par ici !</button>
					</div>
				</div>
				<div class="col">
					<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img src="<?php echo get_template_directory_uri();?>/img/slider-1.jpeg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Tissu chien Shiba Japonais Yagasuri</h5>
							</div>
							</div>
							<div class="carousel-item">
							<img src="<?php echo get_template_directory_uri();?>/img/slider-2.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Tissu Maneki Neko Seigaiha noir</h5>
							</div>
							</div>
							<div class="carousel-item">
							<img src="<?php echo get_template_directory_uri();?>/img/slider-3.jpeg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Tissu Asanoha Shiba Japonais fond ivoire</h5>
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
		</section>
		</div>
		
		<section class="container">
			<div class="row d-flex justify-content-center">
				<h2 class="text-center pt-5">Les meilleures ventes</h2>
				<p class="text-center">Retrouvez un large choix de tissus de très bonne qualité, 100% Japonais et de produits loisirs créatifs.</p>
			</div>

			<div class="pt-5 pb-5">
				<?php echo do_shortcode('[products columns=4 limit=4]'); ?>
			</div>
		</section>

		<section class="categories pt-5 pb-5">
			<div class="container">
				<h1 class="text-center pt-5">Catégories</h1>
				<p class="text-center">Retrouvez un large choix de tissus de très bonne qualité, 100% Japonais et de produits loisirs créatifs.</p>
			</div>

			<div class="cart-gap row p-5">
				<div class="categories__col col-md-4 col-sm-12 position-relative">
					<a href="" class="card-categories col-md-12 ">
						<img src="<?php echo get_template_directory_uri();?>/img/cat-1.jpg" alt="" loading="lazy">
						<h2>Tissus Asanoha</h2>
					</a>
				</div>
				<div class="categories__col col-md-4 col-sm-12 position-relative">
					<a href="" class="card-categories col-md-12 ">
						<img src="<?php echo get_template_directory_uri();?>/img/cat-3.jpeg" alt="" loading="lazy">
						<h2>Tissus Liberty</h2>
					</a>
				</div>
				<div class="categories__col col-md-4 col-sm-12 position-relative">
					<a href="" class="card-categories col-md-12 ">
						<img src="<?php echo get_template_directory_uri();?>/img/cat-2.jpg" alt="" loading="lazy">
						<h2>Tissus Seigaiha</h2>
					</a>
				</div>
			</div>
		</section>
	</main>

<?php
// get_sidebar();
get_footer();
