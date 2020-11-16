@extends('layouts.master')

@section('content')
<div class="clearfix"></div>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Weekly Overview</h3>
							<p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-download"></i></span>
										<p>
											<span class="number">1,252</span>
											<span class="title">Downloads</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number">203</span>
											<span class="title">Sales</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-eye"></i></span>
										<p>
											<span class="number">274,678</span>
											<span class="title">Visits</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number">35%</span>
											<span class="title">Conversions</span>
										</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-9">
									<div id="headline-chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-line" style="width: 100%; height: 300;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="654.75" class="ct-grid ct-vertical"></line><line y1="229.28571428571428" y2="229.28571428571428" x1="50" x2="654.75" class="ct-grid ct-vertical"></line><line y1="193.57142857142856" y2="193.57142857142856" x1="50" x2="654.75" class="ct-grid ct-vertical"></line><line y1="157.85714285714286" y2="157.85714285714286" x1="50" x2="654.75" class="ct-grid ct-vertical"></line><line y1="122.14285714285714" y2="122.14285714285714" x1="50" x2="654.75" class="ct-grid ct-vertical"></line><line y1="86.42857142857142" y2="86.42857142857142" x1="50" x2="654.75" class="ct-grid ct-vertical"></line><line y1="50.71428571428572" y2="50.71428571428572" x1="50" x2="654.75" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="654.75" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,265L50,172.143L150.792,129.286L251.583,165L352.375,50.714L453.167,157.857L553.958,165L654.75,86.429L654.75,265Z" class="ct-area"></path></g><g class="ct-series ct-series-b"><path d="M50,265L50,236.429L150.792,157.857L251.583,207.857L352.375,93.571L453.167,129.286L553.958,65L654.75,22.143L654.75,265Z" class="ct-area"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="100.79166666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 101px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mon</span></foreignObject><foreignObject style="overflow: visible;" x="150.79166666666669" y="270" width="100.79166666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 101px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Tue</span></foreignObject><foreignObject style="overflow: visible;" x="251.58333333333334" y="270" width="100.79166666666666" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 101px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Wed</span></foreignObject><foreignObject style="overflow: visible;" x="352.375" y="270" width="100.79166666666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 101px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Thu</span></foreignObject><foreignObject style="overflow: visible;" x="453.1666666666667" y="270" width="100.79166666666669" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 101px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Fri</span></foreignObject><foreignObject style="overflow: visible;" x="553.9583333333334" y="270" width="100.79166666666663" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 101px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sat</span></foreignObject><foreignObject style="overflow: visible;" x="654.75" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sun</span></foreignObject><foreignObject style="overflow: visible;" y="229.28571428571428" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">10</span></foreignObject><foreignObject style="overflow: visible;" y="193.57142857142856" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">15</span></foreignObject><foreignObject style="overflow: visible;" y="157.85714285714283" x="10" height="35.71428571428571" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">20</span></foreignObject><foreignObject style="overflow: visible;" y="122.14285714285714" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">25</span></foreignObject><foreignObject style="overflow: visible;" y="86.42857142857142" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">30</span></foreignObject><foreignObject style="overflow: visible;" y="50.71428571428572" x="10" height="35.714285714285694" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">35</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">40</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">45</span></foreignObject></g></svg></div>
								</div>
								<div class="col-md-3">
									<div class="weekly-summary text-right">
										<span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
										<span class="info-label">Total Sales</span>
									</div>
									<div class="weekly-summary text-right">
										<span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
										<span class="info-label">Monthly Income</span>
									</div>
									<div class="weekly-summary text-right">
										<span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
										<span class="info-label">Total Income</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
					<div class="row">
						<div class="col-md-6">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Recent Purchases</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Order No.</th>
												<th>Name</th>
												<th>Amount</th>
												<th>Date &amp; Time</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a href="#">763648</a></td>
												<td>Steve</td>
												<td>$122</td>
												<td>Oct 21, 2016</td>
												<td><span class="label label-success">COMPLETED</span></td>
											</tr>
											<tr>
												<td><a href="#">763649</a></td>
												<td>Amber</td>
												<td>$62</td>
												<td>Oct 21, 2016</td>
												<td><span class="label label-warning">PENDING</span></td>
											</tr>
											<tr>
												<td><a href="#">763650</a></td>
												<td>Michael</td>
												<td>$34</td>
												<td>Oct 18, 2016</td>
												<td><span class="label label-danger">FAILED</span></td>
											</tr>
											<tr>
												<td><a href="#">763651</a></td>
												<td>Roger</td>
												<td>$186</td>
												<td>Oct 17, 2016</td>
												<td><span class="label label-success">SUCCESS</span></td>
											</tr>
											<tr>
												<td><a href="#">763652</a></td>
												<td>Smith</td>
												<td>$362</td>
												<td>Oct 16, 2016</td>
												<td><span class="label label-success">SUCCESS</span></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
										<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
									</div>
								</div>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
						<div class="col-md-6">
							<!-- MULTI CHARTS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Projection vs. Realization</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<div id="visits-trends-chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="270px" class="ct-chart-line" style="width: 100%; height: 270px;"><g class="ct-grids"></g><g><g ct:series-name="series-real" class="ct-series ct-series-a"><path d="M20,186.111L53.682,142.111L87.364,149.444L121.045,156.778L154.727,134.778L188.409,125L222.091,95.667L255.773,137.222L289.455,99.333L323.136,83.444L356.818,51.667L390.5,15" class="ct-line"></path><line x1="20" y1="186.11111111111111" x2="20.01" y2="186.11111111111111" class="ct-point" ct:value="200"></line><line x1="53.68181818181818" y1="142.11111111111111" x2="53.69181818181818" y2="142.11111111111111" class="ct-point" ct:value="380"></line><line x1="87.36363636363636" y1="149.44444444444446" x2="87.37363636363636" y2="149.44444444444446" class="ct-point" ct:value="350"></line><line x1="121.04545454545453" y1="156.77777777777777" x2="121.05545454545454" y2="156.77777777777777" class="ct-point" ct:value="320"></line><line x1="154.72727272727272" y1="134.77777777777777" x2="154.7372727272727" y2="134.77777777777777" class="ct-point" ct:value="410"></line><line x1="188.4090909090909" y1="125" x2="188.4190909090909" y2="125" class="ct-point" ct:value="450"></line><line x1="222.09090909090907" y1="95.66666666666666" x2="222.10090909090906" y2="95.66666666666666" class="ct-point" ct:value="570"></line><line x1="255.77272727272725" y1="137.22222222222223" x2="255.78272727272724" y2="137.22222222222223" class="ct-point" ct:value="400"></line><line x1="289.45454545454544" y1="99.33333333333334" x2="289.46454545454543" y2="99.33333333333334" class="ct-point" ct:value="555"></line><line x1="323.1363636363636" y1="83.44444444444446" x2="323.1463636363636" y2="83.44444444444446" class="ct-point" ct:value="620"></line><line x1="356.8181818181818" y1="51.66666666666666" x2="356.8281818181818" y2="51.66666666666666" class="ct-point" ct:value="750"></line><line x1="390.5" y1="15" x2="390.51" y2="15" class="ct-point" ct:value="900"></line></g><g ct:series-name="series-projection" class="ct-series ct-series-b"><path d="M20,235L20,176.333L53.682,149.444L87.364,147L121.045,142.111L154.727,137.222L188.409,125L222.091,117.667L255.773,107.156L289.455,99.333L323.136,88.333L356.818,63.889L390.5,39.444L390.5,235Z" class="ct-area"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="20" y="240" width="33.68181818181818" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="53.68181818181818" y="240" width="33.68181818181818" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="87.36363636363636" y="240" width="33.68181818181817" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="121.04545454545453" y="240" width="33.68181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Apr</span></foreignObject><foreignObject style="overflow: visible;" x="154.72727272727272" y="240" width="33.68181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">May</span></foreignObject><foreignObject style="overflow: visible;" x="188.4090909090909" y="240" width="33.68181818181816" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Jun</span></foreignObject><foreignObject style="overflow: visible;" x="222.09090909090907" y="240" width="33.68181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Jul</span></foreignObject><foreignObject style="overflow: visible;" x="255.77272727272725" y="240" width="33.68181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Aug</span></foreignObject><foreignObject style="overflow: visible;" x="289.45454545454544" y="240" width="33.68181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sep</span></foreignObject><foreignObject style="overflow: visible;" x="323.1363636363636" y="240" width="33.68181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Oct</span></foreignObject><foreignObject style="overflow: visible;" x="356.8181818181818" y="240" width="33.68181818181819" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 34px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Nov</span></foreignObject><foreignObject style="overflow: visible;" x="390.5" y="240" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Dec</span></foreignObject><foreignObject style="overflow: visible;" y="210.55555555555554" x="20" height="24.444444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">0</span></foreignObject><foreignObject style="overflow: visible;" y="186.1111111111111" x="20" height="24.444444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">100</span></foreignObject><foreignObject style="overflow: visible;" y="161.66666666666669" x="20" height="24.444444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">200</span></foreignObject><foreignObject style="overflow: visible;" y="137.22222222222223" x="20" height="24.444444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">300</span></foreignObject><foreignObject style="overflow: visible;" y="112.77777777777777" x="20" height="24.444444444444457" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">400</span></foreignObject><foreignObject style="overflow: visible;" y="88.33333333333334" x="20" height="24.44444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">500</span></foreignObject><foreignObject style="overflow: visible;" y="63.888888888888886" x="20" height="24.444444444444457" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">600</span></foreignObject><foreignObject style="overflow: visible;" y="39.44444444444446" x="20" height="24.44444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">700</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="20" height="24.444444444444457" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">800</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="20" height="30" width="0"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">900</span></foreignObject></g></svg></div>
								</div>
							</div>
							<!-- END MULTI CHARTS -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<!-- TODO LIST -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">To-Do List</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<ul class="list-unstyled todo-list">
										<li>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											<p>
												<span class="title">Restart Server</span>
												<span class="short-description">Dynamically integrate client-centric technologies without cooperative resources.</span>
												<span class="date">Oct 9, 2016</span>
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
										<li>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											<p>
												<span class="title">Retest Upload Scenario</span>
												<span class="short-description">Compellingly implement clicks-and-mortar relationships without highly efficient metrics.</span>
												<span class="date">Oct 23, 2016</span>
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
										<li>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											<p>
												<strong>Functional Spec Meeting</strong>
												<span class="short-description">Monotonectally formulate client-focused core competencies after parallel web-readiness.</span>
												<span class="date">Oct 11, 2016</span>
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- END TODO LIST -->
						</div>
						<div class="col-md-5">
							<!-- TIMELINE -->
							<div class="panel panel-scrolling">
								<div class="panel-heading">
									<h3 class="panel-title">Recent User Activity</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 430px;"><div class="panel-body" style="overflow: hidden; width: auto; height: 430px;">
									<ul class="list-unstyled activity-list">
										<li>
											<img src="assets/img/user1.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Michael</a> has achieved 80% of his completed tasks <span class="timestamp">20 minutes ago</span></p>
										</li>
										<li>
											<img src="assets/img/user2.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Daniel</a> has been added as a team member to project <a href="#">System Update</a> <span class="timestamp">Yesterday</span></p>
										</li>
										<li>
											<img src="assets/img/user3.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Martha</a> created a new heatmap view <a href="#">Landing Page</a> <span class="timestamp">2 days ago</span></p>
										</li>
										<li>
											<img src="assets/img/user4.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Jane</a> has completed all of the tasks <span class="timestamp">2 days ago</span></p>
										</li>
										<li>
											<img src="assets/img/user5.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Jason</a> started a discussion about <a href="#">Weekly Meeting</a> <span class="timestamp">3 days ago</span></p>
										</li>
									</ul>
									<button type="button" class="btn btn-primary btn-bottom center-block">Load More</button>
								</div><div class="slimScrollBar" style="background-color: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; z-index: 99; right: 1px; height: 292.5632911392405px; background-position: initial initial; background-repeat: initial initial;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; background-color: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px; background-position: initial initial; background-repeat: initial initial;"></div></div>
							</div>
							<!-- END TIMELINE -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<!-- TASKS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">My Tasks</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<ul class="list-unstyled task-list">
										<li>
											<p>Updating Users Settings <span class="label-percent">23%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%">
													<span class="sr-only">23% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<p>Load &amp; Stress Test <span class="label-percent">80%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
													<span class="sr-only">80% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<p>Data Duplication Check <span class="label-percent">100%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
													<span class="sr-only">Success</span>
												</div>
											</div>
										</li>
										<li>
											<p>Server Check <span class="label-percent">45%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
													<span class="sr-only">45% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<p>Mobile App Development <span class="label-percent">10%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
													<span class="sr-only">10% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- END TASKS -->
						</div>
						<div class="col-md-4">
							<!-- VISIT CHART -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Website Visits</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<div id="visits-chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-bar" style="width: 100%; height: 300;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="231.328125" class="ct-grid ct-vertical"></line><line y1="233.75" y2="233.75" x1="50" x2="231.328125" class="ct-grid ct-vertical"></line><line y1="202.5" y2="202.5" x1="50" x2="231.328125" class="ct-grid ct-vertical"></line><line y1="171.25" y2="171.25" x1="50" x2="231.328125" class="ct-grid ct-vertical"></line><line y1="140" y2="140" x1="50" x2="231.328125" class="ct-grid ct-vertical"></line><line y1="108.75" y2="108.75" x1="50" x2="231.328125" class="ct-grid ct-vertical"></line><line y1="77.5" y2="77.5" x1="50" x2="231.328125" class="ct-grid ct-vertical"></line><line y1="46.25" y2="46.25" x1="50" x2="231.328125" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="231.328125" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="62.95200892857143" x2="62.95200892857143" y1="265" y2="65.5" class="ct-bar" ct:value="6384"></line><line x1="88.85602678571429" x2="88.85602678571429" y1="265" y2="66.8125" class="ct-bar" ct:value="6342"></line><line x1="114.76004464285715" x2="114.76004464285715" y1="265" y2="95.09375" class="ct-bar" ct:value="5437"></line><line x1="140.6640625" x2="140.6640625" y1="265" y2="178.625" class="ct-bar" ct:value="2764"></line><line x1="166.56808035714286" x2="166.56808035714286" y1="265" y2="141.3125" class="ct-bar" ct:value="3958"></line><line x1="192.4720982142857" x2="192.4720982142857" y1="265" y2="106.625" class="ct-bar" ct:value="5068"></line><line x1="218.37611607142856" x2="218.37611607142856" y1="265" y2="25.8125" class="ct-bar" ct:value="7654"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="25.904017857142858" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 26px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mon</span></foreignObject><foreignObject style="overflow: visible;" x="75.90401785714286" y="270" width="25.904017857142858" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 26px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Tue</span></foreignObject><foreignObject style="overflow: visible;" x="101.80803571428572" y="270" width="25.904017857142854" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 26px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Wed</span></foreignObject><foreignObject style="overflow: visible;" x="127.71205357142857" y="270" width="25.90401785714286" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 26px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Thu</span></foreignObject><foreignObject style="overflow: visible;" x="153.61607142857144" y="270" width="25.904017857142847" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 26px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Fri</span></foreignObject><foreignObject style="overflow: visible;" x="179.52008928571428" y="270" width="25.90401785714286" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 26px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sat</span></foreignObject><foreignObject style="overflow: visible;" x="205.42410714285714" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sun</span></foreignObject><foreignObject style="overflow: visible;" y="233.75" x="10" height="31.25" width="30"><span class="ct-label ct-vertical ct-start" style="height: 31px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">0</span></foreignObject><foreignObject style="overflow: visible;" y="202.5" x="10" height="31.25" width="30"><span class="ct-label ct-vertical ct-start" style="height: 31px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">1000</span></foreignObject><foreignObject style="overflow: visible;" y="171.25" x="10" height="31.25" width="30"><span class="ct-label ct-vertical ct-start" style="height: 31px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">2000</span></foreignObject><foreignObject style="overflow: visible;" y="140" x="10" height="31.25" width="30"><span class="ct-label ct-vertical ct-start" style="height: 31px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">3000</span></foreignObject><foreignObject style="overflow: visible;" y="108.75" x="10" height="31.25" width="30"><span class="ct-label ct-vertical ct-start" style="height: 31px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">4000</span></foreignObject><foreignObject style="overflow: visible;" y="77.5" x="10" height="31.25" width="30"><span class="ct-label ct-vertical ct-start" style="height: 31px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">5000</span></foreignObject><foreignObject style="overflow: visible;" y="46.25" x="10" height="31.25" width="30"><span class="ct-label ct-vertical ct-start" style="height: 31px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">6000</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="31.25" width="30"><span class="ct-label ct-vertical ct-start" style="height: 31px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">7000</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">8000</span></foreignObject></g></svg></div>
								</div>
							</div>
							<!-- END VISIT CHART -->
						</div>
						<div class="col-md-4">
							<!-- REALTIME CHART -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">System Load</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<div id="system-load" class="easy-pie-chart" data-percent="70">
										<span class="percent">65</span>
									<canvas height="260" width="260" style="height: 130px; width: 130px;"></canvas></div>
									<h4>CPU Load</h4>
									<ul class="list-unstyled list-justify">
										<li>High: <span>95%</span></li>
										<li>Average: <span>87%</span></li>
										<li>Low: <span>20%</span></li>
										<li>Threads: <span>996</span></li>
										<li>Processes: <span>259</span></li>
									</ul>
								</div>
							</div>
							<!-- END REALTIME CHART -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
<!-- END MAIN -->
</body>
@stop