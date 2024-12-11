<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="/" class="logo d-flex align-items-center me-auto">
            <img src="assets/img/logo.png" alt="">
            <h1 class="sitename">
                Manuntung Public <span class="highlight">Facilities</span>
            </h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('about') }}">About</a></li>
                <li><a href="{{ url('category') }}">Kategori</a></li>
                <li><a href="{{ url('tracking') }}">Tracking</a></li>
                <li><a href="{{ url('contact') }}">Contact</a></li>
            </ul>
        </nav>

        <style>
            .btn-outline {
                display: inline-block;
                padding: 10px 20px;
                font-size: 1rem;
                color: #000000;
                background-color: #f8fcff;
                border: 2px solid #007bff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s, color 0.3s;
            }

            .btn-outline:hover {
                background-color: #0056b3;
                color: #fff;
            }
        </style>
        </head>

        <body>
            @if (auth()->guest())
                <a class="btn-outline" href="{{ route('login') }}">Masuk</a>
            @else
                @if (auth()->user()->role === 'superadmin')
                    <a href="{{ route('superadmin') }}">Dashboard</a>
                @elseif (auth()->user()->role === 'admin')
                    <a href="{{ route('admin') }}">Dashboard</a>
                @elseif (auth()->user()->role === 'user')
                    <a href="{{ route('user') }}">Dashboard</a>
                @endif
            @endif
        </body>

    </div>
</header>
