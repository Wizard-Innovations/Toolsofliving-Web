@extends('admin.layouts.master')

@section('title', 'Admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Blog</div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('createBlogStore') }}" enctype="multipart/form-data">
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
                            <label for="short_desc" class="form-label">Short Description</label>
                            <input type="text" class="form-control" id="short_desc" name="short_desc" value="{{ old('short_desc') }}" required>
                            @if ($errors->has('short_desc'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('short_desc') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="long_desc" class="form-label">Long Description</label>
                          
                            <textarea id="long_desc" name="long_desc"  class="form-control" cols="30" rows="5">{{ old('long_desc') }}</textarea>
                            @if ($errors->has('long_desc'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('long_desc') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            
                            <select  class="form-select"  id="categoryMultiple" name="category[]" multiple >
                                <option value="">Select Category</option>
                                
                                @foreach ($categories as $category)
                                     <option value="{{$category['id']}}" {{ old('category') == '1' ? 'selected' : '' }}>{{$category['name']}}</option>
                                @endforeach
                               
                                 
                            </select>
                            @if ($errors->has('category'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('category') }}
                                </div>
                            @endif
                        </div>

                        {{-- <div class="mb-3">
                            <label for="industry" class="form-label">Industry</label>
                            <select name="industry" class="form-select" id="industry">
                                <option value="">Select Industry</option>
                               
                                @foreach ($industries as $industry)
                                <option value="{{$industry['id']}}" {{ old('industry') == '1' ? 'selected' : '' }}>{{$industry['name']}}</option>
                                @endforeach
                                
                            </select>
                            @if ($errors->has('industry'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('industry') }}
                                </div>
                            @endif
                        </div> --}}

                        <button type="submit" class="">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
