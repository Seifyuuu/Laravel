<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/infos/contact/info">Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/infos/contact/partenariat">Partenariat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/infos/contact/sav">SAV</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/team/back">Back</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/team/front">Front</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

@yield("content")


<script src="{{asset("js/app.js")}}"></script>
</body>
</html>