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
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">@lang('users.add role')</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                                         data-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                            data-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{route('roles.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="name">@lang('users.role name')</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                    @if($errors->has('name'))
                                        <small class="form-text text-danger"> {{$errors->first('name')}} </small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">@lang('users.role persian name')</label>
                                    <input type="text" name="persian_name" class="form-control" id="persian_name">
                                    @if($errors->has('persian_name'))
                                        <small
                                            class="form-text text-danger"> {{$errors->first('persian_name')}} </small>
                                    @endif
                                </div>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block">@lang('users.add')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 grid-align align-content-stretch">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">@lang('users.show roles')</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                                         data-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                            data-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">@lang('users.role name')</th>
                                    <th scope="col"> @lang('users.role persian name') </th>
                                    <th scope="col"> @lang('users.operation') </th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($roles as $role)
                                    <tr>
                                        <td> {{$role->name}} </td>
                                        <td> {{$role->persian_name}} </td>
                                        <td><a href="#" class="btn btn-danger btn-sm"> <span class="fa fa-trash"></span>
                                                حذف</a>
                                            <a href="{{route('roles.edit',$role->id)}}" class="btn btn-primary btn-sm"> <span
                                                    class="fa fa-pencil"></span> @lang('users.edit')</a>
                                        </td>

                                    </tr>
                                @empty
                                    <p>
                                        @lang('users.there are not any role')
                                    </p>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
