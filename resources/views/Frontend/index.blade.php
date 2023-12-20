@extends('Frontend.Layouts.app')

@section('title')
    Qarabaq.info
@endsection

@section('content')
    <!-- main-area -->
    <main class="fix">

        <!-- blog-area -->
        <section class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="inner-blog-wrap">
                    <div class="row justify-content-center">
                        <div class="col-29">
                            <aside class="blog-sidebar">
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input type="text" placeholder="{{__("Search")}}">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                                <div class="blog-widget">
                                    <h4 class="bw-title">{{__("Categories")}}</h4>
                                    <div class="bs-cat-list">
                                        <ul class="list-wrap">
                                            @foreach(categories() as $cat)
                                                <li>
                                                    <a href="{{ route("singleCat", ['locale' => app()->getLocale(), 'slug' => $cat->slug]) }}">
                                                        {{ $cat->name }}
                                                        <span>
                                                            {{ \App\Models\Post::where('category_id', $cat->id)->where('status', 'active')->count() }}
                                                        </span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-widget">
                                    <h4 class="bw-title">{{__("Recent Posts") }}</h4>
                                    <div class="rc-post-wrap">
                                        @forelse(recentPosts() as $post)
                                            <div class="rc-post-item">
                                                <div class="thumb">
                                                    <a href="{{ route("singlePost", ['locale' => app()->getLocale(), 'slug' => $post->slug]) }}"><img src="{{ url('/') }}/storage/{{ $post->image }}" style="height: 50px;" alt=""></a>
                                                </div>
                                                <div class="content">
                                                    <span class="date"><i class="far fa-calendar"></i>{{ date_format($post->created_at, 'Y/M/D') }}</span>
                                                    <h2 class="title">
                                                        <a href="{{ route("singlePost", ['locale' => app()->getLocale(), 'slug' => $post->slug]) }}">
                                                            {{ $post->name }}
                                                        </a>
                                                    </h2>
                                                </div>
                                            </div>
                                        @empty
                                            No data !
                                        @endforelse
                                    </div>
                                </div>
                            </aside>
                        </div>

                        <div class="col-71">
                            <div class="blog-post-wrap">
                                <div class="row">
                                    <div class="col-md-12">
                                        @forelse(posts() as $post)
                                            <div class="blog-post-item-two">
                                                <div class="blog-post-thumb-two">
                                                    <a href="{{ route("singlePost", ['locale' => app()->getLocale(), 'slug' => $post->slug]) }}"><img src="{{ url('/') }}/storage/{{ $post->image }}" alt=""></a>
                                                    <a href="{{ route("singleCat", ['locale' => app()->getLocale(), 'slug' => $post->category->slug]) }}" class="tag tag-two">{{ $post->category->name }}</a>
                                                </div>
                                                <div class="blog-post-content-two">
                                                    <h2 class="title">
                                                        <a href="{{ route("singlePost", ['locale' => app()->getLocale(), 'slug' => $post->slug]) }}">
                                                            {{ $post->name }}
                                                        </a>
                                                    </h2>
                                                    @if($post->excerpt)
                                                        <p>{{ $post->excerpt }}</p>
                                                    @endif
                                                    <div class="blog-meta">
                                                        <ul class="list-wrap">
                                                            <li><i class="far fa-calendar"></i>{{ date_format($post->created_at, 'Y/M/D') }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            No Data
                                        @endforelse
                                    </div>
                                </div>
                                <div class="pagination-wrap mt-30">
                                    {{ posts()->links('vendor.pagination')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->


    </main>
    <!-- main-area-end -->
@endsection
