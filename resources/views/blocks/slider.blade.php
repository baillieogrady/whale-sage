{{--
  Title: Slider
  Description: slider
  Category: layout
  Icon: editor-alignleft
  Keywords: slider full 
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: true
--}}

@php
    $slides = get_field("slides");
    $count = 1;
@endphp

<div class="slider">
    <div class="slider__nav"></div>
    @foreach ($slides as $s)
        <div class="slider__slide" style="background-image: url('{!! $s["background image"]["url"] !!}');" data-section-name="{!! $count !!}">
            <p class="slider__lead">
                {!! $s["lead"] !!}
            </p>
            <div class="container">
                <div class="slider__box">
                    <p class="h1">
                        {!! $s["heading"] !!}
                        {{-- <div c lass="slider__blur">blur</div> --}}
                    </p>
                    <div class="slider__text">
                        {!! $s["text"] !!}
                    </div>
                    <a class="slider__link" data-fancybox href="https://www.youtube.com/watch?v={!! $s["video"]["youtube id"] !!}">
                        {!! $s["video"]["text"] !!}<img src="@asset('images/play.svg')">
                    </a>
                </div>
            </div>
        </div>
        @php($count +=1)
    @endforeach
</div>