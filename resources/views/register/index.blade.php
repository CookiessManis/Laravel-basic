@extends('template.main')


@section('container')


<div class="row justify-content-center">
    <div class="col-md-4 ">
        

        <main class="form-signin w-100 m-auto ">
            <form action="/register" method="POST">
              @csrf
          <h1 class="h3 mb-4 fw-normal text-center">Please Register</h1>
      
          <div class="form-floating">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
              <label for="name">Name</label>
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>

          <div class="form-floating">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
              <label for="username">Username</label>
              @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          
          
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
            </form>
            <small class="d-block text-center mt-3">Already Register? <a href="/login">Login Now</a></small>
        </main>

    </div>
</div>
  @endsection