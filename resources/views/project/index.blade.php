@extends('layouts.app')
@section('sideBar')
    @include('partials.sideBar')
@endsection
@section('content')
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <h4>Projects <span class="glyphicon glyphicon-briefcase"></span> </h4>
                                        <a href="{{route('projects.create')}}" class="btn btn-outline-info">+ Add New Project </a>
                                    </div>
                                    <div class="card-body ">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover"  id="save-stage"  style="width:100%;">
                                                <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Started_at</th>
                                                    <th>Expected end date</th>
                                                    <th>deadline</th>
                                                    <th>Status</th>
                                                    <th>Ended_at</th>
                                                    <th>Comment</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($projects as $project)
                                                <tr>
                                                    <td>{{ $project->id }}</td>
                                                    <td>{{$project->project}}</td>
                                                    <td>{{$project->started_at}}</td>
                                                    <td>{{$project->expected_end_date}}</td>
                                                    <td>{{$project->deadline}}</td>
                                                    <td>{{$project->status}}</td>
                                                    <td>{{$project->ended_at}}</td>
                                                    <td>{{$project->comment}}</td>
                                                    <td class="d-flex">
                                                        <a href="{{route('projects.edit',['project'=>$project->id])}}">
                                                            <button type="button" class="btn btn-info btn-sm ">
                                                                <span class="glyphicon glyphicon-pencil"></span>
                                                            </button>
                                                        </a>
                                                        <form action="{{route('projects.destroy',['project'=>$project->id])}}" method="post">
                                                            @method('delete')
                                                            @csrf

                                                            <button type="submit" class="btn btn-danger btn-sm ">
                                                                <span class="glyphicon glyphicon-trash"></span>
                                                            </button>
                                                        </form>
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
                    </div>
                </section>
                {{--                        <div class="row">--}}
                {{--                            <div class="col-12">--}}
                {{--                                {{$suppliers->appends(request()->except('page'))->links('partials.paginator') }}--}}
                {{--                            </div>--}}
                {{--                        </div>--}}

            </div>
        </div>
    </div>
    {{--    </div>--}}
@endsection
