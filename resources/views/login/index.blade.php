@extends('template.main')


@section('container')


<div class="row justify-content-center">
    <div class="col-md-4 ">
      
      @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger" role="alert">
        {{ session('loginError') }}
      </div>
      @endif

        
        <main class="form-signin w-100 m-auto ">
            <form action="/login" method="POST" class="form-signin">
              @csrf
          <h1 class="h3 mb-4 fw-normal text-center">Please Login</h1>
      
          <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" autofocus required value="{{ old('email') }}">
              <label for="Email">Email address</label>
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" autofocus required>
            <label for="password">Password</label>
          </div>
          
          
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
            </form>
            <small class="d-block text-center mt-3">Not Register? <a href="/register">Register Now</a></small>
        </main>

    </div>
</div>
  @endsection