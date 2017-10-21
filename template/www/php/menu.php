<ul class="sf-menu header_right">
	<li class="submenu<?php echo ($_GET["page"]=="" || $_GET["page"]=="home" || $_GET["page"]=="home_2" || $_GET["page"]=="home_3" || $_GET["page"]=="home_4" || $_GET["page"]=="home_5" || $_GET["page"]=="home_small_slider" ? " selected" : ""); ?>">
		<a href="#" title="HOME">
			HOME
		</a>
		<ul>
			<li<?php echo ($_GET["page"]=="home" ? " class='selected'" : ""); ?>>
				<a href="?page=home" title="Home Style 1">
					Home Style 1
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="home_2" ? " class='selected'" : ""); ?>>
				<a href="?page=home_2" title="Home Style 2">
					Home Style 2
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="home_3" ? " class='selected'" : ""); ?>>
				<a href="?page=home_3" title="Home Style 3">
					Home Style 3
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="home_4" ? " class='selected'" : ""); ?>>
				<a href="?page=home_4" title="Home Style 3">
					Home Style 4
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="home_5" ? " class='selected'" : ""); ?>>
				<a href="?page=home_5" title="Home Style 5">
					Home Style 5
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="home_small_slider" ? " class='selected'" : ""); ?>>
				<a href="?page=home_small_slider" title="Home Small Slider">
					Home Small Slider
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="blog" || $_GET["page"]=="blog_2_columns" || $_GET["page"]=="blog_2_columns_left_sidebar" || $_GET["page"]=="post" ? " selected" : ""); ?>">
		<a href="#" title="BLOG">
			BLOG
		</a>
		<ul>
			<li<?php echo ($_GET["page"]=="blog" ? " class='selected'" : ""); ?>>
				<a href="?page=blog" title="Blog with sidebar">
					Blog with sidebar
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="blog_2_columns" || $_GET["page"]=="blog_2_columns_left_sidebar" ? " class='selected'" : ""); ?>>
				<a href="#" title="Blog 2 columns">
					Blog 2 columns
				</a>
				<ul>
					<li<?php echo ($_GET["page"]=="blog_2_columns" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_2_columns" title="Right Sidebar">
							Right sidebar
						</a>
					</li>
					<li<?php echo ($_GET["page"]=="blog_2_columns_left_sidebar" ? " class='selected'" : ""); ?>>
						<a href="?page=blog_2_columns_left_sidebar" title="Left Sidebar">
							Left sidebar
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo ($_GET["page"]=="post" ? " class='selected'" : ""); ?>>
				<a href="?page=post" title="SINGLE POST">
					Single post
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="about" || $_GET["page"]=="doctors" || $_GET["page"]=="medical_care" || $_GET["page"]=="shortcodes" || $_GET["page"]=="404" ? " selected" : ""); ?>">
		<a href="#" title="PAGES">
			PAGES
		</a>
		<ul>
			<li<?php echo ($_GET["page"]=="about" ? " class='selected'" : ""); ?>>
				<a href="?page=about" title="About">
					About
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="doctors" ? " class='selected'" : ""); ?>>
				<a href="?page=doctors" title="Our Doctors">
					Our Doctors
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="medical_care" ? " class='selected'" : ""); ?>>
				<a href="?page=medical_care" title="Medical Care">
					Medical Care
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="shortcodes" ? " class='selected'" : ""); ?>>
				<a href="#" title="Shortcodes">
					Shortcodes
				</a>
				<ul class="wide">
					<li>
						<a href="?page=shortcodes#features-style" title="Features Styles">
							Features Styles
						</a>
					</li>
					<li>
						<a href="?page=shortcodes#carousel" title="Carousel">
							Carousel
						</a>
					</li>
					<li>
						<a href="?page=shortcodes#testimonials-announcement" title="Testimonials &amp; Announcement">
							Testimonials &amp; Announcement
						</a>
					</li>
					<li>
						<a href="?page=shortcodes#accordiontab-notifications" title="Accordion &amp; Notifications">
							Accordion &amp; Notifications
						</a>
					</li>
					<li>
						<a href="?page=shortcodes#tabs-quote" title="Tabs &amp; Quote">
							Tabs &amp; Quote
						</a>
					</li>
					<li>
						<a href="?page=shortcodes#lists" title="Lists">
							Lists
						</a>
					</li>
					<li>
						<a href="?page=shortcodes#icons" title="Icons">
							Icons
						</a>
					</li>
					<li>
						<a href="?page=shortcodes#buttons-headings" title="Buttons &amp; Headings">
							Buttons &amp; Headings
						</a>
					</li>
					<li>
						<a href="?page=shortcodes#columns" title="Columns &amp; Code">
							Columns &amp; Code
						</a>
					</li>
				</ul>
			</li>
			<li<?php echo ($_GET["page"]=="404" ? " class='selected'" : ""); ?>>
				<a href="?page=404" title="404 Not Found">
					404 Not Found
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu wide<?php echo ($_GET["page"]=="departments" ? " selected" : ""); ?>">
		<a href="#" title="DEPARTMENTS">
			DEPARTMENTS
		</a>
		<ul>
			<li>
				<a href="?page=departments#primary-health-care" title="Primary Health Care">
					Primary Health Care
				</a>
			</li>
			<li>
				<a href="?page=departments#laryngological-clinic" title="Laryngological Clinic">
					Laryngological Clinic
				</a>
			</li>
			<li>
				<a href="?page=departments#pediatric-clinic" title="Pediatric Clinic">
					Pediatric Clinic
				</a>
			</li>
			<li>
				<a href="?page=departments#ophthalmology-clinic" title="Ophthalmology Clinic">
					Ophthalmology Clinic
				</a>
			</li>
			<li>
				<a href="?page=departments#outpatient-surgery" title="Outpatient Surgery">
					Outpatient Surgery
				</a>
			</li>
			<li>
				<a href="?page=departments#dental-clinic" title="Dental Clinic">
					Dental Clinic
				</a>
			</li>
			<li>
				<a href="?page=departments#gynaecological-clinic" title="Gynaecological Clinic">
					Gynaecological Clinic
				</a>
			</li>
			<li>
				<a href="?page=departments#outpatient-rehabilitation" title="Outpatient Rehabilitation">
					Outpatient Rehabilitation
				</a>
			</li>
			<li>
				<a href="?page=departments#cardiac-clinic" title="Cardiac Clinic">
					Cardiac Clinic
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu wide<?php echo ($_GET["page"]=="timetable" ? " selected" : ""); ?>">
		<a href="#" title="Timetable">
			TIMETABLE
		</a>
		<ul class="timetable_submenu">
			<li>
				<a href="?page=timetable#all-departments" title="All Departments">
					All Departments
				</a>
			</li>
			<li>
				<a href="?page=timetable#cardiac-clinic" title="Cardiac Clinic">
					Cardiac Clinic
				</a>
			</li>
			<li>
				<a href="?page=timetable#primary-health-care" title="Primary Health Care">
					Primary Health Care
				</a>
			</li>
			<li>
				<a href="?page=timetable#laryngological-clinic" title="Laryngological Clinic">
					Laryngological Clinic
				</a>
			</li>
			<li>
				<a href="?page=timetable#pediatric-clinic" title="Pediatric Clinic">
					Pediatric Clinic
				</a>
			</li>
			<li>
				<a href="?page=timetable#ophthalmology-clinic" title="Ophthalmology Clinic">
					Ophthalmology Clinic
				</a>
			</li>
			<li>
				<a href="?page=timetable#outpatient-surgery" title="Outpatient Surgery">
					Outpatient Surgery
				</a>
			</li>
			<li>
				<a href="?page=timetable#dental-clinic" title="Dental Clinic">
					Dental Clinic
				</a>
			</li>
			<li>
				<a href="?page=timetable#gynaecological-clinic" title="Gynaecological Clinic">
					Gynaecological Clinic
				</a>
			</li>
			<li>
				<a href="?page=timetable#outpatient-rehabilitation" title="Outpatient Rehabilitation">
					Outpatient Rehabilitation
				</a>
			</li>
		</ul>
	</li>
	<li class="submenu<?php echo ($_GET["page"]=="gallery_2_columns" || $_GET["page"]=="gallery_3_columns" || $_GET["page"]=="gallery_4_columns" || $_GET["page"]=="gallery_with_sidebar" ? " selected" : ""); ?>">
		<a href="#" title="Gallery">
			GALLERY
		</a>
		<ul style="margin-left: -100px;">
			<li<?php echo ($_GET["page"]=="gallery_2_columns" ? " class='selected'" : ""); ?>>
				<a href="?page=gallery_2_columns" title="2 Columns">
					2 Columns
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="gallery_3_columns" ? " class='selected'" : ""); ?>>
				<a href="?page=gallery_3_columns" title="3 Columns">
					3 Columns
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="gallery_4_columns" ? " class='selected'" : ""); ?>>
				<a href="?page=gallery_4_columns" title="4 Columns">
					4 Columns
				</a>
			</li>
			<li<?php echo ($_GET["page"]=="gallery_with_sidebar" ? " class='selected'" : ""); ?>>
				<a href="?page=gallery_with_sidebar" title="With Sidebar">
					With Sidebar
				</a>
			</li>
		</ul>
	</li>
	<li<?php echo ($_GET["page"]=="contact" ? " class='selected'" : ""); ?>>
		<a href="?page=contact" title="CONTACT">
			CONTACT
		</a>
	</li>
