@extends('layout.main')

@section('content')
<link rel="stylesheet" href="{{ asset('css/project.css') }}">
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

    .registration-status {
        border: 2px solid #ddd;
        border-radius: 5px;
        padding: 0px;
        width: auto;
        margin: 0 auto;
        text-align: top;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 40%;
        padding: 20px;
        text-align: center;
        background-color: white;
        color: black;
    }
    
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    
    .container {
        padding: 2px 16px;
    }
</style>
<div class="registration-status" style="display: grid; grid-template-columns: auto auto; align-items: center;">
    <div class="footer_logo" style="height: 47px; width: 100px; margin:auto; margin-left: 120px; background: url('{{ asset('img/default/mind-map-f.svg') }}') no-repeat center center; background-size: cover;"></div>
    <div style="margin-left: 100px; padding: 10px; margin:auto; font-size:16px;">
        <p style="margin: 0;">Registration Status : </p>
    </div>
</div>
<section id="ProjectContainer">
    <div class="Project">
        <div class="button-container">
            <button class="btn btn-secondary" style="font-size: 14px;">Corporate Secretary </button>
            <img src="{{ asset('img/marketing.jpg') }}" alt="">
        </div>
    </div>
</section>
<div class="containerAdmin">

    <div style="width: 100%; height: 100%; color: black; font-size: 20px; font-family: Inter; font-weight: 500; word-wrap: break-word">
        <strong> Project Topics : </strong> 
        <li>Corporate Courtesy Visit for Commercial System</li></br>
    
        <strong>Participant Criteria :</strong>
        <li>Major: Information Technology, Information Systems</li>
        <li>GPA(Min): 3</li></br>
    
        <strong>Objectives :</strong>
        <li>Mengembangkan sistem Courtesy Visit pelanggan corporate, mengelola data management dan retention Pelanggan.</li></br>
    
        <strong>Technical Requirements : </strong> 
        <li>Frontend Developer Skill dan memiliki passion di Marketing dan Customer Orientation</li></br>
    </div>

    
</div>

@endsection