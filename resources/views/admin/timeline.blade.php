@extends('admin.index')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-4">
                <h2 class="">Add Timeline</h2>
                <form method="post" action="/imuzaffariadmin/timeline" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Duration</label>
                        <input type="text" name="duration" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Position</label>
                        <input type="text" name="position" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <textarea type="text" name="description" class="form-control" rows="10" id="exampleInputPassword1"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Company</label>
                        <input type="text" name="company" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
