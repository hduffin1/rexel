<?php /* Template Name: Question Page */ ?>

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

<div class="container">
    <div class="flex">
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