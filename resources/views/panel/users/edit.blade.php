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
                    <form class="card" method="post" action="{{route('users.update',$user->id)}}">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title mb-0">ویرایش پروفایل</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                                         data-toggle="card-collapse"><i
                                        class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                            data-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-auto"><img class="img-70 rounded-circle" alt=""
                                                           src="{{asset('/assets/images/user/7.jpg')}}"></div>
                                <div class="col">
                                    <h3 class="mb-1">آرش خادملو</h3>
                                    <p class="mb-4">طراح</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="name">نام</label>
                                        <input class="form-control" type="text" id="name">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="last_name">نام خانوادگی</label>
                                        <input class="form-control" type="text" id="last_name">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="email">آدرس ایمیل</label>
                                        <input class="form-control" type="email" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                    <div class="form-group">
                                        <label class="form-label" for="phone_number">شماره موبایل</label>
                                        <input class="form-control" type="tel" id="phone_number">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 ">
                                    <label class="form-label">@lang('users.add role to user')</label>
                                    <hr>
                                    <div class="form-group">
                                        @forelse ($roles as $role)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" name='roles[]' value="{{$role->name}}" {{$user->roles->contains($role) ? 'checked' : ''}}
                                                       class="custom-control-input" id="{{'role' . $role->id}}">
                                                <label class="custom-control-label"
                                                       for="{{'role' . $role->id}}">{{$role->persian_name}}</label>
                                            </div>
                                        @empty
                                            <p>
                                                @lang('users.there are not any role')
                                            </p>
                                        @endforelse
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">

                                    <label class="form-label">@lang('users.add permission to user')</label>
                                    <hr>
                                    <div class="form-group ">
                                        @forelse ($permissions as $permission)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" name='permissions[]' {{$user->permissions->contains($permission) ? 'checked' : ''}}
                                                       value="{{$permission->name}}" class="custom-control-input"
                                                       id="{{'permission' . $permission->id}}">
                                                <label class="custom-control-label"
                                                       for="{{'permission' . $permission->id}}">{{$permission->persian_name}}</label>
                                            </div>
                                        @empty
                                            <p>
                                                @lang('users.there are not any permission')
                                            </p>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary" type="submit">@lang('users.update')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

