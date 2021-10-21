@extends('layouts.app')
@section('sideBar')
    @include('partials.sideBar')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">All projects are here</div>

                    <div class="card-body">

                        <form action="{{route('tasks')}}" method="post">

                            @csrf

                            <div class="form-group">
                                <label for="Project">Project</label>
                                <select class="form-control" name="Project" id="Project" placeholder="Choose Project" >
                                    @foreach($projects as $project)
                                    <option >{{$project->project }}</option>
                                    @endforeach
                                </select>
                                @error('Project')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary"> + Add </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
