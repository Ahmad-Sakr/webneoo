<!-- Header Start -->
<header class="topbar container-fluid py-1 clearfix">
    <div class="row">
        <div class="col-8 offset-2">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="{{asset('img/logo.jpg')}}" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ (explode('.', $view_name)[0] === 'home') ? 'active' : '' }}" aria-current="page" href="#">Qui Sommes-Nous</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (explode('.', $view_name)[0] === 'institute') ? 'active' : '' }}" href="#">L'Institut</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (explode('.', $view_name)[0] === 'rayonnement') ? 'active' : '' }}" href="#">Rayonnement</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (explode('.', $view_name)[0] === 'products') ? 'active' : '' }}" href="#">Produits</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (explode('.', $view_name)[0] === 'blog') ? 'active' : '' }}" href="#">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ (explode('.', $view_name)[0] === 'contact') ? 'active' : '' }}" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary" href="#">Donation</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Header End -->
