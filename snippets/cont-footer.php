<?php
// -------------------------------------------
// kirby snippet GENERAL
// Title:  footer
// funct:  section: footer

// copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
// license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License

// version: 1.0.1 (27.11.2014)
// changelog: 
// v1.0.1: with kirbytextRaw
// -------------------------------------------
?>

<footer class="section" id="footer" role="contentinfo"><div class="container">
  <p id="copyright"><?php echo $site->copyright()->kirbytextRaw() ?></p>
  <p id="info"><?php echo $site->webdesigner()->kirbytextRaw() ?></p>
  <div class="clearfix"></div>
</div></footer>
