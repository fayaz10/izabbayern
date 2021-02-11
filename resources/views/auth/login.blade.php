@extends('userViewLayout.userViewApp')
@section('content')
<div style="padding-top: 15%"></div>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 " >
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="keo_contact_form">
            <center><h4>{{ __('lang.login') }}</h4></center>
            <div class="keo_contact_field contact_mrgn_btm">
                <input id="email" placeholder="{{ __('lang.your email') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="keo_contact_field contact_mrgn_btm">
                <input placeholder="{{ __('lang.password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="keo_contact_info" style="text-align: right" >
              
                <input style="width: 10px; height: 10px" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>   {{ __('lang.remember me') }}               
               <br>
                @if (Route::has('password.request'))
                    <a class="btn-sm btn-link" href="{{ route('password.request') }}">
                        {{ __('lang.forgot password') }}
                    </a>
                @endif
              
            </div>
            <div class="keo_contact_field" style="padding-top: 10%">
               <center>
                    <button style="padding: 1% 15% 2% 15%" type="submit" class="btn btn-success">{{ __('lang.loginbtn') }} </button>
               </center>
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-4"></div>

  
</div>
<div style="padding-top: 5%"></div>
@endsection

