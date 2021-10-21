@extends('layouts.app')
@section('sideBar')
    @include('partials.sideBar')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Edit Supplier</div>

                    <div class="card-body">

                        <form action="{{route('suppliers.update',['supplier'=> $supplier->id])}}" method="post">
                            @method('patch')
                            @csrf


                            <div class="form-group">
                                <label for="Code">Code</label>
                                <input name="Code" type="text" class="form-control" id="Code"
                                       aria-describedby="CodeHelp" placeholder="Auto Increment" value="{{ $supplier->id }}" disabled>
                                @error('Code')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input name="Name" type="text" class="form-control" id="Name"
                                       aria-describedby="NameHelp" placeholder="Enter Name" value="{{ $supplier->name }}">
                                @error('Name')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Address">Address</label>
                                <input name="Address" type="text" class="form-control" id="Address"
                                       aria-describedby="AddressHelp" placeholder="Enter Address" value="{{ $supplier->address }}">
                                @error('Address')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="Business">Business</label>
                                <input name="Business" type="text" class="form-control" id="Business"
                                       aria-describedby="BusinessHelp" placeholder="Enter Business" value="{{ $supplier->business }}">
                                @error('Business')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Phone1">Phone1</label>
                                <input name="Phone1" type="text" class="form-control" id="Phone1"
                                       aria-describedby="Phone1Help" placeholder="Enter Phone1" value="{{ $supplier->phone1 }}">
                                @error('Phone1')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Phone2">Phone2</label>
                                <input name="Phone2" type="text" class="form-control" id="Phone2"
                                       aria-describedby="Phone2Help" placeholder="Enter Phone2" value="{{ $supplier->phone2 }}">
                                @error('phone2')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Mail">Mail</label>
                                <input name="Mail" type="text" class="form-control" id="Mail"
                                       aria-describedby="MailHelp" placeholder="Enter Mail" value="{{ $supplier->mail }}">
                                @error('Mail')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Website">Website</label>
                                <input name="Website" type="text" class="form-control" id="Website"
                                       aria-describedby="WebsiteHelp" placeholder="Enter Website" value="{{ $supplier->website }}">
                                @error('Website')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Whatsapp">Whatsapp</label>
                                <input name="Whatsapp" type="text" class="form-control" id="Whatsapp"
                                       aria-describedby="WhatsappHelp" placeholder="Enter Whatsapp" value="{{ $supplier->whatsapp }}">
                                @error('Whatsapp')
                                <small  class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Facebook">Facebook</label>
                                <input name="Facebook" type="text" class="form-control" id="Facebook"
                                       aria-describedby="FacebookHelp" placeholder="Enter Facebook" value="{{ $supplier->facebook }}">
                                @error('Facebook')
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
