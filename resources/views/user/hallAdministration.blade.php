@extends('layouts.user')

@section('body')
    <div class="banner-area banner-bg-1 ptb-100 bg-opacity-black-80 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-wrapper">
                        <h2>Current Hall Administration</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main content Wrapper -->
    <div class="main-content-wrapper">
        <!-- Start creative team -->
        <div class="content-section ptb-100 text-center">
            <div class="container">
                <div class="row">
                    <div class="team-wrapper-">
                        @foreach($administration as $item)
                            <div class="col-md-3 col-sm-6" style="min-height: 440px;">
                                <div class="team-item">
                                    <div class="team-thumb">
                                        <?php
                                            if($item->photo){
                                                $path =$item->photo;
                                            }else{
                                                $path = "propic.jpg";
                                            }

                                        ?>
                                        <img class="img-responsive" src="/uploads/images/{{$path}}" alt="">
                                        <ul class="team-social">
                                            <?php
                                                if($item->fb){
                                                    $fb = $item->fb;
                                                }
                                                else{ $fb = "javascript:void(0);";}
                                            if($item->twitter){
                                                $twitter = $item->twitter;
                                            }
                                            else{ $twitter = "javascript:void(0);";}
                                            if($item->rss){
                                                $rss = $item->rss;
                                            }
                                            else{ $rss = "javascript:void(0);";}
                                            if($item->linked_in){
                                                $linked_in = $item->linked_in;
                                            }
                                            else{ $linked_in = "javascript:void(0);";}

                                            ?>
                                            <li>
                                                <a href="{{$fb}}"> <i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{$twitter}}"> <i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{$linked_in}}"> <i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{$rss}}"> <i class="fa fa-rss"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="team-content">
                                        <h3>{{$item->name}}</h3>
                                        <span class="position">{{$item->designation}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End creative team -->
    </div>
@endsection