<div id="logo">
  <?php echo $site_name; ?>
</div>
<p id="tagline">
  <em>Because it's all about you!</em>
</p>
<ul id='main_nav'>
  <li><a href="<?php echo URL::site(); ?>">Home</a></li>
  <li><a href="<?php echo URL::site('page/about'); ?>">About <?php echo $site_name; ?></a></li>
  <li><a href="<?php echo URL::site('page/why_egotist'); ?>">Why use Egotist?</a></li>
</ul>