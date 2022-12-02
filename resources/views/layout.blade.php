<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href= "{{asset('assets/css/style.css') }}">
    <title>Todos</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark "  style="background: #180303;">
      <div class="container">
        @auth
        <div class="nameuser"> 
          <h3 style="color: aliceblue" >Selamat Datang {{Auth::user()->username}} !</h3>
        </div>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">hhkk</span>
        </button> --}}
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <form action="/logout" method="POST">
                  @csrf
                <button type="submit" class="btn btn-Light bi bi-box-arrow-in-right text-white">Logout</button>
                </li>
                
              </form>
          </ul>
          <ul class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-border-width"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/home">Home</a></li>
              <li><a class="dropdown-item" href="/dashboard">My Todo's</a></li>
              <li><a class="dropdown-item" href="/create">Create Todo's</a></li>
              <li><a class="dropdown-item" href="/">login</a></li>

            </ul>
          </ul>
          @else
                <a class="navbar-brand" href="/dashboard">Todo App </a>
          @endauth
        </div>
      </div>
    </nav>
    @yield('controller')

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
