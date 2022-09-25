@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3" style="background-color: #323339">
                    <h6 class="m-0 font-weight-bold text-light">Input Articles</h6>
                </div>
                <div class="card-body">
                        <div class="container mt-2">
                            <form action="{{ route('articles.update',$articles->id)}}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">title</label>
                                    <input type="name" name="title" class="form-control" id="title" value={{ $articles->title }}>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">content</label>
                                    {{-- <input type="textarea" name="content" class="form-control" id="content" value=> --}}
                                    <textarea name="content" class="form-control" id="" cols="30" rows="10">{{ $articles->content }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">image</label>
                                    <input type="name" name="image" class="form-control" id="image" value={{ $articles->image }}>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Category id</label>
                                    <input type="name" name="category_id" class="form-control" id="category_id" value={{ $articles->category_id }}>
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