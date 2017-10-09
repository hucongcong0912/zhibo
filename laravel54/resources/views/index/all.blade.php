@extends('common/common')

@section('content')


{{--  全部直播 --}}

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <div class="main-grids">

        <div class="top-grids">

            <div class="recommended-info">
                {{--<h2>全部直播</h2>--}}
                {{--<h3>全部&nbsp;&nbsp;&nbsp;大神推荐&nbsp;&nbsp;&nbsp;视频美女&nbsp;&nbsp;&nbsp;蓝光</h3>--}}

            </div>

            <div class="col-md-4 resent-grid recommended-grid slider-top-grids">

                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.html"><img src="{{asset('images/t1.jpg')}}" alt="" /></a>
                    <div class="time">
                        <p>3:04</p>
                    </div>
                    <div class="clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>


                <div class="resent-grid-info recommended-grid-info">
                    <h3><a href="single.html" class="title title-info">Pellentesque vitae pulvinar tortor nullam interdum metus a imperdiet</a></h3>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">2,114,200 views</p></li>
                    </ul>
                </div>

            </div>

            <div class="col-md-4 resent-grid recommended-grid slider-top-grids">
                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.html"><img src="{{asset('images/t2.jpg')}}" alt="" /></a>
                    <div class="time">
                        <p>7:23</p>
                    </div>
                    <div class="clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="resent-grid-info recommended-grid-info">
                    <h3><a href="single.html" class="title title-info">Interdum pellentesque vitae pulvinar tortor nullam metus a imperdiet</a></h3>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">4,200 views</p></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 resent-grid recommended-grid slider-top-grids">

                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.html"><img src="{{asset('images/t3.jpg')}}" alt="" /></a>
                    <div class="time">
                        <p>4:04</p>
                    </div>
                    <div class="clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>

                <div class="resent-grid-info recommended-grid-info">
                    <h3><a href="single.html" class="title title-info">Nullam interdum metus a imperdiet pellentesque vitae pulvinar tortor</a></h3>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">71,174 views</p></li>
                    </ul>
                </div>

            </div>



            <div class="col-md-4 resent-grid recommended-grid slider-top-grids">

                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.html"><img src="{{asset('images/t3.jpg')}}" alt="" /></a>
                    <div class="time">
                        <p>4:04</p>
                    </div>
                    <div class="clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>

                <div class="resent-grid-info recommended-grid-info">
                    <h3><a href="single.html" class="title title-info">Nullam interdum metus a imperdiet pellentesque vitae pulvinar tortor</a></h3>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">71,174 views</p></li>
                    </ul>
                </div>

            </div>

            <div class="col-md-4 resent-grid recommended-grid slider-top-grids">

                <div class="resent-grid-img recommended-grid-img">
                    <a href="single.html"><img src="{{asset('images/t3.jpg')}}" alt="" /></a>
                    <div class="time">
                        <p>4:04</p>
                    </div>
                    <div class="clck">
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    </div>
                </div>

                <div class="resent-grid-info recommended-grid-info">
                    <h3><a href="single.html" class="title title-info">Nullam interdum metus a imperdiet pellentesque vitae pulvinar tortor</a></h3>
                    <ul>
                        <li><p class="author author-info"><a href="#" class="author">John Maniya</a></p></li>
                        <li class="right-list"><p class="views views-info">71,174 views</p></li>
                    </ul>
                </div>

            </div>

        </div>


        <div class="clearfix"> </div>
    </div>


    <!-- footer -->
    @include('common.footer')
    <!-- //footer -->

</div>
@stop

