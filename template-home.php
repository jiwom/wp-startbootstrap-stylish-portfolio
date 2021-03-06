<?php

/**
 * Template Name: Home Page
 *
 * @package StartBoostrap
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


/*

 * This Page has the custome field integrated to it!!

 *

 * */
?>

<?php get_header(); ?>

<body <?php body_class(); ?>>


<?php
$banner_1_image = get_field("banner_1_image");
$banner_2_image = get_field("banner_2_image");
?>

<style>
    .header {
        background: url(<?php echo ($banner_1_image) ? $banner_1_image['url'] : '../img/bg.jpg' ?>) no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }

    .callout {
        background: url(<?php echo ($banner_2_image) ? $banner_2_image['url'] : '../img/callout.jpg' ?>) no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }

</style>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <h1><?php echo get_post_meta($post->ID, 'banner-text', true); ?></h1>
        <h3><?php echo get_post_meta($post->ID, 'banner-text-sub', true); ?></h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg"><?php echo get_post_meta($post->ID, 'banner-about-text',
                true); ?></a>
    </div>
</header>


<!-- About -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2><?php echo get_post_meta($post->ID, 'about-text', true); ?></h2>
                <p class="lead"><?php echo get_post_meta($post->ID, 'about-text-sub', true); ?></p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<!-- Services -->

<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->

<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>How I Hustle</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cutlery fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Eat</strong>
                            </h4>
                            <p>Pizza & Beer</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-bed fa-stack-1x text-primary"></i>
                            </span>
                            <h4><strong>Sleep</strong></h4>
                            <p>Sleeping is for the Weak - Patrick</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                            <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-code fa-stack-1x text-primary"></i>
                            </span>
                            <h4><strong>Code</strong></h4>
                            <p>8 - 12 hours / day</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-repeat fa-stack-1x text-primary"></i>
                                </span>
                            <h4> <strong>Repeat</strong></h4>
                            <p>do (work) while (now != restday)</p>
                            <a href="#" class="btn btn-light">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Callout -->
<aside class="callout">
    <div class="text-vertical-center">
        <h1><?php echo get_post_meta($post->ID, 'banner2-text', true); ?></h1>
    </div>
</aside>


<!-- Portfolio -->
<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Our Work</h2>
                <hr class="small">
                <div class="row">
                    <?php
                        if (have_rows('work_repeater')):
                                while (have_rows('work_repeater')) : the_row();
                                    $work_image = get_sub_field('work_image');
                                    $work_link = get_sub_field('work_link');
                    ?>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <a href="<?php echo $work_link; ?>" target="_blank">
                                        <img class="img-portfolio img-responsive"
                                             src="<?php echo $work_image['url']; ?>">
                                    </a>
                                </div>
                            </div>
                    <?php
                                endwhile;
                        endif;
                    ?>
                </div>
                <a href="#" class="btn btn-dark">View More Items</a>
            </div>
        </div>
    </div>
</section>


<!-- Call to Action -->
<aside class="call-to-action bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3>Interactive</h3>
                <a href="#" class="btn btn-lg btn-light">Coming</a>
                <a href="#" class="btn btn-lg btn-dark">Soon!</a>
            </div>
        </div>
    </div>
</aside>


<!-- Map -->
<section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d7728.394524749449!2d121.04139420738595!3d14.415789218343765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x0%3A0x1039c643800bbe6f!2sFestival+Supermall+by+Filinvest!3m2!1d14.416907199999999!2d121.04097829999999!5e0!3m2!1sen!2sph!4v1474530012076"></iframe>
    <br/>
    <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
</section>


<?php get_footer(); ?>





