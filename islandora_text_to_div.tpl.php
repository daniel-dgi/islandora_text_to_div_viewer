<?php
/**
 * @file
 *   This file is the template to show list containing text data.
 *
 * @param array text_data
 */

?>
<div class="islandora_text_to_div_viewer">
<?php
  print ('<PRE>');
  print ($text_data);
  print ('</PRE>');
?>
</div>
