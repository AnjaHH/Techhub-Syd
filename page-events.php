<meta
  name="description"
  content="Mary's simple recipe for maple bacon donuts
           makes a sticky, sweet treat with just a hint
           of salt that you'll keep coming back for.">

           
<?php get_header () ?>


<section>

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
<div id="main-events" class="d-flex justify-content-center">

    
    <h1 style="padding:50px ; padding-top:80px;"><?php the_title() ?></h1>
    </div>
    
    <div id="card-container" class="container">
        <div class="row">
                <?php 
                $args = array(
                    "post_type" => "events",
                    "meta_key" => "event_date",
                    "orderby" => "meta_value",
                    "order" => "ASC", // DESC
                    "meta_query" => array(
                        array(
                            "key"     => "event_date",
                            "value"   => date("Ymd"),
                            "type"    => "numeric",
                            "compare" => ">="
                        ),
                    )
                );

                $loop = new WP_Query($args); ?>
                <?php while($loop->have_posts()): $loop->the_post() ?>
                <div class="col-sm-4 col-12">
                    <div style="border:none; background-color:#F4f1f1;" class="card">
                        <div class="eventholder " style="margin: 20px; background-image: url(<?php the_field("event_img") ?>)">
                            <div class="event-text">
                                <h4><?php the_field("event_category") ?></h4>
                                <h3><?php the_field("event_date") ?></h3>
                            </div>
                            <div id="event-text-bottom" class="d-flex flex-column">
                                    <h1><?php the_title() ?> </h1>
                                    <h2><?php the_field("event_place") ?></h2>
                                    <div class="eventlink">
                                         <li><a href="<?php the_field("event_link") ?>">Get your ticket here!</a></li>
                                     </div>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <?php endwhile ?>
                <?php wp_reset_postdata() ?>
        </div>
    </div>



    <?php endwhile; ?>
    <?php else: ?>
            <p>Sorry, we did not find any content to share here.</p>
    <?php endif; ?>
    </section>

    <?php get_footer () ?>


    