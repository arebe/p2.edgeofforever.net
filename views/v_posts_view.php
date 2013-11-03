<article>
 <?php if($post['photo_url'] != NULL): ?>
		<div class="pano_photo">
	    <a href='<?=$post['photo_url']?>'><img src='<?=$post['photo_url']?>' width='900' alt='<?=$post['content']?>' border=0></a>
		</div>
    <?php else: ?>
		<h3 class="no_photo">No photo for this post</h3>
	<?php endif; ?>
	<p><?=$post['content']?></p>
	<time datetime="<?Time::display($post['created'],'Y-m-d G:i')?>">
	   <?=Time::display($post['created'])?>
	</time>
</article>
