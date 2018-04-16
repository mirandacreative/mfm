<!-- Video with Text -->
<div class="videotext">
  <section class="container" >
    <div class="row">
      <div class="col-lg-10 col-md-12">
        <div class="video-wrapper">
          <div class="video-poster" style="background-image: url(<?php the_sub_field('video_poster'); ?>); height:500px;"></div>c
          <!--  <iframe id="video" width="640" height="360" src="https://youtu.be/GdSxFRq5BeQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>        -->
        </div>
        <div class="content"> <!-- This needs to be css --> 
         <h2><?php the_sub_field('title'); ?></h2>
          <p><?php the_sub_field('descriptions'); ?></p>
          <a class="justify-content-center" href="<?php the_sub_field('link_url'); ?>"><?php the_sub_field('link_text'); ?></a>
        </div>
      </div>
    </div>
  </section>
</div>