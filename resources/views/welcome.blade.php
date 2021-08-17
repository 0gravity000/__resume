<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resume</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/resume.css') }}" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Bulma CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    </head>
    <body>
        <!-- navibar -->
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="nav justify-content-end">
                    @if (Route::has('login'))
                        @auth
                        <li class="nav-item px-2 py-2">
                            <a class="welcome_header_boxlink" href="{{ url('/home') }}">Home</a>
                        </li>
                        @else
                        <li class="nav-item px-2 py-2">
                            <a class="welcome_header_boxlink" href="{{ route('login') }}">Login</a>
                        </li>
                            @if (Route::has('register'))
                            <li class="nav-item px-2 py-2">
                                <a class="welcome_header_boxlink" href="{{ route('register') }}">Register</a>
                            </li>
                            @endif
                        @endauth
                    @endif
                    </ul>
                </div>  <!-- col -->
            </div>  <!-- row -->
        </div>  <!-- container -->

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card bg-dark text-white">
                        <img src="{{ asset('img/scrable_1280.jpg') }}" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <div class="card-overlay-text">
                                <h5 class="card-title text-center">Resume | 履歴書を簡単に作成</h5>
                                <p class="card-text text-center">面倒な履歴書、職務経歴書の作成の負担を軽減します。</p>
                                <div class="d-grid gap-2 col-4 mx-auto">
                                    <button class="content_boxlink mt-3" type="button" onclick="location.href='/guest'">サンプルを見てみる</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  <!-- col -->
            </div>  <!-- row -->
        </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
