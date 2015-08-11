<span><?php echo __('Posted by', 'roots'); ?> </span>
<?php
	$author_id = get_queried_object()->post_author;
	$name = get_the_author() ?: get_the_author_meta('display_name', $author_id);
	$url = get_the_author_meta('ID')
		? get_author_posts_url(get_the_author_meta('ID'))
		: get_author_posts_url($author_id);
?>
<a href="<?php echo $url; ?>" rel="author" class="fn"><?php echo $name; ?></a>
on <time class="updated" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
