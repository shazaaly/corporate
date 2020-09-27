<div class="container text-center">
    <div class="row">
        @isset($solutions)
            @foreach( $solutions as $solution)

            <div class="col-sm-6 col-md-3">
            <div class="promo-block-wrapper clearfix">
                <div class="promo-icon">
                    <img style="width: 50px" src="{{ Voyager::image( $solution->icon ) }}"></img>
                </div>

                <div class="promo-content">
                    <h3>{{$solution->solution_title}}</h3>

                    <p>{{$solution->solution_body}}.</p>
                </div>

            </div>
            <!-- /.promo-block-wrapper -->
        </div>

            @endforeach
        @endisset
    </div>
    <!-- /.row -->

</div>
