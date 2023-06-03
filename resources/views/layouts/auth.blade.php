<!DOCTYPE html>
<html lang="en">
	<head><base href=""/>
		<title>@yield('pageTitle') &mdash; {{ config('app.name') }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic | Bootstrap HTML, VueJS, React, Angular, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="app-blank app-blank">
    <script>
			
      var defaultThemeMode = "light"; 
      var themeMode; 
      if ( document.documentElement ) { 
        if ( document.documentElement.hasAttribute("data-theme-mode")) {
           themeMode = document.documentElement.getAttribute("data-theme-mode"); 
          } else { 
            if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); 
          } else { 
            themeMode = defaultThemeMode; } 
          } if (themeMode === "system") { 
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        } 
        document.documentElement.setAttribute("data-theme", themeMode); 
      }
      </script>
			<div class="d-flex flex-column flex-root" id="kt_app_root">
				<style>body { background-image: url('{{ asset("assets/media/auth/bg10.jpeg") }}'); } [data-bs-theme="dark"] body { background-image: url('{{ asset("assets/media/auth/bg10-dark.jpeg") }}'); }</style>
				<div class="d-flex flex-column flex-lg-row flex-column-fluid">
					<div class="d-flex flex-lg-row-fluid">
						<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
							<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('assets/media/auth/agency.png') }}" alt="" />
							<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="{{ asset('assets/media/auth/agency-dark.png') }}" alt="" />
							<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Archive Apps</h1>
							<div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,
							<a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed
							<br />and provides some background information about
							<a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
							<br />work following this is a transcript of the interview.</div>
						</div>
					</div>
					<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
						<div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
							<div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
								<div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">	

							@yield('content')
							
								</div>
									<div class="d-flex flex-stack justify-content-center text-center">
										<div class="d-flex justify-content-center text-center fw-semibold text-primary fs-base gap-5">
											<a href="../../demo29/dist/pages/team.html" target="_blank">Panduan Pengguna</a>
											<a href="../../demo29/dist/pages/pricing/column.html" target="_blank">Kebijakan Privasi</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		<script>var hostUrl = "assets/";</script>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
        @yield('script')
	</body>
</html>


