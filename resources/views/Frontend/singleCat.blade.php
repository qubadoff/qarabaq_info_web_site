@extends('Frontend.Layouts.app')

@section('title')
    {{ $cat->name }}
@endsection


@section('content')

    <!-- main-area -->
    <main class="fix">


        <!-- blog-area -->
        <section class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="inner-blog-wrap">
                    <div class="row justify-content-center">
                        <div class="col-71">
                            <div class="blog-post-wrap">
                                <div class="row">
                                    @forelse($posts as $post)
                                        <div class="col-md-6">
                                            <div class="blog-post-item-two">
                                                <div class="blog-post-thumb-two">
                                                    <a href="{{ route("singlePost", ['locale' => app()->getLocale(), 'slug' => $post->slug]) }}"><img src="{{ url('/') }}/storage/{{ $post->image }}" style="height: 300px;" alt=""></a>
                                                    <a href="{{ route("singleCat", ['locale' => app()->getLocale(), 'slug' => $post->category->slug]) }}" class="tag tag-two">{{ $post->category->name }}</a>
                                                </div>
                                                <div class="blog-post-content-two">
                                                    <h2 class="title"><a href="{{ route("singlePost", ['locale' => app()->getLocale(), 'slug' => $post->slug]) }}">
                                                            {{ $post->name }}
                                                        </a></h2>
                                                    @if($post->excerpt)
                                                        <p>
                                                            {{ $post->excerpt }}
                                                        </p>
                                                    @endif
                                                    <div class="blog-meta">
                                                        <ul class="list-wrap">
                                                            <li>
                                                                <i class="far fa-calendar"></i>
                                                                {{ date_format($post->created_at, 'Y/M/D') }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        No Data
                                    @endforelse
                                </div>
                                <div class="pagination-wrap mt-30">
                                    {{ $posts->links('vendor.pagination') }}
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
