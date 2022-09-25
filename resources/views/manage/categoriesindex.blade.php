@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3" style="background-color: #323339">
                    <h6 class="m-0 font-weight-bold text-light">Data Table Categories</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead class="text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorie as $index=> $categories)
                                    <tr>
                                        <td class="text-center">{{$index+1}}</td>
                                        <td class="text-center">{{ $categories->name }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('categories.edit',$categories->id) }}" class="btn btn-warning">{{ __('Edit') }}</a>
                                            <form action="{{ route('categories.destroy',$categories->id) }}" method="POST" class="d-inline">
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
                        <a href="/categories/create" class="btn btn-primary mt-2">{{ __('Categories Create') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection