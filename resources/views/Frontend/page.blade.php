@extends('Frontend.Layouts.app')

@section('title')
    {{ $page->name }}
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
                            @if($page->image)
                                <div class="blog-details-thumb">
                                    <img src="{{ url('/') }}/storage/{{ $page->image }}" alt="">
                                </div>
                            @endif
                            <div class="blog-details-content">
                                <h2 class="title">{{ $page->name }}</h2>
                                <p>
                                    {!! $page->body !!}
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
