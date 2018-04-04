@extends('layouts.user')

@section('body')
    <div class="banner-area banner-bg-1 ptb-100 bg-opacity-black-80 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-wrapper">
                        <h2>All Events</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main content Wrapper -->
    <div class="main-content-wrapper">
        <div class="content-section ptb-100 ">
            <div class="container">
                <div class="row">
                    <div class="service-wrapper">
                        @foreach($events as $item)
                            <div class="col-md-4 col-sm-6">
                                <a href="/detail/event/{{$item->id}}">
                                    <div class="service-item">
                                        <div class="service-icon">
                                            <i class="icon-gift"></i>
                                        </div>
                                        <div class="service-text">
                                            <ul class="meta-right">
                                                <li><a href="/detail/event/{{$item->id}}" style="left: 0px;">
                                                        <?php
                                                            echo (date("M jS, Y", strtotime($item->date)));
                                                        ?></a></li>
                                            </ul>
                                            <a href="">
                                                <h3 style="line-height: 28px; font-size: 16px;">{{$item->headline}}</h3> </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection