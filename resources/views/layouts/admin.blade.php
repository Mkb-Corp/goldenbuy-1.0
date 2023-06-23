<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">

	<title>Golden Buy | Admin</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

	<link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- PLUGINS CSS STYLE -->
	<link href="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

	<!-- Ekka CSS -->
	<link id="ekka-css" href="{{ asset('admin/assets/css/ekka.css') }}" rel="stylesheet" />

	<!-- FAVICON -->
	<link href="{{ asset('admin/assets/img/favicon.png') }}" rel="shortcut icon" />

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<!--  WRAPPER  -->
	<div class="wrapper">

		<!-- LEFT MAIN SIDEBAR -->
		<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<a href="{{ route('dashboard') }}" title="Ekka">
						<img class="ec-brand-icon" src="{{ asset('admin/assets/img/logo/ec-site-logo.png') }}" alt="" />
						<span class="ec-brand-name text-truncate">Golden Buy</span>
					</a>
				</div>

				<!-- begin sidebar scrollbar -->
				<div class="ec-navigation" data-simplebar>
					<!-- sidebar menu -->
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<!-- Dashboard -->
						<li class="active">
							<a class="sidenav-item-link" href="{{ route('dashboard') }}">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Dashboard</span>
							</a>
							<hr>
						</li>

						<!-- Category -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-dns-outline"></i>
								<span class="nav-text">Categories</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="#">
											<span class="nav-text">Catégories</span>
										</a>
									</li>
                                    <li class="">
										<a class="sidenav-item-link" href="#">
											<span class="nav-text">Sous-catégories</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Products -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-palette-advanced"></i>
								<span class="nav-text">Articles</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="#">
											<span class="nav-text">Ajouter un article</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link"  href="#">
											<span class="nav-text">Tous les articles</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Orders -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-cart"></i>
								<span class="nav-text">Commandes</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="#">
											<span class="nav-text">Toutes les commandes</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="#">
											<span class="nav-text">En attente</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="#">
											<span class="nav-text">Annulées</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->
			<header class="ec-main-header" id="header">
				<nav class="navbar navbar-static-top navbar-expand-lg">
					<!-- Sidebar toggle button -->
					<button id="sidebar-toggler" class="sidebar-toggle"></button>
					<!-- search form -->
					<div class="search-form d-lg-inline-block">
						<div class="input-group">
							<input type="text" name="query" id="search-input" class="form-control"
								placeholder="search.." autofocus autocomplete="off" />
							<button type="button" name="search" id="search-btn" class="btn btn-flat">
								<i class="mdi mdi-magnify"></i>
							</button>
						</div>
						<div id="search-results-container">
							<ul id="search-results"></ul>
						</div>
					</div>

					<!-- navbar right -->
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<!-- User Account -->
							<li class="dropdown user-menu">
								<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
									aria-expanded="false">
									<img src="{{ asset('admin/assets/img/user/user.png') }}" class="user-image" alt="User Image" />
								</button>
								<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
									<!-- User image -->
									<li class="dropdown-header">
										<img src="{{ asset('admin/assets/img/user/user.png') }}" class="img-circle" alt="User Image" />
										<div class="d-inline-block">
											John Deo <small class="pt-1">john.example@gmail.com</small>
										</div>
									</li>
									<li class="dropdown-footer">
										<a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
									</li>
								</ul>
							</li>
							<li class="right-sidebar-in right-sidebar-2-menu">
								<i class="mdi mdi-settings-outline mdi-spin"></i>
							</li>
						</ul>
					</div>
				</nav>
			</header>

			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
                @yield('content')
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright &copy; <span id="ec-year"></span><a class="text-primary"
						href="#" target="_blank"> Golden Buy</a>. All Rights Reserved.
					  </p>
				</div>
			</footer>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="{{ asset('admin/assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/simplebar/simplebar.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/jquery-zoom/jquery.zoom.min.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/slick/slick.min.js') }}"></script>

	<!-- Chart -->
	<script src="{{ asset('admin/assets/plugins/charts/Chart.min.js') }}"></script>
	<script src="{{ asset('admin/assets/js/chart.js') }}"></script>

	<!-- Google map chart -->
	<script src="{{ asset('admin/assets/plugins/charts/google-map-loader.js') }}"></script>
	<script src="{{ asset('admin/assets/plugins/charts/google-map.js') }}"></script>

	<!-- Date Range Picker -->
	<script src="{{ asset('admin/assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('admin/assets/js/date-range.js') }}"></script>

	<!-- Option Switcher -->
	<script src="{{ asset('admin/assets/plugins/options-sidebar/optionswitcher.js') }}"></script>

	<!-- Ekka Custom -->
	<script src="{{ asset('admin/assets/js/ekka.js') }}"></script>
</body>

</html>
