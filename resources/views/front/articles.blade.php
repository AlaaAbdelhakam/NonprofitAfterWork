@extends('layouts.front')
@section('content')
    <article style="text-align: center;">
        <h1>{{ $article->title }}</h1>
        <h6>{{ $article->created_at }} </h6>
        <h6><span class="badge badge-secondary"><a
                    href="{{ route('category', ['id' => $article->category_id]) }}">{{ $article->name }}</a></span></h6>
        <img src="{{ asset($article->img) }}" alt="this is hack img">
        <hr>
        <p class="lead" style="color: white;">
            {{ $article->content }}
        </p>
        <hr>
    </article>
    </div>
    <section class="comments">
        <div class="container">
            <h1 class="text-center">Add Your FeedBack</h1>
            <form action="{{ route('comment', ['id' => $article->id]) }}" class="mt-3" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="comment" style="color:#007bff;" class="form-control">Your Comments here</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="" placeholder="Enter Your Name" class="btn btn-primary btn-block">
                </div>
            </form>
            <hr>

            @foreach ($comments as $comment)
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body" style="text-align: left;">
                                {{ $comment->comment }}

                                @auth


                                    <a href="{{ route('deletecomment', $comment->id) }}" class="btn btn-danger">Delete
                                        comment</a>

                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endsection
