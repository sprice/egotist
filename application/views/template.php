<!DOCTYPE>
<html>
<head>
  <?php if ($styles) : ?>
    <?php foreach ($styles as $style) : ?>
      <link rel="stylesheet" href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" type="text/css" media="screen" />
    <?php endforeach; ?>
  <?php endif ?>
  <?php if ($scripts) : ?>
    <?php foreach ($scripts as $script) : ?>
      <script src="<?php echo URL::base(); ?>public/js/<?php echo $script; ?>.js" /></script>
    <?php endforeach; ?>
  <?php endif ?>
  <title><?php echo $site_name; ?></title>
</head>
<body>
  <div id="container">
    <div id="header">
      <?php echo View::factory('common/header'); ?>
    </div>
    <div id="content">
      <?php echo $content; ?>
    </div>
    <div id="footer">
      <?php echo View::factory('common/footer'); ?>
    </div>
  </div>
</body>
</html>