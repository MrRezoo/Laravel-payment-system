@extends('layouts.vertical')

@section('title',__('public.CS.Jam'))

@section('breadcrumb')
    <h3>محصول</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
        <li class="breadcrumb-item">فروشگاه</li>
        <li class="breadcrumb-item active">محصول</li>
    </ol>
@endsection

@section('link')
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/select2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/range-slider.css')}}">
    @endsection

@section('content')
    <div class="container-fluid product-wrapper">
        <div class="product-grid">
            <div class="feature-products">
                <div class="row">
                    <div class="col-md-6 products-total">
                        <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                        <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="#" data-original-title="" title=""><i data-feather="list"></i></a></div><span class="d-none-productlist filter-toggle">
                      <h6 class="mb-0">فیلترها<span class="ml-2"><i class="toggle-data" data-feather="chevron-down"></i></span></h6></span>
                        <div class="grid-options d-inline-block">
                            <ul>
                                <li><a class="product-2-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a></li>
                                <li><a class="product-3-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span></a></li>
                                <li><a class="product-4-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span><span class="line-grid line-grid-9 bg-primary"></span></a></li>
                                <li><a class="product-6-layout-view" href="#" data-original-title="" title=""><span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span><span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 text-right"><span class="f-w-600 m-r-5">نمایش محصولات 1 - 24 از 200 نتیجه</span>
                        <div class="select2-drpdwn-product select-options d-inline-block">
                            <select class="form-control btn-square" name="select">
                                <option value="opt1">ویژه</option>
                                <option value="opt2">کمترین قیمت</option>
                                <option value="opt3">بالاترین قیمت</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-sidebar">
                            <div class="filter-section">
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="mb-0 f-w-600">فیلترها<span class="pull-right"><i class="fa fa-chevron-down toggle-data"></i></span></h6>
                                    </div>
                                    <div class="left-filter">
                                        <div class="card-body filter-cards-view animate-chk">
                                            <div class="product-filter">
                                                <h6 class="f-w-600">دسته بندی</h6>
                                                <div class="checkbox-animated mt-0">
                                                    <label class="d-block" for="edo-ani5">
                                                        <input class="radio_animated" id="edo-ani5" type="radio" data-original-title="" title="">پیراهن مرد
                                                    </label>
                                                    <label class="d-block" for="edo-ani6">
                                                        <input class="radio_animated" id="edo-ani6" type="radio" data-original-title="" title="">پیراهن مرد
                                                    </label>
                                                    <label class="d-block" for="edo-ani7">
                                                        <input class="radio_animated" id="edo-ani7" type="radio" data-original-title="" title="">پیراهن مرد
                                                    </label>
                                                    <label class="d-block" for="edo-ani8">
                                                        <input class="radio_animated" id="edo-ani8" type="radio" data-original-title="" title="">پیراهن مرد
                                                    </label>
                                                    <label class="d-block" for="edo-ani9">
                                                        <input class="radio_animated" id="edo-ani9" type="radio" data-original-title="" title="">پیراهن مرد
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="product-filter">
                                                <h6 class="f-w-600">برند</h6>
                                                <div class="checkbox-animated mt-0">
                                                    <label class="d-block" for="chk-ani">
                                                        <input class="checkbox_animated" id="chk-ani" type="checkbox" data-original-title="" title=""> لویس
                                                    </label>
                                                    <label class="d-block" for="chk-ani1">
                                                        <input class="checkbox_animated" id="chk-ani1" type="checkbox" data-original-title="" title="">دیسل
                                                    </label>
                                                    <label class="d-block" for="chk-ani2">
                                                        <input class="checkbox_animated" id="chk-ani2" type="checkbox" data-original-title="" title="">لی
                                                    </label>
                                                    <label class="d-block" for="chk-ani3">
                                                        <input class="checkbox_animated" id="chk-ani3" type="checkbox" data-original-title="" title="">هدسون
                                                    </label>
                                                    <label class="d-block" for="chk-ani4">
                                                        <input class="checkbox_animated" id="chk-ani4" type="checkbox" data-original-title="" title="">دنزین
                                                    </label>
                                                    <label class="d-block" for="chk-ani5">
                                                        <input class="checkbox_animated" id="chk-ani5" type="checkbox" data-original-title="" title="">اسپایکر
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="product-filter slider-product">
                                                <h6 class="f-w-600">رنگ</h6>
                                                <div class="color-selector">
                                                    <ul>
                                                        <li class="white"></li>
                                                        <li class="gray"></li>
                                                        <li class="black"></li>
                                                        <li class="orange"></li>
                                                        <li class="green"></li>
                                                        <li class="pink"></li>
                                                        <li class="yellow"></li>
                                                        <li class="blue"></li>
                                                        <li class="red"></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-filter pb-0">
                                                <h6 class="f-w-600">قیمت</h6>
                                                <input id="u-range-03" type="text">
                                                <h6 class="f-w-600">محصولات جدید</h6>
                                            </div>
                                            <div class="product-filter pb-0 new-products">
                                                <div class="owl-carousel owl-theme" id="testimonial">
                                                    <div class="item">
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                                                            <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">پیراهن فانتزی</p>
                                                                <div class="product-price">10000 تومان</div>
                                                            </div>
                                                        </div>
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                                                            <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">پیراهن فانتزی</p>
                                                                <div class="product-price">10000 تومان</div>
                                                            </div>
                                                        </div>
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                                                            <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">پیراهن فانتزی</p>
                                                                <div class="product-price">10000 تومان</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                                                            <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">پیراهن فانتزی</p>
                                                                <div class="product-price">10000 تومان</div>
                                                            </div>
                                                        </div>
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                                                            <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">پیراهن فانتزی</p>
                                                                <div class="product-price">10000 تومان</div>
                                                            </div>
                                                        </div>
                                                        <div class="product-box row">
                                                            <div class="product-img col-md-6"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                                                            <div class="product-details col-md-6 text-left"><span><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning mr-1"></i><i class="fa fa-star font-warning"></i></span>
                                                                <p class="mb-0">پیراهن فانتزی</p>
                                                                <div class="product-price">10000 تومان  </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-filter text-center"><img class="img-fluid banner-product" src="../assets/images/ecommerce/banner.jpg" alt="" data-original-title="" title=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <form>
                            <div class="form-group m-0">
                                <input class="form-control" type="search" placeholder="جستجو.." data-original-title="" title=""><i class="fa fa-search"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="product-wrapper-grid">
                <div class="row">
                    @foreach($events as $event)
                        <div class="col-xl-3 col-sm-6 xl-4">
                            <div class="card">
                                <div class="product-box">
                                    <div class="product-img"><img class="img-fluid" src="{{$event->image}}" alt="">
                                        <div class="product-hover">
                                            <ul>
                                                <li>
                                                    <a href="{{route('basket.add',$event->id)}}" class="btn" type="button"><i class="icon-shopping-cart"></i></a>
                                                </li>
                                                <li>
                                                    <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-eye"></i></button>
                                                </li>
                                                <li>
                                                    <button class="btn" type="button"><i class="icofont icofont-law-alt-2"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <div class="product-box row">
                                                        <div class="product-img col-md-6"><img class="img-fluid" src="{{$event->image}}" alt=""></div>
                                                        <div class="product-details col-md-6 text-left">
                                                            <h4>{{$event->title}}</h4>
                                                            <div class="product-price">
                                                                <del>{{$event->price}}</del>{{$event->price}}
                                                            </div>
                                                            <div class="product-view">
                                                                <h6 class="f-w-600">جزئیات محصول</h6>
                                                                <p class="mb-0">{{$event->description}}</p>
                                                            </div>
                                                            <div class="product-size">
                                                                <ul>
                                                                    <li>
                                                                        <button class="btn btn-outline-light" type="button">M</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-outline-light" type="button">L</button>
                                                                    </li>
                                                                    <li>
                                                                        <button class="btn btn-outline-light" type="button">Xl</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-qnty">
                                                                <h6 class="f-w-600">تعداد</h6>
                                                                <fieldset>
                                                                    <div class="input-group">
                                                                        <input class="touchspin text-center" type="text" value="5">
                                                                    </div>
                                                                </fieldset>
                                                                <div class="addcart-btn">
                                                                    <a href="{{route('basket.add',$event->id)}}" class="btn btn-primary" type="button">افزودن به سبد خرید</a>
                                                                    <button class="btn btn-primary" type="button">مشاهده جزئیات</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <h4>{{$event->title}}</h4>
                                        <p>{{$event->description}}</p>
                                        <div class="product-price">
                                           <del>{{$event->price}}</del>{{$event->price}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')

    <script src="{{asset('/assets/js/touchspin/vendors.min.js')}}"></script>
    <script src="{{asset('/assets/js/touchspin/touchspin.js')}}"></script>
    <script src="{{asset('/assets/js/touchspin/input-groups.min.js')}}"></script>
    <script src="{{asset('/assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('/assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('/assets/js/select2/select2-custom.js')}}"></script>
    <script src="{{asset('/assets/js/range-slider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('/assets/js/range-slider/rangeslider-script.js')}}"></script>
    <script src="{{asset('/assets/js/product-tab.js')}}"></script>

    @endsection
