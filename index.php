<?php include("_/inc/head.php"); ?>

<title>Sterling Codifiers</title>
<meta name="description" content="..." />
<meta name="keywords" content="..." />

</head>
<body id="codes">

	<?php include("_/inc/nav.php"); ?>

	<div class="row map">
		<div class="blue padded">
			<div class="colspan12-12 header">
				<h1>Codes by Municipality</h1>
				<p>View (and search within) the complete code for your municipality.</p>
			</div>
			<div class="closer">x</div>
			<form action="../index.php" id="map_search" method="post">
				<div class="gutter-grid">
				<div class="colspan12-2 as-grid with-gutters">
					<h5>State</h5>
					<select size="5" class="seach_select" id="search_select_state">
						<option value="AZ">Arizona</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MT">Montana</option>
						<option value="NV">Nevada</option>
						<option value="NM">New Mexico</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="SD">South Dakota</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="WA">Washington</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					<h5>Municipality</h5>
					<select multiple="multiple" class="seach_select" id="search_select_city">
						<option value=""></option>
					</select>

					<input type="submit" name="submit" value="Submit" class="learn_more">
				</div>
				<div class="colspan12-10 as-grid with-gutters">
					<div class="map_con">
						<img class="themap" src="_/img/image-map.png" alt="USA" width="688" height="450" border="0" usemap="#USA">
						<map name="USA" id="USA">
							<area shape="poly" id="WA" coords="132,72,140,33,86,18,84,29,63,21,62,49,73,63,88,68,130,70,139,31,142,30" href="#" target="_self" alt="Washington">
							<area shape="poly" id="OR" coords="133,78,123,97,120,131,42,113,60,55" href="#" target="_self" alt="Oregon">
							<area shape="poly" id="CA" coords="84,130,75,168,128,253,120,263,117,274,88,272,89,265,79,247,68,238,54,233,58,224,45,204,52,200,35,136,45,119" href="#" target="_self" alt="California">
							<area shape="poly" id="NV" coords="149,139,136,224,129,224,125,236,76,169,87,128,149,140" href="#" target="_self" alt="Nevada">
							<area shape="poly" id="ID" coords="181,144,187,105,171,108,160,88,153,88,158,74,149,56,145,48,148,36,142,34,132,70,137,81,127,94,122,128,178,144" href="#" alt="Idaho">
							<area shape="poly" id="MT" coords="263,106,266,51,152,33,149,49,158,69,157,84,164,84,171,105,186,101,189,100,261,106" href="#" alt="Montana">
							<area shape="poly" id="WY" coords="258,167,262,107,192,102,181,157,256,167" href="#" alt="Wyoming">
							<area shape="poly" id="UT" coords="196,223,202,164,182,161,181,148,153,142,140,213,195,224" href="#" alt="Utah">
							<area shape="poly" id="AZ" coords="192,224,183,307,159,305,117,279,130,257,129,225,136,228,139,216,192,223" href="#" alt="Arizona">
							<area shape="poly" id="CO" coords="279,228,280,170,204,165,196,221,278,228" href="#" alt="Colorado">
							<area shape="poly" id="NM" coords="260,303,267,230,198,224,186,303,195,306,196,301,214,304,216,299,257,302" href="#" alt="New Mexico">
							<area shape="poly" id="TX" coords="220,302,261,304,269,240,298,240,301,269,342,283,360,281,371,285,375,305,381,322,378,339,335,369,331,384,337,396,310,390,308,375,291,348,277,336,264,339,256,349,239,338,239,327,221,308" href="#" alt="Texas">
							<area shape="poly" id="KS" coords="283,187,359,189,364,199,364,229,280,229,282,189" href="#" alt="Kansas">
							<area shape="poly" id="OK" coords="367,280,364,233,269,230,267,237,302,238,304,266,331,275,348,279" href="#" alt="Oklahoma">
							<area shape="poly" id="SD" coords="267,96,341,98,341,142,264,137,266,99" href="#" alt="South Dakota">
							<area shape="poly" id="MN" coords="337,52,345,133,399,131,383,116,382,100,386,89,410,65,390,64,380,60,367,59,359,51,358,54,340,52" href="#" alt="Minnesota">
							<area shape="poly" id="WI" coords="436,142,413,143,405,142,403,129,386,112,384,101,389,98,389,91,402,84,404,88,432,96,436,103,434,115,443,104,440,140" href="#" alt="WIsconsin">
							<area shape="poly" id="IA" coords="343,134,399,134,404,142,412,154,410,161,403,165,400,175,354,178,344,138" href="#" alt="Iowa">
							<area shape="poly" id="IL" coords="438,146,412,147,416,156,405,167,403,182,413,195,419,202,418,208,429,220,430,225,437,221,442,216,441,210,446,199,442,148" href="#" alt="Indiana">
							<area shape="poly" id="MI" coords="453,150,490,147,497,135,493,117,483,122,476,123,486,113,482,99,465,92,464,89,475,87,461,81,448,83,434,83,430,69,410,85,427,88,436,98,451,89,459,87,464,96,456,104,451,121,452,149" href="#" alt="Michigan">
						</map>
					</div>
				</div>
				</div>
		</form>
		<div class="gutter-grid">
			<div class="colspan12-4 as-grid with-gutter">
				<h1>Codes by Topic</h1>
				<p>Find legislation from municipalities and counties with regulatory needs and state requirements similar to your own. This is a great resource for finding sample text to use in your own legislation.</p>
			</div>
			<div class="colspan12-8 as-grid with-gutter">

				<form method="post" name="searchform" action="http://www.sterlingcodifiers.com/codebook/searchall.php" class="topic-search">
					<div class="topic-selector state-select">
					<label for="search_select_state_topic">State</label>
					<select class="seach_select" id="search_select_state_topic">
						<option value="AZ">Arizona</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MT">Montana</option>
						<option value="NV">Nevada</option>
						<option value="NM">New Mexico</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="SD">South Dakota</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="WA">Washington</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
					</div>
					<div class="topic-selector topic-select">
					<label for="topic_search">Topic or Phrase</label>
					<input type="text" id="topic_search" name="search" class="state_input_search">
					<p>To search for a phrase, enclose it in quotes.</p>
					</div>
					<div class="topic-selector select-submit">
					<input type="submit" name="btnSearch" class="learn_more" value="Submit">
					</div>
				</form>
			</div>
		</div>
		<div class="colspan12-12 questions">
			<p class="center">Questions? See <a href="#" class="underline">help for searching online codes</a>.</p>
		</div>
	</div>
</div>

<div class="row row2">
	<div class="colspan12-12">
		<div class="hero">
			<h1>A true commitment to your code.</h1>
			<small>— Since 1954 —</small>
		</div>
		<img style="max-width:100%;" src="_/img/penhand.jpg" alt="">
	</div>
</div>

<div class="row row3">
	<div class="gutter-grid">
		<div class="colspan12-6 colspan6-3 colspan2-2 as-grid with-gutter">
			<div class="padded typeset blue">
				<h1><span>We take great <em>pride</em></span> in the <em>details</em>.</h1>
				<p>
					We are hard-wired to produce perfection, questioning things that others may let pass. It’s all in an effort to deliver accuracy. To deliver it polished. And deliver it with pride.
				</p>
				<p>
					Codification is a collaboration, and all of our clients will attest to Sterling’s dedication to this approach.
				</p>
			</div>
		</div>
		<div class="colspan12-6 colspan6-3 colspan2-2 as-grid with-gutter">
			<div class="padded typeset orange">
				<ul class="cool-stuff">
					<li>
						<figure><img class="eyeglass" src="_/img/eyeglass.png" alt=""></figure>
						<p><b>Analysis from every angle</b> <br>
							No less than 5 employees review each ordinance.</p>
						</li>
						<li>
							<figure><img class="group" src="_/img/group.png" alt=""></figure>
							<p><b>Continuity through collaboration</b> <br>
								We’ve been providing seamless code maitenance for over 55 years.</p>
							</li>
							<li>
								<figure><img class="check" src="_/img/check.png" alt=""></figure>
								<p><b>Every word. Every reference. <br>Every punctuation mark.</b> <br>
									We focus on every detail and make no assumptions.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="row row4">
				<div class="white padded">
					<div id="testimony">
						<div id="testimony-blocks" class="swipe-wrap editable">
							<div class="repeatable">
								<blockquote>“A client testimonial can go here.”</blockquote>
								<p>-Client Name</p>
							</div>
							<div class="repeatable">
								<blockquote>“A client testimonial can go here.”</blockquote>
								<p>-Testimony</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row row5 features">
				<div class="gutter-grid">
					<div class="colspan12-4 colspan6-2 as-grid with-gutter">
						<div class="padded cyan typeset">
							<figure><img src="_/img/pencil.png" alt=""></figure>
							<h3>New Codes & Supplements</h3>
							<ul>
								<li>Content review of legislation for provisions that are conflicting, duplicated, inconsistent, obsolete or contain vague language.</li>
								<li>A check of statute references for current regulations.</li>
								<li>Publication in a uniform, professional format.</li>
							</ul>
						</div>
					</div>
					<div class="colspan12-4 colspan6-2 as-grid with-gutter">
						<div class="padded cyan typeset">
							<figure><img src="_/img/paper.png" alt=""></figure>
							<h3>Hard Copy Services</h3>
							<ul>
								<li>Supplement distribution directly to individual departments.</li>
								<li>Private subscriber supplement distribution.</li>
								<li>Booklets of specifically requested titles for departmental use or resale to the public.</li>
							</ul>
						</div>
					</div>
					<div class="colspan12-4 colspan6-2 as-grid with-gutter">
						<a data-scroll class="getcodes-check" href="#codes">
							<div class="padded cyan typeset corner-codes">
								<figure><img src="_/img/computer.png" alt=""></figure>
								<h3>Online Code Hosting</h3>
								<ul>
									<li>No specialized software needed—open to staff and public</li>
									<li>Full code searching with results synchronized to the table of contents.</li>
									<li>Simultaneous update: Your online code will be updated by the time you receive the hard copy of your supplement.</li>
								</ul>
							</div>
						</a>						
					</div>
				</div>
			</div>

			<div class="row row6">
				<div class="gutter-grid">
					<div class="colspan12-6 colspan6-3 as-grid with-gutter">
						<div class="bigtype">

							<span>A LONG</span>
							<span>HISTORY OF</span>
							<span>DELIVERING</span>
							<span class="underline">ACCURACY</span>

						</div>
					</div>
					<div class="colspan12-6 colspan6-3 as-grid with-gutter">
						<div class="padded typeset blue">
							<h1 class="header">About Us</h1>
							<p>
								Sterling Codifiers is now in its 3rd generation as a family owned company, with Rob Rollins and his wife Jill as the current owners.
							</p>
							<p>
								We understand that municipalities may not have enough time in the day or the resources to keep their code up to date. Well, we take all of this off your plate, and assume this integral part of a municipality’s day-to-day operations. It’s what we’ve been doing, with great success, for over 55 years.
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row row7">
				<div class="gutter-grid">
					<div class="colspan12-4 colspan6-2 as-grid with-gutter">
						<div class="orange typeset padded">
							<p class="contact-details">
								<span class="serif"><a href="tel:2086657193">208-665-7193</a></span> <br>
								<br>
								<b>Monday–Thursday</b> <br>
								7am–4pm PST <br>
								<b>Friday</b> <br>
								7am–12pm PST <br>
								<br>
								3906 Schreiber Way <br>
								Coeur d’Alene, ID 83815
							</p>
						</div>
					</div>
					<div class="colspan12-8 colspan6-4 as-grid with-gutter">
						<div class="typeset white typeset padded">
							<h2>Contact Us</h2>
							<form id="contact" action="contact-submit.php" method="post">
								<fieldset>	
									<div class="colspan12-6 colspan6-6 colspan2-2 as-grid formblock">
										<label for="name">Name</label>
										<input required type="text" name="name" placeholder="Full Name" title="Enter your name" class="required">
									</div>

									<div class="colspan12-6 colspan6-6 colspan2-2 as-grid with-gutter formblock">
										<label for="phone">Phone</label>
										<input type="tel" name="phone" placeholder="ex. (555) 555-5555">
									</div>

									<div class="formblock clear">
										<label for="email">E-mail</label>
										<input required type="email" name="email" placeholder="yourname@domain.com" title="Enter your e-mail address" class="required email">
									</div>

									<div class="formblock clear">
										<label for="message">Message</label>
										<textarea required name="message" placeholder="Your message" ></textarea>
									</div>

									<input type="submit" name="submit" class="button btn" id="submit" value="Submit" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>

			<?php include("_/inc/foot.php"); ?>