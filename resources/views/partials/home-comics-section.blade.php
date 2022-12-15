<section id="main-content">
    <div class="jumbotron"></div>

    <div class="comics">
        <div class="container">

            <div class="flag">
                <span>CURRENT SERIES</span>
            </div>

            <div class="comics-top">
                <div class="row row-cols-6 gb-5">
                    @foreach ($comics as $comic)
                        @include('partials.home-cards')
                    @endforeach
                </div>
            </div>

            <div class="comics-bottom">
                <a href="{{ route('comics') }}" class="btn-load">LOAD MORE</a>
            </div>
        </div>
    </div>
</section>