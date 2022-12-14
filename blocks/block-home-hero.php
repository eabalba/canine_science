<?php
/**
 * Block Name: Home Page Hero
 *
 * A Cover Image block with Heading specifically for the home page
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'home-hero block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block home-hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$button = get_field('home_hero_button')

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> alignfull has-background">
    <div class="hero__animation">
        <div class="hero__text-container alignwide">
            <div class="hero__text">
                <?php the_field('home_hero_content'); ?>
                <?php if ($button) : ?>
                    <a class="button" href="<?php echo esc_url( $button['url'] ); ?>"><?php echo esc_html($button['title']); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="hero__image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imac.png" class="hero__screen">
            <?php 
                $rows = get_field('home_hero_images');
                if($rows){
                    shuffle( $rows );
                    $i = 0;
                    foreach($rows as $row){
                        $image = $row['image'];
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size,"", array ('class' => 'hero__bg' ) );
                            }
                        if (++$i == 1) break;
                    }
                }
            ?>
            <div class="hero__overlay"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="48" viewBox="0 0 43 48" class="hero__play-button">
                <path id="Polygon_1" data-name="Polygon 1" d="M22.254,3.129a2,2,0,0,1,3.493,0l20.593,36.9A2,2,0,0,1,44.593,43H3.407A2,2,0,0,1,1.66,40.025Z" transform="translate(43) rotate(90)" fill="#fff"/>
            </svg>
        </div>
    </div>
</div>

