<?php
/**
 * Block Name: Cover Image
 *
 * A block with an image as background
 */


 // Create id attribute allowing for custom "anchor" value.
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if ( ! empty( $block['backgroundColor'] ) ) {
	$className .= ' has-background has-background-color has-' . $block['backgroundColor'] . '-background-color';
}
if ( ! empty( $block['textColor'] ) ) {
	$className .= ' has-text-color has-' . $block['textColor'] . '-color';
}


$coverContentAlign = get_field('cover_content_alignment');

$coverContent = get_field('cover_content');
$coverButton = get_field('cover_button');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> cover-block alignfull has-background ">
    
    <div class="cover_container <?php echo esc_attr($coverContentAlign); ?>"> 
        <div class="cover_content">
            <?php echo $coverContent ?>
            <?php
            if( $coverButton ): ?>
                <a id="cover_button" role="button" class="button cover_button" 
                    href="<?php echo $coverButton['url'] ?>" 
                    target="<?php echo esc_attr($coverButton['link_target'])?>">
                <?php echo esc_html( $coverButton['title'] ); ?>
                </a>
            <?php endif; ?>
                
        </div> 
    </div>
    <?php 
    $image = get_field('cover_image');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if( $image ) {
        echo wp_get_attachment_image( $image, $size );
    } ?>
</div>
