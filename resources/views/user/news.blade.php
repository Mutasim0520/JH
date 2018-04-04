@extends('layouts.user')

@section('body')
    <div class="banner-area banner-bg-1 ptb-100 bg-opacity-black-80 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-wrapper">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main content Wrapper -->
    <div class="main-content-wrapper">
        <!-- Start blog section -->
        <div class="content-section ptb-100 gray-bg clearfix">
            <div class="container">
                <div class="row">
                    @foreach($news as $item)
                        <div class="col-md-4 col-sm-6">
                        <div class="single-blog-post">
                            <div class="blog-thumb">
                                <?php
                                    if(sizeof($item->broadcasts_image)>0){
                                        $image = $item->broadcasts_image[0]->path;
                                    }else{
                                        $image = "news.jpg";
                                    }
                                ?>
                                <a  href="/detail/news/{{$item->id}}"><img style="height: 244px;" class="img-responsive" src="/uploads/news/{{$image}}" alt=""></a>
                                <ul class="meta-right">
                                    <li><a href="/detail/news/{{$item->id}}"><?php
                                            echo (date("M jS, Y", strtotime($item->date)));
                                            ?></a></li>
                                </ul>
                            </div>
                            <div class="blog-text" style="height: 230px;">
                                <h3><a href="/detail/news/{{$item->id}}">{{$item->headline}}</a></h3>
                                <p>
                                    <?php
                                    $body = explode(' ',$item->body);
                                    $i =0;
                                    foreach ($body as $word){
                                        echo $word." ";
                                        $i++;
                                        if($i == 35) break;
                                    }
                                    ?>
                                </p>
                                <a href="/detail/news/{{$item->id}}" class="readmore">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End blog section -->
    </div>
@endsection