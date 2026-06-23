@extends('layouts.pages.blog')
@section('title')
{{ $title }}
@endsection
@section('content')

<!-- Breadcrumb Section -->
<div class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto mb-12">
    <div class="flex items-center gap-2 text-white/40 text-sm font-medium">
        <a href="{{ route('home') }}" class="hover:text-secondary transition-colors"><i class="fa fa-home"></i> Home</a>
        <i class="fa fa-angle-right text-[10px]"></i>
        <span class="text-white">{{ $title }}</span>
    </div>
</div>

<!-- Blog Section -->
<section class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto mb-24">
    @livewire('sponsorship-banner')
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        <!-- Sidebar -->
        <aside class="lg:col-span-3 order-2 lg:order-1 flex flex-col gap-10">
            <!-- Search -->
            <div class="glass-panel rounded-3xl p-6">
                <h4 class="text-xl mb-6">Search <span class="text-primary">Ogene</span></h4>
                <form action="{{ route('search') }}" method="GET" class="relative">
                    <input name="search" type="text" placeholder="Keywords..." class="input-fusion w-full !px-4 !py-2.5 text-sm">
                    <button type="submit" class="absolute right-3 top-1/2 -translate-y-1/2 text-white/40 hover:text-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>

            <!-- Categories -->
            <div class="glass-panel rounded-3xl p-6">
                <h4 class="text-xl mb-6">Categories</h4>
                <div class="flex flex-col gap-2">
                    @foreach ($categories as $category)
                    <a href="{{ route('post.category', ['category' => $category->slug]) }}" 
                       class="flex items-center justify-between group py-2 px-3 rounded-xl hover:bg-white/5 transition-colors">
                        <span class="text-white/70 group-hover:text-secondary transition-colors">{{ $category->name }}</span>
                        <i class="fa fa-angle-right text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Recent Posts -->
            <div class="glass-panel rounded-3xl p-6">
                <h4 class="text-xl mb-8 text-primary">Hot Now</h4>
                <div class="space-y-6">
                    @foreach ($recents as $post)
                    <a href="{{ route('post.show', ['category' => $post->category->slug, 'post' => $post->slug]) }}" class="flex gap-4 group">
                        <div class="w-16 h-16 shrink-0 rounded-xl overflow-hidden glass-panel border-0">
                            <img src="{{ $post->coverImage }}" alt="{{ $post->title }} Cover Image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="min-w-0">
                            <h6 class="text-sm text-white group-hover:text-secondary transition-colors line-clamp-2">{{ $post->title }}</h6>
                            <p class="text-[10px] text-white/30 uppercase font-bold tracking-tighter mt-1">{{ $post->created_at->format('M d, Y') }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Tags -->
            <div class="glass-panel rounded-3xl p-6">
                <h4 class="text-xl mb-6">Tags</h4>
                <div class="flex flex-wrap gap-2">
                    @foreach ($tags as $tag)
                    <a href="#" class="px-3 py-1 bg-white/5 hover:bg-primary/20 border border-white/10 rounded-lg text-[10px] font-bold uppercase tracking-widest text-white/60 hover:text-white transition-all">
                        {{ $tag->name }}
                    </a>
                    @endforeach
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="lg:col-span-9 order-1 lg:order-2">
            @if (\Route::current()->getName() == 'search')
            <div class="mb-10 text-center">
                <h2 class="text-3xl font-display text-white">
                    Found <span class="text-secondary">{{ $blogs->count() }}</span> Results
                </h2>
                <div class="h-1 w-24 bg-primary/30 mx-auto mt-4 rounded-full"></div>
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                @foreach ($blogs as $key => $blog)
                <div class="card-fusion flex flex-col group">
                    @isset($blog->coverImage)
                    <div class="aspect-[16/10] overflow-hidden relative">
                        <a href="{{ $routes[$key] }}">
                            <img src="{{ $blog->coverImage }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        </a>
                        <div class="absolute top-4 left-4">
                            <span class="bg-primary/80 backdrop-blur-md text-white text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest">
                                {{ $blog->category->name ?? 'Update' }}
                            </span>
                        </div>
                    </div>
                    @endisset
                    
                    <div class="p-8 flex-1 flex flex-col">
                        <div class="flex items-center gap-3 text-white/40 text-[10px] font-bold uppercase tracking-[0.2em] mb-4">
                            <span><i class="fa fa-calendar-o mr-1"></i> {{ $blog->created_at->format('M d') }}</span>
                            @if(isset($blog->comments_count))
                            <span><i class="fa fa-comment-o mr-1"></i> {{ $blog->comments_count }}</span>
                            @endif
                        </div>
                        
                        <a href="{{ $routes[$key] }}" class="block mb-6">
                            <h4 class="text-xl text-white group-hover:text-secondary transition-colors leading-snug line-clamp-3">
                                {{ $blog->title }}
                            </h4>
                        </a>

                        <div class="mt-auto">
                            <a href="{{ $routes[$key] }}" class="inline-flex items-center gap-2 text-primary font-bold text-xs uppercase tracking-widest hover:text-white transition-colors">
                                Read Story <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Custom Pagination (Future Step) -->
            <div class="mt-16 flex justify-center">
                {{-- {{ $blogs->links() }} --}}
            </div>
        </main>
    </div>
</section>

@endsection
