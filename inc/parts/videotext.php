<!-- Video with Text -->
<div class="videotext">
  <section class="container" >
    <div class="row">
      <div class="col-lg-10 col-md-12">
        <div class="video-wrapper">
          <a href="https://www.youtube.com/embed/<?php the_sub_field('video_id'); ?>" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true" data-featherlight-iframe-width="500" data-featherlight-iframe-height="281"><div class="video-poster" style="background-image: url(<?php the_sub_field('video_poster'); ?>); height:500px;"></div></a>
        </div>
        <div class="content"> <!-- This needs to be css -->
         <h2><?php the_sub_field('title'); ?></h2>
          <p><?php the_sub_field('descriptions'); ?></p>
          <a class="justify-content-center" href="https://www.youtube.com/embed/<?php the_sub_field('video_id'); ?>"data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true" data-featherlight-iframe-width="500" data-featherlight-iframe-height="281"><?php the_sub_field('link_text'); ?></a>
        </div>
      </div>
    </div>
  </section>
</div>
