{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card mt-5">--}}
{{--                            <div class="card-header d-flex justify-content-between">--}}
{{--                                <h4>Suppliers <span class="glyphicon glyphicon-user"></span> </h4>--}}
{{--                                <a href="{{route('suppliers.create')}}" class="btn btn-outline-info"> + Add New Supplier </a>--}}
{{--                            </div>--}}
{{--                            <div class="card-body ">--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">--}}
{{--                                        <thead>--}}

{{--                                        <div class="pull-left">--}}
{{--                                            <p >{{$suppliers->total()}} result(s) for '{{request()->input('query')}}'</p>--}}
{{--                                        </div>--}}

{{--                                        <div class="pull-right">--}}
{{--                                            <form action="{{route('suppliers.search')}}" method="GET" class="search-form ">--}}
{{--                                                Search: <input type="text" name="query" id="query"  value="{{request()->input('query')}}" class="search-box" >--}}
{{--                                            </form>--}}
{{--                                        </div>--}}

{{--                                        <tr>--}}
{{--                                            <th>Code</th>--}}
{{--                                            <th>Name</th>--}}
{{--                                            <th>Address</th>--}}
{{--                                            <th>Business</th>--}}
{{--                                            <th>Phone1</th>--}}
{{--                                            <th>Phone2</th>--}}
{{--                                            <th>Mail</th>--}}
{{--                                            <th>Website</th>--}}
{{--                                            <th>WhatsApp</th>--}}
{{--                                            <th>FaceBook</th>--}}
{{--                                            <th>Action</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}
{{--                                        @foreach($suppliers as $supplier)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{$supplier->id}}</td>--}}
{{--                                                <td>{{$supplier->name}}</td>--}}
{{--                                                <td>{{$supplier->address}}</td>--}}
{{--                                                <td>{{$supplier->business}}</td>--}}
{{--                                                <td>{{$supplier->phone1}}</td>--}}
{{--                                                <td>{{$supplier->phone2}}</td>--}}
{{--                                                <td>{{$supplier->mail}}</td>--}}
{{--                                                <td>{{$supplier->website}}</td>--}}
{{--                                                <td>{{$supplier->whatsapp}}</td>--}}
{{--                                                <td>{{$supplier->facebook}}</td>--}}
{{--                                                <td class="d-flex">--}}
{{--                                                    <a href="{{route('suppliers.edit',['supplier'=>$supplier->id])}}">--}}
{{--                                                        <button type="button" class="btn btn-info btn-sm ">--}}
{{--                                                            <span class="glyphicon glyphicon-pencil"></span>--}}
{{--                                                        </button>--}}
{{--                                                    </a>--}}
{{--                                                    <form action="{{route('suppliers.destroy',['supplier'=>$supplier->id])}}" method="post">--}}
{{--                                                        @method('delete')--}}
{{--                                                        @csrf--}}

{{--                                                        <button type="submit" class="btn btn-danger btn-sm ">--}}
{{--                                                            <span class="glyphicon glyphicon-trash"></span>--}}
{{--                                                        </button>--}}
{{--                                                    </form>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                {{$suppliers->appends(request()->except('page'))->links('partials.paginator') }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
