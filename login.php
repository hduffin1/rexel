<?php /* Template Name: Login */ ?>

<?php get_header(); ?>

<?php get_template_part('templates/banner'); ?>

<div class="login-wrapper">
	<h3>Login Now</h3>
	<?php echo do_shortcode("[wp_login_form]"); ?>
</div>

<?php get_footer(); ?>