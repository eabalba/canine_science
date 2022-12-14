
<footer>
    <div class="footer_container">
        <div class="footer_guarantees_section">
        <?php 
            $post = get_post(429); 
            $content = apply_filters('the_content', $post->post_content); 
            echo $content;  
        ?>
        </div>


        <div class="footer_links_section">
            <div class="footer_links-column footer_links-pages">
                <p>©2022 The School of Canine Science</p>
                <?php 	
                wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );
                ?>
            </div>
            <div class="footer_links-column">
            <?php 
                $post = get_post(435); 
                $content = apply_filters('the_content', $post->post_content); 
                echo $content;  
            ?>
            </div>
            <div class="footer_links-column footer_links-socials">
                <?php if( have_rows('team_members', 'option') ):
                    while( have_rows('team_members', 'option') ): the_row();
                        $tName = get_sub_field('teachers_name'); //teacher's name
                        if(get_sub_field('use_links_in_footer')):
                            $tFacebook = get_sub_field('facebook');
                            $tInstagram = get_sub_field('instagram');
                            $tLinkedin = get_sub_field('linkedin');
                            $tYoutube = get_sub_field('youtube');
                            $tTiktok = get_sub_field('tiktok');
                            
                            if($tFacebook): ?>
                                <a href="<?php echo esc_url($tFacebook['url']);?>" title="<?php echo $tFacebook['title']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                                    Facebook
                                </a>
                            <?php endif; ?>
                            <?php if($tInstagram): ?>
                                <a href="<?php echo esc_url($tInstagram['url']);?>" title="<?php echo $tInstagram['title']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                    Instagram
                                </a>
                            <?php endif; ?>
                            <?php if($tTiktok): ?>
                                <a href="<?php echo esc_url($tInstagram['url']);?>" title="<?php echo $tInstagram['title']; ?>">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    width="240.000000pt" height="240.000000pt" viewBox="0 0 240.000000 240.000000"
                                    preserveAspectRatio="xMidYMid meet">

                                    <g transform="translate(0.000000,240.000000) scale(0.100000,-0.100000)"  stroke="none">
                                    <path d="M1258 1493 l-3 -778 -23 -50 c-30 -65 -93 -128 -156 -157 -41 -18
                                    -69 -23 -141 -23 -115 0 -175 25 -243 100 -58 64 -82 130 -82 229 0 208 197
                                    358 411 311 l29 -7 0 180 c0 155 -2 181 -16 186 -9 3 -55 6 -103 6 -260 0
                                    -501 -150 -616 -385 -49 -100 -69 -183 -68 -295 0 -321 199 -583 503 -666 89
                                    -24 281 -24 370 0 229 63 409 241 477 471 15 52 18 115 21 466 l3 406 77 -38
                                    c113 -55 239 -89 360 -96 l102 -6 0 191 0 192 -53 0 c-76 0 -202 35 -266 73
                                    -120 72 -220 266 -221 430 l0 37 -180 0 -180 0 -2 -777z"/>
                                    </g>
                                    </svg>
                                    TikTok
                                </a>
                            <?php endif; ?>
                            <?php if($tYoutube): ?>
                                <a href="<?php echo esc_url($tYoutube['url']);?>" title="<?php echo $tYoutube['title']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                                    Youtube
                                </a>
                            <?php endif; ?>
                            <?php if($tLinkedin): ?>
                                <a  href="<?php echo esc_url($tLinkedin['url']);?>" title="<?php echo $tLinkedin['title']; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                                    Linkedin
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="footer_links-column">
                <p>Website by <a href="https://www.bamboonine.co.uk/">Bamboo Nine</a></p>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>
</html>