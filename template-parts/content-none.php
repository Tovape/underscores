<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wbsw
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="not-found">
			<header class="page-header">
				<img src="">
				<h1 class="page-title">Not Found</h1>
				<a href="<?php echo home_url(); ?>">Home</a>
			</header>
		</section>
	</main>
	
<?php
get_footer();