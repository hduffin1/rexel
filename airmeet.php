<?php /* Template Name: Airmeet */ ?>

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
    <div class="container-lg">
        <?php if (is_user_logged_in()): ?>

        <div>
            <div style="position: relative; padding-top: 56.25%;"><iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.airmeet.com/event/96bc93f0-6085-11eb-a868-2b216864010d" frameborder="0" allowfullscreen="allowfullscreen" allow="microphone; camera">
            </iframe></div>
        </div>

        <?php else: ?>
            <div class="login-wrapper">
                <h3>You must be logged in to view this page!</h3>
                <?php echo do_shortcode("[wp_login_form]"); ?>
            </div>
        <?php endif; ?>

        <div class="btns-wrapper">
            <a href="" class="cta">Agenda</a>
            <a href="" class="cta">Technical support</a>
        </div>

        <p class="queries">If you have any questions please contact <a href="mailto:rexel@firstevent.co.uk">rexel@firstevent.co.uk</a> </p>
    </div>
</div>

<?php get_footer(); ?>