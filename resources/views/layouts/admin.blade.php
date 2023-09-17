
<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('components.admin.head')

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- LEFT MAIN SIDEBAR -->
		@include('components.admin.sidebar')

		<!-- PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			@include('components.admin.navbar')

			@yield('content')

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright &copy; <span id="ec-year"></span><a class="text-primary"
							href="https://webcreation-dev.github.io/" target="_blank"> WEBCREATION</a>. Tout droit réservés.
					</p>
				</div>
			</footer>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	@include('components.admin.footer')
</body>

</html>
