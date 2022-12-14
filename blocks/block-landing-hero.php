<?php
/**
 * Block Name: Landing Hero Block
 *
 * Cover Page with heading
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block landing_hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$horAlignment = get_field('heading_horizontal_alignment') ;
$verAlignment = get_field('heading_vertical_alignment') ;
$imgAlignment = get_field('image_alignment');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> landing_hero alignfull has-background <?php echo $horAlignment . " " . $verAlignment;?>">
    <div class="landing_hero_overlay"></div>    
    <div class="landing_hero_container ">
        <h1><?php echo get_field('landing_hero_heading_prefix'); ?> <strong><?php echo get_field('landing_hero_heading'); ?></strong></h1>
    </div> 
    <div class="landing_hero_image">
               <?php 
                if (get_field('mobile_image_checkbox')) : 
                    $image = get_field('landing_hero_image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        echo wp_get_attachment_image( $image, $size, "",array('class' => 'landing_hero_desktop_image') );

                    $image = get_field('mobile_image');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)

                        echo wp_get_attachment_image( $image, $size, "",array('class' => 'landing_hero_mobile_image') );
                    else: 
                        $image = get_field('landing_hero_image');
                        $size = 'full'; 
                        echo wp_get_attachment_image( $image, $size, "",array('class' => 'landing_hero_desktop_image solo') );
                endif; ?>
            </div>
    </div>

</div>
