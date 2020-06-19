@inject('basket' , 'App\Support\Basket\Basket')
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
                <tr>
                    <td style="color: red">@lang('payment.item total')</td>
                    <td style="color: red"> {{number_format($basket->subTotal())}} @lang('payment.toman')</td>
                </tr>
                <tr>
                    <td style="color: dimgrey">@lang('payment.shipping')</td>
                    <td style="color: dimgrey"> {{number_format(10000)}} @lang('payment.toman')</td>
                </tr>
                <tr>
                    <td style="color: red">@lang('payment.basket total')</td>
                    <td style="color: red"> {{number_format($basket->subTotal() + 10000 )}} @lang('payment.toman')</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

