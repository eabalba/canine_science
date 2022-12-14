<?php
/**
 * Block Name: Teacher's Cards
 *
 * Cards with teacher's image and information
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block teachers_cards';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$cardDescription = get_field('card_description');


?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> alignwide has-silver-background-color">
    <div class="teachers_card_container">
        <div class="card_header">
            <?php echo $cardDescription; ?>
        </div>
        <?php
        if( have_rows('team_members', 'option') ): ?>
            <div class="cards_wrapper">
            <?php while( have_rows('team_members', 'option') ): the_row();

            //Repeater Variables
            $name = get_sub_field('teachers_name');
            $blurb = get_sub_field('teachers_blurb');
            $image = get_sub_field('teachers_image');
            $facebook = get_sub_field('facebook');
            if($blurb): ?>
                <div class="teachers_single_card">
                <!-- Getting the image and Printing it -->
                    <?php if ($image) : ?>
                        <?php if ($facebook) : ?>
                            <a href="<?php echo esc_url($facebook['url']); ?>" target="_blank" class="teachers_link teachers_image_group">
                            <?php else:?>
                            <div class="teachers_image_group">
                        <?php endif; ?>
                        <?php
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            echo wp_get_attachment_image( $image, $size );
                        ?>
                       <?php if ($facebook) : ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="39.637" height="39.637" viewBox="0 0 39.637 39.637">
                                    <path id="facebook_2" data-name="facebook 2" d="M37.449,0H2.188A2.188,2.188,0,0,0,0,2.188V37.45a2.187,2.187,0,0,0,2.188,2.187H21.173V24.288H16.007V18.306h5.166V13.894c0-5.12,3.126-7.908,7.695-7.908a42.373,42.373,0,0,1,4.616.236v5.351l-3.168,0c-2.484,0-2.965,1.181-2.965,2.912v3.82h5.924L32.5,24.289H27.351V39.637h10.1a2.187,2.187,0,0,0,2.185-2.188V2.188A2.188,2.188,0,0,0,37.449,0Z" fill="#fff"/>
                                </svg>
                            </a>
                        <?php else: ?>
                            </div>
                        <?php endif; ?>
                    
                    <?php endif; ?>
                    <div class="teachers_info">
                       <h3><?php echo $name; ?></h3>
                        <?php echo $blurb; ?>
                    </div>
                </div>
            <?php endif; endwhile; ?>
            </div>
            
        <?php endif;  ?>

        <?php $cardBtn = get_field('card_button');
        if ($cardBtn) : ?>
            <div class="text_buttons teachers_cards_buttons">
                <a class="text_button teachers_cards_button" href="<?php echo $cardBtn['url']; ?>"><?php echo esc_html($cardBtn['title']); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.971" height="16.971" viewBox="0 0 16.971 16.971">
                     <path id="Path_18" data-name="Path 18" d="M-17224.033,916.564h10v10" transform="translate(12835.824 11532.536) rotate(45)" fill="none"  stroke-linecap="round" stroke-width="2"/>
                    </svg>
                </a>
            </div>
        <?php endif; ?>
    </div>

</div>
