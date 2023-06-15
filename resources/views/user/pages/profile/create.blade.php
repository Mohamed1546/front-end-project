@extends('user.master')


@section('title', __('admin.edit_user_profile'))

@section('page-title', __('admin.edit_user_profile'))

@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
            <form action="{{ route('user.userprofiles.store') }}" method="post" enctype="multipart/form-data"
                class="section general-info">
                @csrf
                <div class="info">
                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            @include('general-components.admin.message')
                            <div class="row">
                                <div class="col-xl-2 col-lg-12 col-md-4">
                                    <div class="upload mt-4 pr-md-4">
                                        <input type="file" id="input-file-max-fs" name="profile_image" class="dropify"
                                            data-default-file="{{ asset('admin/dark/assets/img/200x200.jpg') }}"
                                            data-max-file-size="2M" />
                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i>@lang('user.profile_image')
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>@lang('messages.firstname')</label>
                                                <input type="text" class="form-control mb-4" name="firstname"
                                                    value="{{ Auth::user()->firstname }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>@lang('messages.lastname')</label>
                                                <input type="text" class="form-control mb-4" name="lastname"
                                                    value="{{ Auth::user()->lastname }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>@lang('user.username')</label>
                                                <input type="text" class="form-control mb-4" name="username"
                                                    value="{{ old('username') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>@lang('user.date_of_Birth')</label>
                                                <input type="date" class="form-control mb-4" name="date_of_Birth"
                                                    value="{{ old('date_of_Birth') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>@lang('user.gender')</label>
                                                <select class="form-control mb-4" name="gender"
                                                    value="{{ old('gender') }}">
                                                    <option selected></option>
                                                    <option value="male">@lang('user.male')</option>
                                                    <option value="female">@lang('user.female')</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>@lang('user.phone')</label>
                                                <input type="text" class="form-control mb-4" name="phone"
                                                    value="{{ old('phone') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>@lang('user.country')</label>
                                                <select type="text" class="form-control mb-4" name="country">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>@lang('user.city')</label>
                                                <input type="text" class="form-control mb-4" name="city"
                                                    value="{{ old('city') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>@lang('user.post_number')</label>
                                                <input type="text" class="form-control mb-4" name="post_number"
                                                    value="{{ old('post_number') }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>@lang('user.address')</label>
                                                <input type="text" class="form-control mb-4" name="address"
                                                    value="{{ old('address') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="submit" name="submit" value="{{ __('admin.edit_user_profile') }}"
                                    class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
            @include('general-components.admin.message')
            <form action="{{ route('user.change/password', Auth::user()->id) }}" method="post" class="section general-info p-5">
                @csrf
                @method('put')
                <div class="row mb-4">
                    <div class="col-12 col-md-6 mb-4">
                        <input type="text" name="old_password" class="form-control"
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
@section('ajax')

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('select[name="country"]').bfhcountries({
                country: 'EG'
            });
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection
