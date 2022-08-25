@extends('layouts.app')

@section('mainprods')
    <main>
        <section>
            <div class="container">
                @foreach ($comics as $comic)
                    <div class="poster">
                        <a href="{{ route('singleprod', [
                            'id' => $comic['id']
                        ]) }}">
                            <img src="{{ asset($comic['thumb']) }}" alt="{{$comic['title']}}">
                            <h3>{{ $comic['title'] }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="load">LOAD MORE</div>
        </section>
    </main>
@endsection

@section('bluesec')
    <section class="color-b">
        <div class="container">
            <div><img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="  ">COMICS</div>
            <div><img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="  ">COMICS</div>
            <div><img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="  ">COMICS</div>
            <div><img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="  ">COMICS</div>
            <div><img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="  ">COMICS</div>
        </div>
    </section>
@endsection