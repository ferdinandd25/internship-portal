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
    <h3>Personal Data</h3>
    <form method="POST" action="/profile/update" id="profileForm">
        <div class="mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" value="John Doe" readonly>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="johndoe234@gmail.com" readonly>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="location">Addres</label>
                    <input type="text" class="form-control" id="location1" name="location1" value="North Sumatera" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="location" style="color: #fff">Addres</label>
                    <input type="text" class="form-control" id="location" name="location2" value="Medan" readonly>
                </div>
            </div>
        </div>
        </div>
        <div class="mb-3">
            <input type="location" class="form-control" id="location" name="location" value=" Jl.Ayahanda no.17" readonly>
        </div>
        <div class="mb-3">
                <label for="date" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="date" name="date" value="28-02-2002" readonly>
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Identity Number (KTP)</label>
            <input type="number" class="form-control" id="number" name="number" value="12081345720002" readonly>
        </div>
    </form>   
</div>

<div class="containerAdmin">
    <h3>Academic Information</h3>
    <form method="POST" action="/profile/update" id="profileForm">
        <div class="mb-3">
            <label for="university" class="form-label">University Name</label>
            <input type="text" class="form-control" id="university" name="university" value="Universitas Prima Indonesia" readonly>
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Student ID Number</label>
            <input type="number" class="form-control" id="number" number="number" value="203303040307" readonly>
        </div>
        <div class="mb-3">
            <label for="major" class="form-label">Study Major</label>
            <input type="text" class="form-control" id="major" name="major" value="Information System" readonly>
        </div>
        <div class="mb-3">
            <label for="semester" class="form-label">Semester</label>
            <input type="number" class="form-control" id="number" name="number" value="7" readonly>
        </div>
    </form>   
</div>

<div class="containerAdmin">
    <h3>Document</h3>
    <form method="POST" action="/profile/update" id="profileForm">
        <div class="mb-3">
            <label for="cv">CV</label>
            <input type="file" class="form-control" id="cv" name="cv" value="cv.pdf" readonly> 
        </div>
        <div class="mb-3">
            <label for="transcript">Transcript</label>
            <input type="file" class="form-control" id="transcript" name="transcript" value="transcript.pdf" readonly> 
        </div>
        <div class="mb-3">
            <label for="ktp">KTP</label>
            <input type="file" class="form-control" id="ktp" name="ktp" value="ktp.pdf" readonly> 
        </div>
        <div class="mb-3">
            <label for="sertifikat">Certficate (Optional)</label>
            <input type="file" class="form-control" id="sertifikat" name="sertifikat" value="sertifikat.pdf" readonly> 
        </div>
    </form>   
</div>

<script>
    document.getElementById('date').valueAsDate = new Date('2002-02-28');
</script>
@endsection