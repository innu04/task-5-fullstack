@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3" style="background-color: #323339">
                    <h6 class="m-0 font-weight-bold text-light">Data Table Article</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($article as $index=> $articles)
                                    <tr>
                                        <td class="text-center">{{$index+1}}</td>
                                        <td class="text-center">{{ $articles->title }}</td>
                                        <td class="text-center">{{ Str::limit($articles->content,50 )}}</td>
                                        <td class="text-center">
                                            <a href="{{ route('articles.edit',$articles->id)}}" class="btn btn-warning">{{ __('Edit') }}</a>
                                            <form action="{{ route('articles.destroy', $articles->id )}}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn bg-danger text-light"
                                                    onclick="return confirm('are you sure?')">{{ __('Delete') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="/articles/create" class="btn btn-primary mt-2">Create Articles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection