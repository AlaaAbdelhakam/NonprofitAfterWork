@extends('layouts.front')
@section('content')
    @foreach ($articles as $article)
        <article style="text-align: center;">
            <h1>{{ $article->title }}</h1>
            <h6> {{ $article->created_at }} </h6>
            <img src="{{ asset($article->img) }}" alt="this is hack img">
            <!-- <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error est totam, inventore, neque voluptate hic illo eius, exercitationem nesciunt atque doloribus et suscipit reprehenderit quasi quae numquam esse distinctio ullam!</p> -->
            <div class="mt-3 pt-3">
                <a class="btn btn-primary" href="{{ route('article', ['id' => $article->id]) }}">Read More</a>
            </div>
            <hr>
        </article>
    @endforeach
@endsection
