<?php
/**
 * Block Name: Webinar Host
 */
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> webinar-host">
   <?php 
   $image = get_field('webinar_host_avatar');
    $size = 'medium'; // (thumbnail, medium, large, full or custom size)
    if( $image ) {
        echo wp_get_attachment_image( $image, $size );
    } ?>
    <div class="webinar-host_text">
        <?php the_field('webinar_host_text'); ?>
    </div>

</div>
