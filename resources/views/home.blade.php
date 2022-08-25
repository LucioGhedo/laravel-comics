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
