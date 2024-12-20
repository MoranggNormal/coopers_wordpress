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
 * @package coopers
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	get_template_part('hero');
	get_template_part('taskinfo');
	get_template_part('planlist');
	get_template_part('blog');
	get_template_part('contact');
	?>


</main><!-- #main -->

<?php
get_sidebar();
get_footer();
