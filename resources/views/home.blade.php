@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach ($posts as $post)
                <div class="card mb-3">
                    <div class="card-header font-weight-bold">{{ $post->title }}</div>

                    <div class="card-body">
                        {{ $post->body }}

                        <ul>
                            @foreach($post->tags as $tag)
                            <li>{{ $tag->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
