<!DOCTYPE html>
<html lang="en">
	<head><base href="./"/>
		<title>@yield('pageTitle') &mdash; {{ config('app.name') }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <link href="{{ asset('vendor/file-manager/css/file-manager.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-sidebar-secondary-enabled="false" data-kt-app-toolbar-enabled="true" class="app-default">
		<script>
			var defaultThemeMode = "light";
			var themeMode;
			if (document.documentElement) {
					if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
							themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
					} else {
							if (localStorage.getItem("data-bs-theme") !== null) {
									themeMode = localStorage.getItem("data-bs-theme");
							} else {
									themeMode = defaultThemeMode;
							}
					}
					if (themeMode === "system") {
							themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
					}
					document.documentElement.setAttribute("data-bs-theme", themeMode);
			}
		</script>
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<div id="kt_app_header" class="app-header bg-black d-flex d-lg-none" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
					<div class="app-container container-xxl d-flex align-items-center justify-content-between" id="kt_app_header_container">
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
							<a href="#">
								<img alt="Logo" src="{{ asset('assets/media/logos/demo-29-small.svg') }}" class="h-30px" />
							</a>
						</div>
						<div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show sidebar menu">
							<div class="btn btn-icon btn-color-white bg-white bg-opacity-0 bg-hover-opacity-10 w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-outline ki-abstract-14 fs-1"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<div class="app-sidebar-primary bg-black">
							<div class="app-sidebar-logo d-none d-md-flex flex-center pt-10 mb-5 mb-lg-17" id="kt_app_sidebar_logo">
								<a href="../../demo29/dist/index.html">
									<img alt="Logo" src="assets/media/logos/demo-29-small.svg" class="h-25px" />
								</a>
							</div>
							<div class="app-sidebar-menu flex-grow-1 hover-scroll-overlay-y my-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
								<div id="kt_aside_menu" class="menu menu-rounded menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6" data-kt-menu="true">
									<a href="{{ route('arsip') }}" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item here py-2">
										<span class="menu-link menu-center">
											<span class="menu-icon me-0">
												<i class="ki-outline ki-duotone ki-folder fs-2x"></i>
											</span>
										</span>
										<div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
											<div class="menu-item">
												<div class="menu-content">
													<span class="menu-section fs-5 fw-bolder ps-1 py-1">Arsip</span>
												</div>
											</div>
										</div>
									</a>
								</div>
                <div id="kt_aside_menu" class="menu menu-rounded menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6" data-kt-menu="true">
									<a href="{{ route('arsip') }}" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
										<span class="menu-link menu-center">
											<span class="menu-icon me-0">
												<i class="ki-outline ki-duotone ki-user fs-2x"></i>
											</span>
										</span>
										<div class="menu-sub menu-sub-dropdown menu-sub-indention px-2 py-4 w-250px mh-75 overflow-auto">
											<div class="menu-item">
												<div class="menu-content">
													<span class="menu-section fs-5 fw-bolder ps-1 py-1">User</span>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="d-flex flex-column flex-center pb-4 pb-lg-8" id="kt_app_sidebar_footer">
								<div class="cursor-pointer symbol symbol-40px symbol-circle" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-attach="parent" data-kt-menu-placement="right-end">
									<img src="{{ asset('assets/media/avatars/300-7.jpg') }}" alt="user" />
								</div>
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="{{ asset('assets/media/avatars/300-7.jpg') }}" />
											</div>
											<div class="d-flex flex-column">
												<div class="fw-bold d-flex align-items-center fs-5">{{ Auth::user()->name }}
												<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
												<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
											</div>
										</div>
									</div>
									<div class="separator my-2"></div>
									<div class="menu-item px-5">
										<a href="../../demo29/dist/account/overview.html" class="menu-link px-5">My Profile</a>
									</div>
									<div class="separator my-2"></div>
									<div class="menu-item px-5 my-1">
										<a href="../../demo29/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
									</div>
									<div class="menu-item px-5">
										<a href="{{ route('logout') }}" class="menu-link px-5">Sign Out</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<div class="d-flex flex-column flex-column-fluid">
							<div id="kt_app_toolbar" class="app-toolbar py-4 py-lg-6 mb-8 mb-lg-10 "  data-kt-sticky="false" data-kt-sticky-name="app-toolbar-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}">
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap flex-lg-nowrap gap-4">
									<div class="d-flex align-items-center">
										<img src="{{ asset('assets/media/svg/brand-logos/layer.svg') }}" class="w-40px me-5" alt="" />
										<div class="page-title py-2 py-sm-0 d-flex flex-column justify-content-center me-3">
											<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Archive Apps</h1>
											<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
												<li class="breadcrumb-item text-muted">
													<span class="text-muted text-hover-primary">Badan Intelegent Negara</span>
												</li>
											</ul>
										</div>
									</div>
									<div class="d-flex align-items-center flex-wrap flex-lg-nowrap gap-4 gap-lg-10">
										<div class="d-flex align-items-center gap-2 gapl-lg-4">
											<div class="m-0">
												<a href="#" class="btn btn-flex  btn-icon h-40px btn-light fw-bold" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
													<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
													<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
												</a>
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
													<div class="menu-item px-3 my-0">
														<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
															<span class="menu-icon" data-kt-element="icon">
																<i class="ki-outline ki-night-day fs-2"></i>
															</span>
															<span class="menu-title">Light</span>
														</a>
													</div>
													<div class="menu-item px-3 my-0">
														<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
															<span class="menu-icon" data-kt-element="icon">
																<i class="ki-outline ki-moon fs-2"></i>
															</span>
															<span class="menu-title">Dark</span>
														</a>
													</div>
													<div class="menu-item px-3 my-0">
														<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
															<span class="menu-icon" data-kt-element="icon">
																<i class="ki-outline ki-screen fs-2"></i>
															</span>
															<span class="menu-title">System</span>
														</a>
													</div>
												</div>
											</div>
											<button onclick="toggleFullScreen()" class="btn btn-flex  btn-icon h-40px fw-bold btn-dark">
												<i class="ki-outline ki-duotone ki-arrow-two-diagonals fs-2"></i>
											</button>
										</div>
									</div>
								</div>
							</div>

							@yield('content')


              <div id="kt_app_footer" class="app-footer">
                <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                  <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                  </div>
                  <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                    <li class="menu-item">
                      <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">Panduan Pengguna</a>
                    </li>
                    <li class="menu-item">
                      <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Kebijakan Privasi</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
      </div>
      
      <script>var hostUrl = "assets/";</script>
      <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
      <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
      <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
      <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
      <script>
        function toggleFullScreen() {
          var doc = window.document;
          var docEl = doc.documentElement;
  
          var requestFullScreen = docEl.requestFullscreen || docEl.mozRequestFullScreen || docEl.webkitRequestFullScreen || docEl.msRequestFullscreen;
          var cancelFullScreen = doc.exitFullscreen || doc.mozCancelFullScreen || doc.webkitExitFullscreen || doc.msExitFullscreen;
  
          if(!doc.fullscreenElement && !doc.mozFullScreenElement && !doc.webkitFullscreenElement && !doc.msFullscreenElement) {
          requestFullScreen.call(docEl);
          }
          else {
          cancelFullScreen.call(doc);
          }
        }
      </script>
      @yield('script')
    </body>
  </html>
  