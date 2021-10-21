@extends('layouts.app')
@section('sideBar')
    @include('partials.sideBar')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Edit Project</div>

                    <div class="card-body">

                        <form action="{{route('projects.update',['project'=> $project->id])}}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="Project">Project</label>
                                <input name="Project" type="text" class="form-control" id="Project"
                                       aria-describedby="ProjectHelp" placeholder="Enter Project" value="{{ $project->project }} ">
                                @error('Project')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror

                            </div>


                            <div class="form-group">
                                <label for="Started at">Started at</label>
                                <input name="Started at" type="datetime-local" class="form-control" id="Started at"
                                       aria-describedby="Started atHelp" placeholder="Enter Started at" value="{{ $project->started_at }}">
                                @error('Started at')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Expected end date">Expected end date</label>
                                <input name="Expected end date" type="datetime-local" class="form-control" id="Expected end date"
                                       aria-describedby="Expected end dateHelp" placeholder="Enter Expected end date" value="{{ $project->expected_end_date }}">
                                @error('Expected end date')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Deadline">Deadline</label>
                                <input name="Deadline" type="datetime-local" class="form-control" id="Deadline"
                                       aria-describedby="DeadlineHelp" placeholder="Enter Deadline" value="{{ $project->deadline }}">
                                @error('Deadline')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="Status">Status</label>
                                <select class="form-control" name="Status" id="Status" placeholder="Enter Status" value="{{ $project->status }}">
                                    <option>On Going</option>
                                    <option>Ended</option>
                                    <option>Just started</option>
                                </select>
                                @error('Status')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Ended_at">Ended_at</label>
                                <input name="Ended_at" type="datetime-local" class="form-control" id="Ended_at"
                                       aria-describedby="Ended_atHelp" placeholder="Enter Ended_at" value="{{ $project->ended_at }}">
                                @error('Ended_at')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Comment">Comment</label>
                                <input name="Comment" type="text" class="form-control" id="Comment"
                                       aria-describedby="CommentHelp" placeholder="Enter Comment" value="{{ $project->comment }}">
                                @error('Comment')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>



                            <button type="submit" class="btn btn-primary"> Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
