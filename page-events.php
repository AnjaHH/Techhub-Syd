<?php get_header () ?>


<section>
<div id="main-events" class="d-flex justify-content-center">
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
    
    <h1><?php the_title() ?></h1>
    </div>
    
    <div id="card-container" class="container">
        <div class="row">
                <?php $loop = new WP_Query(array("post_type" => "events", "posts_per_page" => -1)) ?>
                <?php while($loop->have_posts()): $loop->the_post() ?>

                    <div style="border:none; background-color:#F8F7F7;" class="card col-sm-4 col-12 ">
                        <div class="eventholder " style="background-image: url(<?php the_field("event_img") ?>)">
                            <div class="event-text">
                                <h4 style="background-color: rgba(0, 0, 0, 0.5)"><?php the_field("event_category") ?></h4>
                                <h3 style="background-color: rgba(0, 0, 0, 0.5)"><?php the_field("event_date") ?></h3>
                                <h1 style="background-color: rgba(0, 0, 0, 0.5)"><?php the_title() ?> </h1>
                                <h2 class="d-flex align-items-stretch" style="background-color: rgba(0, 0, 0, 0.5)"><?php the_field("event_place") ?></h2>
                                
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
                <?php wp_reset_postdata() ?>

            </div>
        </div>
    </div>



    <?php endwhile; ?>
    <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
    <?php endif; ?>
    </section>

    <?php get_footer () ?>


    