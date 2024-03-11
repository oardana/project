@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid m-auto"> 
            <h1 class="text-center mb-5">Edit Member</h1>
            <div class="col-lg-7 m-auto">
                <form action="/member/{{$member->id}}" method="POST">
                   @csrf
                    @method('PATCH')
                    <div class="card">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter your  name" class="form-control" value="{{$member->name}}">
                            </div>
                            <div class="form-group">
                                <label for="membership_id" class=" form-control-label">Membership Type</label>
                                <select name="membership_id" id="select" name="select" class="form-control">
                                        <option value="{{$member->membership_id}}">{{$member->membership->name_member}}</option>
                                        @foreach ($memberships as $item)
                                            <option value="{{$item->id}}">{{$item->name_member}}</option>
                                        @endforeach
                                    </select>   
                            </div>
                            <div class="form-group">
                                <label for="Email" class=" form-control-label">Email</label>
                                <input type="text"  name="email"id="email" placeholder="Enter Email name" class="form-control" value="{{$member->email}}">
                            </div>
                            <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="phone" class=" form-control-label">Phone Number</label>
                                        <input type="text" name="phone_number" id="phone" placeholder="Enter your Phone" class="form-control" value="{{$member->phone_number}}">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="address" class=" form-control-label">Address</label>
                                        <input type="text" name="address" id="addres" placeholder="Address" class="form-control" value="{{$member->address}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date" class=" form-control-label">Date of Birth</label>
                                <input type="date" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth" class="form-control" value="{{$member->date_of_birth}}">
                            </div>
                            <div class="form-group">
                                <label for="gender"> Gender</label>
                                 <div class="col col-md-9">
                                    
                                    <div class="form-check">
                                        <input type="radio" name="gender" id="gender" value="male" class="form-check-input" {{$member->gender =='male' ? 'checked': ''}}> Male
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" id="gender" value="female" class="form-check-input" {{$member->gender =='female' ? 'checked': ''}}> female
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button  class="btn btn-primary btn-sm" type="submit">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>                                  
@endsection