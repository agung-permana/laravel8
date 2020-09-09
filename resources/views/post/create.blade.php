@extends('layouts.main')

@section('title', 'Home')
    
@section('content')
    <div class="row">
        <div class="col-5">
            <h2>Buat Post Baru</strong></h2>
        </div>
        <div class="col-7">
            <a href="{{ route('post') }}" class="btn btn-danger" style="float:right">Batal</a>
        </div>
    </div>

    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label>Content</label>
            <textarea name="content" cols="10" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Created</label>
            <input type="text" name="created" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Create Post</button>
    </form>
@endsection