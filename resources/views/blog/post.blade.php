@extends('blog.layouts.main')

@section('image', 'img/post-bg.jpg')
@section('title', $post->title)
@section('text', $post->subtitle)

@section('mainContent')
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>{{$post->text}}</p>
        </div>
      </div>
    </div>
  </article>
@endsection()