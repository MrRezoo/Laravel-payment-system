@inject('basket' , 'App\Support\Basket\Basket')
<div class="card">
    <div class="card-body">
        <h4>@lang('payment.cart summary')</h4>
        <div class="well">
            <table class='table'>
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
            </table>
        </div>
    </div>
</div>

