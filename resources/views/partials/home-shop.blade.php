<section>
    <section id="shop-nav">
        <nav>
            <div class="container-fluid">
                <div class="row row-cols-5">
                    @foreach ($shopCards as $shopCard)    
                        <div class="col">
                            <div class="item h-100 d-flex align-items-center">
                                <a href="">
                                    <div class="item-img d-flex align-items-center">
                                        <img src="{{ Vite::asset('resources/img/' . $shopCard["imgName"]) }}" alt="{{ $shopCard["imgAlt"] }}">
                                    </div>
                                    <div class="item-txt d-flex align-items-center">
                                        <h2>{{ $shopCard["cardText"] }}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </nav>
    </section>
</section>