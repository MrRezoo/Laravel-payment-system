@extends('layouts.vertical')

@section('title','home')

@section('breadcrumb')
    <h3>پنل کاربری</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
        <li class="breadcrumb-item">داشبورد</li>
        <li class="breadcrumb-item active">پنل کاربری</li>
    </ol>

@endsection


@section('content')
    @if($items->isEmpty())
        <div class="alert alert-danger">
            @lang('payment.empty basket',['link'=>route('events.index')])
        </div>
    @else
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <h5>سبد خرید</h5>
                        </div>
                        <div class="card-body cart">
                            <div class="order-history table-responsive wishlist">
                                <table class="table table-bordernone">
                                    <thead>
                                    <tr>
                                        <th>@lang('payment.product image')</th>
                                        <th>@lang('payment.product name')</th>
                                        <th>@lang('payment.product price')</th>
                                        <th>@lang('payment.quantity')</th>
                                        <th>اقدام</th>
                                        <th>مجموع</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="title-orders">
                                        <td colspan="12">سفارشات جدید</td>
                                    </tr>
                                    @foreach($items as $item)
                                        <tr>
                                            <td><img class="img-fluid img-60" src="{{$item->image}}" alt="#"></td>
                                            <td>
                                                <div class="product-name"><a href="#">{{$item->title}}</a></div>
                                            </td>
                                            <td>{{number_format($item->price)}} @lang('payment.toman')</td>
                                            <td>
                                                <form action="{{route('basket.update' , $item->id)}}" method="post"
                                                      class="form-inline">
                                                    @csrf
                                                    <select name="quantity" id="quantity"
                                                            class="form-control input-sm mr-sm-2">
                                                        @for ($i = 0; $i <= $item->stock; $i++)
                                                            <option
                                                                {{$item->quantity == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                    <button type="submit"
                                                            class="btn btn-outline-primary btn-sm">@lang('payment.update')</button>
                                                </form>
                                            </td>
                                            <td><i data-feather="x-circle"></i></td>
                                            <td> {{number_format(($item->price) * ($item->quantity)) }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    @include('events.summary')
                    <a href="{{route('basket.checkout.form')}}"
                       class="btn mt-4  btn-danger btn-lg w-100 d-block">@lang('payment.confirm and continue')</a>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('script')
    <script src="{{asset('/assets/js/touchspin/vendors.min.js')}}"></script>
    <script src="{{asset('/assets/js/touchspin/touchspin.js')}}"></script>
    <script src="{{asset('/assets/js/touchspin/input-groups.min.js')}}"></script>
@endsection
