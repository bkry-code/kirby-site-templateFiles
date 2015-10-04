<?php
// -------------------------------------------
// kirby snippet GENERAL
// Title:  html-end
// funct:  scripts etc + close body

// copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
// license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License

// version: 1.3.0 (22.08.2015)
// changelog:
// v1.0.1: bugfix for fancybox
// v1.1.0: add swipebox support
// v1.2.0: new paths for new assets folder structure
// v1.2.1: add navbar affix script
// v1.3.0: with new plugin option names
// -------------------------------------------
?>


<!-- Bootstrap core JavaScript-->
  <?php echo js('assets/jquery-2.1.1.min.js') ?>
  <?php echo js('assets/bootstrap/js/bootstrap.min.js') ?>

<?php if (c::get('navbar-affix')) : ?>
  <script>
    $('.navbar-wrapper').affix({
          offset: {
            top: $('header').height()
          }
    });
  </script>
<?php endif; ?>

<?php if (c::get('plg_masonry.enable')) : ?>
  <?php echo js('assets/masonry/dist/masonry.pkgd.min.js') ?>
<?php endif; ?>

<?php if (c::get('plg_masonry.lightbox')=='fancybox') : ?>
  <?php echo css('assets/fancybox/source/jquery.fancybox.css') ?>
  <?php echo js('assets/fancybox/source/jquery.fancybox.pack.js') ?>
<?php endif; ?>

<?php if (c::get('plg_masonry.lightbox')=='swipebox') : ?>
  <?php echo js('assets/swipebox/src/js/jquery.swipebox.min.js') ?>
<?php endif; ?>

<?php if (c::get('plg_carousel.enable')) : ?>
  <script type="text/javascript">
    $(document).ready(function () {
      $('.carousel').carousel('cycle');
    });
  </script>
<?php endif; ?>

<?php if (c::get('plg_masonry.lightbox')=='fancybox') : ?>
  <script type="text/javascript">
    $(document).ready(function () {
      $('.fancybox').fancybox({
          nextEffect: 'fade',
          prevEffect: 'fade'
      });
    });
  </script>
<?php endif; ?>
<?php if (c::get('plg_masonry.lightbox')=='swipebox') : ?>
  <script type="text/javascript">
  $(document).ready(function () {
    $('.swipebox' ).swipebox();
  });
  </script>
<?php endif; ?>

<?php if (c::get('plg_masonry.enable')) : ?>
  <script type="text/javascript">
    $('#masonry').masonry({
      isFitWidth: true,
      columnWidth: <?php echo c::get('plg_masonry.width') ?>,
      gutter: 10,
      itemSelector: '.masonryitem'
    });
  </script>
<?php endif; ?>

</body>
</html>
