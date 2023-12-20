@extends('Frontend.Layouts.app')

@section('title')
    {{ $post->name }}
@endsection

@section('content')
    <!-- main-area -->
    <main class="fix">
        <!-- blog-details-area -->
        <section class="blog-details-area pt-120 pb-120">
            <div class="container">
                <div class="blog-details-wrap">
                    <div class="row justify-content-center">
                        <div class="col-71">
                            @if($post->image)
                                <div class="blog-details-thumb">
                                    <img src="{{ url('/') }}/storage/{{ $post->image }}" alt="">
                                </div>
                            @endif
                            <div class="blog-details-content">
                                <h2 class="title">{{ $post->name }}</h2>
                                <p>
                                    {!! $post->body !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- main-area-end -->
@endsection
