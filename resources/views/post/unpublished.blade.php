@extends('layout')
@section('content')
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-xs text-red-500 tracking-widest font-medium title-font mb-1">UNPUBLISHED POSTS</h2>
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Daftar Artikel Belum Terbit</h1>
    </div>
    <div class="flex flex-wrap -m-12">
      @forelse($post_list as $post)
      <div class="p-12 md:w-1/2 flex flex-col items-start">
        @if($post->categories->isNotEmpty())
        <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">{{ $post->categories->first()->name ?? 'UNCATEGORIZED' }}</span>
        @else
        <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">UNCATEGORIZED</span>
        @endif
        <div class="w-full mb-6">
          @if($post->hasMedia('featured_image'))
            <img class="object-cover object-center w-full h-48 rounded" alt="{{ $post->title }}" src="{{ $post->getFirstMediaUrl('featured_image') }}">
          @else
            <img class="object-cover object-center w-full h-48 rounded" alt="{{ $post->title }}" src="https://dummyimage.com/600x360">
          @endif
        </div>
        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">{{ $post->title }}</h2>
        <p class="leading-relaxed mb-8">{{ $post->excerpt }}</p>
        <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
          <span class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>{{ rand(100, 1500) }}
          </span>
          <span class="text-gray-400 inline-flex items-center leading-none text-sm">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
            </svg>{{ rand(5, 20) }}
          </span>
        </div>
        <a class="inline-flex items-center">
          <img alt="blog author" src="{{$post->user->getFilamentAvatarUrl()}}" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
          <span class="flex-grow flex flex-col pl-4">
            <span class="title-font font-medium text-gray-900">{{ $post->user->name ?? 'Anonymous' }}</span>
            <span class="text-gray-400 text-xs tracking-widest mt-0.5">DRAFT</span>
          </span>
        </a>
      </div>
      @empty
      <div class="p-12 w-full flex flex-col items-center text-center">
        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">No unpublished posts found</h2>
        <p class="leading-relaxed mb-8">Tidak ada artikel belum terbit.</p>
      </div>
      @endforelse
    </div>
    <div class="mt-8">{{ $post_list->links() }}</div>
  </div>
</section>
@endsection 