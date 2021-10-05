<?php
$args = array(  
    'post_type' => 'course',
    'post_status' => 'publish',
    'posts_per_page' => 4, 
);
$loop = new WP_Query( $args ); 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learning Tapestry Coding Challenge</title>
    <meta name="description" content="A simple Template for the Learning Tapestry Coding Challenge.">
    <meta name="author" content="Pedro Figueroa">    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href= "<?php echo plugin_dir_url( __FILE__ ); ?>/courses.css">
</head>
<body>
  <div class='container'>
    <div class='title'>
      <h1>Our courses</h1>
      <h2>Choose from 155,000 online courses with new additions published every month.</h2>
    </div>   
    <div id="results" class='row flex direction-row'>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class='column flex direction-column'>
                <div class='flex direction-row'>
                    <img class='icon' src='<?php echo get_field('image_url'); ?>'>
                    <div>
                      <h3><?php echo get_the_title(); ?></h3>
                      <p><?php echo get_field('extract'); ?></p>
                      <a class='button' href='<?php echo get_permalink(); ?>'>Learn More</a>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <button id="ajax">Load More Courses</button>
  </div>
  <script src='<?php echo plugin_dir_url( __FILE__ ); ?>/load_more_courses.js'></script>
</body>
</html>



