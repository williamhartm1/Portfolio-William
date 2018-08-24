<?php if (have_comments()) :?>
    <h4 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments') ?></h4>
    <div class="comment-list">
		<?php wp_list_comments(); ?>
    </div>
<?php endif; ?>
<?php
$comments_args = array(
	// title of send button
	'label_submit' => 'Submit Comment',
	//title of reply section
	'title_reply' => 'Post a Comment',
	// remove extra html/text
	'comment_notes_after' => '',
);
comment_form($comments_args);
?>