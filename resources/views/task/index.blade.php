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
                                        <h4>Your Tasks Info <span  class="glyphicon glyphicon-tasks"></span> </h4>
                                        <div style="font-size: xx-large">{{ Auth::user()->name }}</div>
                                        <a href="{{route('tasks.create')}}" class="btn btn-outline-info"> + Add Existing Projects</a>
                                    </div>

                                    <div class="card-body ">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover"  style="width:100%;">
                                                <thead>
                                                {{--                                        <div class="pull-right">--}}
                                                {{--                                        <form action="{{route('suppliers.search')}}" method="GET" class="search-form ">--}}
                                                {{--                                           Search: <input type="text" name="query" id="query"  value="{{request()->input('query')}}" class="search-box" >--}}
                                                {{--                                        </form>--}}
                                                {{--                                        </div>--}}
                                                <tr>
                                                    <th>Project</th>
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
                                                @foreach($user->projects as $project)
                                                    <tr>
                                                        <td>{{$project->project}}</td>
                                                        <td>{{$project->started_at}}</td>
                                                        <td>{{$project->expected_end_date}}</td>
                                                        <td>{{$project->deadline}}</td>
                                                        <td>{{$project->status}}</td>
                                                        <td>{{$project->ended_at}}</td>
                                                        <td>{{$project->comment}}</td>
                                                        <td class="d-flex">
                                                            <a href="{{route('tasks.edit',['task'=>  $project->id])}}">
                                                                <button type="button" class="btn btn-info btn-sm ">
                                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                                </button>
                                                            </a>
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
