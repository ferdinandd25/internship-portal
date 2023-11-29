@extends('layout.main')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        height: 491px; /* Panjang yang diinginkan */
    }

    .Project a img {
        position: absolute;
        top: 130px; /* Sesuaikan dengan posisi vertikal yang diinginkan */
        left: 150px; /* Sesuaikan dengan posisi horizontal yang diinginkan */
    }

    /* CSS di file terpisah */
    img {
        width: 150px;
        height: auto; /* Menjaga aspek rasio gambar */
    }
    
    .button-container {
        position: absolute;
        top: 170px; /* Sesuaikan dengan posisi vertikal yang diinginkan */
        left: 150px; /* Sesuaikan dengan posisi horizontal yang diinginkan */
        display: flex;
        flex-direction: column-reverse; /* Membalik urutan vertikal elemen-elemen */
        align-items: center;
    }

    .button-container button {
        font-size: 20px; /* Sesuaikan dengan ukuran font yang diinginkan */
        padding: 12px 24px; /* Sesuaikan dengan ukuran tombol yang diinginkan */
        }
</style>
<div class="container">
    <h1 class="mb-4">Create / Propose Project</h1>
    <form action="submit-project.php" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="project-title" class="form-label">Project Title</label>
            <input type="text" class="form-control" id="project-title" name="project-title" required>
        </div>
        <div class="mb-5">
            <label for="project-proposal" class="form-label">Upload Proposal (PDF Format)</label>
            <input type="file" class="form-control" id="project-proposal" name="project-proposal" accept=".pdf" required>
        </div>
        <div class="mb-4" style="text-align: center;">
            <button type="submit" class="btn btn-danger" style="margin-top: -10px; margin-left: 500px;">Daftar</button>
        </div>
    </form>
</div>
<div class="button-container">
    <button class="btn btn-secondary" style="font-size: 14px;">Create Project</button>
    <img src="{{ asset('img/marketing.jpg') }}" alt="">
</div>
@endsection