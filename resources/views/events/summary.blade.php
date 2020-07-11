@inject('cost' , 'App\Support\Cost\Contracts\CostInterface')
<div class="card">
    <div class="card-header">
        <h5>@lang('payment.cart summary')</h5>
    </div>
    <div class="card-body">
        <div class="well">
            <div class="table-responsive">
                <table class='table table-hover'>
                    <thead>
                    <tr>
                        <th scope="col"> @lang('users.operation') </th>
                        <th scope="col">@lang('payment.product price')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>{{$item->title}} × {{$item->quantity}}</td>
                            <td>{{number_format($item->price)}} @lang('payment.toman')</td>
                        </tr>
                    @endforeach
                    @foreach($cost->getSummary() as $description => $price)
                        <tr>
                            <td style="color: red">{{$description}}</td>
                            <td style="color: red"> {{number_format($price)}} @lang('payment.toman')</td>
                        </tr>

                    @endforeach
                    <tr>
                        <td>@lang('payment.basket total')</td>
                        <td> {{number_format($cost->getTotalCosts())}} @lang('payment.toman')</td>
                    </tr>
                    <tr>
                        @auth
                            <td>
                                @lang('payment.coupon')
                            </td>
                            <td>
                                @if(session()->has('coupon'))
                                    <form action="{{route('coupons.remove')}}" method="get">
                                        @csrf
                                        <div class="input-group">
                                            <h2 >{{session()->get('coupon')->code}}</h2>
                                            <span class="input-group-btn">
                                    <button class="btn btn-primary btn-sm  ml-3" type="submit">@lang('payment.remove')</button>
                                </span>
                                        </div>
                                    </form>
                                @else
                                    <form action="{{route('coupons.store')}}"  method="post">
                                        @csrf
                                        <div class="input-group">
                                            <input id='coupon' name='coupon' type="text" class="form-control">
                                            <span class="input-group-btn">
                                    <button id='coupon-apply' class="btn btn-primary  ml-3" type="submit">@lang('payment.apply')</button>
                                </span>
                                        </div>
                                    </form>
                                @endif

                            </td>
                        @endauth
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

