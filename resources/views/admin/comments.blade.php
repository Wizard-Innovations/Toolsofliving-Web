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
        .form-check-input {
            border-radius: 25px !important;
        }
        .statusUpdateAlert {
            position: fixed;
            z-index: 1;
            top: 50px;
            right: 50px;
        }
        .alert-dismissible .btn-close {
            display: block;
            height: 100%;
            padding: 0px 14px !important;
            border: none !important;
        }
    </style>
@endsection

@section('content')
   

    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-md-12">
                
             <div class="d-flex align-items-center justify-content-between">
                <h4>Blog Comments</h4>
                 
             </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="statusUpdateAlert">
                     
                </div>
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <table id="blogList" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Blog</th> 
                            <th>Comment</th> 
                            <th>Comment By</th> 
                            <th>Created At</th> 
                            <th>Status</th>
                            <th>Action</th>
                            <!-- Add more columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $key => $comment)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$comment->blog->title}}</td> 
                                <td>{{$comment->comment}}</td> 
                                <td>{{$comment->user->name}}</td> 
                               
                                <td>{{$comment->created_at}}</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" onchange="statusUpdate({{$comment->id}}, event)"  type="checkbox" id="flexSwitchCheckDefault{{$key}}" {{$comment->status == 1 ? 'checked' : ''}} >
                                        <label class="form-check-label" for="flexSwitchCheckDefault{{$key}}"></label>
                                    </div>
                                </td>
                                <td>
                                    <div class="blog-list-actions">
                                        
                                        <form method="POST" action="{{ route('blogCommentDelete', ['id' => $comment->id]) }}">
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
         function statusUpdate(comment_id, e){ 
            
                $.ajax({
                    url: '{{route("blogCommentStatusUpdate", ["id" => ":id"])}}'.replace(':id', comment_id),

                    type: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        status: e.target.checked ? 1 : 0
                    },
                    success: function(data){
                         
                       $(".statusUpdateAlert").html(`<div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                         ${data.message}
                         
                    </div>`);

                    setInterval(() => {
                        $(".statusUpdateAlert").html('');
                    }, 2000);
                    
                        
                    }
                })
            
        }
        
    </script>
@endsection
