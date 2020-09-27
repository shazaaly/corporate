<div class="m-menu-content">
    @foreach( $sections as $section)

    <ul class="col-sm-3">
@isset($sections)
        <li class="dropdown-header">{{$section->title}}</li>

                @foreach( $section->posts as $post)

                    <li><a href="#">{{$post->title}}</a></li>
            @endforeach


    </ul>
        @endisset

    @endforeach



{{--        <ul class="col-sm-3">--}}

{{--        <li class="dropdown-header">Widget Haeder</li>--}}
{{--        <li><a href="#">Awesome Features</a></li>--}}

{{--    </ul>--}}
{{--    <ul class="col-sm-3">--}}
{{--        <li class="dropdown-header">Widget Haeder</li>--}}

{{--    </ul>--}}
{{--    <ul class="col-sm-3">--}}
{{--        <li class="dropdown-header">Widget Haeder</li>--}}



{{--    </ul>--}}

</div>
