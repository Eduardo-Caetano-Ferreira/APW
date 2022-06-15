<?php get_header();?>
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
    ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h2><?php the_title(); ?> </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p> <?php the_content(); ?> </p> 
                    </div>
                </div>
    <?php
            }
        }
    ?> 