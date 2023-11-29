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
  <h2>Add Project</h2>
  <form method="POST" action="/profile/update" id="profileForm">
    <div class="mb-3">
        <label for="departement" class="form-label">Departement</label>
        <input type="text" class="form-control" id="departement" name="departement">
    </div>
    <div class="mb-3">
        <label for="project" class="form-label">Project Topic</label>
        <input type="text" class="form-control" id="project" name="project">
    </div>
    <div class="mb-3">
        <label for="Technical" class="form-label">Technical Requirements</label>
        <input type="text" class="form-control" id="Technical" name="Technical">
    </div>
    <div class="mb-3">
        <label for="leader" class="form-label">Project Leader</label>
        <input type="text" class="form-control" id="leader" name="leader">
    </div>
    <a href="{{ route('project') }}"
    <button type="button" class="btn btn-success mb-3" style="margin-top: 10px; margin-left: 480px; font-size:14px;" onclick="enableEdit()">
        <i class="fas fa-save"></i> Save
    </button>
    </a>
  </form>   
</div>

@endsection