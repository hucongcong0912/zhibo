
@extends('common.layouts')
@section('content')
    <form method="post" action="{{ url('test/save') }}" >
        <table>
            <tr>
                <td>姓名</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>年龄</td>
                <td><input type="text" name="age"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="添加"></td>
            </tr>
        </table>

    </form>

@stop()