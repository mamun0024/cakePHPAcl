<?php
/**
 * Created by PhpStorm.
 * User: BS108
 * Date: 7/16/2018
 * Time: 4:11 PM
 */
?>
<h1><?php echo h($post['Post']['title']); ?></h1>
<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
<p><?php echo h($post['Post']['body']); ?></p>