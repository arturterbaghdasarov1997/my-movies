<?php
    function enqueue_my_styles() {
        wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'enqueue_my_styles');
        get_header();

    $movie_language = get_field('movie_language');
    $movie_genre = get_field('movie_genre');
    $duration = get_the_terms(get_the_ID(), 'duration');
    $movie_description = get_field('movie_description');
    $release_date = get_field('release_date');
    $movie_directors = get_the_terms(get_the_ID(), 'movie-director');
    $movie_director_image = get_field('movie_director_image', 'movie-director_' . $movie_directors[0]->term_id);
    $movie_director_description = get_field('movie_director_description', 'movie-director_' . $movie_directors[0]->term_id);
    $movie_casts = get_the_terms(get_the_ID(), 'movie-cast');

    ?>

    <h1><?php echo get_the_title(); ?></h1>

    <div class="content">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        <h5>Movie Language: <?php echo $movie_language ?></h5>
        <h5>Movie Genre: <?php echo $movie_genre ?></h5>
        <h5>Movie Duration: <?php echo $duration[0]->name ?></h5>
        <div class="decription">
            <?php echo $movie_description ?>
        </div>
        <h4>Movie released on: <?php echo $release_date ?></h4>
        <h2>Movie is directed by <?php echo $movie_directors[0]->name ?></h2>
        <img src="<?php echo $movie_director_image ?>" alt="">
        <p>
            <?php echo $movie_director_description ?>
        </p>
        <h2>Cast Members:</h2>
        <?php if (!empty($movie_casts)) : ?>
            <div class="cast-row">
                <?php foreach ($movie_casts as $cast) : ?>
                    <div class="cast-member">
                        <h3><?php echo $cast->name; ?></h3>
                        <?php
                        $cast_image = get_field('movie_cast_image', 'movie-cast_' . $cast->term_id);
                        if (!empty($cast_image)) :
                        ?>
                            <img src="<?php echo $cast_image; ?>" alt="">
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>