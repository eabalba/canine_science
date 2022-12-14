<?php
/**
 * Block Name: Banner
 *
 * Text Banner with options for background colour or image
 */

$allowed_blocks = array( 'core/buttons','core/button','core/heading', 'core/paragraph', 'acf/button');
$template = array(
	array('core/heading', array(
		'level' => 2,
		'placeholder' => 'Title Goes Here',
        'textAlign' => 'center',

	)),
    array('core/paragraph', array(
		'placeholder' => 'Main Content Goes Here',
        'align' => 'center',

	)),
);

 // Create id attribute allowing for custom "anchor" value.
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block banner';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" template="' . esc_attr( wp_json_encode( $template ) ) . '" />'; ?>
</div>
