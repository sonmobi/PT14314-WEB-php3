@extends('layouts.frontend')
@section('tieu_de','Chức năng hiển thị danh sách')
@section('noi_dung')

    <h2>Danh sach User</h2>

    @foreach( $list_user as $objU)
        {{ $objU->username }}
        <br>
    @endforeach

@endsection
