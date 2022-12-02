@extends('layout')

@section('controller')
<div id="register">
  <form method="POST" action="{{route('register.input')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
            <div class="card border border-primary shadow p-3 mb-5 bg-body rounded" style="margin-top: 70px">
                @if (session('success'))
                   <div class="alert alert-success">
                      {{ session('status') }}
                    </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                            <ul>
                        @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                   </div>
                @endif
                @csrf
                <div style="margin-top: 50px" >
                    <h3 class="text-center">Register</h3>
                </div>
                <div class="card-body">
                  <div class="col-auto mt-3">
                    <label class="visually-hidden" for="usergroup">Nama</label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="bi bi-person-fill"></i> </div>
                      <input type="text" class="form-control" id="usergroup" placeholder="name" name="name">
                    </div>
                  </div>
                  <div class="col-auto mt-3">
                    <label class="visually-hidden" for="usergroup">Email</label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="bi bi-envelope-plus-fill"></i></div>
                      <input type="text" class="form-control" id="usergroup" placeholder="email" name="email">
                    </div>
                  </div>
                  <div class="col-auto mt-3">
                    <label class="visually-hidden" for="usergroup">username</label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="bi bi-person-heart"></i></div>
                      <input type="text" class="form-control" id="usergroup" placeholder="username" name="username">
                    </div>
                  </div>
                  <div class="col-auto mt-3">
                    <label class="visually-hidden" for="usergroup">Password</label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="bi bi-fingerprint"></i></div>
                      <input type="text" class="form-control" id="usergroup" placeholder="password" name="password">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  <a href="/" class="btn btn-primary mt-3">back</a>
                  {{-- <div class="sigUp justify-content-center">
                    <p class="text-center mt-3"><a href="{{route('register-page')}}" style="color :black">Login</a></p>
                </div> --}}
                </form>
            </div>
            </div>
        </div>
    </div>
    </div>

</div>
@endsection
