@extends('panel.index')

@section('title',__('public.CS.Jam'))

@section('breadcrumb')
    <h3>پنل کاربری</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
        <li class="breadcrumb-item">داشبورد</li>
        <li class="breadcrumb-item active">پنل کاربری</li>
    </ol>

@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice">
                            <div>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="media">
                                                <div class="media-left"><img class="media-object img-60" src="../assets/images/other-images/logo-login.png" alt=""></div>
                                                <div class="media-body m-l-20">
                                                    <h4 class="media-heading">اندلس</h4>
                                                    <p>hello@endless.in<br><span class="digits">289-335-6503</span></p>
                                                </div>
                                            </div>
                                            <!-- End Info-->
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-md-right">
                                                <h3>صورت حساب #<span class="digits counter">1069</span></h3>
                                                <p>صادر شده: مهر<span class="digits"> 27، 1398</span><br>                                                            پرداخت: خرداد <span class="digits">27، 1395</span></p>
                                            </div>
                                            <!-- End Title-->
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!-- End InvoiceTop-->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="media">
                                            <div class="media-left"><img class="media-object rounded-circle img-60" src="../assets/images/user/1.jpg" alt=""></div>
                                            <div class="media-body m-l-20">
                                                <h4 class="media-heading">آرش خادملو</h4>
                                                <p>JohanDeo@gmail.com<br><span class="digits">555-555-5555</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-md-right" id="project">
                                            <h6>شرح پروژه</h6>
                                            <p>لورم ایپسوم به راحتی متن ساختاری از صنعت چاپ و حکاکی است. این یک واقعیت طولانی است که خواننده با محتوای قابل خواندن یک صفحه در هنگام نگاه کردن به طرح آن آشفته می شود.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Invoice Mid-->
                                <div>
                                    <div class="table-responsive invoice-table" id="table">
                                        <table class="table table-bordered table-striped">
                                            <tbody>
                                            <tr>
                                                <td class="item">
                                                    <h6 class="p-2 mb-0">توضیحات مورد</h6>
                                                </td>
                                                <td class="Hours">
                                                    <h6 class="p-2 mb-0">ساعت</h6>
                                                </td>
                                                <td class="Rate">
                                                    <h6 class="p-2 mb-0">میزان</h6>
                                                </td>
                                                <td class="subtotal">
                                                    <h6 class="p-2 mb-0">مجموع کل</h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>لورم اپیزوم</label>
                                                    <p class="m-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان.</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">5</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">75 تومان</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">375000 تومان</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>لورم اپیزوم</label>
                                                    <p class="m-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان.</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">3</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">75 تومان</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">375000 تومان</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>لورم اپیزوم</label>
                                                    <p class="m-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان.</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">10</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">75 تومان</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">375000 تومان</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>لورم اپیزوم</label>
                                                    <p class="m-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان.</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">10</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">75 تومان</p>
                                                </td>
                                                <td>
                                                    <p class="itemtext digits">375000 تومان</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="itemtext"></p>
                                                </td>
                                                <td>
                                                    <p class="m-0">حمل ونقل</p>
                                                </td>
                                                <td>
                                                    <p class="m-0 digits">13%</p>
                                                </td>
                                                <td>
                                                    <p class="m-0 digits">375000 تومان</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="Rate">
                                                    <h6 class="mb-0 p-2">مجموع</h6>
                                                </td>
                                                <td class="payment digits">
                                                    <h6 class="mb-0 p-2">37500000 تومان</h6>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End Table-->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div>
                                                <p class="legal"><strong>تشکر از شما برای کسب و کار شما!</strong>  پرداخت در عرض 31 روز انتظار می رود لطفا این فاکتور را در آن زمان پردازش کنید در ماه اکتبر، صورتحساب دیرین، مبلغ 5٪ سود خواهد بود.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <form class="text-right">
                                                <input type="image" src="../assets/images/other-images/paypal.png" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End InvoiceBot-->
                            </div>
                            <div class="col-sm-12 text-center mt-3">
                                <button class="btn btn btn-primary mr-2" type="button" onclick="myFunction()">چاپ</button>
                                <button class="btn btn-secondary" type="button">لغو</button>
                            </div>
                            <!-- End Invoice-->
                            <!-- End Invoice Holder-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
