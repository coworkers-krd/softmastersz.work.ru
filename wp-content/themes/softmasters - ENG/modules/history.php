<section class="history" id="history">
    <div class="container">
        <h2 class="section-title">Company history</h2>
        <div class="history__box">
            <div class="history__btn history__btn--next"></div>
            <div class="history__btn history__btn--prev"></div>
            <div class="history__wrapper">

                <?php
                $terms = get_terms( array(
                    'taxonomy'      => 'years',
                    'orderby'       => 'name',
                    'order'         => 'ASC',
                ) );
                $items_count = count($terms);
                ?>

                <?php

                foreach( $terms as $term ){
                    $items_count--;
                    ?>

                    <div class="history__case<?=($items_count==0)? " active":""?>">
                        <h3 class="history__year"><span class="history__number"><?=$term->name?></span> year</h3>
                        <div class="history__content">
                            <ul>
                                <?php
                                    global $post;
                                    $args = array( 'numberposts' => -1 ,'post_type' => 'history','years' => $term->name );
                                    $myposts = get_posts( $args );
                                    foreach( $myposts as $post ){ setup_postdata($post);
                                        ?>
                                <li>
                                    <h3><?php the_title(); ?> </h3>
                                    <p><?php the_content(); ?></p>
                                </li>
                                <?
                                    }
                                    wp_reset_postdata();

                                    ?>

                            </ul>
                        </div>
                    </div>
                <?
                }
                ?>



            </div>
        </div>
    </div>
</section>