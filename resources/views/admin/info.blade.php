@extends('admin.layoutA.mainA')

@section('contentA')

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
  <h1>University</h1>
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
        <input type="location" class="form-control" id="location" name="location" value=" Jl. Sampul No.3, Sei Putih Barat, Kec. Medan Petisah" readonly>
    </div>

    <div class="mb-3">
        <label for="major" class="form-label">Major</label>
        <div class="input-group">
            <input type="text" class="form-control" id="major" name="major" value="Information System" readonly>
            <button class="btn btn-outline-secondary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-chevron-down"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">          
                <a class="dropdown-item" href="#">Visual Communication Design</a>
                <a class="dropdown-item" href="#">Informatics Engineering</a>
            </div>
        </div>
    </div>
    

    <div class="mb-3">
        <label for="email" class="form-label">CP University</label>
        <input type="email" class="form-control" id="email" name="email" value="" readonly>
    </div>

  </form>   
</div>

@endsection