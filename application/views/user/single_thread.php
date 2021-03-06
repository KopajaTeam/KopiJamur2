<?php $this->load->view("user/head") ?>
<?php $this->load->view("user/mainnav") ?>

<body class="home">
	<div id="fakeloader"></div>
	<div class="color-switcher" id="choose_color">
		<a href="#." class="picker_close"><i class="fas fa-cog fa-spin"></i></a>
		<div class="theme-colours">
			<p>Choose Colour style</p>
			<ul>
				<li><a href="#" class="blue" id="blue"></a></li>
				<li><a href="#" class="sky-blue" id="sky-blue"></a></li>
				<li><a href="#" class="dark-blue" id="dark-blue"></a></li>
				<li><a href="#" class="dark-green" id="dark-green"></a></li>
				<li><a href="#" class="lite-green" id="lite-green"></a></li>
				<li><a href="#" class="purple" id="purple"></a></li>
				<li><a href="#" class="dark-purple" id="dark-purple"></a></li>
				<li><a href="#" class="red" id="red"></a></li>
				<li><a href="#" class="orange" id="orange"></a></li>
				<li><a href="#" class="brown" id="brown"></a></li>
				<li><a href="#" class="cyan" id="cyan"></a></li>
				<li><a href="#" class="pink" id="pink"></a></li>
			</ul>
		</div>
	</div>
	<div id="page" class="site">
		<a href="#" id="mobile-trigger"><i class="fa fa-list" aria-hidden="true"></i></a>
		<div id ="mob-menu">
			<ul>
				<li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
					<ul class="sub-menu">
						<li><a href="home-v1.html">Home v1</a></li>
						<li><a href="home-v2.html">Home v2</a></li>
						<li><a href="home-v3.html">Home v3</a></li>
						<li><a href="landing.html">Landing</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children"><a href="#">Pages</a>
					<ul class="sub-menu">
						<li><a href="services.html">Service</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="404-error.html">404 Error</a></li>
						<li><a href="single-portfolio.html">Single Portfolio</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children has-mega-menu"><a href="#">Elements</a>
					<div class="flat-mega-memu">
						<ul class="mega-menu-sub">
							<li><a href="home-v1.html">Home v1</a></li>
							<li><a href="home-v2.html">Home v2</a></li>
							<li><a href="home-v3.html">Home v3</a></li>
							<li><a href="landing.html">Landing</a></li>
						</ul>
						<ul class="mega-menu-sub">
							<li><a href="element-portfolio.html">Portfolio</a></li>
							<li><a href="element-cta.html">Call To Action</a></li>
							<li><a href="element-services.html">Services</a></li>
							<li><a href="element-textimonial.html">Testimonials</a></li>
						</ul>
						<ul class="mega-menu-sub">
							<li><a href="element-team.html">Teams</a></li>
							<li><a href="element-latest-post.html">Latest Post</a></li>
							<li><a href="element-images.html">Images</a></li>
							<li><a href="element-etline-icon.html">Etline Icon</a></li>
						</ul>
						<ul class="mega-menu-sub">
							<li><a href="element-grid.html">Column Grid</a></li>
							<li><a href="element-social-links.html">Social Links</a></li>
							<li><a href="element-buttons.html">Button</a></li>
							<li><a href="element-inner-header.html">Inner Header</a></li>
					</div>
				</li>
				<li><a href="about.html">About</a> </li>
				<li><a href="contact.html">Contact</a></li>
				<li class="menu-item-has-children"><a href="#" >Blog</a>
					<ul class="sub-menu">
						<li><a href="blog-grid.html">Blog Grid</a></li>
						<li><a href="blog-full.html">Blog Full</a></li>
						<li><a href="left-sidebar.html">left Sidebar</a></li>
						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						<li><a href="three-column.html"> Three Column</a></li>
						<li><a href="single-blog.html">Single Blog</a></li>
					</ul>
				</li>
				<li><a href="typography.html">Typographys</a></li>
			</ul>
		</div>

		<header id="masthead" class="site-header" >
			<div class="container">
				<div class="site-branding">
					<div id="site-identity">
						<h1 class="site-title"><a href="home-v1.html"  rel="home"><img alt="logo" src="images/logo.png"></a></h1>
					</div><!-- #site-identity -->
				</div><!-- .site-branding -->
				<a href="#" class="custom-button apply-now">Apply Now</a>
				<div id="quick-contact">
					<ul>
						<li class="quick-email">
							<div class="header-box-icon">
								<i class="icon-envelope"></i>
							</div>
							<div class="header-box-info">
								<strong>Email</strong>
								<a href="mailto:mail@example.com" >mail@example.com</a>
							</div>
						</li>
						<li class="quick-address">
							<div class="header-box-icon">
								<i class="icon-map"></i>
							</div>
							<div class="header-box-info">
								<strong>Address</strong>
								Melbourne, Australia
							</div>
						</li>
						<li class="open-time">
							<div class="header-box-icon">
								<i class="icon-clock"></i>
							</div>
							<div class="header-box-info">
								<strong>Opening Hour</strong>
								10:00 AM - 5:00 PM
							</div>
						</li>
					</ul>
				</div> <!-- .quick-contact -->
			</div> <!-- .container -->
		</header> <!-- .site-header -->
		<div id ="main-navigation">
			<div class="container">
				<nav class="main-navigation">
					<ul>
						<li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
							<ul class="sub-menu">
								<li><a href="home-v1.html">Home v1</a></li>
								<li><a href="home-v2.html">Home v2</a></li>
								<li><a href="home-v3.html">Home v3</a></li>
								<li><a href="landing.html">Landing</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children"><a href="#">Pages</a>
							<ul class="sub-menu">
								<li><a href="services.html">Service</a></li>
								<li><a href="portfolio.html">Portfolio</a></li>
								<li><a href="404-error.html">404 Error</a></li>
								<li><a href="single-portfolio.html">Single Portfolio</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children has-mega-menu"><a href="#">Elements</a>
							<div class="flat-mega-memu">
								<ul class="mega-menu-sub">
									<li><a href="home-v1.html">Home v1</a></li>
									<li><a href="home-v2.html">Home v2</a></li>
									<li><a href="home-v3.html">Home v3</a></li>
									<li><a href="landing.html">Landing</a></li>
								</ul>
								<ul class="mega-menu-sub">
									<li><a href="element-portfolio.html">Portfolio</a></li>
									<li><a href="element-cta.html">Call To Action</a></li>
									<li><a href="element-services.html">Services</a></li>
									<li><a href="element-textimonial.html">Testimonials</a></li>
								</ul>
								<ul class="mega-menu-sub">
									<li><a href="element-team.html">Teams</a></li>
									<li><a href="element-latest-post.html">Latest Post</a></li>
									<li><a href="element-images.html">Images</a></li>
									<li><a href="element-etline-icon.html">Etline Icon</a></li>
								</ul>
								<ul class="mega-menu-sub">
									<li><a href="element-grid.html">Column Grid</a></li>
									<li><a href="element-social-links.html">Social Links</a></li>
									<li><a href="element-buttons.html">Button</a></li>
									<li><a href="element-inner-header.html">Inner Header</a></li>
								</div>
							</li>
							<li><a href="about.html">About</a> </li>
							<li><a href="contact.html">Contact</a></li>
							<li class="menu-item-has-children"><a href="#" >Blog</a>
								<ul class="sub-menu">
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-full.html">Blog Full</a></li>
									<li><a href="left-sidebar.html">left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="three-column.html"> Three Column</a></li>
									<li><a href="single-blog.html">Single Blog</a></li>
								</ul>
							</li>
							<li><a href="typography.html">Typographys</a></li>
						</ul>
					</nav>
					<div id="header-search">
						<a href="#" class="search-icon"><i class="fa fa-search"></i></a>
						<div class="search-box-wrap">
							<div class="searchform" role="search">
								<form class="search-form" method="get" action="http://anilbasnet.com/demo/biz-lina/.">
									<input type="text" name="s" id="s" placeholder="Search..." value="" class="search-field">
									<input type="submit" class="search-submit" value="Search">
								</form>
							</div>
						</div>
					</div>
					<div class="header-social-wrapper">
						<div class="social-links">
							<ul>
								<li><a href="http://facebook.com/" target="_blank"></a></li>
								<li><a href="http://youtube.com/" target="_blank"></a></li>
								<li><a href="http://twitter.com/" target="_blank"></a></li>
								<li><a href="http://linkedin.com/" target="_blank"></a></li>
								<li><a href="http://instagram.com/" target="_blank"></a></li>
							</ul>
						</div> 
					</div>
				</div>
			</div>
			<div id="custom-header">
				<div class="custom-header-content">
					<div class="container">
						<h1 class="page-title">Blog</h1>
						<div id="breadcrumb">
							<div  aria-label="Breadcrumbs" class="breadcrumbs breadcrumb-trail">
								<ul class="trail-items">
									<li class="trail-item trail-begin"><a href="#" rel="home"><span>Home</span></a></li>
									<li class="trail-item"><span><a href="#">Blog</a></span></li>
									<li class="trail-item trail-end"><span>Single Blog</span></li>
								</ul>
							</div> <!-- .breadcrumbs -->
						</div> <!-- #breadcrumb -->
					</div> <!-- .container -->
				</div>  <!-- .custom-header-content -->
			</div> <!-- .custom-header -->
				<div id="content" class="site-content global-layout-right-sidebar">
					<div class="container">
						<div class="inner-wrapper">
							<div id="primary" class="content-area">
								<main id="main" class="site-main" >
									<article class="hentry">
										<div class="entry-thumb">
											<img class="aligncenter" src="images/blog-single/blog-single.jpg" alt="Blog">
										</div>
										<div class="entry-content-wrapper">
											<header class="entry-header">
												<h2 class="entry-title"><a href="#" rel="bookmark">Website Design & Development</a></h2>
											</header><!-- .entry-header -->
											<div class="entry-meta">
												<span class="posted-on"><a href="#" rel="bookmark"><span class="entry-date published updated">February 22, 2017</span></a>
											</span>
											<span class="byline"><span class="author vcard"><a href="#" >Supervisor</a></span></span>
											<span class="comments-link"><a href="#" >Leave a comment</a></span>
											<span class="cat-links"><a href="#"  rel="category tag">Design</a></span>
										</div><!-- .entry-meta -->
										<div class="entry-content">
											<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quisProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</p>
										</div><!-- .entry-content -->
									</div><!-- .entry-content-wrapper -->
								</article>
								<div class="authorbox ">
									<div class="author-avatar">
										<img alt="" src="images/blog-single/author-1.jpg" class="avatar img-circle">
									</div>
									<div class="author-info">
										<h4 class="author-header">
											Written by&nbsp;<a href="#" title="Posts by Director & Writer: Anil Basnet" rel="author">Director & Writer: Anil Basnet</a>   </h4>
											<div class="author-content">
												<p>Phasellus imperdiet libero sitdl amet dlante Donec convallis elemen tumd leo. Etiam non pede aecen vehicu magna quis pede. Maecenas felis quam consectetuer dictum..</p>
											</div>
										</div> <!-- .author-info -->
									</div> <!-- .authorbox -->
									<nav class="navigation post-navigation" >
										<h2 class="screen-reader-text">Post navigation</h2>
										<div class="nav-links">
											<div class="nav-previous">
												<a href="#" rel="prev">Previous</a>
											</div>
											<div class="nav-next">
												<a href="#" rel="next">Next</a>
											</div>
										</div>
									</nav>
									<div id="comments" class="comments-area">
										<h2 class="comments-title">Comments</h2>
										<ol class="comment-list">
											<li  class="comment">
												<article class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author vcard">
															<img alt="Author" src="images/blog-single/author-2.jpg" class="avatar img-circle">
															<b class="fn"><a href="#"  class="url">Anil</a></b>
															<span class="says">says:</span>
															<div class="reply">
																<a  class="comment-reply-link" href="#">Reply</a>
															</div>
														</div><!-- .comment-author -->
														<div class="comment-metadata">
															<a href="#" >
																<span> May 28, 2017 at 8:17 am </span>
															</a>
														</div><!-- .comment-metadata -->
													</footer><!-- .comment-meta -->
													<div class="comment-content">
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,</p>
													</div><!-- .comment-content -->
												</article><!-- .comment-body -->
												<ol class="children">
													<li  class="comment">
														<article class="comment-body">
															<footer class="comment-meta">
																<div class="comment-author vcard">
																	<img alt="" src="images/blog-single/author-3.jpg" class="avatar img-circle">
																	<b class="fn">
																		<a href="#" class="url">John Mark</a> </b>
																		<span class="says">says:</span>
																		<div class="reply"><a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
																		</div>
																	</div><!-- .comment-author -->
																	<div class="comment-metadata">
																		<a href="#" >
																			<span>
																			May 28, 2017 at 8:17 am  </span>
																		</a>
																	</div><!-- .comment-metadata -->
																</footer><!-- .comment-meta -->
																<div class="comment-content">
																	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,</p>
																</div><!-- .comment-content -->
															</article><!-- .comment-body -->
														</li><!-- #comment-## -->
													</ol><!-- .children -->
												</li><!-- #comment-## -->
											</ol><!-- .comment-list -->
											<div id="respond" class="comment-respond">
												<h3 id="reply-title" class="comment-reply-title">Leave a Reply
													<small><a  id="cancel-comment-reply-link" href="#" >Cancel reply</a></small>
												</h3>
												<form action="http://anilbasnet.com/demo/biz-lina/."  id="commentform" class="comment-form">
													<p class="comment-notes">
														<span id="email-notes">Your email address will not be published.
														</span> Required fields are marked <span class="required">*</span>
													</p>
													<p class="comment-form-comment">
														<label for="comment">Comment</label>
														<textarea id="comment" name="comment"></textarea>
													</p>
													<p class="comment-form-author">
														<label for="author">Name <span class="required">*</span></label>
														<input id="author" name="author" type="text">
													</p>
													<p class="comment-form-email">
														<label for="email">Email <span class="required">*</span></label>
														<input id="email" name="email" type="email" aria-describedby="email-notes">
													</p>
													<p class="comment-form-url"><label for="url">Website</label>
														<input id="url" name="url" type="url">
													</p>
													<p class="form-submit">
														<input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
														<input type="hidden" id="comment-post-ID">
														<input type="hidden" id="comment-parent">
													</p>
												</form>
											</div><!-- #respond -->
										</div>
									</main>
								</div>
								<div id="sidebar-primary" class="sidebar widget-area" >
									<div class="sidebar-widget-wrapper">
										<aside class="widget">
											<h3 class="widget-title"><span class="widget-title-wrapper">Search</span></h3>
											<form action="http://anilbasnet.com/demo/biz-lina/." class="search-form" method="get" role="search">
												<input type="search" title="Search:" name="s" value="" placeholder="Search..." class="search-field">
												<input type="submit" value="Search" class="search-submit">
											</form>
										</aside> <!-- .widget -->
										<aside class="widget widget-archive">
											<h3 class="widget-title"><span class="widget-title-wrapper">Text Widget</span></h3>
											<div class="entry-content">
												<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit.</p>
												<a href="#" class="more-link" >Read More</a>
											</div>
										</aside> <!-- .widget-archive -->
										<aside class="widget widget-categories">
											<h3 class="widget-title">Category</h3>
											<ul>
												<li><a href="#" >Our Business</a> </li>
												<li><a href="#" >Our Business</a> </li>
												<li> <a href="#" >Customer Service</a></li>
												<li> <a href="#" >Professional Solutions</a> </li>
												<li> <a href="#" >Company Profile</a></li>
											</ul>
										</aside>
										<aside class="widget recent-posts-widget">
											<h3 class="widget-title"><span class="widget-title-wrapper">Popular News</span></h3>
											<div class="recent-post-item">
												<img class="alignleft" src="images/recent-post/recent-post-1.jpg" alt="Recent Post">
												<h4><a href="#" >Phasellus Risus Aliquam</a></h4>
												<p>January 25, 2015</p>
											</div>
											<div class="recent-post-item">
												<img class="alignleft" src="images/recent-post/recent-post-2.jpg" alt="Recent Post">
												<h4><a href="#" >Phasellus Risus Aliquam</a></h4>
												<p>January 25, 2015</p>
											</div>
											<div class="recent-post-item">
												<img class="alignleft" src="images/recent-post/recent-post-3.jpg" alt="Recent Post">
												<h4><a href="#" >Quisque Sed Tempor Eleifen</a></h4>
												<p>January 25, 2015</p>
											</div>
											<div class="recent-post-item">
												<img class="alignleft" src="images/recent-post/recent-post-4.jpg" alt="Recent Post">
												<h4><a href="#" >Etiam Ante Ipsum</a></h4>
												<p>January 25, 2015</p>
											</div>
										</aside>

										<aside class="widget widget-recent-entries">
											<h3 class="widget-title">Recent Posts</h3>
											<ul>
												<li><a href="#" >Our Business</a> </li>
												<li><a href="#" >Our Business</a> </li>
												<li> <a href="#" >Customer Service</a></li>
												<li> <a href="#" >Professional Solutions</a> </li>
												<li> <a href="#" >Company Profile</a></li>
											</ul>
										</aside> <!-- .widget-recent-entries -->
										<aside  class="widget widget-tag-cloud">
											<h3 class="widget-title">Tag Cloud</h3>
											<div class="tagcloud"><a href="#" class="">Blog</a><a href="#" class="">News</a><a href="#" class="">Service</a><a href="#" class="">Post</a><a href="#" class="">Popular</a><a href="#" class="">Business</a>
											</div>
										</aside> <!-- .widget-tag-cloud -->
									</div> <!-- .sidebar-widget-wrapper -->
								</div> <!-- .sidebar -->
							</div> <!-- #inner-wrapper -->
						</div><!-- .container -->
					</div> <!-- #content-->
				</body>

<?php $this->load->view("user/jscript") ?>