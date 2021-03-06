<?php

//Developer Section
$developer_title  = get_field('developer_title');
$developer_name  = get_field('developer_name');
$developer_image  = get_field('developer_image');
$bio_excerpt  = get_field('bio_excerpt');
$bio_full  = get_field('bio_full');
$numbers_title  = get_field('numbers_title');
$left_number  = get_field('left_number');
$left_number_text  = get_field('left_number_text');
$middle_number_  = get_field('middle_number_');
$middle_number_text  = get_field('middle_number_text');
$right_number  = get_field('right_number');
$right_number_text  = get_field('right_number_text');

?>

<!-- THE Developer  ---------------------------->
<section id="developer" class="section-padding">
    <div class="container ">
        <div class="row"><!--Developer row---------------------------------->
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-8 "><!--Left column--->
                        <div class="row">
                            <div class="col-md-9 col-xs-9 ">
                                <h2 style="margin-bottom: 0" class="displayInlineBlock developer-name"><?php echo $developer_title?> </h2>
                                <div class=""><small><?php echo $developer_name?></small></div>
                            </div>
                            <div class="col-md-3 col-xs-3 ">
                                <?php $loop = new WP_Query(array('post_type'=>'social_media_icons',
                                    'orderby'=>'post_id','order'=>'ASC'));?>


                                <?php while ($loop->have_posts()): $loop->the_post();?>
                                    <a class="<?php the_field('social_icons_style')?>" href="<?php the_field('social_link') ?>" target="_blank">
                                        <i class="<?php the_field('social_icons') ?>"></i>
                                    </a>

                                <?php endwhile; wp_reset_query()?>



                            </div>
                        </div>
                    </div>

                    <div class=" col-md-4  developer-image"><!--Right column--->
                        <img  class="img-responsive resources-img" src="<?php echo $developer_image['url']?>" alt="Developer George Tourtsinakis">
                    </div>
                </div>
                <div class="row">
                    <div  class="col-md-8 ">
                        <p><strong><?php echo $bio_excerpt?></strong></p>
                        <?php if(!empty($bio_full)):?>
                            <p><?php echo $bio_full?></p>
                        <?php endif;?>
                    </div>

                </div>
                <hr>
                <div class="row "><!--Numbers row------------------->

                    <h3 class="align-center"><?php echo $numbers_title?></h3>
                    <div class="col-xs-4 features-img-boxes">
                        <div class="num ">
                            <div class="num-content ">
                                <?php echo $left_number?><span> <?php echo $left_number_text?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 features-img-boxes">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $middle_number_?><span> <?php echo $middle_number_text?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 features-img-boxes">
                        <div class="num">
                            <div class="num-content">
                                <?php echo $right_number?><span> <?php echo $right_number_text?></span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div><!--End developer row------------------------------------->
    </div><!--End container-------------------->
</section><!--End developer section------------->

