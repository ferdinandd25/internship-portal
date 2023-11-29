@extends('layout.main')

@section('content')


<style>
  .content {
    background-image: url('{{ asset('img/Background.jpg') }}');
    background-size: cover;
    background-position: ;
    height: 100vh;
    width: 100%;
    margin-top : -28px;
    color : white;
    position:relative;
  }

  .content {
    padding: 50px;
}

.content h2 {
    font-family: "Verdana", sans-serif;
    color: #ffffff;
    font-size: 60px;
}
   
  /* .backgroundimg {
    background-image: url('img/Background.jpg');
    height: 800px;
    width: 1000px;
} */
</style>

<div class="content">
  <h2>Lead The Way </h2>
  <h2> Of Your Future</h2>
  
</div>
@endsection