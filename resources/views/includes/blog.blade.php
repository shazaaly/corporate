<section class="x-services ptb-100 gray-bg">

    <section class="section-title">
        <div class="container text-center">
            <h2>Our Blog</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">

        <div class="row d-flex justify-content-center">
@isset($posts)
                @foreach($posts as $post)

                <div class="thumbnail clearfix col-md-4 ">
                    <a href="{{route('blog-post', $post->id)}}"><img class="img-responsive" src="{{ Voyager::image( $post->image ) }}" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">{{$post->title}}</a></h3>

                        <p>{{$post->excerpt}}</p>
                    </div>
                </div>

                @endforeach
            @endisset


        </div>



    <!-- row -->

    </div>
    <!-- .container -->
</section>
