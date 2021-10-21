@extends('layouts.app')
@section('sideBar')
    @include('partials.sideBar')
@endsection
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="card ml-5">
                            <form action="{{route('projects')}}" method="post">
                                @csrf
                                <div class="card-header">
                                    <h4>+ Add New Project</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="project">project</label>
                                        <input name="project" type="text" class="form-control" id="project"
                                               aria-describedby="projectHelp" placeholder="Enter project">
                                        @error('project')
                                        <small  class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="slug">slug</label>
                                        <input name="slug" type="text" class="form-control" id="slug"
                                               aria-describedby="slugHelp" placeholder="Enter slug">
                                        @error('slug')
                                        <small  class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>


                                <div class="form-group">
                                    <label for="Started_at">Started_at</label>
                                    <input name="Started_at" type="datetime-local" class="form-control" id="Started_at"
                                           aria-describedby="Started atHelp" placeholder="Enter Started_at">
                                    @error('Started_at')
                                    <small  class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Expected end date">Expected end date</label>
                                    <input name="Expected end date" type="datetime-local" class="form-control" id="Expected end date"
                                           aria-describedby="Expected end dateHelp" placeholder="Enter Expected end date" >
                                    @error('Expected end date')
                                    <small  class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Deadline">Deadline</label>
                                    <input name="Deadline" type="datetime-local" class="form-control" id="Deadline"
                                           aria-describedby="DeadlineHelp" placeholder="Enter Deadline" >
                                    @error('Deadline')
                                    <small  class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select class="form-control" name="Status" id="Status" placeholder="Enter Status" >
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
                                           aria-describedby="Ended_atHelp" placeholder="Enter Ended_at" >
                                    @error('Ended_at')
                                    <small  class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>



                                <div class="form-group">
                                    <label for="Comment">Comment</label>
                                    <input name="Comment" type="text" class="form-control" id="Comment"
                                           aria-describedby="CommentHelp" placeholder="Enter Comment" >
                                    @error('Comment')
                                    <small  class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">+Add</button>
                                    {{--                                <button class="btn btn-secondary" type="reset">Reset</button>--}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')

    <script>

        $('#project').change(function(e){
            $.get('{{route('projects.checkSlug')}}',
                {'project': $(this).val()},
                function (data){
                    $('#slug').val(data.slug)
                }
            );
        });

    </script>

@endsection






{{--$table->bigIncrements('id');--}}
{{--$table->string('project')->nullable();--}}
{{--$table->string('slug')->nullable();--}}
{{--$table->timestamp('started_at')->nullable();--}}
{{--$table->string('status')->nullable();--}}
{{--$table->timestamp('ended_at')->nullable();--}}
{{--$table->text('comment')->nullable();--}}
{{--$table->timestamps();--}}

