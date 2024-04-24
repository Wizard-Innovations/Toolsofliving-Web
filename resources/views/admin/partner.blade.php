@extends('admin.layouts.master')

@section('title', 'Admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Partner</div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('createPartnerStore') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if ($errors->has('image'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>

                     

                        <div class="mb-3">
                            <label for="desc" class="form-label">Description</label>
                          
                            <textarea id="desc" name="desc"  class="form-control" cols="30" rows="5">{{ old('desc') }}</textarea>
                            @if ($errors->has('desc'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('desc') }}
                                </div>
                            @endif
                        </div>

                       

                

                        <button type="submit" class="">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
