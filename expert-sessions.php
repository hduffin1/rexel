<?php /* Template Name: Expert Sessions */ ?>

<?php get_header(); ?>

<div class="banner-wrapper">
    <div class="heading-wrapper">
        <div class="container">
            <h1>Mission <span>Possible</span></h1>

            <div class="conf-banner">
                <h2>Colleague Conference <span>2021</span></h2>
            </div>

            <div class="date-banner">
                <h2>TUESDAY, 9 FEBRUARY  |  8.30AM – 3.45PM</h2>
            </div>
        </div>
    </div>
</div>

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