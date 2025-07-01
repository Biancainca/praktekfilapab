@extends('layout')
@section('content')
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
        @if($featured_post->hasMedia('featured_image'))
            <img class="object-cover object-center rounded" alt="{{ $featured_post->title }}" src="{{ $featured_post->getFirstMediaUrl('featured_image') }}">
        @else
            <img class="object-cover object-center rounded" alt="{{ $featured_post->title }}" src="https://dummyimage.com/720x600">
        @endif
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{ $featured_post->title }}</h1>
        <p class="mb-8 leading-relaxed">{{ $featured_post->excerpt }}</p>
        <div class="flex justify-center">
            <a href="{{ route('post.detail', $featured_post->slug) }}" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Baca Selengkapnya</a>
        </div>
        </div>
    </div>
</section>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Master Cleanse Reliac Heirloom</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
    </div>
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M8 17l4 4 4-4m-4-5v9"></path>
            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
          <p class="leading-relaxed">Downloads</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
          <p class="leading-relaxed">Users</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M3 18v-6a9 9 0 0118 0v6"></path>
            <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
          <p class="leading-relaxed">Files</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
          <p class="leading-relaxed">Places</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">BLOG POSTS</h2>
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Latest Articles</h1>
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
          <a href="{{ route('post.detail', $post->slug) }}" class="text-indigo-500 inline-flex items-center">Baca Selengkapnya
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
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
            <span class="text-gray-400 text-xs tracking-widest mt-0.5">{{ $post->published_at ? $post->published_at->format('M d, Y') : 'DRAFT' }}</span>
          </span>
        </a>
      </div>
      @empty
      <div class="p-12 w-full flex flex-col items-center text-center">
        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">No posts found</h2>
        <p class="leading-relaxed mb-8">There are no published posts available at the moment.</p>
      </div>
      @endforelse
    </div>
  </div>
</section>
@endsection
