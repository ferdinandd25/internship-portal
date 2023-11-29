@extends('layout.main')

@section('content')
<link rel="stylesheet" href="{{ asset('css/project.css') }}">
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
<section id="ProjectContainer">
    <div class="Project">
        <div class="button-container">
            <button class="btn btn-secondary" style="font-size: 14px;">Corporate Secretary</button>
            <img src="{{ asset('img/marketing.jpg') }}" alt="">
        </div>
    </div>
</section>
<div class="containerAdmin">

    <div style="width: 100%; height: 100%; color: black; font-size: 20px; font-family: Inter; font-weight: 500; word-wrap: break-word">
        <strong> Project Topics : </strong> 
        <li>Internship Portal</li></br>

        <strong>Participant Criteria :</strong>
        <li>Major: Information Technology, Information Systems</li>
        <li>GPA(Min): 3</li></br>
    
        <strong>Objectives :</strong>
        <li>Design, Implement, Analyse, and Develop an Internship Portal</li></br>
    
        <strong>Technical Requirements : </strong> 
        <li>Full Stack Developer</li>
        <li>Research and analytical skills</li></br>
    </div>
    <div class="mb-4" style="text-align: center;">
        <a href="{{ route('admin.activity') }}" class="btn btn-danger" style="margin-top: -10px; margin-left: 370px;">Daftar</a>
    </div>
    
</div>


@endsection
