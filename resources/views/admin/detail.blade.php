<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wafo Himti | Tanya</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{ asset('assets/images/favicon.ico') }}"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Slick slider -->
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets/css/theme-color/default-theme.css') }}" rel="stylesheet">


    <!-- Main Style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body and title font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
 
 
	
    <!-- Toastr -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  </head>
  <body>
	<!-- Start main content -->
	<main role="main">
		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">

							<div class="mu-title-area">
								<h2 class="mu-heading-title">Menjawab Pertanyaan</h2>
								<span class="mu-title-dot"></span>
							</div>


							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

								<div class="col-md-12">
									<div class="mu-contact-left">
										<div id="form-messages"></div>
											<form method="post" action="{{ route('admin.tanya.update', $data->id) }}" class="mu-contact-form">
                                                @csrf
												<div class="form-group">                
                                                    <label>Nama</label>
													<input type="text" class="form-control" placeholder="Name" id="name" name="name" required value="{{ $data->nama }}">
												</div>    
												<div class="form-group">
                                                    <label>Pertanyaan</label>
													<textarea class="form-control" placeholder="Pertanyaan" id="message" name="message" required>{{ $data->pertanyaan }}</textarea>
												</div>
                                                <div class="form-group">
                                                    <label>Jawaban</label>
													<textarea class="form-control" placeholder="Jawaban" id="jawaban" name="jawaban" required>{{ $data->jawaban }}</textarea>
												</div>
												<button type="submit" class="mu-send-msg-btn"><span>Submit</span></button>
								            </form>
										</div>
									</div>

								</div>
							</div>
							<!-- End Contact Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

	</main>
	
	<!-- End main content -->	
			
			
	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo">
        <div class="container">
            <div class="mu-footer-area">
                <p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="https://www.instagram.com/himti_unesa/" target="_blank">Himti | Unesa</a>. All right reserved.</p>
            </div>
        </div>

	</footer>
	<!-- End footer -->
  </body>

    <!-- Toastr -->
	<script>
        @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
            toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
            toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
  
    
	
    <!-- Custom js -->
	<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
</html>