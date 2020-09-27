<div class="container text-center ">
    <div class="row ">
        <div class="col-sm-12 ">
            <div class="promo-block-wrapper clearfix">
                <div class="promo-icon">
                    <i class="fa fa-eye"></i>
                </div>
                <div class="thumbnail clearfix  ">
                    <img style="width: 50%;" class="img-responsive" src="{{ Voyager::image( $post->image ) }}" alt="Image">

                    <div class="caption">
                        <h3>{{$post->title}}</h3>

                        <p> {!! $post->body !!} </p>
                    </div>
                </div>
            </div>
            <!-- /.promo-block-wrapper -->
        </div>

    </div>
    <!-- /.row -->

</div>
