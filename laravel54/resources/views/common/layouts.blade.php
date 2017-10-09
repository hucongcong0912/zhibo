<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>test @yield('title')</title>
</head>

<body>

    <div>
        @section('header')
            头部
        @show()
    </div>

<div> 中部
    <div>
        @section('left')
            <a href="{{ url('test/index') }}">列表</a>
            <a href="{{ url('test/create') }}">添加</a>

        @show()
    </div>


    <div>
        @yield('content')


    </div>

</div>



    <div>
        @section('footer')
            尾部
        @show()
    </div>


</body>

@section('javascript')

@show
</html>