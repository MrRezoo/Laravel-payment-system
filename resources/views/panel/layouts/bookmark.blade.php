@inject('basket','App\Support\Basket\Basket')
<div class="col">
    <div class="bookmark pull-right">
        <ul>
            <li><a href="{{route('basket.index')}}" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="سبدخرید">@if($basket->itemCount() != 0)<span class="badge badge-danger">{{$basket->itemCount()}}</span>@endif<i data-feather="shopping-bag"></i></a></li>
            <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="تقویم"><i data-feather="calendar"></i></a></li>
            <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="ایمیل"><i data-feather="mail"></i></a></li>
            <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="چت"><i data-feather="message-square"></i></a></li>
            <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                <form class="form-inline search-form">
                    <div class="form-group form-control-search">
                        <input type="text" placeholder="جستجو..">
                    </div>
                </form>
            </li>
        </ul>
    </div>
</div>
