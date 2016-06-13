<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not open this page directly.');

if (post_password_required())
	return;
?>

<div class="comments margint10">

	<?php if (have_comments()) : ?>

	<div class="comments-blog-post-top clearfix">
		<div class="com-title">
			<h4 id="comments">
				<?php printf( __('One Comment', '%1$s Comments', get_comments_number(), 'theme2035-fm'), 
				number_format_i18n(get_comments_number()), get_the_title()); ?>
			</h2>
		</div>
		<div class="com-info">
			<a href="#respond" class="smooth"><?php echo __("Leave a comment","theme2035-fm"); ?></a>
		</div>
	</div>

	<ol class="comment-list">
		<?php wp_list_comments(
		array( 
		'callback' => 'theme2035_comment'
		)); ?>
	</ol>

	<?php if ( get_option( 'page_comments' ) && get_comment_pages_count() > 1 ) : ?>

	<div class="clearfix">
		<div class="nav-previous margint10 pull-left"><?php previous_comments_link( __( '&larr; Older Comments', 'theme2035-fm' ) ); ?></div>
		<div class="nav-next margint10 pull-right"><?php next_comments_link( __( 'Newer Comments &rarr;', 'theme2035-fm' ) ); ?></div>
	</div>

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="no-comments"><?php __( 'Comments are closed.' , 'theme2035-fm' ); ?></p>

	<?php endif; ?>
	<?php endif;  ?>
	
	<?php if ( comments_open() ) : ?>
      

	<div class="contact-form-style-1 contact-hover margint20">
		<div id="respond-wrap">
			<?php 
				$commenter = wp_get_current_commenter();
				$req = get_option( 'require_name_email' );
				$aria_req = ( $req ? " aria-required='true'" : '' );
				$fields =  array(
					'author' => '<p class="comment-form-author"><input placeholder=" '. __("Name","theme2035-fm") . ( $req ? '*' : '' ) .' " id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
					'email' => '<p class="comment-form-email"><input placeholder=" '. __("E-Mail","theme2035-fm"). ( $req ? '*' : '' ) .'" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
					'url' => '<p class="comment-form-url"><label for="url"></label><input placeholder=" '. __("Web Site","theme2035-fm") .'" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>'
				);
				$comments_args = array(
				    'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
				    'logged_in_as'		   => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'swiftframework' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
				    'title_reply'          => '<div class="leave-a-comment"><p>' . __( 'Leave a reply', 'theme2035-fm' ) .'</p</div>' ,
				    'title_reply_to'       => __( 'Leave a reply to %s', 'theme2035-fm' ),
				    'cancel_reply_link'    => __( 'Click here to cancel the reply', 'theme2035-fm' ),
				    'label_submit'         => __( 'Post comment', 'theme2035-fm' ),
				    'comment_field'		   => '<p class="comment-form-comment"><textarea placeholder=" '. __("Comment","theme2035-fm") .'" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
				    'must_log_in'		   => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.', 'theme2035-fm' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
					'comment_notes_after'  => '',
					'label_submit'      	=> __('Submit','theme2035-fm'),
				);
			?>
			
			<?php comment_form($comments_args); ?>
		</div>
	</div>
	
	<?php endif; ?>
