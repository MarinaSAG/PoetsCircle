<nav class="navbar navbar-expand-lg navbar-light bg-light">
    @section('navbar')
        <a class="navbar-brand" href="#">
            <img src="/images/m.png" width="30" height="30" class="d-inline-block align-top" 
            alt="" loading="lazy">
            @yield('barra')
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>




        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/home">Home</a>
                <a class="nav-link" href="#">About</a>
            </div>
        </div>
    @show


    
</nav>
