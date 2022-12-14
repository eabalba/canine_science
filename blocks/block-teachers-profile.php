<?php
/**
 * Block Name: Teacher's Profile
 *
 * Profile block with an image, video, and teacher's introduction.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'block teachers-profile';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> alignwide">
    <div class="teachers_profile_heading_wrapper">
       <?php the_field('content')?></h2>
    </div>
    <?php
    if( have_rows('team_members', 'option') ):
        while( have_rows('team_members', 'option') ): the_row();
        $repeater = get_field('team_members');
        $tName = get_sub_field('teachers_name'); //teacher's name
        $tImage = get_sub_field('teachers_image'); //teacher's picture
        $tVideo = get_sub_field('teachers_video'); //teacher's video
        $tProfile = get_sub_field('teachers_profile');//Content Group
        $tButton = get_sub_field('facebook');//Content Button
        ?>
        <?php if($tProfile): ?>
            <div class="teachers_profile_container <?php if($tVideo): ?>video<?php endif; ?>">

                <div class="teachers_heading">
                    <h3>Hi, I'm </br><?php echo $tName ?></h3>
                   
                </div>
                <div class="teachers_photo">
                    <?php 
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if( $tImage ) {
                                echo wp_get_attachment_image( $tImage, $size );
                            } ?>
                        </div>
                <?php if($tVideo): ?>
                    <div class="video">
                        <?php echo $tVideo; ?>
                    </div>
                <?php endif; ?>

                <div class="teachers_profile_body">
                        <div><?php echo $tProfile ?></div>
                        <?php
                if( $tButton ): ?>
                          <div class="text_buttons ">
                            <a class="button text_button" 
                            href="<?php echo $tButton['url'] ?>" 
                            target="<?php echo esc_attr( $tButton['link_target'])?>">
                        Find me on Facebook
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.971" height="16.971" viewBox="0 0 16.971 16.971">
                     <path id="Path_18" data-name="Path 18" d="M-17224.033,916.564h10v10" transform="translate(12835.824 11532.536) rotate(45)" fill="none"  stroke-linecap="round" stroke-width="2"/>
                    </svg>
                        </a>
                </div>
                <?php endif; ?>
                </div>
                
            </div>
        <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
