<header>
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC">
        </div>
        <nav class="header-nav d-flex">
            <ul class="d-flex">
                @foreach ($navbar as $link)
                    @if ($loop->last)
                        <li class="me-2 menu-link dropdown">
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
                        <li class="me-4 menu-link">
                            <a href="">{{ $link["name"] }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>

        </nav>

        <form action="" class="d-flex align-items-center justify-content-end">
            <input type="search" class="search-bar" placeholder="Search">
        </form>
    </div>
</header>