@extends('layouts.main')

@section('title', 'Home')
    
@section('content')
    <div class="row">
        <div class="col-5">
            <h2>Edit Post</strong></h2>
        </div>
        <div class="col-7">
            <a href="{{ route('post') }}" class="btn btn-danger" style="float:right">Batal</a>
        </div>
    </div>

    <form action="{{ url('post/'.$posts->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="{{ $posts->title }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Content</label>
            <textarea name="content" cols="10" rows="5" class="form-control">{{ $posts->content }}</textarea>
        </div>

        <div class="form-group">
            <label>Created</label>
            <input type="text" name="created" value="{{ $posts->created }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Edit Post</button>
    </form>
@endsection