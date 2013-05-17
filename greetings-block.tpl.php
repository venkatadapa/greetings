<?php 
/**
 * @file
 * This is the template file for messages
 */
if(count($messages) > 0) : ?>
  <ul>
  <?php
  foreach($messages as $message) :
    print '<li>' . $message . '</li>';
  endforeach;
  ?>
  </ul>
<?php endif; ?>
