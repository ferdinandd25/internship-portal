@extends('layout.first')

@section('content1')
<div class="hold-transition login-page">
    <div class="login-box" style="margin-top: -15px;">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="{{ route('login') }}" class="h1"><b>Internship </b>Portal</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">University Register</p>

            <form action="{{ route('register_proses') }}" method="POST">
            @csrf
            @error('name')
            <small>{{ $message }}</small>
            @enderror
            <div class="input-group mb-2">
                <input type="text" name="name" class="form-control" placeholder="University Name" value="{{ old('nama') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
            </div>
            
            @error('email')
                <small>{{ $message }}</small>
            @enderror
            <div class="input-group mb-2">
                <input type="email" name="email" class="form-control" placeholder="Email University" value="{{ old('email') }}">
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
                </div>
            </div>
            
            @error('password')
                <small>{{ $message }}</small>
            @enderror
            <div class="input-group mb-2">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-2">
                <select class="form-control" name="province">
                    <option value="" selected disabled hidden>Province</option>
                    <option value="province1">North Sumatera</option>
                    <!-- Tambahkan opsi province lainnya sesuai kebutuhan -->
                </select>
            
                <div class="col-md-6">
                    <select class="form-control" name="province">
                        <option value="" selected disabled hidden>City</option>
                        <option value="province1">Medan</option>
                        <!-- Tambahkan opsi province lainnya sesuai kebutuhan -->
                    </select>
                </div>
            </div>

            <div class="mb-2 input-group">
                <input type="text" name="text" class="form-control" placeholder="Address">
                <span class="input-group-text">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
            </div>

            <div class="mb-2 input-group">
                <input type="text" name="text" class="form-control" placeholder="Study Major">
                <span class="input-group-text">
                    <i class="fas fa-book"></i>
                </span>
            </div>

            <div class="mb-2 input-group">
                <input type="text" name="text" class="form-control" placeholder="CP University">
                <span class="input-group-text">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
            
            <div class="mb-3">  
                <!-- /.col -->
                {{-- <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </div> --}}
                <div class="col-12">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-block">Sign Up</a>
                </div>
                
                <!-- /.col -->
            </div>
                <p class="mb-0">Have an account?
                    <a href="{{ route('login') }}" class="text-center">Login</a>
                </p>
            </form>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @if ($message = Session::get('succes'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif
    
    @if ($message = Session::get('failed'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif
    </div>
@endsection

