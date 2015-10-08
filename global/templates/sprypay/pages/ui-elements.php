<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from jesus.gallery/cloud2/ui-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Aug 2015 12:11:03 GMT -->
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Cloud Admin Dashboard</title>
		<meta name="description" content="Cloud Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Bootstrap, Light weight Admin Dashboard,Light weight, Light weight Admin, Light weight Dashboard" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.html">
		
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

		<!-- Animate CSS -->
		<link href="css/animate.css" rel="stylesheet" media="screen">

		<!-- date range -->
		<link rel="stylesheet" type="text/css" href="css/daterange.css">

		<!-- Main CSS -->
		<link href="css/main.css" rel="stylesheet" media="screen">

		<!-- Slidebar CSS -->
		<link rel="stylesheet" type="text/css" href="css/slidebars.css">

		<!-- Font Awesome -->
		<link href="fonts/font-awesome.min.css" rel="stylesheet">

		<!-- Metrize Fonts -->
		<link href="fonts/metrize.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>  

	<body>

		<!-- Left sidebar start -->
		<aside id="sidebar">

			<!-- Logo starts -->
			<a href="#" class="logo">
				<img src="img/logo.png" alt="logo">
			</a>
			<!-- Logo ends -->

			<!-- Menu start -->
			<div id='menu'>
				<ul>
					<li>
						<a href='index.html'>
							<div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
							<span>Dashboard</span>
						</a>
					</li>
					<li>
						<a href='graphs.html'>
							<div class="fs1" aria-hidden="true" data-icon="&#xe0f8;"></div>
							<span>Graphs</span>
						</a>
					</li>
					<li class='has-sub highlight active'>
						<a href='#'>
							<div class="fs1" aria-hidden="true" data-icon="&#xe052;"></div>
							<span>Ui Elements</span>
						</a>
						<ul style="display: block">
							<li>
								<a href='panels.html'>
									<span>Panel &amp; List Groups</span>
								</a>
							</li>
							<li>
								<a href='buttons.html'>
									<span>Buttons</span>
								</a>
							</li>
							<li>
								<a href='grid.html'>
									<span>Grid</span>
								</a>
							</li>
							<li>
								<a href='ui-elements.html' class="select">
									<span>More</span>
								</a>
							</li>
						</ul>
					</li>
					<li class='has-sub'>
						<a href='#'>
							<div class="fs1" aria-hidden="true" data-icon="&#xe0ab;"></div>
							<span>Forms</span>
						</a>
						<ul>
							<li>
								<a href='form.html'>
									<span>Form Elements</span>
								</a>
							</li>
							<li>
								<a href='form-wizard.html'>
									<span>Form Wizards</span>
								</a>
							</li>
							<li>
								<a href="editor.html">
									<span>Wysihtml Editor</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href='gallery.html'>
							<div class="fs1" aria-hidden="true" data-icon="&#xe0e6;"></div>
							<span>Gallery</span>
						</a>
					</li>
					<li>
						<a href="tables.html">
							<div class="fs1" aria-hidden="true" data-icon="&#xe0f2;"></div>
							<span>Tables</span>
						</a>
					</li>
					<li class='has-sub'>
						<a href='#'>
							<div class="fs1" aria-hidden="true" data-icon="&#xe0a0;"></div>
							<span>Bonus Pages</span>
						</a>
						<ul>
							<li>
								<a href='invoice.html'>
									<span>Invoice</span>
								</a>
							</li>
							<li>
								<a href='calendar.html'>
									<span>Calendar</span>
								</a>
							</li>
							<li>
								<a href='login.html'>
									<span>Login</span>
								</a>
							</li>
							<li>
								<a href='404.html'>
									<span>404</span>
								</a>
							</li>
							<li>
								<a href='default.html'>
									<span>Default</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href='maps.html'>
							<div class="fs1" aria-hidden="true" data-icon="&#xe089;"></div>
							<span>Vector Maps</span>
						</a>
					</li>
					<li>
						<a href='notifications.html'>
							<div class="fs1" aria-hidden="true" data-icon="&#xe0e9;"></div>
							<span>Notifications</span>
						</a>
					</li>
					<li>
						<a href='typography.html'>
							<div class="fs1" aria-hidden="true" data-icon="&#xe019;"></div>
							<span>Typography</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- Menu End -->

		</aside>
		<!-- Left sidebar end -->

		<!-- Dashboard Wrapper Start -->
		<div class="dashboard-wrapper">

			<!-- Header start -->
			<header>
				<ul class="pull-left" id="left-nav">
					<li class="hidden-lg hidden-md hidden-sm">
						<div class="logo-mob clearfix">
							<h2><div class="fs1" aria-hidden="true" data-icon="&#xe0db;"></div><span>Cloud Admin</span></h2>
						</div>
					</li>
					<li class="hidden-xs">
						<a href="#" class="btn btn-info btn-sm">V1</a>
					</li>
					<li>
						<div class="custom-search hidden-sm hidden-xs pull-left">
							<input type="text" class="search-query" placeholder="Search here">
							<i class="fa fa-search"></i>
						</div>
					</li>
				</ul>
				<div class="pull-right">
					<ul id="mini-nav" class="clearfix">
						<li class="list-box hidden-xs">
							<a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
								<div class="fs1" aria-hidden="true" data-icon="&#xe129;"></div>
							</a>
							<span class="info-label red-bg animated rubberBand">7</span>
							<ul class="dropdown-menu flipInX animated messages">
								<li class="dropdown-header">You have 7 messages</li>
								<li>
									<div class="icon">
										<img src="img/admin10.png" alt="Browser">
									</div>
									<div class="details">
										<strong class="text-danger">Willams</strong>
										<span>Firefox is a free, open-source web browser from Mozilla.</span>
									</div>
								</li>
								<li>
									<div class="icon">
										<img src="img/admin6.png" alt="Browser">
									</div>
									<div class="details">
										<strong class="text-info">Sunny</strong>
										<span>Internet Explorer is a free web browser from Microsoft.</span>
									</div>
								</li>
								<li>
									<div class="icon">
										<img src="img/admin3.png" alt="Browser">
									</div>
									<div class="details">
										<strong class="text-info">James</strong>
										<span>Safari is known for its sleek design and ease of use.</span>
									</div>
								</li>
							</ul>
						</li>
						<li class="list-box hidden-xs">
							<a id="drop2" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
								<div class="fs1" aria-hidden="true" data-icon="&#xe0e3;"></div>
							</a>
							<span class="info-label blue-bg animated rubberBand">3</span>
							<ul class="dropdown-menu fadeInUp animated messages">
								<li class="dropdown-header">Recent Chat</li>
								<div class="chats clearfix">
									<p class="chat them">
									James, I'm going to be a little late.
									</p>
									<p class="chat me">
									S'Okay, Dude. You know your lines...?
									</p>
									<p class="chat them">
									I know em, I don't know what order they come in...
									</p>
									<p class="chat me">
									We'll work it out...
									</p>
								</div>
							</ul>
						</li>
						<li class="list-box hidden-xs dropdown">
							<a id="drop3" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
								<div class="fs1" aria-hidden="true" data-icon="&#xe0ca;"></div>
							</a>
							<span class="info-label green-bg animated rubberBand">6</span>
							<ul class="flipInX animated dropdown-menu stats-widget clearfix">
							<li>
								<h5 class="text-success">$37895</h5>
								<p>Revenue <span class="text-success">+2%</span></p>
								<div class="progress progress-xs">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
										<span class="sr-only">40% Complete (success)</span>
									</div>
								</div>
							</li>
							<li>
								<h5 class="text-info">47,892</h5>
								<p>Downloads <span class="text-info">+39%</span></p>
								<div class="progress progress-xs">
									<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
										<span class="sr-only">40% Complete (info)</span>
									</div>
								</div>
							</li>
							<li>
								<h5 class="text-danger">28214</h5>
								<p>Uploads <span class="text-danger">-7%</span></p>
								<div class="progress progress-xs">
									<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
										<span class="sr-only">40% Complete (danger)</span>
									</div>
								</div>
							</li>
						</ul>
						</li>
						<li class="list-box hidden-xs dropdown">
							<a id="drop1" href="#" role="button" class="dropdown-toggle current-user" data-toggle="dropdown">
								Sandy <b class="caret"></b>
							</a>
							<ul class="dropdown-menu sm fadeInUp animated messages">
								<li class="dropdown-content">
									<a href="#">Edit Profile</a>
									<a href="#">Change Password</a>
									<a href="#">Settings</a>
									<a href="login.html">Logout</a>
								</li>
							</ul>
						</li>
						<li class="list-box hidden-lg hidden-md hidden-sm" id="mob-nav">
							<a href="#">
								<i class="fa fa-reorder"></i>
							</a>
						</li>
					</ul>
				</div>
			</header>
			<!-- Header ends -->

			<!-- Right sidebar start -->
			<div class="sb-slidebar sb-right sb-close">

				<!-- User Profile Start -->
        <section class="user-profile">
          <div class="profile-container">
            <img src="img/admin1.png" class="user-img" alt="User Image">
            <div class="desc">
              <h4>John Doe</h4>
              <p class="text-info">UX Designer</p>
            </div>
          </div>
          <ul class="ftr-link">
            <li class="active">
              <a href="javascript:;">
                <div class="fs1" aria-hidden="true" data-icon="&#xe033;"></div>985
              </a>
            </li>
            <li>
              <a href="javascript:;" class="text-success">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0b9;"></div> 999
              </a>
            </li>
            <li>
              <a href="javascript:;" class="text-pink">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0e3;"></div> 143
              </a>
            </li>
          </ul>
        </section>
        <!-- User Profile End -->

        <!-- Online Users start -->
        <div class="block">
          <div class="heading">Users Online</div>
          <div class="wrapper">
            <!-- Online Users Start -->
            <ul class="online-users">
              <li>
                <a href="#" data-lastname="Sandhya" data-status="online" data-original-title="">
                  <span>Sunny</span>
                  <div class="user-status online"></div>
                </a>
              </li>
              <li>
                <a href="#" data-lastname="Sandhya" data-status="online" data-original-title="">
                  <span>Henrik</span>
                  <div class="user-status online"></div>
                </a>
              </li>
              <li>
                <a href="#" data-lastname="Sandhya" data-status="online" data-original-title="">
                  <span>John Doe</span>
                  <div class="user-status busy"></div>
                </a>
              </li>
              <li>
                <a href="#" data-lastname="Sandhya" data-status="online" data-original-title="">
                  <span>Fleming</span>
                  <div class="user-status away"></div>
                </a>
              </li>
              <li>
                <a href="#" data-lastname="Sandhya" data-status="online" data-original-title="">
                  <span>Wills</span>
                  <div class="user-status"></div>
                </a>
              </li>
            </ul>
            <!-- Online Users End -->
          </div>
        </div>
        <!-- Online Users end -->

        <!-- Checkout start -->
        <div class="block">
          <div class="heading">Checkout</div>
          <ul class="cart">
            <li class="cart-item">
              <span class="cart-item-pic">
                <img src="img/admin2.png" alt="EarthSquare">
              </span>
              Item #1
              <span class="cart-item-desc">Description</span>
              <span class="cart-item-price">$16.80</span>
            </li>
            <li class="cart-item">
              <span class="cart-item-pic">
                <img src="img/admin4.png" alt="EarthSquare">
              </span>
              Item #2
              <span class="cart-item-desc">Description</span>
              <span class="cart-item-price">$15.00</span>
            </li>
            <li class="cart-item">
              <span class="cart-item-pic">
                <img src="img/admin8.png" alt="EarthSquare">
              </span>
              Item #3
              <span class="cart-item-desc">Description</span>
              <span class="cart-item-price">$23.00</span>
            </li>
          </ul>
          <div class="cart-bottom">
            Total: $54.80
            <a href="#" class="cart-button">Continue</a>
          </div>
        </div>
        <!-- Checkout end -->

        <!-- Notifications Start -->
        <div class="block">
          <div class="heading">Notifications</div>
          <!-- Notifications -->
          <ul class="infos">
            <li>
              <span class="label label-success pull-left">
                <div class="fs1" aria-hidden="true" data-icon="&#xe128;"></div>
              </span>
              <div class="info">
                <h6>Guru Tweeted</h6>
                <p class="designation">Few seconds ago</p>
              </div>
            </li>
            <li>
              <span class="label label-danger pull-left">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0e9;"></div>
              </span>
              <div class="info">
                <h6>Server #999 Crashed</h6>
                <p class="designation">2 minutes ago</p>
              </div>
            </li>
            <li>
              <span class="label label-info pull-left">
                <div class="fs1" aria-hidden="true" data-icon="&#xe0e3;"></div>
              </span>
              <div class="info">
                <h6>Kiri's account was created</h6>
                <p class="designation">5 days ago</p>
              </div>
            </li>
          </ul>
        </div>
        <!-- Notifications End -->

			</div>
			<!-- Right sidebar end -->

			<!-- Main Container Start -->
			<div class="main-container">

				<!-- Top Bar Starts -->
				<div class="top-bar clearfix">
					<div class="page-title">
						<h4><div class="fs1" aria-hidden="true" data-icon="&#xe0e6;"></div>UI Elements <a href="panels.html" class="samll">Panels</a></h4>
					</div>
					<ul class="right-stats hidden-xs" id="mini-nav-right">
						<li class="reportrange btn btn-success">
							<i class="fa fa-calendar"></i>
							<span></span> <b class="caret"></b>
						</li>
						<li>
							<a href="#" class="btn btn-info sb-open-right sb-close">
								<div class="fs1" aria-hidden="true" data-icon="&#xe06a;"></div>
							</a>
						</li>
					</ul>
				</div>
				<!-- Top Bar Ends -->

				<!-- Container fluid Starts -->
				<div class="container-fluid">

					<!-- Spacer starts -->
					<div class="spacer-xs">
						
						<!-- Row start -->
			      <div class="row no-gutter">

			        <div class="col-md-4 col-sm-4 col-xs-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Tabs</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			              <ul id="myTab" class="nav nav-tabs">
			                <li class="active">
			                  <a href="#fat" data-toggle="tab" data-original-title="">@Fat</a>
			                </li>
			                <li class="">
			                  <a href="#bat" data-toggle="tab" data-original-title="">@Bat</a>
			                </li>
			                <li class="">
			                  <a href="#mat" data-toggle="tab" data-original-title="">@Mat</a>
			                </li>
			              </ul>
			              <br>
			              <div id="myTabContent" class="tab-content">
			                <div class="tab-pane fade active in" id="fat">
			                  <p class="no-margin">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
			                </div>
			                <div class="tab-pane fade" id="bat">
			                  <p class="no-margin">Food truck fixie locavore Exercitation +1 labore velit, blog sartorial PBR leggings next Vegan fanny sapiente accusamus tattooed echo park.</p>
			                </div>
			                <div class="tab-pane fade" id="mat">
			                  <p class="no-margin">Etsy mixtape wayfarers gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.</p>
			                </div>
			              </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-md-4 col-sm-4 col-xs-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Tabs Justified</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			              <ul id="myTab2" class="nav nav-tabs nav-justified">
			                <li class="active">
			                  <a href="#home1" data-toggle="tab" data-original-title="">Home</a>
			                </li>
			                <li class="">
			                  <a href="#profile1" data-toggle="tab" data-original-title="">Profile</a>
			                </li>
			                <li class="">
			                  <a href="#messages" data-toggle="tab" data-original-title="">Messages</a>
			                </li>
			              </ul>
			              <br>
			              <div id="myTabContent1" class="tab-content">
			                <div class="tab-pane fade active in" id="home1">
			                  <p class="no-margin">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
			                </div>
			                <div class="tab-pane fade" id="profile1">
			                  <p class="no-margin">Food truck fixie locavore Exercitation +1 labore velit, blog sartorial PBR leggings next Vegan fanny sapiente accusamus tattooed echo park.</p>
			                </div>
			                <div class="tab-pane fade" id="messages">
			                  <p class="no-margin">Etsy mixtape wayfarers gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.</p>
			                </div>
			              </div>
			            </div>
			          </div>
			        </div>

			        <div class="col-md-4 col-sm-4 col-xs-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Tabs Dropdown</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			              <ul id="myTab1" class="nav nav-tabs">
			                <li class="active">
			                  <a href="#home" data-toggle="tab" data-original-title="">Home</a>
			                </li>
			                <li class="">
			                  <a href="#profile" data-toggle="tab" data-original-title="">Profile</a>
			                </li>
			                <li class="dropdown">
			                  <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" data-original-title="">Dropdown <b class="caret"></b></a>
			                  <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
			                    <li>
			                      <a href="#dropdown1" tabindex="-1" data-toggle="tab" data-original-title="">@fat</a>
			                    </li>
			                    <li>
			                      <a href="#dropdown2" tabindex="-1" data-toggle="tab" data-original-title="">@mdo</a>
			                    </li>
			                  </ul>
			                </li>
			              </ul>
			              <br>
			              <div id="myTabContent2" class="tab-content">
			                <div class="tab-pane fade active in" id="home">
			                  <p class="no-margin">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
			                </div>
			                <div class="tab-pane fade" id="profile">
			                  <p class="no-margin">Food truck fixie locavore Exercitation +1 labore velit, blog sartorial PBR leggings next Vegan fanny sapiente accusamus tattooed echo park.</p>
			                </div>
			                <div class="tab-pane fade" id="dropdown1">
			                  <p class="no-margin">Etsy mixtape wayfarers gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony.</p>
			                </div>
			                <div class="tab-pane fade" id="dropdown2">
			                  <p class="no-margin">Trust fund seitan letterpress master cleanse gluten-free squid scenester freegan cosby sweater keffiyeh echo park vegan.</p>
			                </div>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			      <!-- Row end -->

			      <!-- Row start -->
			      <div class="row no-gutter">
			        <div class="col-md-4">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Breadcrumbs</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			              <ol class="breadcrumb no-margin">
			                <li><a href="#">Home</a></li>
			                <li><a href="#">Library</a></li>
			                <li class="active">Data</li>
			              </ol>
			            </div>
			          </div>
			        </div>

			        <div class="col-md-4">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Pagination</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			              <ul class="pagination no-margin">
			                <li class="disabled"><a href="#">&laquo;</a></li>
			                <li class="active"><a href="#">1</a></li>
			                <li><a href="#">2</a></li>
			                <li><a href="#">3</a></li>
			                <li><a href="#">4</a></li>
			                <li><a href="#">5</a></li>
			                <li><a href="#">6</a></li>
			                <li><a href="#">&raquo;</a></li>
			              </ul>
			            </div>
			          </div>
			        </div>

			        <div class="col-md-4">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Pager</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			              <ul class="pager no-margin">
			                <li class="previous disabled"><a href="#">&larr; Older</a></li>
			                <li class="next"><a href="#">Newer &rarr;</a></li>
			              </ul>
			            </div>
			          </div>
			        </div>
			      </div>
			      <!-- Row end -->

			      <!-- Row start -->
			      <div class="row no-gutter">
			        <div class="col-md-4 col-sm-4 col-sx-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Pills</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			              <ul class="nav nav-pills">
			                <li class="active"><a href="#" data-original-title="">Home <span class="badge">12</span></a></li>
			                <li><a href="#" data-original-title="">About</a></li>
			                <li class="dropdown">
			                  <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-original-title="">
			                    Dropdown <span class="caret"></span>
			                  </a>
			                  <ul class="dropdown-menu" role="menu">
			                    <li><a href="#" data-original-title="">Action</a></li>
			                    <li><a href="#" data-original-title="">Another action</a></li>
			                    <li><a href="#" data-original-title="">Something else here</a></li>
			                    <li class="divider"></li>
			                    <li><a href="#" data-original-title="">Separated link</a></li>
			                  </ul>
			                </li>
			              </ul>
			            </div>
			          </div>
			        </div>

			        <div class="col-md-4 col-sm-4 col-sx-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Pills Justified</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			              <ul class="nav nav-pills nav-justified">
			                <li><a href="#" data-original-title="">Sales</a></li>
			                <li class="active"><a href="#" data-original-title="">Users</a></li>
			                <li><a href="#" data-original-title="">Contacts</a></li>
			              </ul>
			            </div>
			          </div>
			        </div>

			        <div class="col-md-4 col-sm-4 col-sx-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Disabled Links</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body">
			              <ul class="nav nav-pills">
			                <li><a href="#" data-original-title="">Clickable</a></li>
			                <li class="active disabled"><a href="#" data-original-title="">Disabled</a></li>
			                <li class="disabled"><a href="#" data-original-title="">Disabled</a></li>
			              </ul>
			            </div>
			          </div>
			        </div>
			      </div>
			      <!-- Row end -->

			      <!-- Row start -->
			      <div class="row no-gutter">
			        <div class="col-md-4 col-sm-4 col-sx-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Modal</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-toggle-on"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body center-align-text">
			              
			              <!-- Modal Small Start -->
			              <a data-toggle="modal" href="#showModal" class="btn btn-danger" data-original-title="" title="">Modal small</a>

			              <!-- Modal -->
			              <div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-hidden="true">
			                <div class="modal-dialog">
			                  <div class="modal-content">
			                    <div class="modal-header">
			                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true" data-original-title="" title="">×</button>
			                      <h4 class="modal-title">Modal title</h4>
			                    </div>
			                    <div class="modal-body">
			                      ...
			                    </div>
			                    <div class="modal-footer">
			                      <button type="button" class="btn btn-default" data-dismiss="modal" data-original-title="" title="">Close</button>
			                      <button type="button" class="btn btn-primary" data-original-title="" title="">Save changes</button>
			                    </div>
			                  </div>
			                </div>
			              </div>
			              <!-- Modal Small End -->

			              <!-- Modal Big Start -->
			              <!-- Button trigger modal -->
			              <button class="btn btn-info" data-toggle="modal" data-target="#myModal">
			                Modal large
			              </button>

			              <!-- Modal -->
			              <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			                <div class="modal-dialog">
			                  <div class="modal-content">

			                    <div class="modal-header">
			                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			                      <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
			                    </div>
			                    <div class="modal-body">
			                      <h4>Text in a modal</h4>
			                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

			                      <h4>Popover in a modal</h4>
			                      <p>This <a href="#" role="button" class="btn btn-default popover-test" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on click.</p>

			                      <h4>Tooltips in a modal</h4>
			                      <p><a href="#" class="tooltip-test" title="" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

			                      <hr>

			                      <h4>Overflowing text to show scroll behavior</h4>
			                      <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
			                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
			                      <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
			                    </div>
			                    <div class="modal-footer">
			                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			                      <button type="button" class="btn btn-primary">Save changes</button>
			                    </div>

			                  </div><!-- /.modal-content -->
			                </div><!-- /.modal-dialog -->
			              </div>
			              <!-- Modal End -->
			              <!-- Modal Big End -->

			            </div>
			          </div>
			        </div>
			        <div class="col-md-4 col-sm-4 col-sx-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Popovers</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-toggle-up"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body center-align-text">
			              <button type="button" class="btn btn-success" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover on left">
			                Left
			              </button>
			              <button type="button" class="btn btn-warning" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover on top">
			                Top
			              </button>
			              <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover on bottom">
			                Bottom
			              </button>
			              <button type="button" class="btn btn-danger" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover on right">
			                Right
			              </button>
			            </div>
			          </div>
			        </div>
			        <div class="col-md-4 col-sm-4 col-sx-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Tooltips</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-toggle-up"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body center-align-text">
			              <a class="btn btn-info" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</a>
			              <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</a>
			              <a class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</a>
			              <a class="btn btn-warning" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</a>
			            </div>
			          </div>
			        </div>
			      </div>
			      <!-- Row end -->

			      <!-- Row start -->
			      <div class="row no-gutter">
			        <div class="col-md-12 col-sm-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Labels &amp; Badges</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-toggle-off"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body center-align-text">
			              <span class="label label-default">Default</span>
			              <span class="label label-primary">Primary</span>
			              <span class="label label-success">Success</span>
			              <span class="label label-info">Info</span>
			              <span class="label label-warning">Warning</span>
			              <span class="label label-danger">Danger</span>
			              <span class="badge badge-default">Default</span>
			            </div>
			          </div>
			        </div>
			      </div>
			      <!-- Row end -->

			      <!-- Row start -->
			      <div class="row no-gutter">
			        <div class="col-md-12 col-sm-12">
			          <div class="panel panel-default">
			            <div class="panel-heading">
										<h4>Label Sizes</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
			            <div class="panel-body center-align-text">
			              <h1>Example heading <span class="label label-default">New</span></h1>
			              <h2>Example heading <span class="label label-info">New</span></h2>
			              <h3>Example heading <span class="label label-success">New</span></h3>
			              <h4>Example heading <span class="label label-warning">New</span></h4>
			              <h5>Example heading <span class="label label-danger">New</span></h5>
			              <h6>Example heading <span class="label label-primary">New</span></h6>
			            </div>
			          </div>
			        </div>
			      </div>
			      <!-- Row end -->

			      <!-- Row Start -->
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sx-12 col-sm-12">
								<div class="panel">
									<div class="panel-heading">
										<h4>Progress Bars</h4>
										<ul class="links">
											<li>
												<a href="#">
													<i class="fa fa-sliders"></i>
												</a>
											</li>
										</ul>
									</div>
									<div class="panel-body">
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
												<span class="sr-only">20% Complete (success)</span>
											</div>
										</div>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
												<span class="sr-only">30% Complete</span>
											</div>
										</div>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
												<span class="sr-only">40% Complete (warning)</span>
											</div>
										</div>
										<div class="progress progress-sm">
											<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
												<span class="sr-only">50% Complete</span>
											</div>
										</div>
										<div class="progress progress-striped active">
											<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
												70%
											</div>
										</div>
										<div class="progress no-margin">
											<div class="progress-bar progress-bar-success" style="width: 45%">
												<span class="sr-only">45% Complete (success)</span>
											</div>
											<div class="progress-bar progress-bar-warning" style="width: 20%">
												<span class="sr-only">20% Complete (warning)</span>
											</div>
											<div class="progress-bar progress-bar-danger" style="width: 15%">
												<span class="sr-only">15% Complete (danger)</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row End -->

					</div>
					<!-- Spacer ends -->

				</div>
				<!-- Container fluid ends -->

			</div>
			<!-- Main Container Start -->

			<!-- Footer Start -->
			<footer>
				Copyright Cloud Admin <span>2015</span>. All Rights Reserved.
			</footer>
			<!-- Footer end -->
			
		</div>
		<!-- Dashboard Wrapper End -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.js"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Animated Right Sidebar -->
		<script src="js/slidebars.js"></script>

		<!-- Date Range -->
		<script src="js/daterange/moment.js"></script>
		<script src="js/daterange/daterangepicker.js"></script>

		<!-- Custom JS -->
		<script src="js/custom.js"></script>

		<script type="text/javascript">
			$(document).ready(function () {
				// Modal Window
				$('.modal-large').modal('show');
				
				// Popovers
				$('.btn').popover('hide');
					
			});
		</script>
	</body>

<!-- Mirrored from jesus.gallery/cloud2/ui-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Aug 2015 12:11:03 GMT -->
</html>