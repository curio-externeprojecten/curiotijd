@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('Voornaam') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" 
                                name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Achternaam') }}</label>

                            <div class="col-md-6">

                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" 
                                name="last_name"  value="{{ old('last_name') }}" required autocomplete="last_name">
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        @if (!isset(Auth::user()->name))
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Klas') }}</label>

                                <div class="col-md-6 d-flex align-items-center">
                                    @if(isset($classes))
                                        <select name="class_id">
                                        
                                            @foreach($classes as $class)
                                                <option value={{$class->id}}>{{$class->name}}​​</option>
                                            @endforeach
                                        </select>
                                    @else
                                        <p class="mb-0">Klassen zijn niet gevonden!</p>
                                    @endif

                                    @error('class_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        @endif

                        @if (!isset(Auth::user()->name))
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Studentnummer') }}</label>

                                <div class="col-md-6">

                                    <input id="student_number" type="text" class="form-control @error('student_number')
                                     is-invalid @enderror" name="student_number"
                                     value="{{ old('student_number') }}" required autocomplete="student_number">
                                    @error('student_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Bevestig wachtwoord') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        @if (isset(Auth::user()->name) && Auth::user()->name == "superadmin")
                            <div class="form-group row">
                                <label for="admin-checkbox" class="col-md-4 col-form-label text-md-right">{{ __('Admin') }}</label>

                                <div class="col-md-6">
                                    <input id="admin-checkbox" type="checkbox" class="form-control" name="admin_checkbox">
                                </div>
                            </div>
                        @endif

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
