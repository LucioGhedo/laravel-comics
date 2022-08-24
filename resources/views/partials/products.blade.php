<main>
    <section>
        <div class="container">
            @foreach ($comics as $comic)
                <div class="poster">
                    <img src="{{ asset($comic['thumb']) }}" alt="{{$comic['title']}}">
                    <h3>{{ $comic['title'] }}</h3>
                </div>
            @endforeach
        </div>
        <div class="load">LOAD MORE</div>
    </section>
</main>