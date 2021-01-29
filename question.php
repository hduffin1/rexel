<?php /* Template Name: Question */ ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
    <meta name="description" content="">

    <title></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/sass/css.css?v=3" />
    <script>(function(H){H.className=H.className+="js"})(document.documentElement)</script>
  </head>
<body>

<div class="question">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/nav.js"></script>
</body>
</html>


