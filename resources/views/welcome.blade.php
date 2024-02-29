<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              
             
            </ul>
            <div>
                @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="nav-link">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-decoration-none text-dark ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-decoration-none text-dark mx-4">Register</a>
                @endif
                @endauth
                @endif
            </div>
          </div>
        </div>
      </nav>

      <div class="banner" style="background-image: url('https://images.samsung.com/is/image/samsung/assets/id/offer/2023/07/b5q5/G2_Main_Preorder_homepage_1440x640.jpg?imwidth=1366'); height:100vh; background-position: center; background-size:cover; width:100%">
        
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>