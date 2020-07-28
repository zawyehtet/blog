@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card" mb-2>
            <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <div class="card-subtitle mb-2 text-muted small">
                {{ $article->created_at->diffForHumans() }},
                Category: <b>{{$article->category->name}}</b>

            </div>
                <p class="card-text">{{$article->body}}</p>
                <a class="btn btn-warning" href="{{url("/articles/delete/$article->id")}}" class="card-link">Delete</a>
              {{-- <a href="#" class="card-link">Another link</a> --}}
            </div>
        </div>

        {{-- <ul class="list">
            <li class="list-group-item active">
                <b>Comments( {{ count($article->comments)  }})</b>
            </li>
            <li class="list-group-item active">
                <b>Comments ({{ count($article->comments) }})</b>
            </li>

            @foreach ($article->comments as $comment)
            <li class="list-group-item">{{$comment->content}}</li>
            @endforeach
        </ul> --}}
        
        <ul class="list-group">
            <li class="list-group-item active">
                <b>Comments ({{ count($article->comments) }})</b>
            </li>
            @foreach($article->comments as $comment)
                <li class="list-group-item">
                    {{ $comment->content }}
                <a href="{{url("/comments/delete/$comment->id")}}"class="close">
                    &times;</a>
                </li>
            @endforeach
        </ul>

        <form action="{{ url('/comments/add') }}" method="post">
            @csrf
            <input type="hidden" name="article_id"
            value="{{ $article->id }}">
            <textarea name="content" class="form-control mb-2" placeholder="NewComment"></textarea>
            <input type="submit" value="Add Comment"
            class="btn btn-secondary">
        </form>
    </div>
@endsection