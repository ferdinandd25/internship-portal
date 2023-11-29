@extends('university.layoutU.mainU')

@section('contentU')

<style>
    body {
        font-family: Arial, sans-serif;
        flex: 1;
    }
    .containerAdmin {
        background-color: #fff;
        max-width: 600px;
        margin: 0 auto;
 
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 5px rgba(0, 0, 0, 0.1);
    }   

</style>
<div class="containerAdmin">
    <h1>Profile</h1>
    <form method="POST" action="/profile/update" id="profileForm">
    <div class="mb-3">
        <label for="full_name" class="form-label">University Name</label>
        <input type="text" class="form-control" id="name" name="name" value="Universitas Prima Indonesia" readonly>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email University</label>
        <input type="email" class="form-control" id="email" name="email" value="contact@unprimdn.ac.id" readonly>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location1" name="location1" value="North Sumatera" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="location" style="color: #fff">Location</label>
                <input type="text" class="form-control" id="location" name="location2" value="Medan" readonly>
            </div>
        </div>
    </div>
    </div>
    <div class="mb-3">
        <input type="address" class="form-control" id="address" name="address" value=" Jl. Sampul No.3, Sei Putih Barat, Kec. Medan Petisah" readonly>
    </div>

    <div class="mb-3">
            <label for="major" class="form-label">Major</label>
            <input type="text" class="form-control" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="email" value="Information System" readonly>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">          
                <a class="dropdown-item" href="">Visual Communication Design</a>
                <a class="dropdown-item" href="">Informatics Engineering</a>
            </div>
    </div>

    <div class="mb-3">
        <label for="cpuniv" class="form-label">CP University</label>
        <input type="text" class="form-control" id="cpuniv" name="cpuniv" value="" readonly>
    </div>

    <button type="button" class="btn btn-primary mb-5" style="margin-top: 10px; margin-left: 505px;" onclick="enableEdit()">Edit</button> 
    <a href="{{ route('profile') }}"  class="btn btn-success ml-2" id="saveBtn" style="display: none; margin-top: -155px; margin-left: -80px;">Save</a>
    <a href="{{ route('profile') }}" class="btn btn-secondary ml-2" id="cancelBtn" style="display: none; margin-top: -155px; margin-left: -80px;">Cancel</a>

    </form>   
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
    function enableEdit() {
        document.getElementById("name").removeAttribute("readonly");
        document.getElementById("email").removeAttribute("readonly");
        document.getElementById("location").removeAttribute("readonly");
        document.getElementById("location1").removeAttribute("readonly");
        document.getElementById("address").removeAttribute("readonly");
        document.getElementById("navbarDropdown").removeAttribute("readonly");
        document.getElementById("cpuniv").removeAttribute("readonly");
        document.getElementById("saveBtn").style.display = "inline-block";
        document.getElementById("cancelBtn").style.display = "inline-block";
    }
</script>
@endsection