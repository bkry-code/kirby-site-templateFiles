<?php
// -------------------------------------------
// kirby snippet GENERAL
// Title:  html-head
// funct:  create html head + open body

// copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
// license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License

// version: 1.2.1 (14.01.2015)
// changelog: 
// v1.0.1: add masonry css
// v1.1.0: add swipebox support
// v1.2.0: bugfix: masonryitem width value was invalid
// v1.2.1: bring back the meta_robots
// -------------------------------------------
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php if( $page->isHomePage() ) : ?>
  <title><?php echo $site->title()->html() ?> </title>
<?php else : ?>
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
<?php endif; ?>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="author" content="<?php echo $site->author()->html() ?>" >
<?php if ($page->meta_robots()->html() != "") : ?>
  <meta name="robots" content="<?php echo $page->meta_robots()->html() ?>">
<?php endif; ?>
  
  <link rel="shortcut icon" href="<?php echo url('favicon.ico')?>" type="image/x-icon">
  
  <?php echo css('assets/bootstrap/css/bootstrap.min.css') ?>
  <?php echo css('assets/font-awesome/css/font-awesome.min.css') ?>
  
  <?php echo css('assets/css/style.css') ?>
  <?php echo css('@auto') ?>
  
  <!-- Google web fonts -->
    
<?php if (c::get('enable_masonry')) : $width = c::get('masonry_width'); ?>
  <style>
    #masonry {margin: 0 auto;}
      .masonryitem { width: <?php echo $width ?>px; margin-bottom: 10px;}
      .masonryitem.w2 { width: 40%; }
  </style>
<?php endif; ?>

<?php if (c::get('photo_lightbox')=='swipebox') : ?>
  <?php echo css('assets/swipebox/src/css/swipebox.css') ?>
<?php endif; ?>

</head>
<body>
