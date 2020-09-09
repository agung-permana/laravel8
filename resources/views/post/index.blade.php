@extends('layouts.main')

@section('title', 'Post')
    
@section('content')
    <div class="row">
        <div class="col-5">
            <h2>My<strong>Post</strong></h2>
        </div>
        <div class="col-7">
            <a href="{{ route('post.create') }}" class="btn btn-primary" style="float:right">Buat Post Baru</a>
        </div>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @foreach ($posts as $post)
    <div class="card mt-3 mb-3">
        <div class="card-header">
          {{ $post->title }} 
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{ $post->content }}</p>
            <footer class="blockquote-footer mb-4">Penulis <cite title="Source Title">{{ $post->created }}</cite></footer>
          </blockquote>
          <a href="{{ url('post/edit/'.$post->id) }}" class="btn btn-primary btn-sm">Edit Post</a>
          <form class="d-inline" onsubmit="return confirm('Yakin mau hapus Content ini?')" action="{{ url('post/'.$post->id) }}" method="post">
            @csrf
            @method('delete')

            <button type="submit" class="btn btn-danger btn-sm">Hapus Post</button>
          </form>

        </div>
      </div>
      @endforeach
   
@endsection