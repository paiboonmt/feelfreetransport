<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FeelFreeTransport</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
       
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Feelfree Transport</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Conditions</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">Vehiclerental</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                      </li>
                    
                      <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                      </li>
                    
                    </ul>
                  
                  </div>
                </div>
              </nav>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
