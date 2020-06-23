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

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h5>@lang('payment.user information')</h5>
                    </div>
                    <div class="card-body cart">
                        <div class="row">
                            <div class=" col-sm-12">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label for="inputEmail4">@lang('auth.name')</label>
                                            <input class="form-control" id="inputEmail4" type="email" readonly
                                                   value="{{Auth::user()->name}}">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="last_name">@lang('auth.last name')</label>
                                            <input class="form-control" id="last_name" type="text" readonly
                                                   value="{{Auth::user()->last_name}}">
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12">
                                            <label for="phone_number">@lang('auth.phone number')</label>
                                            <input class="form-control" id="phone_number" type="tel" readonly
                                                   value="{{Auth::user()->phone_number}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-12">
                                            <label for="inputEmail4">@lang('auth.email')</label>
                                            <input class="form-control" id="inputEmail4" type="email" readonly
                                                   value="{{Auth::user()->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress5">@lang('payment.address')</label>
                                        <input class="form-control" id="inputAddress5" type="text"
                                               value="{{Auth::user()->address}}">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>@lang('payment.pay ways')</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('basket.checkout')}}" id='checkout-form' method="post">
                            @csrf
                            <ul class="list-group">
                                <li class="list-group-item ">
                                    <div class="custom-control custom-radio ">
                                        <input type="radio" id="online" value="online" name="method"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="online">
                                            پرداخت آنلاین
                                        </label>
                                    </div>
                                    <select name='gateway' class="custom-select col-md-12 ">
                                        <option value="saman">سامان</option>
                                        <option value="pasargad">پاسارگاد</option>
                                    </select>
                                    <p class='text-muted small'>
                                        در این روش شما میتونید درب منزل خود مبلغ را پرداخت نمایید
                                    </p>
                                </li>

                                <li class="list-group-item">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="cash" value="cash" name="method"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="cash">
                                            پرداخت نقدی
                                        </label>
                                    </div>

                                    <p class='text-muted small'>
                                        در این روش شما میتونید درب منزل خود مبلغ را پرداخت نمایید
                                    </p>

                                </li>
                                <li class="list-group-item">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="cart" value="cart" name="method"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="cart">
                                            کارت به کارت
                                        </label>
                                    </div>

                                    <p class='text-muted small'>
                                        لطفا مبلغ را به شماره کارت ۵۵۵۵−۵۵۵۵−۵۵۵۵−۵۵۵۵ واریز نمایدد و کد پیگیری را به
                                        همکاران ما اطلاع دهید
                                    </p>

                                </li>
                            </ul>
                        </form>
                        @include('partials.validation_error')
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                @include('events.summary')
                <a onclick="event.preventDefault();document.getElementById('checkout-form').submit()" class="btn mt-4  btn-danger btn-lg w-100 d-block " style="color: white">@lang('payment.pay')</a>
            </div>
        </div>
    </div>


@endsection
