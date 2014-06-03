<?php

/**
 * @file
 * Default print module template
 *
 * @ingroup print
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $print['language']; ?>" xml:lang="<?php print $print['language']; ?>">
  <head>
    <?php print $handicap['head']; ?>
    <?php print $handicap['base_href']; ?>
    <title><?php print $handicap['title']; ?></title>
    <?php print $handicap['scripts']; ?>
    <?php print $handicap['robots_meta']; ?>
    <?php print $handicap['favicon']; ?>
    <?php print $handicap['css']; ?>
    <link type="text/css" rel="stylesheet" media="screen" href="itchefer.bellcom.dk/sites/all/themes/itchefer_theme/css/print.css">
  </head>
  <body style="font-size:13px; margin-bottom: 0px; max-height: 970px">
    <?php if (!empty($handicap['message'])) {
      //print '<div class="print-message">'. $handicap['message'] .'</div><p />';
    } ?>
    <div class="print-yani"><?php print $handicap['logo']; ?></div>
    <div class="print-site_name"><?php //print $handicap['site_name']; ?></div>
    <p />
    <div class="print-breadcrumb"><?php //print $handicap['breadcrumb']; ?></div>
    <!--<hr class="print-hr" /> -->
    <div class="print-content" style='margin-bottom: 10px; max-height: 970px;'>
      <div class="handicap-menu" style="float: left; width:200px; min-height: 200px;clear:both;">
        <?php print $menu; ?>
      </div>
      <div class="handicap-content" style="float:left; width: 600px;">
        <?php print $handicap['content']; ?></div>
      <div class="handicap-right" style="float: right; width: 300px; min-height: 300px;"></div>
    </div>
    <div class="print-foot" style = "width:100%; clear:both">
      <hr class="" />
      <?php print $handicap['footer_message']; ?>

    </div>
    <div class="print-source_url"><?php //print $handicap['source_url']; ?></div>
    <div class="print-links"><?php //print $handicap['pfp_links']; ?></div>
    <?php print $handicap['footer_scripts']; ?>
  </body>
</html>
