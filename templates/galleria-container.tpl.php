<?php
// Embed links.
foreach ($items as $delta => &$item) {
  $item['#item']['attributes'] = array('longdesc' => $item['#item']['image_field_caption']['value']);
}
?>
<div class="galleria-content clearfix" id="galleria-<?php print $id; ?>">
  <?php print render($items); ?>
</div>