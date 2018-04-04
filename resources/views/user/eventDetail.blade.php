@extends('layouts.user')

@section('body')
    <div class="banner-area banner-bg-2 ptb-100 bg-opacity-black-80 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-wrapper">
                        <h2>{{$event->headline}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main content Wrapper -->
    <div class="main-content-wrapper">
        <!-- Start blog section -->
        <div class="content-section ptb-100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-md-push-1">
                        <article class="blog-post single-blog-post gray-bg">
                            <div class="slider-area">
                                <div class="slider-wrapper owl-carousel">
                                    @if(sizeof($event->events_image)>0)
                                        @foreach($event->events_image as $item)
                                            
                                            <img class="img-responsive" style="width: auto; display: block; margin-left: auto; margin-right: auto; max-height:500px;" src="/uploads/events/{{$item->path}}">
                                        @endforeach
                                        @else
                                    @endif
                                </div>
                            </div>
                            <div class="blog-text">
                                <div class="content-wrapper">
                                    <div class="post-content-inner">
                                        <h6><?php
                                            echo (date("M jS, Y", strtotime($event->date)));
                                            ?></h6>
                                        <?php echo $event->body; ?>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>
        <!-- End blog section -->
    </div>
    <!-- End Main content Wrapper -->
@endsection