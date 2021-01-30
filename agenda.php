<?php /* Template Name: Agenda */ ?>

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
    	<div class="table-wrapper">
    		<h3>Collegue Conference</h3>
    	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	    <?php the_content(); ?>
    	    <?php endwhile; ?>
    	</div>

    	<div class="agenda-images-wrapper">
    		<?php if( have_rows('agenda_images') ): ?>
    	        <?php while(have_rows('agenda_images')): the_row(); ?>
    	            <div class="images-section">
    	                <img src="<?php the_sub_field( 'image' ) ;?>">
    	            </div>
    	        <?php endwhile; ?>
    	    <?php endif; ?>
    	</div>
    </div>

    <div class="btns-wrapper">
        <a href="agenda" class="cta">Agenda</a>
        <a href="mailto:rexel@firstevent.co.uk" target="_blank" class="cta">Technical support</a>
    </div>
    <br>
</div>

<?php get_footer(); ?>