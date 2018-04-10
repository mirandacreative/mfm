<!-- This is a ternary operator that chooses the default hero if an overide wasnt chosen on a ind page -->
<?php 
$herourl = get_field('hero') ? get_field('hero') : get_field('default_hero', 'option'); 
?>
<header class="hero" style="background: url(<?= $herourl ?>) no-repeat;    background-size: cover;">
  <div class="hero-inner">
   <div class="search">
      <span class="fa fa-search"></span>
      <input placeholder="Search...">
    </div>
    <div class="mx-auto logo-hold">   	
      <img src="<?php the_field('logo', 'option'); ?>">
    </div>
  </div>
</header>