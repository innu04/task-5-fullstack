@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3" style="background-color: #323339">
                    <h6 class="m-0 font-weight-bold text-light">Input Categories</h6>
                </div>
                <div class="card-body">
                        <div class="container mt-2">
                            <form action="/categories" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="name" name="name" class="form-control" id="name">
                                </div>
                                <input type="hidden" name="user_id" class="form-control" id="name" value={{ Auth::user()->id }}>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                     
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
                        </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection