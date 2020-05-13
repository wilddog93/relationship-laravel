@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post->title }}</div>

                <div class="card-body">
                    <strong class="text-primary">{{ $post->user->name }}</strong> <br>
                    {{ $post->body }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection