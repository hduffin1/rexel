<?php /* Template Name: Welcome */ ?>

<?php get_header(); ?>

<?php get_template_part('templates/banner'); ?>

<div class="title-wrapper">
    <div class="container">
        <div class="title-box">
            <div class="title-banner">
                <h2><?php the_field('page_title');?></h2>
            </div>
        </div>
    </div>
</div>

<div class="live-stream-wrapper">
    <div class="container">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>

            <div class="login-wrapper">
                <h3>Login Now</h3>
                <?php echo do_shortcode("[wp_login_form]"); ?>
            </div>

        <div class="btns-wrapper">
            <a href="" class="cta">Agenda</a>
            <a href="" class="cta">Technical support</a>
        </div>

        <p class="queries">If you have any questions please contact <a href="mailto:rexel@firstevent.co.uk">rexel@firstevent.co.uk</a> </p>
    </div>
</div>

<?php get_footer(); ?>