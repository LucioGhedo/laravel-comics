@extends('layouts.app')

@section('mainprods')

    <div class="poster-blue">
        <img class="single-p" src="{{ asset($current_comic['thumb']) }}" alt="{{ asset($current_comic['title']) }}">
    </div>
    <section class="padding">
    
        <div class="container">
            <div class="info">
                <div class="col1">
                    <h1>{{$current_comic['title']}}</h1>
                    <div class="price">
                        <div class="price-flex">
                            <span class="grey">
                                US Price
                                <span class="white">{{$current_comic['price']}}</span>
                            </span>
                            <span class="grey">CHECK AVIABILITY</span>
                        </div>
                    </div>
                    <p>{{$current_comic['description']}}</p>
                </div>
                <div class="col2">
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </div>
            </div>    
        </div>
    </section>

    <section class="padding">
        <div class="container flex bet">
            <div class="col">
                <h2>Talent</h2>
                <div class="sect">
                    <span>Art By:</span>
                    <span>
                        @foreach ($current_comic['artists'] as $artist)
                            <a href="#">{{$artist}}</a>,
                        @endforeach
                    </span>
                </div>
                <div class="sect">
                    <span>Written by:</span>
                    <span>
                        @foreach ($current_comic['writers'] as $writer)
                            <a href="#">{{$writer}}</a>,
                        @endforeach
                    </span>
                </div>
            </div>
            <div class="col">
                <h2>Specs</h2>
                <div class="sect">
                    <span>Series:</span>
                    <span>{{$current_comic['series']}}</span>
                </div>
                <div class="sect">
                    <span>Price:</span>
                    <span>{{$current_comic['price']}}</span>
                </div>
                <div class="sect">
                    <span>On Sale Date:</span>
                    <span>{{$current_comic['sale_date']}}</span>
                </div>
            </div>
        </div>
    </section>

@endsection