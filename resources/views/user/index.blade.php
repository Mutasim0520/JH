@extends('layouts.user')

@section('body')
    <div class="slider-area">
        <div class="slider-wrapper owl-carousel">
            <div class="slider-item home-three-slider-item slider-item-four slider-bg-one">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item home-three-slider-item slider-item-four slider-bg-two">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item home-three-slider-item slider-item-four slider-bg-three">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Section -->
    <!-- Start Main content Wrapper -->
    <div class="main-content-wrapper">
        <!-- Start About Section -->
        <div class="content-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <div class="main-heading-content text-center">
                            <h2>About Jagannath Hall</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-6">
                            <div class="about-left-content-three">
                                <p style="text-align: justify; color: black; font-weight: bold;">Jagannath Hall of Dhaka University is a residence hall for minority students, Hindu, Buddhist, Christian, and others. It is one of the three original residence halls that date from when the University was founded in 1921, and like them is modelled on the colleges of the University of Oxford, a complex of buildings including residences, meeting rooms, dining rooms, a prayer hall, gardens, and sporting facilities. Of the approximately 2000 students of the hall, half live in the residences, and half are non-residential students affiliated with the college. Several professors at the university hold the positions of house tutors and provost at the hall.</p>
                                <p style="text-align: center;">
                                    <a href="/about-us" style="margin-bottom: 10px;" class="button active about-readmore">Learn More</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-thumb">
                                <img src="/img/about/7.jpg" alt="about picture" style="margin-top: 0px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section ptb-100 gray-bg  ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <div class="main-heading-content text-center">
                            <h2>Latest Notice</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    if(sizeof($notice)>3) $limit = 3;
                    else $limit = sizeof($notice);
                    ?>
                    @for($counter =0; $counter<$limit; $counter++)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-blog-post">
                                <div class="blog-thumb">
                                    <?php
                                    if($notice[$counter]->photo){
                                        $image = $notice[$counter]->photo;
                                        $path = "/uploads/notice/$image";
                                    }
                                    else{
                                        $path= "/uploads/notice/notice.png";
                                    }

                                    ?>
                                    <a  href="/detail/notice/{{$notice[$counter]->id}}"><img style="margin-right: auto; height: 200px; margin-left: auto;" class="img-responsive" src="{{$path}}" alt=""></a>
                                    <ul class="meta-right">
                                        <li><a href="/detail/notice/{{$notice[$counter]->id}}"><?php
                                                echo (date("M jS, Y", strtotime($notice[$counter]->created_at)));
                                                ?></a></li>
                                    </ul>
                                </div>
                                <div class="blog-text" style="min-height: 250px;">
                                    <h3><a href="/detail/notice/{{$notice[$counter]->id}}">{{$notice[$counter]->headline}}</a></h3>
                                    <p>
                                        <?php
                                        $body = explode(' ',$notice[$counter]->body);
                                        $i =0;
                                        foreach ($body as $word){
                                            echo $word." ";
                                            $i++;
                                            if($i == 35) break;
                                        }
                                        ?>
                                    </p>
                                    <a href="/detail/notice/{{$notice[$counter]->id}}" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="content-section ptb-100 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <div class="main-heading-content text-center">
                            <h2>Upcoming Events</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="service-wrapper">
                        <?php
                            if(sizeof($events)>3) $limit = 3;
                            else $limit = sizeof($events);
                        ?>
                        @for($counter = 0; $counter < $limit; $counter++)
                            <div class="col-md-4 col-sm-6">
                                <a href="/detail/event/{{$events[$counter]->id}}">
                                    <div class="service-item">
                                        <div class="service-icon">
                                            <i class="icon-gift"></i>
                                        </div>
                                        <div class="service-text">
                                            <ul class="meta-right">
                                                <li><a href="/detail/event/{{$events[$counter]->id}}" style="left: 0px;">
                                                        <?php
                                                        echo (date("M jS, Y", strtotime($events[$counter]->date)));
                                                        ?></a></li>
                                            </ul>
                                            <a href="/detail/event/{{$events[$counter]->id}}">
                                                <h3 style="line-height: 28px; font-size: 16px;">{{$events[$counter]->headline}}</h3> </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="content-section ptb-100 gray-bg  ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <div class="main-heading-content text-center">
                            <h2>Latest News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        if(sizeof($news)>3) $limit = 3;
                        else $limit = sizeof($news);
                    ?>
                        @for($counter =0; $counter<$limit; $counter++)
                            <div class="col-md-4 col-sm-6">
                                <div class="single-blog-post">
                                    <div class="blog-thumb">
                                        <?php
                                        if(sizeof($news[$counter]->broadcasts_image)>0){
                                            $name = $news[$counter]->broadcasts_image[0]->path;
                                            $path = "/uploads/news/$name";
                                        }
                                        else{
                                            $path= "/uploads/news/news.jpg";
                                        }

                                            ?>
                                        <a  href="/detail/news/{{$news[$counter]->id}}"><img style="margin-right: auto; height: 200px; margin-left: auto;" class="img-responsive" src="{{$path}}" alt=""></a>
                                        <ul class="meta-right">
                                            <li><a href="/detail/news/{{$news[$counter]->id}}"><?php
                                                    echo (date("M jS, Y", strtotime($news[$counter]->created_at)));
                                                    ?></a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-text" style="min-height: 250px;">
                                        <h3><a href="/detail/news/{{$news[$counter]->id}}">{{$news[$counter]->headline}}</a></h3>
                                        <p>
                                            <?php
                                            $body = explode(' ',$news[$counter]->body);
                                            $i =0;
                                            foreach ($body as $word){
                                                echo $word." ";
                                                $i++;
                                                if($i == 35) break;
                                            }
                                            ?>
                                        </p>
                                        <a href="/detail/news/{{$news[$counter]->id}}" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                </div>
            </div>
        </div>
        <!-- end partnar section -->
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/validators/validator.js"></script>
    <script type="text/javascript" src="/js/validators/registrationValidator.js"></script>
@endsection