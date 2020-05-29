@extends('panel.index')

@section('title',__(''))

@section('link')
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/datatable-extension.css')}}">
@endsection

@section('breadcrumb')
    <h3>پنل کاربری</h3>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
        <li class="breadcrumb-item">پنل کاربری</li>
        <li class="breadcrumb-item active">لیست کاربران</li>
    </ol>

@endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>@lang('users.list')</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="cell-border" id="excel-cust-bolder">
                                <thead>
                                <tr>
                                    <th scope="col">@lang('users.name')</th>
                                    <th scope="col">@lang('users.email')</th>
                                    <th scope="col">@lang('users.roles')</th>
                                    <th scope="col">@lang('users.operation')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td> {{$user->name}} </td>
                                        <td> {{$user->email}} </td>
                                        <td>
                                            @foreach ($user->roles as $role)
                                                <span class="badge badge-secondary"> {{$role->persian_name}} </span>

                                        @endforeach
                                        <td><a href="{{route('users.edit',$user->id)}}"> @lang('users.edit') </a></td>
                                    </tr>
                                @empty
                                    <p>
                                        @lang('users.there are not any user')
                                    </p>
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th scope="col">@lang('users.name')</th>
                                    <th scope="col">@lang('users.email')</th>
                                    <th scope="col">@lang('users.roles')</th>
                                    <th scope="col">@lang('users.operation')</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script src="{{asset('/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('/assets/js/datatable/datatable-extension/custom.js')}}"></script>
@endsection
