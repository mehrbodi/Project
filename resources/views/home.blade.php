@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
                <div class="card-header">
                    <button class="btn btn-success btn-block btn-lg p-3">شما با موفقیت وارد شدید</button>
                </div>
                {{-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('شما با موفقیت وارد شدید') }}
                </div> --}}
                <div class="container mt-5">
                    <div class="row">
                        <div class="col ">
                            اکنون میتونید خانه ها را ببینید
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
