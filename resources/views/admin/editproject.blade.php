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
        height: 490px; /* Panjang yang diinginkan */
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 5px rgba(0, 0, 0, 0.1);
    }   
</style>
<div class="containerAdmin">
    <h3>Intern Project</h3>
<form method="POST" action="/profile/update" id="profileForm">
    <div class="mb-3">
        <label for="full_name" class="form-label">Departement</label>
        <input type="text" class="form-control" id="name" name="name" value="Corporate Secretary" readonly>
    </div>
    <div class="mb-3">
        <label for="topic" class="form-label">Project Topic</label>
        <input type="topic" class="form-control" id="topic" name="topic" value="Job Portal" readonly>
    </div>
    <div class="mb-3">
        <label for="technical" class="form-label">Technical Requirements</label>
        <input type="technical" class="form-control" id="technical" name="technical" value="Full Stack Developer, Research and analytical thinking" readonly>
    </div>
    <div class="mb-3">
        <label for="leader" class="form-label">Project Leader</label>
        <input type="leader" class="form-control" id="leader" name="leader" value="A. Yahya Sjarifuddin" readonly>
    </div>
    <button type="button" class="btn btn-primary mb-5" style="margin-top: 10px; margin-left: 505px;" onclick="enableEdit()">Edit</button> 
    <a href="{{ route('editproject') }}"  class="btn btn-success ml-2" id="saveBtn" style="display: none; margin-top: -155px; margin-left: -80px;">Save</a>
    <a href="{{ route('editproject') }}" class="btn btn-secondary ml-2" id="cancelBtn" style="display: none; margin-top: -155px; margin-left: -80px;">Cancel</a>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
<script>
function enableEdit() {
    document.getElementById("name").removeAttribute("readonly");
    document.getElementById("topic").removeAttribute("readonly");
    document.getElementById("technical").removeAttribute("readonly");
    document.getElementById("leader").removeAttribute("readonly");
    document.getElementById("saveBtn").style.display = "inline-block";
    document.getElementById("cancelBtn").style.display = "inline-block";
}
</script>
@endsection