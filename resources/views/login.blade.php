@extends('layout')

@section('controller')
<div id="login">
    <form method="POST" action="/login/auth">
        <div class="container " >
            <div class="row" style="margin-left: 150px">
                <div class="col-4 mt-5">
                    <div class="card border shadow  mb-5 " style="background-color: rgba(252, 252, 253, 0.616)">
                        {{-- Mengambil dan mengirim data input ke controller yang nantinya diambil oleh Request $request --}}
                        @csrf
                        @if (session('success'))
                            <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if (session('notAllowed'))
                        <div class="alert alert-danger">
                        {{ session('notAllowed') }}
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
                        
                        <div class="login text-center mt-3">
                            <h3 class="text-decoration-underline">Login</h3>
                        </div>
                        <div class="card-body" style="margin-top: 10px ">
                            <div class="col-auto mt-3">
                                <label class="visually-hidden" for="usergroup">username</label>
                                <div class="input-group">
                                  <div class="input-group-text"><i class="bi bi-person-plus-fill"></i></div>
                                  <input type="text" class="form-control" id="usergroup" placeholder="username" name="username">
                                </div>
                              </div>
                            <div class="col-auto mt-3">
                                <label class="visually-hidden" for="usergroup">Password</label>
                                <div class="input-group">
                                  <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
                                  <input type="password" class="form-control" id="usergroup" placeholder="password" name="password">
                                </div>
                              </div>
                             <button type="submit" class="btn btn-primary mt-3">Submit</button>
                             <div class="sigUp justify-content-center">
                                <p class="text-center mt-3">Tidak Punya Akun?<a href="{{route('register-page')}}" style="color :black">register</a></p>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </form>

</div>
</section>
@endsection