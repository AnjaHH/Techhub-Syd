<?php get_header () ?>

<section>
<div class="frontpage">
        <div class="container">
                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>
                        <div id="hero-front" class="row">
                                <h2></h2>
                                <h2></h2>
                        </div>
                        
                        <div id="whatcanwedo" class="row">

                        </div>
                        <div id="steps" class="row">

                        </div>
                        <div id="joinevents" class="row">

                        </div>
                        <div id="partners" class="row">

                        </div>
                        <div id="recommendations" class="row">

                        </div>
                        <div id="newsletter" class="row">

                        </div>
                <?php the_content() ?>
                <?php endwhile; ?>
                <?php else: ?>
                        <p>Sorry, we did not find any content to share here.</p>
                <?php endif; ?>
        </div>
</div>
</section>

   

    <?php get_footer () ?>