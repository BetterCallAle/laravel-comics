<header>
    <div class="container d-flex align-items-center">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </div>
        <nav class="header-nav d-flex">
            <ul class="d-flex">
                @foreach ($navbar as $link)
                    @if ($loop->last)
                        <li class="ms-4 me-4 menu-link dropdown">
                            <a href="#" class="">
                                {{ $link["name"]}} &triangledown;
                                {{-- Dropdown menu --}}
                                <ul class="d-none hidden-menu">
                                    <li>
                                        <a href="">Nome shop 1</a>
                                    </li>
                                    <li>
                                        <a href="">Nome shop 2</a>
                                    </li>
                                </ul>
                                {{-- /Dropdown menu --}}
                            </a>
                        </li>
                    @else
                        <li class="ms-4 menu-link">
                            <a href="">{{ $link["name"] }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>

            <form action="" class="d-flex align-items-center">
                <input type="search" class="search-bar" placeholder="Search">
            </form>
        </nav>
    </div>
</header>