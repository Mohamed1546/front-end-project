@extends('user.master')


@section('title', __('admin.edit'))

@section('page-title', __('admin.edit'))

@section('content')
    <div class="row">
        <div class="col-10 mx-auto">
            @include('general-components.admin.message')
            <form action="{{ route('user.change/password',Auth::user()->id) }}" method="post" class="border p-4">
                @csrf
                @method('put')
                <div class="row mb-4">
                    <div class="col-12 col-md-6 mb-4">
                        <input type="text" name="old_password"  class="form-control"
                            placeholder="{{ __('messages.Old_Password') }}">
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <input type="text" name="new_password" class="form-control"
                            placeholder="{{ __('messages.New_Password') }}">
                    </div>
                    <div class="col-12  mb-4">
                        <input type="text" name="password_confirmation" class="form-control"
                            placeholder="{{ __('messages.confirm_password') }}">
                    </div>
                </div>
                <input type="submit" name="submit" value="{{ __('messages.Change') }}" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
