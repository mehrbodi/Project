@extends('layouts.app')

@section('content')
@if (auth()->check())
    <div class="card-header text-center">{{ __('نمایش خانه ها') }}</div>
    @foreach($test as $prop)
        @if($prop->user_id == auth()->user()->id)
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card mt-3">
                            <div class="card-body">
                                <form method="get" action="{{Route('single_page',[ 'post_id' => $prop->id ])}}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('آدرس :') }}</label>

                                        <div class="col-md-6">
                                            <input id="address" value="{{$prop->address}}" type="text" class="form-control" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('شماره تلفن خانه  :') }}</label>

                                        <div class="col-md-6">
                                            <input id="house_number" value="{{$prop->house_name_number}}" type="text" class="form-control" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-block btn-outline-dark">
                                                {{ __('مشاهده خانه') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@else
<div class="container">
    <div class="row">
        <div class="col">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading text-center display-3">اخطار</h4>
                <h2 class="text-center mt-5">شما باید قبل از مشاهده کردن املاک خود وارد حساب کاربری بشوید</h2>
                <hr>
                <h5 class="text-center">برای ورود و یا ساخت حساب کاربری خود میتوانید از منوی بالا اقدام کنید</h5>
              </div>
        </div>
    </div>
</div> 
@endif
@endsection