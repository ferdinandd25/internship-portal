@extends('layout.main')

@section('content')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<style>
#CreateProjectContainer {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    background: yellow;
  }

  #CreateProjectContainer span {
    font-weight: bold;
    background-color: transparent; /* Warna latar belakang default */
  }

  #CreateProjectContainer .administration {
    
  }

  #CreateProjectContainer .preferences {
 
  }
</style>
<section id="CreateProjectContainer">
  <p>Complete the documents on the <span class="administration">Administration</span> and <span class="preferences">Preferences</span> page before registering</p>
</section>
<section id="ProjectContainer">
    <div class="Project">
      <a href="{{ route('admin.projectA') }}">
        <img src="{{ asset('img/marketing.jpg') }}" alt="">
        <h2>Corporate Solution</h2>
      </a>
    </div>
    <div class="Project">
      <a href="{{ route('admin.projectB') }}">
        <img src="{{ asset('img/marketing.jpg') }}" alt="">
        <h2>Cloud BusDev </h2>
      </a>
    </div>
  </section>
  <section id="ProjectContainer">
    <div class="Project">
      <a href="{{ route('admin.projectC') }}">
        <img src="{{ asset('img/ProjectC.jpg') }}" alt="">
        <h2>Corporate Secretary</h2>
      </a>
    </div>
    <div class="Project">
      <a href="{{ route('admin.projectD') }}">
        <img src="{{ asset('img/marketing.jpg') }}" alt="">
        <h2>DensTV</h2>
      </a>
    </div>
  </section>
  <section id="ProjectContainer">
    <div class="Project">
      <a href="{{ route('admin.projectE') }}">
        <img src="{{ asset('img/marketing.jpg') }}" alt="">
        <h2>Human Capital(HC)</h2>
      </a>
    </div>
    <div class="Project">
      <a href="{{ route('admin.newproject') }}">
        <img src="{{ asset('img/marketing.jpg') }}" alt="">
        <h2>Create Project</h2>
      </a>
    </div>
  </section>

@endsection