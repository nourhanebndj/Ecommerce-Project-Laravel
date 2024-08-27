@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f0f2f5;
        color: #333;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    .container {
        max-width: 600px;
        padding: 60px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card-header {
        background: transparent;
        border-bottom: none;
        text-align: center;
        font-size: 2rem;
        font-weight: bold;
        color: #378CE7;
        margin-bottom: 20px;
    }

    .card-body {
        padding: 0;
    }

    .form-control {
        border: none;
        border-bottom: 2px solid #378CE7;
        border-radius: 0;
        box-shadow: none;
        font-size: 1rem;
        padding: 10px 30px;
        transition: border-color 0.3s ease;
        margin-bottom: 20px;
    }

    .form-control:focus {
        border-bottom-color: #67C6E3;
        outline: none;
    }

    .btn-primary {
        background-color: #378CE7;
        border: none;
        padding: 15px;
        font-size: 1rem;
        font-weight: bold;
        color: white;
        border-radius: 20px;
        cursor: pointer;
        width: 100%;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056d2;
    }

    .btn-link {
        color: #0658aa;
        text-decoration: none;
        font-size: 0.9rem;
        display: block;
        text-align: center;
        margin-top: 10px;
    }

    .btn-link:hover {
        text-decoration: underline;
    }

    .invalid-feedback {
        font-size: 0.9rem;
        color: #e3342f;
        display: block;
        margin-top: -10px;
    }

    .form-check {
        margin-top: 10px;
        text-align: left;
    }

    .form-check-input {
        width: 1.2em;
        height: 1.2em;
        background-color: #378CE7;
        border: none;
        border-radius: 50%;
        margin-right: 10px;
        cursor: pointer;
    }

    .form-check-label {
        font-size: 0.9rem;
        color: #495057;
    }

    @media (max-width: 768px) {
        .container {
            padding: 20px;
            width: 90%;
        }

        .card-header {
            font-size: 1.5rem;
        }

        .form-control, .btn-primary {
            font-size: 0.9rem;
        }

        .btn-primary {
            padding: 10px;
        }

        .btn-link {
            font-size: 0.8rem;
        }
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
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
