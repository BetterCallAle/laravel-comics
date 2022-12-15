@extends('layouts.app');

@section('title')
    List of DC Comics
@endsection

@section('content')
    <section id="comics" class="first-section pb-3">
        <div class="container">
            <div class="row gy-5">
                @foreach ($comics as $comic)    
                    <div class="col-12">
                        <div class="ms_card d-flex">
                            <div class="ms_card-thumb">
                                <img src="{{ $comic["thumb"] }}" alt="Copertina di {{ $comic["title"] }}">
                            </div>

                            <div class="ms_card-info">
                                <h2>{{ $comic["title"] }}</h2>
                                <h6>Series: {{ $comic["series"] }}</h6>
                                <p>{{ $comic["description"] }}</p>

                                <ul>
                                    <li>Type: {{ $comic["type"] }}</li>
                                    <li>
                                        Artits:
                                        <ul class="nested-list">
                                            @foreach ($comic["artists"] as $artist)
                                            <li>
                                                <strong>{{ $artist }}</strong>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        Writers:
                                        <ul class="nested-list">
                                            @foreach ($comic["writers"] as $writer)
                                                @if ($loop->last)    
                                                <li>
                                                    <strong>{{ $writer }}</strong>
                                                </li>
                                                @else
                                                <li>
                                                    <strong>{{ $writer }}, </strong>
                                                </li>
                                                @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>Sale date: {{ $comic["sale_date"] }}</li>
                                        <li>Price: <strong>{{ $comic["price"] }}</strong></li>
                                    </ul>
                                    
                                    <a href="" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection