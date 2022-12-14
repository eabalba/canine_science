<?php
/**
 * Block Name: Post Aside CTA
 *
 * A CTA block that appears on the sidebar of a single post
 */


 // Create id attribute allowing for custom "anchor" value.
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block post-aside-cta';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}


?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <h2><?php echo get_field('aside_cta_heading'); ?></h2>
    <p><?php echo get_field('aside_cta_content'); ?></h2>

    <?php
    $asideBtn = get_field('aside_cta_button');

    if( $asideBtn ): ?>
    <div class="buttons aside_cta_buttons">
        <a id="cta_button" role="button" class="button cta_button" 
            href="<?php echo $asideBtn['url'] ?>" 
            target="<?php echo esc_attr($asideBtn['link_target'])?>">
        <?php echo esc_html( $asideBtn['title'] ); ?>
        </a>
    </div>
    <?php endif; ?>
</div>
