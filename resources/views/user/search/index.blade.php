@extends('user.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12" style="padding-bottom: 15px;
    border-bottom: 1px solid #fff3f3;">Trang Chủ > Tìm Kiếm</div>
        <h5 class="col-md-12" style="margin-bottom: 20px"> Từ Khóa tìm kiếm : {{$key}}</h5>
        
        @foreach($dataSearch as $value)
            <div class="col-md-4 col-xs-12" style="margin-bottom: 15px">
                <a class="title-name">{{$value['name']}}</a>
                <div class="img-height">
                    <a href="{{route('products_detail', ['title' => str_slug($value['name']), 'id' => $value['products_id']])}}">
                        <img src="/upload/{{$value['image']}}" alt="">
                    </a>
                </div>
                <div class="text-center" style="    border: 1px solid #ee9600;padding: 4px; border-radius: 5px;">
                    <a class="promotional">Giá : {{$value['price']}} VNĐ</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center">{{$dataSearch->links()}}</div>
@endsection