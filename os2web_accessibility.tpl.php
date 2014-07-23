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

    <div class="print-site_name" style="margin: 20px 20px; font-size: 24px;"><div class="print-logo" style="display: inline-block; margin-right: 10px;"><?php print $handicap['logo']; ?></div><?php print $handicap['site_name']; ?><hr></div>
    <p />
    <div class="print-breadcrumb" style="margin: 0 20px 0 40px;"><?php print $handicap['breadcrumb']; ?><hr class="print-hr" /></div>

    <div class="print-content" style='margin-bottom: 10px; max-height: 970px;'>
      <?php $nid = variable_get('os2web_accessibility_node_content');
            $arg = arg(1);
            $arg_0 = arg(0);
        if((isset($arg) && $nid != $arg) ||($arg_0 != "handicap" && !$arg)): ?>
          <div><a href="/handicap" style="text-decoration: underline">Tilbage til Handicap forside</a></div>
        <?php endif; ?>
      <div class="handicap-menu" style="float: left; width:200px; min-height: 200px;clear:both;">
        <?php print $menu; ?>
      </div>
      <div class="handicap-content" style="float:left; width: 600px;">
        <?php print $handicap['content']; ?></div>
      <div class="handicap-right" style="float: right; width: 300px; min-height: 300px;">
        <?php print $right_blocks; ?></div>
      </div>
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
