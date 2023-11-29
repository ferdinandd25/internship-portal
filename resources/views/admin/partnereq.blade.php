@extends('admin.layoutA.mainA')

@section('contentA')
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .containerAdmin {
        background-color: #fff;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 5px rgba(0, 0, 0, 0.1);
    }   
    .rectangle {
        width: 230%; /* Mengatur panjang menjadi 50% dari lebar container induk */
        height: 190px; /* Ganti nilai ini sesuai keinginan Anda untuk lebar */
        padding: 20px;
        margin-left: auto;
        border: 2px solid black;
        border-radius: 10px;
    }
    .profile-image {
        width: 110px;
        height: auto;
        float: left; /* Mengatur posisi gambar di sebelah kiri */
        margin-right: 20px; /* Memberi jarak antara gambar dan teks di sebelah kanan */
    }   
</style>

<div class="containerAdmin">
    <h3>
        <li>Partnership Request</li>
    </h3>
    <form method="POST" action="/profile/update" id="profileForm">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="rectangle bg-light text-dark">
                        <img src="{{ asset('img/unprilogo.jpeg') }}" alt="Profile Image" class="profile-image">
                        <a href="{{ route('info') }}"><h4>Universitas Prima Indonesia</h4></a>
                        <h5><span class="text-muted">Sumatera Utara</span></h5>
                        <button href="{{ route('univ') }}" type="button" class="btn btn-primary mb-5;" onclick="enableEdit()">Accept</button>
                        <button type="button" class="btn btn-secondary mb-5;" onclick="enableEdit()">Reject</button>
                    </div>
                </div>
            </div>

        </div>

    </form>
</div>

<div class="containerAdmin">

    <form method="POST" action="/profile/update" id="profileForm">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="rectangle bg-light text-dark">
                        <img src="{{ asset('img/oxford.jpg') }}" alt="Profile Image" class="profile-image">
                        <a href="#"><h4>Oxford University</h4></a>
                        <h5><span class="text-muted">Oxford</span></h5>
                        <h5><span class="text-muted"></span></h5>
                        <button type="button" class="btn btn-primary mb-5;" onclick="enableEdit()">Accept</button>
                        <button type="button" class="btn btn-secondary mb-5;" onclick="enableEdit()">Reject</button>
                    </div>
                </div>
            </div>

        </div>

    </form>
</div>


@endsection