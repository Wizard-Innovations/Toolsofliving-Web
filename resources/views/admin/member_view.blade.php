@extends('admin.layouts.master')

@section('title', 'Admin')
@section('css')
    <style>
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
            .memberInqueryLabel {
                font-size: 16px;
                color: #333;
                font-weight: 500;
            }
            .memberInqueryValue {
                font-size: 16px;
                font-weight: 500;
                color: #707070;
            }
    </style>
@endsection
@section('content')

<div class="container mt-5">
    <div class="row mb-5">
        <div class="col-md-12">
            
         <div class="d-flex align-items-center justify-content-between">
            <h4>Member Inquiry View</h4>
            <a href="{{ route('memberFormList') }}" class="admin-head-btn">Member Inquiry List</a>
         </div>
            
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Member Inquiry View</div>

                <div class="card-body">    
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="memberInqueryLabel">Name</td>
                                <td class="memberInqueryValue">{{ $member->name }}</td>
                            </tr>
                            <tr>
                                <td class="memberInqueryLabel">Email address</td>
                                <td class="memberInqueryValue">{{ $member->email }}</td>
                            </tr>
                            <tr>
                                <td class="memberInqueryLabel">Phone</td>
                                <td class="memberInqueryValue">{{ $member->phone }}</td>
                            </tr>
                            <tr>
                                <td class="memberInqueryLabel">City</td>
                                <td class="memberInqueryValue">{{ $member->city }}</td>
                            </tr>
                            <tr>
                                <td class="memberInqueryLabel">State</td>
                                <td class="memberInqueryValue">{{ $member->state }}</td>
                            </tr>
                            <tr>
                                <td class="memberInqueryLabel">Message</td>
                                <td class="memberInqueryValue">{{ $member->message }}</td>
                            </tr>
                        </tbody>
                    </table>
                    
                        
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
