@extends('admin.layouts.master')

@section('title', 'Admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Blog Categories</div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('updateBlogCategoryStore') }}" enctype="multipart/form-data">
                        @csrf 
                        
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="hidden" name="cat_id" value="{{$category->id}}">
                            <input type="text" class="form-control" id="category" name="category" value="{{ old('category')  ?? $category->name }}" required>
                            @if ($errors->has('category'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('category') }}
                                </div>
                            @endif
                        </div>

                       

                        <button type="submit" class="">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
