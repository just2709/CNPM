@extends('layouts.app') @section('content')
<div class="container my-5" style="margin-bottom: 190px !important">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __("Đổi mật khẩu") }}</div>

        <div class="card-body">
          <form method="POST" action="{{ route('changePassword') }}">
            @csrf

            <div class="row mb-3">
              <label for="current_password" class="col-md-4 col-form-label text-md-end">{{ __("Mật khẩu cũ") }}</label>

              <div class="col-md-6">
                <input
                  id="current_password"
                  type="password"
                  class="form-control @error('current_password') is-invalid @enderror"
                  name="current_password"
                  value="{{ old('current_password') }}"
                  required
                  autocomplete="email"
                  autofocus
                />
                @if (session('message'))
                <p class="text-danger fs-6">{{ session("message") }}</p>
                @endif @error('current_password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __("Mật khẩu mới") }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">{{ __("Nhập lại mật khẩu mới") }}</label>

              <div class="col-md-6">
                <input
                  id="password_confirmation"
                  type="password"
                  class="form-control @error('password_confirmation') is-invalid @enderror"
                  name="password_confirmation"
                  required
                  autocomplete="password_confirmation"
                />

                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-success">
                  {{ __("Đổi") }}
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
