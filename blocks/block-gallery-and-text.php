<?php
/**
 * Block Name: Gallery and Text
 *
 * A block with a gallery column and a text column
 */


 // Create id attribute allowing for custom "anchor" value.
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block gallery-and-text';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$gtAlignment = get_field('gallery_and_text_alignment');
$gallCol = get_field('gallery_column');
$txtAlignment = get_field('text_alignment');
$gtContent = get_field('gallery_text_content');
$btn = get_field('button');





?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo $gtAlignment; ?>">

        <div class="gt_text_column <?php echo $txtAlignment; ?>_text">
            <div class="gt_text_column_content">
                <?php echo $gtContent ; ?>
                <?php if($btn): ?>
                    <a class="button"  href="<?php echo $btn['url'] ?>">
                        <?php echo esc_html( $btn['title'] ); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    
    <?php 
    if( $gallCol ): ?>
        <div class="gt_gallery_column">
            <ul class="gt_gallery">
                <?php foreach( $gallCol as $image): ?>
                    <li class="gt_gallery_image">
                    <?php 
                        $size = 'large'; // (thumbnail, medium, large, full or custom size)
                        echo wp_get_attachment_image( $image, $size );
                         ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    
   
    <?php endif; ?>
</div>