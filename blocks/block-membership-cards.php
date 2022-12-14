<?php
/**
 * Block Name: Membership Cards
 *
 * Columns Block that has coloured heading and border.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block membership_cards';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    
    <div class="membership_cards_header">
        <?php echo get_field('membership_block_content') ;?>
        
        <?php $mainBtn =  get_field('membership_block_button');
        
        if ($mainBtn) : 
            $btnLink = $mainBtn['url'];
            $btnTitle =$mainBtn['title'];
        ?>  
        

            <a class="button" href="<?php echo esc_url($btnLink);?>">
                <?php echo esc_html($btnTitle); ?>
            </a>
        <?php endif; ?>    
    </div>
    
        <div class="membership_cards_container">

    

        <?php if (have_rows('membership_cards')) : ?>
            <?php while (have_rows('membership_cards')) : the_row(); 
            $content = get_sub_field('card_content');
            $button = get_sub_field('card_button');
            $color = get_sub_field_object('card_colour');
            ?>
            <div class="membership_card color-<?php echo esc_attr($color['value']); ?>">
                <div class="membership_card_content"><?php echo $content; ?></div>
                <?php
                if( $button ): ?>
                        <span class="button" >
                            <?php echo esc_html( $button['title'] ); ?>
                        </span>
                    <a href="<?php echo $button['url'] ?>" class="membership_card_link" title="<?php echo esc_html( $button['title'] ); ?>"></a>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>    
</div>
