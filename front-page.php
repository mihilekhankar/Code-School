<?php get_header(); ?>

    <div id="banner">
        <h1>&lt;Code School/&gt;</h1>
        <h3>Learn by doing</h3>
    </div>
    <main>
        <a href="<?php echo site_url('/blog'); ?>">
            <h2 class="section-heading">All Blogs</h2>
        </a>

<!-- Blog-section -->
        <section>

        <?php 

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
        );

        $blogposts = new WP_Query($args);

        while($blogposts->have_posts()) {
            $blogposts->the_post();
        
        
        ?>

            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php echo the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php echo the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>

        <?php }
                wp_reset_query(); 
        ?>

    </section>

<!-- project-section -->
        <h2 class="section-heading">All Projects</h2>
        <section>
        <?php 

$args = array(
    'post_type' => 'project',
    'posts_per_page' => 2,
);

$projects = new WP_Query($args);

while($projects->have_posts()) {
    $projects->the_post();


?>

    <div class="card">
        <div class="card-image">
            <a href="<?php echo the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
            </a>
        </div>
        <div class="card-description">
            <a href="<?php echo the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <p>
                <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
            </p>
            <a href="<?php echo the_permalink(); ?>" class="btn-readmore">Read more</a>
        </div>
    </div>

<?php }
        wp_reset_query(); 
?>
            </section>

            <h2 class="section-heading">Source Code</h2>
            <section id="section-source">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a href="#" class="btn-readmore">GitHub Profile</a>
            </section>

<?php get_footer(); ?>
            