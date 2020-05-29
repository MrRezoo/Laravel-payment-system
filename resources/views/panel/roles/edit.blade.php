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
                            <form method="post" action="{{route('roles.update',$role->id)}}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="name">@lang('users.role name')</label>
                                    <input type="text" name="name" value="{{$role->name}}" class="form-control" id="name" disabled>
                                    @if($errors->has('name'))
                                        <small class="form-text text-danger"> {{$errors->first('name')}} </small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label">@lang('users.role persian name')</label>
                                    <input type="text" name="persian_name" value="{{$role->persian_name}}" class="form-control" id="persian_name">
                                    @if($errors->has('persian_name'))
                                        <small
                                            class="form-text text-danger"> {{$errors->first('persian_name')}} </small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <span class="form-label">@lang('users.role persian name')</span>
                                    <hr>
                                    @forelse ($permissions as $permission)
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" name='permissions[]'{{$role->permissions->contains($permission) ? 'checked' : ''}} value="{{$permission->name}}"
                                                   class="custom-control-input" id="{{'permission' . $permission->id}}">
                                            <label class="custom-control-label"
                                                   for="{{'permission' . $permission->id}}">{{$permission->persian_name}}</label>
                                        </div>
                                    @empty
                                        <p>
                                            @lang('users.there are not any role')
                                        </p>
                                    @endforelse
                                </div>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block">@lang('users.add')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
