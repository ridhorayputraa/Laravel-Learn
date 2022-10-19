{{-- Dump and Die untuk melakukan var_dump --}}
{{-- Dump => sama serpti vardump --}}
{{-- Die => Memberhentikan script apapun yang ada dibawah script ini --}}

{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center" >{{ $title }}</h1>

{{-- Input Components --}}
<div class="row justify-content-center mb-3">
  <div class="col-md-6">
      <form action="/posts">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" 
          value="{{ request('search') }}" >
          <div class="input-group-append">
            <button class="btn btn-danger" type="submit">Search</button>
          </div>
        </div>
      </form>
  </div>
</div>





{{-- Hero section --}}

{{-- Jika ada postingannya (count => Jumlah) berikan postingannya --}}
@if ($posts->count())
<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
  <div class="card-body text-center">
    <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
    <p>
      <small class="text-muted">
      by: <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in: <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
      {{-- diff forhuman => perbedaan waktu yang sekarang || agar dibaca mudah oleh manusia --}}
      </small>
    </p>

    <p class="card-text">{{ $posts[0]->excerpt }}</p>

<a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>

    
  </div>
</div>



{{-- Endof --}}



{{-- Card --}}

<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
        
    <div class="col-md-4 mb-3" >

      <div class="card">
        <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0,0,0,0.7)">
        <a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none" >{{ $post->category->name }}</a>
        </div>
        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p>
            <small class="text-muted">
            by: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
            {{-- diff forhuman => perbedaan waktu yang sekarang || agar dibaca mudah oleh manusia --}}
            </small>
          </p>
          <p class="card-text">{{ $post->excerpt }}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
        </div>
      </div>

    </div>
    @endforeach
  </div>
</div>
@else
<p class="text-center fs-4">No post found</p>

@endif





{{-- End Card --}}


{{-- Menggunakan looping punya nya blade --}}
{{-- Menggunakan Method Skip untuk tidak meeloop arary[0] --}}
@foreach ($posts->skip(1) as $post)


<article class="mb-5 border-bottom pb-4">

<h2>
    {{-- Membuat slug(diganti dengan id) agar bisa membuat seperti halaman detail --}}
  <a href="/posts/{{ $post->slug }}" class="text-decoration-none" > {{ $post->title }} </a>
</h2>

<p>by: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in: <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> </p>

<p>{{ $post->excerpt }}</p>

<a href="/posts/{{ $post->slug }}"  
  class="text-decoration-none">Read More</a>
</article>


@endforeach

@endsection
    
