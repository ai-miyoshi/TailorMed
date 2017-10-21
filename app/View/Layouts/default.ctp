
<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Form->getSeoTag(); ?>
		<!--style-->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Volkhov:400italic' rel='stylesheet' type='text/css'>

        <?php
        echo $this->Html->css('reset');
        echo $this->Html->css('superfish');
        echo $this->Html->css('fancybox/jquery.fancybox');
        echo $this->Html->css('jquery.qtip');
        echo $this->Html->css('jquery-ui-1.9.2.custom');
        echo $this->Html->css('style');
        echo $this->Html->css('responsive');
        echo $this->Html->css('animations');
        echo $this->Html->css('custom');

        echo $this->Html->script('jquery-1.11.0.min');
        echo $this->Html->script('jquery-migrate-1.2.1.min');
        echo $this->Html->script('jquery.ba-bbq.min.js');
        echo $this->Html->script('jquery-ui-1.9.2.custom.min');
        echo $this->Html->script('jquery.easing.1.3');

        /*
        echo $this->Html->script('jquery.carouFredSel-5.6.4-packed');
        echo $this->Html->script('jquery.sliderControl');
        echo $this->Html->script('jquery.timeago');
        echo $this->Html->script('jquery.hint');
        echo $this->Html->script('jquery.isotope.min');
        echo $this->Html->script('jquery.isotope.masonry');
        */

        echo $this->Html->script('jquery.fancybox-1.3.4.pack');
        echo $this->Html->script('jquery.qtip.min');
        echo $this->Html->script('jquery.blockUI');
        echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=false');

        echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
    ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76163188-1', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	<body>
		<div class="site_container">
            <?php echo $this->Session->flash(); ?>
			<div class="header_container">
				<div class="header clearfix">
					<div class="header_left">
						<a href="/" title="MEDICENTER"><?php echo $this->Html->image('/images/logo.png', array('alt' => 'logo'));?></a>
					</div>
					<ul class="sf-menu header_right">




            <?php
            $selected = '';
            $urls = array('pages/about', 'pages/flow', 'pages/pricing', 'consultations/add', 'consultations/evidence');
            if(in_array($this->request->url, $urls)) {
                $selected = 'selected';
            }
            ?>
						<li class="submenu <?php echo $selected;?>">
                            <?php echo $this->Html->link('遺伝子検査とは', '/pages/about', array('title'=>'Exam'));?>
							<ul>
								<li class="<?php echo ($this->request->url=='pages/about') ? 'selected':'';?>">
                                    <?php echo $this->Html->link('MSK-IMPACT検査とは', '/pages/about', array('title'=>'About'));?>
								</li>
								<li class="<?php echo ($this->request->url=='pages/flow') ? 'selected':'';?>">
                                    <?php echo $this->Html->link('MSK-IMPACT検査の流れ', '/pages/flow', array('title'=>'Exam Flow'));?>
								</li>
								<li class="<?php echo ($this->request->url=='pages/pricing') ? 'selected':'';?>">
                                    <?php echo $this->Html->link('MSK-IMPACT検査費用', '/pages/pricing', array('title'=>'Pricing'));?>
								</li>
								<li class="<?php echo ($this->request->url=='pages/evidence') ? 'selected':'';?>">
										<?php echo $this->Html->link('MSK-IMPACT関連論文', '/pages/evidence', array('title'=>'Evidence'));?>
								</li>
							</ul>
						</li>

						<?php
						$selected = '';
						$urls = array('pages/link','pages/attention','pages/hospitals');
						if(in_array($this->request->url, $urls)) {
								$selected = 'selected';
						}
						?>
						<li class="submenu <?php echo $selected;?>">
							<?php echo $this->Html->link('患者様へ', '/pages/hospitals', array('title'=>'hospitals'));?>
								<ul>
									<li class="<?php echo ($this->request->url=='pages/hospitals') ? 'selected':'';?>">
										<?php echo $this->Html->link('検査可能な医療機関', '/pages/hospitals', array('title'=>'hospitals'));?>
									</li>
									<li class="<?php echo ($this->request->url=='pages/attention') ? 'selected':'';?>">
										<?php echo $this->Html->link('注意事項', '/pages/attention', array('title'=>'attention'));?>
									</li>
									<li class="<?php echo ($this->request->url=='pages/link') ? 'selected':'';?>">
										<?php echo $this->Html->link('関連医療機関リンク', '/pages/link', array('title'=>'link'));?>
									</li>
								</ul>
						</li>

            <?php
            $selected = '';
            $urls = array('pages/research', 'pages/evidence', 'pages/recruitment');
            if(in_array($this->request->url, $urls)) {
                $selected = 'selected';
            }
            ?>
						<li class="submenu <?php echo $selected;?>">
            		<?php echo $this->Html->link('医療関係者の方へ', '/pages/recruitment', array('title'=>'recruitment'));?>
								<ul>
									<li class="<?php echo ($this->request->url=='pages/recruitment') ? 'selected':'';?>">
											<?php echo $this->Html->link('提携病院の募集', '/pages/recruitment', array('title'=>'recruitment'));?>
									</li>
									<li class="<?php echo ($this->request->url=='pages/research') ? 'selected':'';?>">
	                    <?php echo $this->Html->link('研究への協力', '/pages/research', array('title'=>'Research'));?>
									</li>
								</ul>
						</li>

						<?php
            $selected = '';
            $urls = array('pages/company', 'pages/greetings', 'pages/doctors', 'pages/philosophy');
            if(in_array($this->request->url, $urls)) {
                $selected = 'selected';
            }
            ?>
						<li class="submenu <?php echo $selected;?>">
                            <?php echo $this->Html->link('TailorMed について', '/pages/greetings', array('title'=>'greetings'));?>
							<ul>
								<li class="<?php echo ($this->request->url=='pages/greetings') ? 'selected':'';?>">
                                    <?php echo $this->Html->link('運営からのメッセージ', '/pages/greetings', array('title'=>'Greetings'));?>
								</li>
								<li class="<?php echo ($this->request->url=='pages/doctors') ? 'selected':'';?>">
                                    <?php echo $this->Html->link('協力医師からのメッセージ', '/pages/doctors', array('title'=>'Doctors'));?>
								</li>
								<li class="<?php echo ($this->request->url=='pages/rinen') ? 'selected':'';?>">
                                    <?php echo $this->Html->link('個人情報保護方針', '/pages/philosophy', array('title'=>'Philosophy'));?>
								</li>
								<li class="<?php echo ($this->request->url=='pages/company') ? 'selected':'';?>">
                                    <?php echo $this->Html->link('企業情報', '/pages/company', array('title'=>'Company'));?>
								</li>
							</ul>
						</li>

					</ul>

					<div class="mobile_menu">
						<select name="select-menu" onchange="location.href=this.value;">
                            <option value="/pages/company" <?php echo ($this->request->url === 'pages/company' ? ' selected ' : ''); ?>>企業情報</option>
                            <option value="/pages/greetings" <?php echo ($this->request->url === 'pages/greetings' ? ' selected ' : ''); ?>>ご挨拶</option>
                            <option value="/pages/philosophy" <?php echo ($this->request->url === 'pages/philosophy' ? ' selected ' : ''); ?>>経営理念</option>
                            <option value="/pages/about" <?php echo ($this->request->url === 'pages/about' ? ' selected ' : ''); ?>>MSK-IMPACT検査とは</option>
                            <option value="/pages/flow" <?php echo ($this->request->url === 'pages/flow' ? ' selected ' : ''); ?>>検査の流れ</option>
                            <option value="/pages/pricing" <?php echo ($this->request->url === 'pages/pricing' ? ' selected ' : ''); ?>>費用について</option>
                            <option value="/consultations/add" <?php echo ($this->request->url === 'consultations/add' ? ' selected ' : ''); ?>>検査受付窓口</option>
                            <option value="/pages/research" <?php echo ($this->request->url === 'pages/research' ? ' selected ' : ''); ?>>共同研究</option>
                            <option value="/pages/evidence" <?php echo ($this->request->url === 'pages/evidence' ? ' selected ' : ''); ?>>MSK-IMPACTに関する報告</option>
                            <option value="/academia_supports/add" <?php echo ($this->request->url === 'academia_supports/add' ? ' selected ' : ''); ?>>アカデミアサポートメンバー</option>
						</select>
					</div>
				</div>
			</div>

            <div id="content" class="container">
                <?php echo $this->fetch('content'); ?>
            </div>
			<div id="footer" class="footer_container">
				<div class="footer">
					<div class="copyright_area clearfix">
						<div class="copyright_left">
							© Copyright 2015 - TailorMed. All rights reserved.
						</div>
						<div class="copyright_right">
							<a class="scroll_top icon_small_arrow top_white" href="#top" title="Scroll to top">Top</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
