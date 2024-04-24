@extends('admin.layouts.master')

@section('title', 'Admin')

@section('css')

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">


    <style>
        .blog-list-image {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 50%;
            margin: auto;
            display: block;
        }
        .blog-list-actions {
            display: flex;
            align-items:center;
            justify-content: center;
            gap: 20px;
        }
        .blog-list-edit {
            color: green;
            font-size: 20px;
        }
        .blog-list-del {
            color: red;
            font-size: 20px;
            background: transparent !important;
            border: 0px solid !important;
            padding: 0px !important; 
        }
        .blog-list-del:hover {
            color: red;
          
            background: transparent;
            border: 0px solid !important;
            padding: 0px !important; 
        }
        .admin-head-btn:hover {
            background: #016e34;
            border: 2px solid #016e34 !important;
            color: #fff;
        }
        .admin-head-btn {
            border: 2px solid #009144 !important;
            border-radius: 0px;
            padding: 10px 22px !important;
            font-weight: 500;
            background: #009144;
            color: #fff;
            box-shadow: inset 0 0 0 0 #009144;
            -webkit-transition: ease-out 0.4s;
            -moz-transition: ease-out 0.4s;
            transition: ease-out 0.4s;
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
   

    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-md-12">
                
             <div class="d-flex align-items-center justify-content-between">
                <h4>Blogs</h4>
                <a href="{{ route('createBlog') }}" class="admin-head-btn">Create Blog</a>
             </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                <table id="blogList" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Short Description</th>
                            <th>Category</th>
                            <th>Action</th>
                            <!-- Add more columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $key => $blog)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td><img src="{{ asset('uploads/blog-images') }}/{{ $blog->image }}"
                                        class="img-fluid blog-list-image" alt=""></td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ mb_strimwidth($blog->short_desc, 0, 100, '...') }}</td>
                                <td>
                                    <div class="blog-category-list">
                                        @foreach ($blog->categories as $blogCat)
                                            <div class="blog-category">{{ $blogCat->name }}</div>
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <div class="blog-list-actions">
                                        <a href="{{ route('updateBlog', ['id' => $blog->id]) }}" class="blog-list-edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                        {{-- <a href="{{ route('deleteBlog', ['id' => $blog->id]) }}" class="blog-list-del"><i class="fa-solid fa-trash-can"></i></a> --}}

                                        <form method="POST" action="{{ route('deleteBlog', ['id' => $blog->id]) }}">
                                            @csrf
                                          
                                            <button type="submit" class="blog-list-del"><i class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </div>
                                </td>
                                <!-- Add more columns as needed -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


@section('script')


    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#blogList').DataTable();
        });
    </script>
@endsection
