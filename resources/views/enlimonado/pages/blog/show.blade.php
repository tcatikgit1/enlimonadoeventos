@extends('layouts/principalLayout')

@section('title', $blog->title)

@section('content')
    <section class="py-5 bg-white">
    <div class="container">
    <h1 class="fw-bold mb-3">{{ $blog->title }}</h1>
    <p class="text-muted mb-4">
      <small><i class="fas fa-user"></i> {{ $blog->author }} &nbsp; • &nbsp; <i class="fas fa-calendar-alt"></i>
      {{ \Carbon\Carbon::parse($blog->published_at)->format('d M Y') }}</small>
    </p>
    <img src="{{ asset($blog->image) }}" class="img-fluid rounded mb-4"
      style="max-height: 400px; object-fit: cover; width: 100%;">
    <div class="fs-5" style="line-height: 1.8;">
      {!! nl2br(e($blog->content)) !!}
    </div>
    </div>
    </section>
@endsection