</ul>
<div class="mobile_menu">
	<select>
		<option value="?page=home"<?php echo ($_GET["page"]=="" ? " selected='selected'" : ""); ?>>HOME</option>
		<option value="?page=home"<?php echo ($_GET["page"]=="home" ? " selected='selected'" : ""); ?>>- Home Style 1</option>
		<option value="?page=home_2"<?php echo ($_GET["page"]=="home_2" ? " selected='selected'" : ""); ?>>- Home Style 2</option>
		<option value="?page=home_3"<?php echo ($_GET["page"]=="home_3" ? " selected='selected'" : ""); ?>>- Home Style 3</option>
		<option value="?page=home_4"<?php echo ($_GET["page"]=="home_4" ? " selected='selected'" : ""); ?>>- Home Style 4</option>
		<option value="?page=home_5"<?php echo ($_GET["page"]=="home_5" ? " selected='selected'" : ""); ?>>- Home Style 5</option>
		<option value="?page=home_small_slider"<?php echo ($_GET["page"]=="home_small_slider" ? " selected='selected'" : ""); ?>>- Home Small Slider</option>
		<option value="?page=blog"<?php echo ($_GET["page"]=="blog" ? " selected='selected'" : ""); ?>>BLOG</option>
		<option value="?page=blog">- Blog with sidebar</option>
		<option value="?page=blog_2_columns">- Blog 2 columns</option>
		<option value="?page=blog_2_columns"<?php echo ($_GET["page"]=="blog_2_columns" ? " selected='selected'" : ""); ?>>-- Right sidebar</option>
		<option value="?page=blog_2_columns_left_sidebar"<?php echo ($_GET["page"]=="blog_2_columns_left_sidebar" ? " selected='selected'" : ""); ?>>-- Left sidebar</option>
		<option value="?page=post"<?php echo ($_GET["page"]=="post" ? " selected='selected'" : ""); ?>>- Single post</option>
		<option value="?page=about">PAGES</option>
		<option value="?page=about"<?php echo ($_GET["page"]=="about" ? " selected='selected'" : ""); ?>>- About</option>
		<option value="?page=doctors"<?php echo ($_GET["page"]=="doctors" ? " selected='selected'" : ""); ?>>- Our Doctors</option>
		<option value="?page=medical_care"<?php echo ($_GET["page"]=="medical_care" ? " selected='selected'" : ""); ?>>- Medical Care</option>
		<option value="?page=shortcodes"<?php echo ($_GET["page"]=="shortcodes" ? " selected='selected'" : ""); ?>>- Shortcodes</option>
		<option value="?page=shortcodes#features-style">-- Features Style</option>
		<option value="?page=shortcodes#carousel">-- Carousel</option>
		<option value="?page=shortcodes#testimonials-announcement">-- Testimonials &amp; Announcement</option>
		<option value="?page=shortcodes#accordiontab-notifications">-- Accordion &amp; Notifications</option>
		<option value="?page=shortcodes#tabs-quote">-- Tabs &amp; Quote</option>
		<option value="?page=shortcodes#lists">-- Lists</option>
		<option value="?page=shortcodes#icons">-- Icons</option>
		<option value="?page=shortcodes#buttons-headings">-- Buttons &amp; Headings</option>
		<option value="?page=shortcodes#columns">-- Columns &amp; Code</option>
		<option value="?page=404"<?php echo ($_GET["page"]=="404" ? " selected='selected'" : ""); ?>>-- 404 Not Found</option>
		<option value="?page=departments"<?php echo ($_GET["page"]=="departments" ? " selected='selected'" : ""); ?>>DEPARTMENTS</option>
		<option value="?page=departments#primary-health-care">- Primary Health Care</option>
		<option value="?page=departments#pediatric-clinic">- Pediatric Clinic</option>
		<option value="?page=departments#outpatient-surgery">- Outpatient Surgery</option>
		<option value="?page=departments#gynaecological-clinic">- Gynaecological Clinic</option>
		<option value="?page=departments#cardiac-clinic">- Cardiac Clinic</option>
		<option value="?page=departments#laryngological-clinic">- Laryngological Clinic</option>
		<option value="?page=departments#ophthalmology-clinic">- Ophthalmology Clinic</option>
		<option value="?page=departments#dental-clinic">- Dental Clinic</option>
		<option value="?page=departments#outpatient-rehabilitation">- Outpatient Rehabilitation</option>
		<option value="?page=timetable"<?php echo ($_GET["page"]=="timetable" ? " selected='selected'" : ""); ?>>TIMETABLE</option>
		<option value="?page=timetable#all-departments">- All Departments</option>
		<option value="?page=timetable#primary-health-care">- Primary Health Care</option>
		<option value="?page=timetable#pediatric-clinic">- Pediatric Clinic</option>
		<option value="?page=timetable#outpatient-surgery">- Outpatient Surgery</option>
		<option value="?page=timetable#gynaecological-clinic">- Gynaecological Clinic</option>
		<option value="?page=timetable#cardiac-clinic">- Cardiac Clinic</option>
		<option value="?page=timetable#laryngological-clinic">- Laryngological Clinic</option>
		<option value="?page=timetable#ophthalmology-clinic">- Ophthalmology Clinic</option>
		<option value="?page=timetable#dental-clinic">- Dental Clinic</option>
		<option value="?page=timetable#outpatient-rehabilitation">- Outpatient Rehabilitation</option>
		<option value="?page=gallery_2_columns">GALLERY</option>
		<option value="?page=gallery_2_columns"<?php echo ($_GET["page"]=="gallery_2_columns" ? " selected='selected'" : ""); ?>>- 2 Columns</option>
		<option value="?page=gallery_3_columns"<?php echo ($_GET["page"]=="gallery_3_columns" ? " selected='selected'" : ""); ?>>- 3 Columns</option>
		<option value="?page=gallery_4_columns"<?php echo ($_GET["page"]=="gallery_4_columns" ? " selected='selected'" : ""); ?>>- 4 Columns</option>
		<option value="?page=gallery_with_sidebar"<?php echo ($_GET["page"]=="gallery_with_sidebar" ? " selected='selected'" : ""); ?>>- With Sidebar</option>
		<option value="?page=contact"<?php echo ($_GET["page"]=="contact" ? " selected='selected'" : ""); ?>>CONTACT</option>
	</select>
</div>