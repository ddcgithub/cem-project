@extends('layout')
@section('title','บทความ')
@section('content')
    <h2 class="text-center py-2">บทความ</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ชื่อบทความ</th>
            <th scope="col">เนื้อหา</th>
            <th scope="col">สถานะ</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <th scope="row">{{$item["title"]}}</th>
                    <td>{{$item["content"]}}</td>
                    <td>
                        @if ($item["status"] == true)
                            <a class="btn btn-success" href="#">เผยแพร่</a>
                        @else
                            <a class="btn btn-warning" href="#">ฉบับร่าง</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection