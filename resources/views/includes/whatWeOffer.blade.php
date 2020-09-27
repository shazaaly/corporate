
<div class="container">
    <div class="row">
        <div class="">
@isset($offers)
                @foreach( $offers as $offer)

            <div class="thumbnail clearfix mr-md-3  ">
                <a href="#"><img class="img-responsive" src="{{ Voyager::image( $offer->image ) }}" alt="Image"></a>

                <div class="caption">
                    <h3><a href="#">{{$offer->title}}</a></h3>

                    <p>{{$offer->body}}</p>
                </div>
            </div>
                @endforeach
            @endisset
        </div>
{{--        <div class="col-md-6">--}}
{{--            <div class="thumbnail clearfix">--}}
{{--                <a href="#"><img class="img-responsive" src="img/img-offer-2.jpg" alt="Image"></a>--}}

{{--                <div class="caption">--}}
{{--                    <h3><a href="#">Planning</a></h3>--}}

{{--                    <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat--}}
{{--                        tellus odio malesuada ex.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <!-- row -->
    <!-- .row -->
</div>
