@extends('layout.first')

@section('content1')
<div class="hold-transition login-page">
<div class="login-box" style="margin-top: -50px;">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <a href="{{ route('login') }}" class="h1"><b>Internship </b>Portal</a>
    </div>
    <div class="card-body">
        <h3 class="login-box-msg">Select Your Role</h3>

        <form action="{{ route('role_proses') }}" method="POST">
        <div class="input-group mb-4 col-10 mx-auto">
            <select class="form-control" id="role" name="role" required>
                <option value="" disabled selected>Select Role</option>
                <option value="student">Student</option>
                <option value="university">University</option>
            </select>
        </div> 
        <div class="mb-3">
            <!-- /.col -->
        <div class="col-10 mx-auto">
            <button type="submit" class="btn btn-primary btn-block">Next</button>
            </div>
            <!-- /.col -->
        </div>
        <p class="mb-0">As a?
            <a href="{{ route('reguniv') }}" class="text-center">University</a>
        </p>
        <p class="mb-0">As a?
            <a href="{{ route('regstudent') }}" class="text-center">Student</a>
        </p>
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

<script>
    $(document).ready(function () {
        $('#role').change(function () {
            var selectedRole = $(this).val();
            if (selectedRole === 'student') {
                window.location.href = "{{ route('register') }}";
            } else if (selectedRole === 'university') {
                window.location.href = "{{ route('univForm') }}";
            }
        });
    });
</script>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Pada role_selection.blade.php -->

</div>
@endsection

