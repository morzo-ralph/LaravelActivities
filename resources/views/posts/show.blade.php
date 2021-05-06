@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-body">
                    @if (Auth::check())
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning"> Edit </a> 
                    <br>
                    @endif
                        Title: {{ $post->title }} <br>
                        Description: {{ $post->description }} <br>
                        Created At: {{ $post->created_at }}

                        @if ($post->img)
                        Post Image: <br><br>
                        <img src="{{ asset('/storage/img/'.$post->img)}} "> 
                        @endif                 
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection