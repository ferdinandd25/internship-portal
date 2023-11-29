@extends('layout.main')

@section('content')
<style>
.containerAdmin {
    background-color: #fff;
    max-width: 600px;
    margin: 0 auto;
    height: 550px; /* Panjang yang diinginkan */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: left;
    
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
    text-align: center;
}

.form-control {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.btn {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 8px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}
  
/* Styling for the profile picture container */
.profile {
    max-width: 200px;
    padding: 20px;
    float: left;
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Styling for the profile picture */
.profile-picture {
    width: 90px;
    height: 90px;
    overflow: hidden;
    border-radius: 50%;
}

/* Styling for the profile links */
.profile-links {
    text-align: center;
    margin-top: 20px;
}
</style>
<div class="containerAdmin">
    <h1>Upload Dokumen</h1>
    <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="cv">CV (PDF):</label>
            <input type="file" class="form-control" id="cv" name="cv" accept=".pdf" required>
        </div>
        <div class="mb-3">
            <label for="transcript">Transkrip (PDF):</label>
            <input type="file" class="form-control" id="transcript" name="transcript" accept=".pdf" required>
        </div>
        <div class="mb-3">
            <label for="ktp">KTP (JPG):</label>
            <input type="file" class="form-control" id="ktp" name="ktp" accept=".jpg" required>
        </div>
        <div class="mb-3">
            <label for="certificate">Sertifikat (PDF):</label>
            <input type="file" class="form-control" id="certificate" name="certificate" accept=".pdf" required>
        </div>
    </form>
</div>
@endsection