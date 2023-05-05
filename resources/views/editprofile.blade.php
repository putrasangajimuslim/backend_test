
<!doctype html>
<html lang="en">
  <head>
  	<title>backend test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

	</head>
	<body>
        <section class="ftco-section">
            <div class="container">
            <nav>
                <ul>
                    <li style="list-style:none;"><a href="{{ url('listuser') }}">User List</a></li>
                    <form action="{{ route('logout') }}" method="GET">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </ul>
            </nav>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Edit Profile?</h3>
				<form action="{{ url('login') }}" class="login-form" method="POST">
                    @csrf
                    @if (Auth::check())
                        <div class="form-group">
                            <input type="text" name="username" id="username " class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ auth()->user()->username }}">
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password " class="form-control @error('password') is-invalid @enderror"" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    @endif
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>