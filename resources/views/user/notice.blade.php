@extends('layouts.user')

@section('body')
    <div class="banner-area banner-bg-1 ptb-100 bg-opacity-black-80 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-wrapper">
                        <h2>Notice</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main content Wrapper -->
    <div class="main-content-wrapper">
        <!-- start service two section -->
        <div class="service-style-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="service-style-2-wrappwe">
                        @foreach($notice as $item)
                            <div class="col-md-4 col-sm-6">
                            <div class="service-style-item">
                                <div class="service-thumb">
                                    <?php
                                    if(sizeof($item->photo)>0){
                                        $image = $item->photo;
                                    }else{
                                        $image = "notice.png";
                                    }
                                    ?>
                                    <a href="/detail/notice/{{$item->id}}"><img class="img-responsive" src="/uploads/notice/{{$image}}" alt="" style="margin-right: auto; height: 200px; margin-left: auto;"></a>
                                </div>
                                <div class="service-style-text" style="height: 230px;">
                                    <a href="/detail/notice/{{$item->id}}"><h3>{{$item->headline}}</h3></a>
                                    <p><?php
                                        $body = explode(' ',$item->body);
                                        $i =0;
                                        foreach ($body as $word){
                                            echo $word." ";
                                            $i++;
                                            if($i == 35) break;
                                        }
                                        ?>
                                    </p>
                                    <a href="/detail/notice/{{$item->id}}" class="readmore">Read More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection