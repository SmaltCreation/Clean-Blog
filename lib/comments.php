<?php

/**
 * @param $comment stdClass
 * @param $args array
 * @param $depth int
 */
function cleanblog_callback_comments($comment, $args, $depth) { ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="media comment">
			<div class="media-left">
				<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
			</div>
			<div class="media-body comment-body">
				<h4 class="media-heading">
					<?php if ($comment->comment_author_url): ?>
						<a href="<?php echo $comment->comment_author_url; ?>"><?php comment_author(); ?></a>
					<?php else: ?>
						<?php comment_author(); ?>
					<?php endif; ?>
					<small>
						<a href="<?php comment_link(); ?>"><?php comment_date() ?> <?php comment_time() ?></a>
						<?php echo comment_reply_link(array_merge( $args, array(
							'depth' => $depth,
							'max_depth' => $args['max_depth'],
							'before' => ' - ',
						))); ?>
					</small>
				</h4>
				<?php comment_text(); ?>
				<?php if (!$comment->comment_approved): ?>
					<div class="alert alert-info" role="alert">
						<?php echo __('Your comment is awaiting moderation.'); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</li>
<?php }

/**
 * @param $fields array
 *
 * @return array
 */
function cleanblog_comment_form_fields($fields) {
	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_email');
	$aria_req = $req ? " aria-required='true'" : '';
	$html5 = current_theme_supports('html5', 'comment-form') ? 1 : 0;

	$fields = array(
		'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		            '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" ' . $aria_req . ' /></div>',
		'email' => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
		           '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" ' . $aria_req . ' /></div>',
		'url' => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website' ) . '</label> ' .
		         '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>',
	);

	return $fields;
}

/**
 * @param $args array
 *
 * @return array
 */
function cleanblog_comment_form($args) {
	$args['comment_field'] = '<div class="form-group comment-form-comment">
    <label for="comment">' . _x( 'Comment', 'noun' ) . '</label>
    <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
    </div>';

	return $args;
}

function cleanblog_comment_button() {
	echo '<button class="btn btn-default" type="submit">' . __( 'Post Comment' ) . '</button>';
}

// Apply filters
add_filter('comment_form_default_fields', 'cleanblog_comment_form_fields');
add_filter('comment_form_defaults', 'cleanblog_comment_form');
add_action('comment_form', 'cleanblog_comment_button' );
