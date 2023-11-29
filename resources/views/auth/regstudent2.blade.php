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
            <p class="login-box-msg">Student Register</p>

            <form action="{{ route('register_proses') }}" method="POST">
            @csrf
            @error('name')
            <small>{{ $message }}</small>
            @enderror
            <div class="input-group mb-2">
                <input type="text" name="name" class="form-control" placeholder="University Name" value="{{ old('nama') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-university"></span>
                        </div>
                    </div>
            </div>
    
            <div class="mb-2 input-group">
                <input type="number" name="number" class="form-control" placeholder="Student ID Number">
                <span class="input-group-text">
                    <i class="fas fa-id-card"></i>
                </span>
            </div>

            <div class="mb-2 input-group">
                <input type="text" name="text" class="form-control" placeholder="Study Major">
                <span class="input-group-text">
                    <i class="fas fa-book"></i>
                </span>
            </div>

            <div class="mb-2 input-group">
                <input type="number" name="number" class="form-control" placeholder="Semester">
                <span class="input-group-text">
                    <i class="fas fa-calendar"></i>
                </span>
            </div>
            
            <div class="mb-3">  
                <!-- /.col -->
                {{-- <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </div> --}}
                <!-- /.col -->
                <div class="col-12">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-block">Sign Up</a>
                </div>
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

