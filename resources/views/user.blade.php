
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/template_user/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/template_user/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/template_user/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/template_user/css/style.css') }}">

    <title>Table #7</title>
  </head>
  <body>
  

  <div class="content">
    <div class="container">
      <a href="{{ url('homeuser') }}">
        <h2 class="mb-5">Back</h2>
      </a>
      <h2 class="mb-5">User List</h2>

      <div class="table-responsive">

        <table class="table table-striped custom-table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
                <tr scope="row" class="active">
                  <td>
                  {{ $user->name }}
                  </td>
                  <td>
                  {{ $user->username }}
                  </td>
                  <td>
                  {{ $user->email }}
                  </td>
                </tr>
            @endforeach            
          </tbody>
        </table>

        {{ $users->links() }}
      </div>


    </div>

  </div>    

    <script src="{{ asset('assets/template_user/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/template_user/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/template_user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/template_user/js/main.js') }}"></script>
  </body>
</html>