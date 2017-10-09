@extends('common.layouts')

@section('content')
    @include('common.message')

    <div style="color: red">
        <table>
            <tr>
                <td>ID</td>
                <td>姓名</td>
                <td>年龄</td>
                <td>性别</td>
                <td>时间</td>
            </tr>
            @foreach($data as $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->name }}</td>
                <td>{{ $v->age }}</td>
                <td>{{ $v->sex }}</td>
                <td>{{ date('Y-m-d H:i:s',$v->addtime) }}</td>

            </tr>
            @endforeach

        </table>
        <div>
            {{ $data->render() }}
        </div>
    </div>
@stop




