<?php /* Template Name: Expert Sessions */ ?>

<?php get_header(); ?>

<?php get_template_part('templates/banner'); ?>

<div class="container">
    <div class="expert-session-holder">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
    </div>

    <div class="btns-wrapper">
            <a href="agenda" class="cta">Agenda</a>
            <a href="mailto:rexel@firstevent.co.uk" target="_blank" class="cta">Technical support</a>
        </div>
    <br>
</div>


<?php get_footer(); ?>