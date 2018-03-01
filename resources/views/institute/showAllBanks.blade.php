@extends('layouts.master')
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Static Tables</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a>Institute</a>
                </li>
                <li class="active">
                    <strong>All institutes</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Institutes  </h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Bank Name</th>
                            <th>Type</th>
                            <th>Founding year</th>
                            <th>Logo</th>
                            <th>Rating</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($institutes as $indexKey =>  $institute)
                            <tr>
                                <td>{{$indexKey+1}}</td>
                                <td>{{$institute->name}}</td>
                                <td>{{strtoupper($institute->type)}}</td>
                                <td>{{$institute->founding_year}}</td>
                                <td><img src="{{ asset('instituteImages/'.$institute->images)}}" class="img-circle" style="width:48px; height:48px" alt="no logo"></td>
                                <td class="text-navy"> <i class="fa fa-level-up"></i> {{$institute->rating}}% </td>
                                <td>
                                    <a href="{{URL::route('institute.show',$institute->institute_id)}}" class="btn btn-white btn-sm">View details</a>
                                    <a href="{{URL::route('institute.edit',$institute->institute_id)}}" class="btn btn-white btn-sm">Edit</a>
                                    <a href="{{URL::route('institute.delete',$institute->institute_id)}}" class="btn btn-white btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection