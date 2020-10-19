@extends('layouts.app')

@section('content')
    @foreach($posts as $home)
    @endforeach
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
                    <div class="card-header text-center">{{ __('ویراش خانه') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('update_home', $home->id) }}" >
                            @csrf

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('آدرس :') }}</label>

                                <div class="col-md-6">
                                    <input value="{{$home->address}}" name="address" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('کد پستی :') }}</label>

                                <div class="col-md-6">
                                    <input value="{{$home->postcode}}" name="postal_code" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('شماره تلفن خانه  :') }}</label>

                                <div class="col-md-6">
                                    <input value="{{$home->house_name_number}}" name="house_number" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phones" class="col-md-4 col-form-label text-md-right">{{ __('شماره موبایل  :') }}</label>

                                <div class="col-md-6">
                                    <input value="{{$home->phones}}" type="text" class="form-control"  name="phones">
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control" name="types">
                                        <option value="mobile" @if($phone->phoneType == 'mobile' ) selected @endif>Mobile</option>
                                        <option value="work" @if($phone->phoneType == 'work' ) selected @endif>Work</option>
                                        <option value="home" @if($phone->phoneType == 'home' ) selected @endif>Home</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="owner" class="col-md-4 col-form-label text-md-right">{{ __('صاحبخانه') }}</label>
                                <div class="col-md-6">
                                    <input @if($owner == 1) checked @endif type="checkbox" class="form-control" name="owner" value="owner" >
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 text-center">
                                    <button type="submit" class="btn btn-warning btn-block">
                                        {{ __('ویرایش') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{Route('delete',['del' => $home->id])}}">
                            @csrf
                            <div class="form-group row mt-2">
                                <div class="col-md-6 offset-md-4 text-center">
                                    <button type="submit" class="btn btn-danger btn-block">
                                        {{ __('حذف') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection