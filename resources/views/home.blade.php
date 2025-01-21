@extends('layouts.app')

@section('content')
    <!-- Slider -->
    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="center: true">
        <ul class="uk-slider-items uk-grid uk-grid-match" uk-height-viewport="offset-top: true; offset-bottom: 30">
            @foreach($sliderImages as $image)
            <li class="uk-width-3-4">
                <div class="uk-cover-container">
                    <img src="{{ $image->url }}" alt="{{ $image->title }}" uk-cover>
                    <div class="uk-position-center uk-panel"><h1>{{ $image->title }}</h1></div>
                </div>
            </li>
            @endforeach
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
    </div>

    <!-- Slideshow -->
    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: push; autoplay: true">
        <ul class="uk-slideshow-items">
            @foreach($slideshowImages as $image)
            <li>
                <img src="{{ $image->url }}" alt="{{ $image->title }}" uk-cover>
                <div class="uk-position-center uk-position-small uk-text-center uk-light">
                    <h2 class="uk-margin-remove">{{ $image->title }}</h2>
                    <p class="uk-margin-remove">{{ $image->description }}</p>
                </div>
            </li>
            @endforeach
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        <div class="uk-position-bottom-center uk-position-small">
            <ul class="uk-dotnav">
                @foreach($slideshowImages as $key => $image)
                <li uk-slideshow-item="{{ $key }}"><a href="#">Item {{ $key + 1 }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="uk-section uk-section-primary uk-light uk-padding-large">
        <div class="uk-container uk-text-center">
            <h1 class="uk-heading-medium">{{ $hero->title }}</h1>
            <p class="uk-text-lead">{{ $hero->description }}</p>
            <button class="uk-button uk-button-default uk-margin-right">{{ $hero->primary_button }}</button>
            <button class="uk-button uk-button-secondary">{{ $hero->secondary_button }}</button>
        </div>
    </div>

    <!-- Gallery -->
    <div class="uk-section">
        <div class="uk-container">
            <h2 class="uk-heading-line uk-text-center"><span>Photo Gallery</span></h2>
            <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                @foreach($galleryImages as $image)
                <div>
                    <a class="uk-inline" href="{{ $image->url }}" data-caption="{{ $image->title }}">
                        <img src="{{ $image->thumbnail }}" alt="{{ $image->title }}">
                        <div class="uk-position-center uk-overlay uk-overlay-primary">
                            <span>{{ $image->title }}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Features Grid -->
    <div class="uk-section">
        <div class="uk-container">
            <h2 class="uk-heading-line uk-text-center"><span>Our Features</span></h2>
            <div class="uk-child-width-1-3@m uk-grid-match" uk-grid>
                @foreach($features as $feature)
                <div>
                    <div class="uk-card uk-card-default uk-card-body uk-text-center">
                        <i class="icon-{{ $feature->icon }} uk-margin-bottom"></i>
                        <h3 class="uk-card-title">{{ $feature->title }}</h3>
                        <p>{{ $feature->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection