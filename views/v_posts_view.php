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
<!-- View comments on the post -->
<?php foreach($comments as $comment): ?>

	<h1><?=$comment['first_name']?> <?=$comment['last_name']?> said:</h1>
	<p><?=$comment['content']?></p>

	<time datetime="<?Time::display($comment['created'],'Y-m-d G:i')?>">
	   <?=Time::display($comment['created'])?>
	</time>

	<!-- Delete comment if it belongs to logged-in user -->
   <?php if($user_id == $comment['comment_user_id']): ?>
	<form method='POST' action='/posts/p_comment_del/<?=$comment['comment_id']?>'>
		<input type='submit' value='Delete comment'>
	</form> 
   <?php endif; ?>
<?php endforeach; ?>
</article>
   <?php if($user): ?>
<!-- Add a new comment -->
<form method='POST' action='/posts/p_comment/<?=$post['post_id']?>'>

    <label for='content'>Comment:</label><br>
    <textarea name='content' id='content'></textarea>
    <br><br>
    <input type='submit' value='Post comment'>

</form> 
   <?php endif; ?>