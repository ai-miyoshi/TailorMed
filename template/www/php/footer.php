			<div class="footer_container">
				<div class="footer">
					<ul class="footer_banner_box_container clearfix">
						<li class="footer_banner_box super_light_blue animated_element animation-fadeIn duration-500">
							<h2>
								Health Insurance
							</h2>
							<p>
								<a class="icon_small_arrow right_white" href="#">Here in medicenter we have individual</a>
							</p>
						</li>
						<li class="footer_banner_box light_blue animated_element animation-slideRight duration-800 delay-250">
							<h2>
								Medical Records
							</h2>
							<p>
								<a class="icon_small_arrow right_white" href="#">Here in medicenter we have individual</a>
							</p>
						</li>
						<li class="footer_banner_box blue animated_element animation-slideRight200 duration-800 delay-500">
							<h2>
								Online Bill Pay
							</h2>
							<p>
								<a class="icon_small_arrow right_white" href="#">Here in medicenter we have individual</a>
							</p>
						</li>
					</ul>
					<div class="footer_box_container clearfix">
						<div class="footer_box">
							<h3 class="box_header">
								Medicenter Clinic
							</h3>
							<p class="info">
								Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada individual.
							</p>
							<ul class="footer_contact_info_container clearfix">
								<li class="footer_contact_info_row">
									<div class="footer_contact_info_left">
										Medicenter Clinic
									</div>
								</li>
								<li class="footer_contact_info_row">
									<div class="footer_contact_info_left">
										33 Farlane Street
									</div>
									<div class="footer_contact_info_right">
										+123 655 655
									</div>
								</li>
								<li class="footer_contact_info_row">
									<div class="footer_contact_info_left">
										Keilor East
									</div>
									<div class="footer_contact_info_right">
										+123 755 755
									</div>
								</li>
								<li class="footer_contact_info_row">
									<div class="footer_contact_info_left">
										VIC 3033, Australia
									</div>
									<div class="footer_contact_info_right">
										<a href="mailto:medicenter@mail.com" title="Send Email">
											medicenter@mail.com
										</a>
									</div>
								</li>
							</ul>
							<ul class="social_icons clearfix">
								<li>
									<a class="social_icon facebook" href="http://facebook.com/QuanticaLabs" title="" target="_blank">
										&nbsp;
									</a>
								</li>
								<li>
									<a class="social_icon twitter" href="https://twitter.com/QuanticaLabs" title="" target="_blank">
										&nbsp;
									</a>
								</li>
								<li>
									<a class="social_icon googleplus" href="#" title="">
										&nbsp;
									</a>
								</li>
								<li>
									<a class="social_icon mail" href="mailto:medicenter@mail.com" title="">
										&nbsp;
									</a>
								</li>
							</ul>
						</div>
						<div class="footer_box">
							<div class="clearfix">
								<div class="header_left">
									<h3 class="box_header">
										Latest Posts
									</h3>
								</div>
								<div class="header_right">
									<a href="#" id="footer_recent_posts_prev" class="scrolling_list_control_left icon_small_arrow left_white"></a>
									<a href="#" id="footer_recent_posts_next" class="scrolling_list_control_right icon_small_arrow right_white"></a>
								</div>
							</div>
							<div class="scrolling_list_wrapper">
								<ul class="scrolling_list footer_recent_posts">
									<li class="icon_small_arrow right_white">
										<a href="?page=post">
											Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada.
										</a>
										<abbr title="29 May 2012" class="timeago">29 May 2012</abbr>
									</li>
									<li class="icon_small_arrow right_white">
										<a href="?page=post">
											Lorem ipsum dolor sit amat velum.
										</a>
										<abbr title="04 Apr 2012" class="timeago">04 Apr 2012</abbr>
									</li>
									<li class="icon_small_arrow right_white">
										<a href="?page=post">
											Mauris adipiscing mauris fringilla turpis interdum sed pulvinar nisi malesuada.
										</a>
										<abbr title="02 Feb 2012" class="timeago">02 Feb 2012</abbr>
									</li>
									<li class="icon_small_arrow right_white">
										<a href="?page=post">
											Lorem ipsum dolor sit amat velum, consectetur adipiscing elit.
										</a>
										<abbr title="24 Jan 2011" class="timeago">24 Jan 2011</abbr>
									</li>
								</ul>
							</div>
						</div>
						<div class="footer_box last">
							<div class="clearfix">
								<div class="header_left">
									<h3 class="box_header">
										Latest Tweets
									</h3>
								</div>
								<div class="header_right">
									<a href="#" id="latest_tweets_prev" class="scrolling_list_control_left icon_small_arrow left_white"></a>
									<a href="#" id="latest_tweets_next" class="scrolling_list_control_right icon_small_arrow right_white"></a>
								</div>
							</div>
							<div class="scrolling_list_wrapper">
								<ul class="scrolling_list latest_tweets">
								<?php
								require_once('libraries/tmhOAuth/tmhOAuth.php');
								require_once('libraries/tmhOAuth/tmhUtilities.php');
								require_once('twitter_config.php');
								$tmhOAuth = new tmhOAuth(array(
									'consumer_key'    => _consumer_key,
									'consumer_secret' => _consumer_secret,
									'user_token'      => _access_token,
									'user_secret'     => _access_token_secret
								));
								$code = $tmhOAuth->request('GET', $tmhOAuth->url('1.1/statuses/user_timeline'), array(
									'screen_name' => _username,
									'count' => _tweets_count,
									'include_rts' => 'true'
								));
								$response = $tmhOAuth->response;
								require_once('libraries/lib_autolink.php');
								$tweets = json_decode($response['response']);
								if(count($tweets->errors))
									echo '<li class="icon_small_arrow right_white">' . $tweets->errors[0]->message . '! Please check your config in twitter_config.php file!</li>';
								else
									foreach($tweets as $tweet)
										echo '<li class="icon_small_arrow right_white"><p>' .  autolink($tweet->text, 20, ' target="_blank"') . '<abbr title="' . date('c', strtotime($tweet->created_at)) . '" class="timeago">' . $tweet->created_at . '</abbr></p></li>';
								?>
								</ul>
							</div>
						</div>
					</div>
					<div class="copyright_area clearfix">
						<div class="copyright_left">
							© Copyright - <a href="http://themeforest.net/item/medicenter-responsive-medical-health-template/4000598?ref=QuanticaLabs" title="MediCenter Template" target="_blank">MediCenter Template</a> by <a href="http://quanticalabs.com" title="QuanticaLabs" target="_blank">QuanticaLabs</a>
						</div>
						<div class="copyright_right">
							<a class="scroll_top icon_small_arrow top_white" href="#top" title="Scroll to top">Top</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		//require_once("layout_picker/layout_picker.php");
		?>
	</body>
</html>