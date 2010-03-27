<?php
// $Id$
?>
<div class="panel-display clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div id="page" class="container-16 clear-block">
    <div class="panel-panel grid-8 alpha">
      <div class="inside"><?php print $content['top_left']; ?></div>
    </div>
    <div class="panel-panel grid-8 omega">
      <div class="inside"><?php print $content['top_right']; ?></div>
    </div>
  </div>

  <div id="page" class="container-16 clear-block">
    <div class="panel-panel grid-4 alpha">
      <div class="inside"><?php print $content['teaser_1']; ?></div>
    </div>
    <div class="panel-panel grid-4">
      <div class="inside"><?php print $content['teaser_2']; ?></div>
    </div>
    <div class="panel-panel grid-4">
      <div class="inside"><?php print $content['teaser_3']; ?></div>
    </div>
    <div class="panel-panel grid-4 omega">
      <div class="inside"><?php print $content['teaser_4']; ?></div>
    </div>
  </div>

  <div id="page" class="container-16 clear-block">
    <div class="panel-panel grid-16 alpha omega">
      <div class="inside"><?php print $content['bottom']; ?></div>
    </div>
  </div>
</div>
