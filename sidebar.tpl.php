<?php
// $Id: page.tpl.php 7156 2010-04-24 16:48:35Z chris $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">

<head>
	<title><?php print $head_title; ?></title>
	<?php print $head; ?>
	<?php print $styles; ?>
	<?php print $setting_styles; ?>
	<!--[if IE 8]>
	<?php print $ie8_styles; ?>
	<![endif]-->
	<!--[if IE 7]>
	<?php print $ie7_styles; ?>
	<![endif]-->
	<!--[if lte IE 6]>
	<?php print $ie6_styles; ?>
	<![endif]-->
	<?php if ($local_styles): ?>
	<?php print $local_styles; ?>
	<?php endif; ?>
	<?php print $scripts; ?>
</head>

<body id="<?php print $body_id; ?>" class="<?php print $body_classes; ?>">
	<div id="page" class="page">
		<div id="page-inner" class="page-inner">
			<div id="skip">
				<a href="#main-content-area"><?php print t('Skip to Main Content Area'); ?></a>
			</div>

			<!-- header-group row: width = grid_width -->
			<div id="header-group-wrapper" class="header-group-wrapper">
				<div id="header-group" class="header-group row <?php print $grid_width; ?>">
					<div id="header-group-inner" class="header-group-inner inner clearfix">
						<?php if ($logo): ?>
						<div id="logo">
							<a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
						</div>
						<?php endif; ?>
						<?php if ($search_box || $secondary_links): ?>
						<div id="header-group-inner-top" class="clearfix">
							<?php print theme('grid_block', $search_box, 'search-box'); ?>
							<?php print theme('grid_row', theme('links', $secondary_links), 'secondary-menu'); ?>
						</div>
						<?php endif; ?>
						<?php if ($site_name || $site_slogan || $header): ?>
						<div id="header-group-inner-inner" class="clearfix">
							<?php if ($site_name || $site_slogan): ?>
							<div id="header-site-info" class="header-site-info block">
								<div id="header-site-info-inner" class="header-site-info-inner inner">
									<?php if ($site_name || $site_slogan): ?>
									<div id="site-name-wrapper" class="clearfix">
										<?php if ($site_name): ?>
										<h1 id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
										<?php endif; ?>
										<?php if ($site_slogan): ?>
										<p id="slogan"><a href="/"><?php print $site_name; ?>: <?php print $site_slogan; ?></a></p>
										<?php endif; ?>
									</div><!-- /site-name-wrapper -->
									<?php endif; ?>
								</div><!-- /header-site-info-inner -->
							</div><!-- /header-site-info -->
							<?php endif; ?>
							<?php print $header; ?>
						</div>
						<?php endif; ?>
					</div><!-- /header-group-inner -->
				</div><!-- /header-group -->
			</div><!-- /header-group-wrapper -->

			<!-- preface-top row: width = grid_width -->
			<?php print theme('grid_row', $preface_top, 'preface-top', 'full-width', $grid_width); ?>
	
			<?php if (!$preface_top): ?>
			<div id="preface-top-wrapper" class="preface-top-wrapper full-width">
				<div id="preface-top" class="" style="margin:0 auto;width:960px;">
					<div id="preface-top-inner" class="preface-top-inner inner clearfix">
						<?php print theme('grid_block', $primary_links_tree, 'primary-menu'); ?>
					</div><!-- /preface-top-inner -->
				</div><!-- /preface-top -->
			</div><!-- /preface-top-wrapper -->
			<?php endif; ?>

		<!-- main row: width = grid_width -->
		<div id="main-wrapper" class="main-wrapper full-width">
			<div id="main" class="main row <?php print $grid_width; ?>">
				<?php print theme('grid_block', $breadcrumb, 'breadcrumbs'); ?>
				<?php print theme('grid_block', $tabs, 'content-tabs'); ?>
				<?php if ($title): ?>
				<h1 class="title"><?php print $title; ?></h1>
				<?php endif; ?>

				<div id="main-inner" class="main-inner inner clearfix">
					<!-- main group: width = grid_width - sidebar_first_width -->
					<div id="main-group" class="main-group row nested <?php print $main_group_width; ?>">
						<div id="main-group-inner" class="main-group-inner inner clearfix">
							<div id="main-content" class="main-content row nested">
								<div id="main-content-inner" class="main-content-inner inner clearfix">
									<!-- content group: width = grid_width - (sidebar_first_width + sidebar_last_width) -->
										<div id="content-group" class="content-group row nested <?php print $content_group_width; ?>">
											<div id="content-group-inner" class="content-group-inner inner clearfix">

												<?php if ($content_top || $help || $messages): ?>
												<div id="content-top" class="content-top row nested">
													<div id="content-top-inner" class="content-top-inner inner clearfix">
														<?php print theme('grid_block', $help, 'content-help'); ?>
														<?php print theme('grid_block', $messages, 'content-messages'); ?>
														<?php print $content_top; ?>
													</div><!-- /content-top-inner -->
												</div><!-- /content-top -->
												<?php endif; ?>

												<div id="content-region" class="content-region row nested">
													<div id="content-region-inner" class="content-region-inner inner clearfix">
														<a name="main-content-area" id="main-content-area"></a>
														<div id="content-inner" class="content-inner block">
															<div id="content-inner-inner" class="content-inner-inner inner clearfix">
																<?php if ($content): ?>
																<div id="content-content" class="content-content">
																	<?php print $content; ?>
																	<?php print $full_width; ?>
																	<?php print $feed_icons; ?>
																</div><!-- /content-content -->
																<?php endif; ?>
															</div><!-- /content-inner-inner -->
														</div><!-- /content-inner -->
													</div><!-- /content-region-inner -->
												</div><!-- /content-region -->

												<?php print theme('grid_row', $content_bottom, 'content-bottom', 'nested'); ?>
											</div><!-- /content-group-inner -->
										</div><!-- /content-group -->

										<?php print theme('grid_row', $sidebar_last, 'sidebar-last', 'nested', $sidebar_last_width); ?>
									</div><!-- /main-content-inner -->
								</div><!-- /main-content -->

								<!-- left column -->
								<?php print theme('grid_row', $left_column, 'left_column', 'nested', 'grid16-8'); ?>
								
								<!-- right column -->
								<?php print theme('grid_row', $right_column, 'right_column', 'nested', 'grid16-8'); ?>

							</div><!-- /main-group-inner -->
						</div><!-- /main-group -->
					</div><!-- /main-inner -->
				</div><!-- /main -->
			</div><!-- /main-wrapper -->

			<!-- footer -->
			<div id="footer-group-wrapper" class="footer-group-wrapper">
				<div id="footer-group" class="footer-group row <?php print $grid_width; ?>">
					<div id="footer-group-inner" class="footer-group-inner inner clearfix">
						<?php print theme('grid_row', $footer_left, 'footer_left', 'grid16-6', 'nested'); ?>
						<?php print theme('grid_row', $footer_middle, 'footer_middle', 'grid16-6', 'nested'); ?>
						<?php print theme('grid_row', $footer_right, 'footer_right', 'grid16-4', 'nested'); ?>
					</div>
				</div>
			</div> <!-- /footer -->

			<!-- footer-message row: width = grid_width -->
			<div id="footer-message-wrapper" class="footer-message-wrapper full-width">
				<div id="footer-message" class="footer-message row <?php print $grid_width; ?>">
					<div id="footer-message-inner" class="footer-message-inner inner clearfix">
						<?php print theme('grid_block', $footer_message, 'footer-message-text'); ?>
					</div><!-- /footer-message-inner -->
				</div><!-- /footer-message -->
			</div><!-- /footer-message-wrapper -->

		</div><!-- /page-inner -->
	</div><!-- /page -->
	<?php print $closure; ?>
</body>
</html>
