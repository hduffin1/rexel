<?php /* Template Name: Home */ ?>

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

            <div class="content-banner">
                <h3>Join us virtually and get ready for take off!<br>
                Please join us to hear our exciting five year mission.</h3>
            </div>
        </div>
    </div>
</div>

<div class="reg-wrapper">
    <div class="container">
        <div class="reg-box">
            <div class="reg-banner">
                <h2>Register Now</h2>
            </div>

            <div class="form-wrapper">
                <?php the_field('reg_form');?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>