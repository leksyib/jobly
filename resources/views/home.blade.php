@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        <div class="panel panel-default">
            <div class="panel-body">
                <a href="/jobs/create">Create new job listing</a>
            </div>
        </div>


            <div class="panel panel-default">
                <div class="panel-heading">Your Job Listings</div>
                <div class="panel-body">
                                    <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Job Title
                            </th>
                            <th>
                                Applications
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                            </th>
                            <th>
                            </th>
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                        <tr>
                            <td>
                            {{$job->title}}
                            </td>
                            <td>
                             
                            </td>
                            <td>
                                
                            </td>
                            <td>
                                <a href="">View Applications</a>
                            </td>
                            <td>
                                <a href="">Edit Job</a>
                            </td>
                            <td>
                                <a href="">Delete Job</a>
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
