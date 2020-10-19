@extends('layouts.app')

@section('content')
@if (auth()->check())
<div class="container">
    @if($errors -> any())
        <div class="row">
            <div class="col">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading text-center display-4">خطایی رخ داد</h4>
                    <h4 class="text-center mt-5">شما باید موارد زیر را رعایت کنید </h4>
                    <hr>
                    @foreach($errors->all() as $err)

                        <h5 class="text-center">{{$err}}</h5>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('ثبت خانه جدید') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store_home') }}" >
                        @csrf
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('آدرس :') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('کد پستی :') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="postal_code">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('شماره تلفن ثابت  :') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control"  name="house_number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phones" class="col-md-4 col-form-label text-md-right">{{ __('شماره موبایل  :') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control"  name="phones">
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" name="types">
                                    <option value="mobile">Mobile</option>
                                    <option value="work">Work</option>
                                    <option value="home">Home</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="owner" class="col-md-4 col-form-label text-md-right">{{ __('صاحبخانه') }}</label>
                            <div class="col-md-6">
                                <input type="checkbox" class="form-control" name="owner" value="owner" >
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('ثبت خانه') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row">
        <div class="col">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading text-center display-3">اخطار</h4>
                <h2 class="text-center mt-5">شما باید قبل از ایجاد کردن یک ملک جدید وارد حساب کاربری خود بشوید</h2>
                <hr>
                <h5 class="text-center">برای ورود و یا ساخت حساب کاربری خود میتوانید از منوی بالا اقدام کنید</h5>
              </div>
        </div>
    </div>
</div> 
@endif
@endsection