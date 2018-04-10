<!-- Video with Text -->
<div class="videotext">
  <section class="container" >
    <div class="row">
      <div class="col-lg-10 col-md-12">
        <div class="video-wrapper">
          <div class="video-poster" style="background-image: url(img/heroimage-holder.png); height:500px;"></div>
          <!--  <iframe id="video" width="640" height="360" src="https://youtu.be/GdSxFRq5BeQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>        -->
        </div>
        <div class="content"> <!-- This needs to be css --> 
         <h2>Video Module with Text</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit ullamcorper posuere orci porttitor platea integer, blandit neque laoreet nam praesent. Consequat fames nisl netus bibendum</p>
          <a class="justify-content-center" href="#">Video</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Javascript pulled from montville -->
  <script type="text/javascript">
    if(!players) var players = new Array();
    players[6] = {
    id: document.querySelector('#video iframe').getAttribute('id'),
    settings: {
    events: {
    'onReady': onPlayerReady6,
    'onStateChange': onPlayerStateChange6       }
    }
    };
    function onPlayerReady6(event){
    jQuery('#video .video-poster').on('click', function(e){
    event.target.playVideo();
    jQuery(this).closest('.video-wrapper').addClass('playing');
    });
    }
    function onPlayerStateChange6(event) {
    if (event.data == YT.PlayerState.ENDED) {
    jQuery('#video .video-wrapper').removeClass('playing');
    }
    }
  </script>
</div>