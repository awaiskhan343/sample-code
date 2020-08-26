<?php get_header();?>

<div class="container-404">
	<h2 class="page-heading">Oh! What?? 404?</h2>
	<img src="https://source.unsplash.com/640×480/?cats" alt="">

	<h3>Sorry find, I think you're lost. Please Try the Following Links</h3>

	<ul>
		<li><a href="<?php echo site_url('/blog')?>">Blog List</a></li>
		<li><a href="<?php echo site_url('/projects')?>">Projects List</a></li>
		<li><a href="<?php echo site_url('/about')?>">About Me</a></li>
		<li><a href="<?php echo site_url('/')?>">Home Page</a></li>
	</ul>

</div>


<?php get_footer();?>