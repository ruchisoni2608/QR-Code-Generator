@extends('layouts.client')

@section('page_title') {{$page->name ?? ''}} @endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('client/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('client/plugins/lightgallery/css/lightgallery.min.css')}}">
@endsection

@section('content')
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-black-middle" style="background-image:url({{!empty($page->cover_photo) ? asset('storage/page/cover_photo/'.$page->cover_photo) : asset('client/images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">{{$page->name ?? ''}}</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{route('client.home')}}">Home</a></li>
                    <li>{{$page->name ?? '404'}}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="clearfix">
            <!-- Our Awesome Services -->
            <div class="section-full bg-white content-box content-inner">
                <div class="container">
                    @if(!empty($page))
                        <div class="row">
                            <div class="col-lg-12 col-md-12 align-self-center">
                                <img src="{{ !empty($page->image) ? asset('storage/page/'.$page->image) : '' }}" alt="" class="img-cover w-auto float-start me-4">
                                <div class="inline-block">
                                    @php $text = !empty($page->content) ? trim(preg_replace('/style=\\"[^\\"]*\\"/', '', $page->content)) : ''; @endphp
                                    {!! $text ?? '' !!}
                                </div>
                            </div>
                        </div>
                        <div class="sub-page-section">
                            @foreach($page->subPages as $i=>$subPage)
                                <div class="row {{$i%2 == 0 ? '' : 'flex-row-reverse'}}">
                                    <div class="col-lg-6 col-md-12 m-b30">
                                        <div class="sub-page-img-box">
                                            <img src="{{ !empty($subPage->image) ? asset('storage/page/'.$subPage->image) : '' }}" alt="" class="img-cover">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 m-b30 align-self-center">
                                        <h3 class="h2 mt-0">{{$subPage->name}}</h3>
                                        <div class="inline-block mb-3">
                                            {{Str::substr(Str::of($subPage->content)->stripTags(), 0, 450)}}
                                        </div>
                                        <a href="{{route('client.page', [$subPage->slug])}}" class="site-button">Read More</a>
                                    </div>
                                </div>
                                <div class="dez-divider bg-gray-dark mt-0"></div>
                            @endforeach
                        </div>
                        <div class="dez-divider bg-gray-dark"></div>
                        @if($page->items->isNotEmpty())
                            <div class="page-media-section">
                                <h2>Media</h2>
                                <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 mfp-gallery m-b0">
                                    @foreach($page->items as $i=>$item)
                                        <li data-filter="{{$item->tag_slug}}" class="{{$item->tag_slug}} card-container col-lg-6 col-md-6 col-6">
                                            <div class="dez-box dez-gallery-box text-center bg-white">
                                                <div class="dez-thum dez-img-overlay1 dez-img-effect zoom-slow">
                                                    <div class="page-media-img-box">
                                                        @if($item->type == \App\Models\PageItem::VIDEO)
                                                            <a class="image-preview">
                                                                <iframe src="{{ $item->url }}" width="100%" > </iframe>
                                                            </a>
                                                        @elseif($item->type == \App\Models\PageItem::IMAGE)
                                                            <a class="image-preview">
                                                                <img class="table-image-preview1" src="{{ !empty($item->url) ? asset('storage/page/media/image/'.$item->url) : '' }}" alt="" />
                                                            </a>
                                                        @else($item->type == \App\Models\PageItem::PDF)
                                                            <a>
                                                                <img class="pdf-preview" src="{{ asset('client/images/pdf-icon.png') }}" alt="" />
                                                            </a>
                                                        @endif
                                                    </div>
                                                    <div class="overlay-bx">
                                                        <div class="overlay-icon">
                                                            @if(!empty($item->action_url) || ($item->type == \App\Models\PageItem::PDF))
                                                                <a href="{{$item->action_url ?? asset('storage/page/media/file/'.$item->url)}}" target="_blank"><i class="fa fa-link icon-bx-xs"></i></a>
                                                            @endif
                                                            @if(!empty($item->type == \App\Models\PageItem::IMAGE))
                                                                <a class="mfp-link" href="{{asset('storage/page/media/image/'.$item->url)}}" title="{{$item->title ?? ''}}"> <i class="fa fa-search icon-bx-xs"></i> </a>
                                                            @elseif(!empty($item->type == \App\Models\PageItem::VIDEO))
                                                                <a class="popup-youtube" data-href="{{$item->url}}" href="http://www.youtube.com/watch?v={{last(explode('/', $item->url))}}" title="{{$item->title ?? ''}}"> <i class="fa fa-search icon-bx-xs"></i> </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-media-caption">{{$item->caption}}</div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @else
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="page-notfound error-box text-center">
                                    <form method="post">
                                        <h2 class="error-text">404</h2>
                                        <p>Page cannot be found! We'll have it figured out in no time.Meanwhile, check out these fresh ideas:</p>
                                        <a href="{{route('client.home')}}" class="site-button">Back To Home</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="row m-t30 product-service">
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a20 left bg-primary clearfix text-white">
                                <div class="icon-bx-md  bg-white text-primary"> <a href="javascript:void(0);" class="icon-cell "><i class="fas fa-industry"></i></a> </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase m-b5">Manufacturing</h3>
                                    <p>An internationally recognized production setup accredited by top global agencies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a20 left bg-primary clearfix text-white">
                                <div class="icon-bx-md bg-white text-primary">
                                    <a href="javascript:void(0);" class="icon-cell "><i class="fas fa-flask"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase m-b5">Research</h3>
                                    <p>State-of-the-art agro innovations crafted by government-approved R&D laboratories.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a20 left bg-primary clearfix text-white">
                                <div class="icon-bx-md bg-white text-primary">
                                    <a href="javascript:void(0);" class="icon-cell"><i class="fas fa-handshake"></i></a>
                                </div>
                                <div class="icon-content">
                                    <h3 class="dez-tilte text-uppercase m-b5">Training</h3>
                                    <p>Precise and timely training along with dedicated farming support operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our Awesome Services END -->

        </div>
        <!-- contact area END -->

    </div>
    <!-- Content END-->
    @include('client.partials.contact-section')
@endsection

@push('page-scripts')
    <script src="{{asset('client/plugins/magnific-popup/magnific-popup.js')}}"></script><!-- MAGNIFIC POPUP JS -->--}}

    <script src="{{asset('client/plugins/imagesloaded/imagesloaded.js')}}"></script><!-- IMAGESLOADED -->--}}
    <script src="{{asset('client/plugins/masonry/masonry-3.1.4.js')}}"></script><!-- MASONRY -->--}}
    <script src="{{asset('client/plugins/masonry/masonry.filter.js')}}"></script><!-- MASONRY -->--}}
    <script>
        $(document).ready(function() {
            'use strict';
            MagnificPopup();
        });	/*ready*/
    </script>
@endpush
