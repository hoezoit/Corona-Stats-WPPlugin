<hr class="wp-header-end">

<h1 class="wp-heading-inline">Corona Shortcode Settings</h1>

<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">

						<h2 class="hndle"><span>How to use the plugin:</span>
						</h2>

						<div class="inside">
							<p>
								<h4>You can use the following shortcodes to display realtime corona statistics data:</h4>
								
								<ul>
									<li><strong>[coronastats]</strong> : Get the current global infected count</li>
									<li><strong>[coronastats type='deaths']</strong> : Get the global data you specify</li>
									<li><strong>[coronastats country='BE' type='cases']</strong> : Specify a country and what data you want to see</li>
									<li><strong>[coronastats country='BE' type='cases' style='font-size:50px; color: red;' animated='YES']</strong> : Specify a country and what data you want to see, apply style and animation to the result</li>
								</ul>
								
								<br />
								
								<p>For example, if you want to see the total deathcount for the USA, you should use: [coronastats country='US' type='deaths']. See below table for specific type names.</p>
								
								<br />
								
								<h3>Possible settings table:</h3>
								
								<table class="widefat">
									<thead>
									<tr>
										<th class="row-title">Country</th>
										<th class="row-title">Type</th>
										<th class="row-title">Style</th>
										<th class="row-title">Animation</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><h4>ISO2 Country code:</h4></td>
										<td><h4>What type of data you want to see:</h4></td>
										<td><h4>Regular CSS stylesheet options:</h4></td>
										<td><h4>Show counter animation:</h4></td>
									</tr>
									<tr>
										<td>For example: 'BE' => for Belgium data</td>
										<td>'cases'	=>	Total number of cases for the country</td>
										<td>For example: 'color:red;' => Display the text in red color</td>
										<td>Set to 'YES' of 'NO'</td>
									</tr>
									<tr>
										<td>Check this <a href="https://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">WIKI page</a> to find your ISO2 country code</td>
										<td>'todayCases'			=>		Current new cases on todays date</td>
									</tr>
									<tr>
										<td></td>
										<td>'deaths'				=>		Total number of deaths for the country</td>
									</tr>
									<tr>
										<td></td>
										<td>'todayDeaths'			=>		Total number of cases for the country</td>
									</tr>
									<tr>
										<td></td>
										<td>'recovered'				=>		Total number of recoveries for the country</td>
									</tr>
									<tr>
										<td></td>
										<td>'active'				=>		Total number of active for the country</td>
									</tr>
									<tr>
										<td></td>
										<td>'critical'				=>		Total number of critical for the country</td>
									</tr>
									<tr>
										<td></td>
										<td>'casesPerOneMillion'	=>		Total number of cases per million for the country</td>
									</tr>
									<tr>
										<td></td>
										<td>'deathsPerOneMillion'	=>		Total number of deaths per million for the country</td>
									</tr>
								</table>
								
								
								
							</p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->
			

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">

				<div class="meta-box-sortables">

					<div class="postbox">

						<h2><span>About this plugin</h2>

						<div class="inside">
							<h4>Development:</h4>
							<p>This plugin has been developed specifically for the website: <a href="https://www.corona.vlaanderen" target="_blank">www.corona.vlaanderen</a> to display realtime data of the statistics about Covid-19 spreading.</p>
							<p>Development and distribution is done by: <a href="https://www.hoezo-it.be" target="_blank">Hoe? Zo! IT Maldegem (Belgium)</a></p>
							<h4>API data:</h4>
							<p>The data that is used in this plugin comes from NovelCOVID on GitHub. This is a very trustworthy source, that updates the API data as soon as new information is availble. <a href="https://github.com/novelcovid/api" target="_blank">Please check out the GitHub project here</a>.</p>
							<h4>Project Source Data:</h4>
							<p>The source of the data is from <a href="https://www.worldometers.info/coronavirus/" target="_blank">worldometers.info</a></p>
						</div>
						<!-- .inside -->

					</div>
					<!-- .postbox -->

				</div>
				<!-- .meta-box-sortables -->

			</div>
			<!-- #postbox-container-1 .postbox-container -->
			
		</div>
		<!-- #post-body .metabox-holder .columns-2 -->
		
		

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->

