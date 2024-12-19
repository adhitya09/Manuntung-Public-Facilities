<nav class="navbar navbar-expand-lg navbar-light">
    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <h6 class="m-3">{{ Auth::User()->name }}</h6>
                    <img src="{{ asset('assetsA/images/profile/user1.jpg') }}" alt="" width="35"
                        height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                    <div class="message-body">
                        <a href="javascript:void(0)" class="btn btn-outline-primary mx-3 mt-2 d-block shadow-none"
                            id="logout-btn">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
