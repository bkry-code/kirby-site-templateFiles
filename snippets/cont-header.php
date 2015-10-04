<?php
// -------------------------------------------
// kirby snippet GENERAL
// Title:  header
// funct:  section: header

// copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
// license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License

// version: 1.0 (16.11.2014)
// changelog:
// -------------------------------------------
?>

<noscript><div style="background-color: yellow; color: black; font-size: 20px; width: 100%; text-align: center;">
  Bitte aktivieren Sie Javascript, damit diese Webseite korrekt funktioniert.<br>Please enable javascript for the correct function of this site.
</div></noscript>
<!--[if lte IE 8]>
<style>
  div.IE {border: 1px solid red;background-color: yellow;}
  div.IE p {margin:0;}
</style>
<div class="IE"><p>Diese Webseite verwendet die modernen Webstandards CSS3 und HTML5. Damit diese Webseite korrekt dargestellt wird, verwenden Sie bitte einen Browser, der diese Standards unterstützt.<br>
z.B. <a href="http://www.opera.com">Opera</a>, <a href="https://www.google.de/chrome/browser/desktop/">Google Chrome</a> oder <a href="https://www.mozilla.org/de/firefox/new/">Firefox</a>. Diese Browser wurden in der jeweils aktuellsten Version auf Windows XP und neuer getestet und stellen die Webseite korrekt dar!</p></div>
<![endif]-->

<header class="section" id="header" role="banner"><div class="container">
  <a class="logo" href="<?php echo url() ?>">
    <h1 id="logo"><?php echo $site->title() ?></h1>
  </a>
</div></header>
