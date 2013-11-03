<article>
	<?php if(isset($post['photo_url'])): ?>
		<div class="pano_photo">
   <img src='<?=$post['photo_url']?>' width='500' alt='<?=$post['content']?>'>
		</div>
    <?php else: ?>
		<h3 class="no_photo">No photo for this post</h3>
	<?php endif; ?>
	<p><?=$post['content']?></p>
	<time datetime="<?Time::display($post['created'],'Y-m-d G:i')?>">
	   <?=Time::display($post['created'])?>
	</time>
</article>
