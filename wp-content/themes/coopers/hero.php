<?php
$upload_dir = wp_get_upload_dir();
$upload_url = $upload_dir['baseurl'];
?>

<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">
            <?php
            the_field('hero_title');
            ?>
            <span class="hero-subtitle">
                <?php
                the_field('hero_subtitle');
                ?>
            </span>
        </h1>
        <p class="hero-description">
            <?php
            the_field('Hero_paragraph');
            ?>
        </p>
        <a href="#to-do-list" class="hero-button">
            <?php
            the_field('hero_navigate_button');
            ?>
        </a>
    </div>
    <div class="hero-arrow-down">
        <a href="#to-do-list">
            <img src="<?php echo the_field('arrow_down'); ?>" alt="arrow down" />
        </a>
    </div>

    <img src="<?php echo the_field('bg_hero_1'); ?>" class="hero-background" alt="Background" />
    <img src="<?php echo the_field('bg_hero_2'); ?>" class="hero-background-2" alt="Background2" />

</section>