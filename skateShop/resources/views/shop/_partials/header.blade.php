<header class="site-navbar container py-0 " role="banner">

    <nav class="navbar justify-content-md-end flex-md-nowrap p-0">

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="user-avatar rounded-circle mr-2" src="../../images/avatars/0.png" alt="User Avatar">
                <span class="d-none d-md-inline-block"> {{ Auth::user()->name }} </span>
            </a>
            <div class="dropdown-menu dropdown-menu-small">

                <a class="dropdown-item" href="/add_product ">
                    <i class="material-icons">vertical_split</i> Pridėti produktą</a>
                <a class="dropdown-item" href="/add_category">
                    <i class="material-icons">note_add</i> Pridėti kategorija</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="/logout">
                    <i class="material-icons text-danger">&#xE879;</i> Atsijungti </a>
            </div>
        </li>

        <nav class="nav">
            <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                <i class="material-icons">&#xE5D2;</i>
            </a>
        </nav>
    </nav>
</header>
