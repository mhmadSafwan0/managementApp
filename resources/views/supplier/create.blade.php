@extends('layouts.app')
@section('sideBar')
    @include('partials.sideBar')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Add New Supplier</div>

                    <div class="card-body">

                        <form action="{{route('suppliers')}}" method="post">

                            @csrf

                            <div class="form-group">
                                <label for="name">code</label>
                                <input name="code" type="text" class="form-control" value="{{ old('code') }}" id="code"
                                       aria-describedby="codeHelp" placeholder="Auto Increment" disabled>
                            </div>

                            <div class="form-group">
                                <label for="name">name</label>
                                <input name="name" type="text" class="form-control" value="{{ old('name') }}" id="name" aria-describedby="nameHelp" placeholder="Enter name" >
                                @error('name')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">address</label>
                                <input name="address" type="text" class="form-control"  value="{{ old('address') }}" id="address" aria-describedby="addressHelp" placeholder="Enter address">
                                @error('address')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="business">business</label>
                                <input name="business" type="text" class="form-control" value="{{ old('business') }}" id="business" aria-describedby="businessHelp" placeholder="Enter business type">
                                @error('business')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone1">phone1</label>
                                <input name="phone1" type="text" class="form-control" value="{{ old('phone1') }}" id="phone1" aria-describedby="phone1Help" placeholder="Enter phone1">
                                @error('phone1')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone2">phone2</label>
                                <input name="phone2" type="text" class="form-control" value="{{ old('phone2') }}" id="phone2" aria-describedby="phone2Help" placeholder="Enter phone2">
                                @error('phone2')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="mail">mail</label>
                                <input name="mail" type="text" class="form-control" value="{{ old('mail')}}" id="mail" aria-describedby="mailHelp" placeholder="Enter mail">
                                @error('mail')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="website">website</label>
                                <input name="website" type="text" class="form-control" value="{{ old('website')}}" id="website" aria-describedby="websiteHelp" placeholder="Enter website">
                                @error('website')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="whatsapp">whatsapp</label>
                                <input name="whatsapp" type="text" class="form-control" value="{{ old('whatsapp')}}" id="whatsapp" aria-describedby="whatsappHelp" placeholder="Enter whatsaapp">
                                @error('whatsapp')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="facebook">facebook</label>
                                <input name="facebook" type="text" class="form-control" value="{{ old('facebook')}}" id="facebook" aria-describedby="facebookHelp" placeholder="Enter facebook">
                                @error('facebook')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-primary"> Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
