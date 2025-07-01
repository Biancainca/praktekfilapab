@extends('layout')
@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="lg:w-4/6 mx-auto">
      <!-- Featured Image -->
      <div class="rounded-lg overflow-hidden shadow-lg mb-8">
        <img alt="{{ $post->title }}" class="object-cover object-center w-full h-96" src="{{ $post->getFirstMediaUrl('featured_image') ?: 'https://dummyimage.com/1200x500' }}">
      </div>
      
      <!-- Post Header -->
      <div class="mb-8">
        <div class="flex items-center mb-4">
          @if($post->categories->isNotEmpty())
            <span class="inline-block py-1 px-3 rounded-full bg-indigo-100 text-indigo-800 text-sm font-medium mr-4">
              {{ $post->categories->first()->name }}
            </span>
          @endif
          <span class="text-gray-500 text-sm">
            {{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}
          </span>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">{{ $post->title }}</h1>
        @if($post->excerpt)
          <p class="text-xl text-gray-600 mb-6 leading-relaxed">{{ $post->excerpt }}</p>
        @endif
      </div>

      <!-- Author Info -->
      <div class="flex items-center mb-8 p-6 bg-gray-50 rounded-lg">
        <div class="flex-shrink-0">
          <img src="{{ $post->user->getFilamentAvatarUrl() }}" alt="{{ $post->user->name }}" class="w-16 h-16 rounded-full object-cover border-4 border-white shadow-md">
        </div>
        <div class="ml-4">
          <h3 class="text-lg font-semibold text-gray-900">{{ $post->user->name ?? 'Anonymous' }}</h3>
          <p class="text-gray-600 text-sm">Author</p>
          <p class="text-gray-500 text-xs mt-1">Published on {{ $post->created_at->format('M d, Y \a\t g:i A') }}</p>
        </div>
      </div>

      <!-- Post Content -->
      <div class="prose prose-lg max-w-none">
        <div id="blog-content" class="text-gray-700 leading-relaxed">
          {!! $post->content !!}
        </div>
      </div>

      <!-- Post Footer -->
      <div class="mt-12 pt-8 border-t border-gray-200">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-4">
            <span class="text-gray-400 inline-flex items-center text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
              {{ rand(100, 1500) }} views
            </span>
            <span class="text-gray-400 inline-flex items-center text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
              {{ rand(5, 20) }} comments
            </span>
          </div>
          <a href="{{ route('home') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium transition-colors">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
              <path d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Home
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection