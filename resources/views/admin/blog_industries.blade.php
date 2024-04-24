@extends('admin.layouts.master')

@section('title', 'Admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Blog Industries</div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('createBlogIndustryStore') }}" enctype="multipart/form-data">
                        @csrf
                         
                        <div class="mb-3">
                            <label for="industry" class="form-label">Industry</label> 
                            <input type="text" class="form-control" id="industry" name="industry" value="{{ old('industry') }}" required>
                            @if ($errors->has('industry'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('industry') }}
                                </div>
                            @endif
                        </div>

                       

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
