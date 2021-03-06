<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<div id="comments-wrapper">
	<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('Nenhum comentário', 'Um comentário', '% Comentários' );?></h3>
	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>
	<div class="navigation fix">
		<div class="alignleft"><span><?php previous_comments_link() ?></span></div>
		<div class="alignright"><span><?php next_comments_link() ?></span></div>
	</div>
	<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>
	<!-- If comments are closed. -->
	<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
	<?php endif; ?>

	<?php if ('open' == $post->comment_status) : ?>

	<div id="comments-wrapper-form">
		<div id="respond">
			<h3 id="respondTitle"><span class="hook"><?php comment_form_title( 'Deixe seu comentário', 'Deixe seu comentário para %s' ); ?> <span class="cancel-comment-reply"><?php cancel_comment_reply_link('&times;&nbsp;Cancelar'); ?></span></span></h3>
			<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
			<?php else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<?php if ( $user_ID ) : ?>
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out">Log out &raquo;</a></p>
				<?php else : ?>
				<p class="contain">
					<input type="text" name="author" id="author" class="text-input" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
					<label for="author"><small>Nome<?php if ($req) echo " (requerido)"; ?></small></label>
				</p>
				<p class="contain">
					<input type="text" name="email" id="email" class="text-input" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
					<label for="email"><small>E-Mail<?php if ($req) echo " (requerido)"; ?></small></label>
				</p>
				<p class="contain">
					<input type="text" name="url" id="url" class="text-input" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
					<label for="url"><small>Website</small></label>
				</p>
				<?php endif; ?>
				<p class="contain">
					<textarea name="comment" id="comment" class="text-input" cols="100%" rows="10" tabindex="4"></textarea>
				</p>
				<input name="submit" type="submit" id="submit" tabindex="5" value="Enviar comentário" />
				<?php comment_id_fields(); ?>
				<?php do_action('comment_form', $post->ID); ?>
			</form>
			<?php endif; // If registration required and not logged in ?>
		</div>
	</div>

<?php endif; // if you delete this the sky will fall on your head ?>
</div>
