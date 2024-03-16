@extends('main.index')
@section('content')
    <div class="section__content section__content--p30">
        <div class="container-fluid m-auto"> 
            <h1 class="text-center mb-5">add Member</h1>
            <div class="col-lg-7 m-auto">
                <form action="/member" method="POST">
                   @csrf
                    @method('POST')
                    <div class="card">
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter your  name" class="form-control @error('name') is_invalid @enderror" autofocus   value="{{old('name')}}">
                            </div>
                            @error('name') {{$message}} @enderror
                            <div class="form-group">
                                <label for="membership_id" class=" form-control-label">Membership Type</label>
                                    <select name="membership_id" id="select" class="form-control" >
                                        <option value="">Select </option>
                                        @foreach ($memberships as $item)
                                            <option value="{{$item->id}}">{{$item->name_member}}</option>
                                        @endforeach
                                    </select>   
                            </div>
                            @error('membership_id') {{$message}} @enderror
                            <div class="form-group">
                                <label for="Email" class=" form-control-label">Email</label>
                                <input type="text"  name="email"id="email" placeholder="Enter Email name" class="form-control @error('email') is_invalid @enderror"  value="{{old('email')}}">
                            </div>
                            @error('email') {{$message}} @enderror
                            <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="phone" class=" form-control-label">Phone Number</label>
                                        <input type="text" name="phone_number" id="phone" placeholder="Enter your Phone" class="form-control @error('phone_number') is_invalid @enderror" value="{{old('phone_number')}}" >
                                    </div>
                                </div>
                                @error('phone_number') {{$message}} @enderror
                                <div class="col-8">
                                    <div class="form-group">
                                        <label for="address" class=" form-control-label">Address</label>
                                        <input type="text" name="address" id="addres" placeholder="Address" class="form-control @error('address') is_invalid @enderror" value="{{old('address')}}">
                                    </div>
                                </div>
                                @error('address') {{$message}} @enderror
                            </div>
                            <div class="form-group">
                                <label for="date" class=" form-control-label">Date of Birth</label>
                                <input type="date" id="date_of_birth" name="date_of_birth" placeholder="Date of Birth" class="form-control @error('date') is_invalid @enderror" value="{{old('date_of_birth')}}">
                                @error('date_of_birth') {{$message}} @enderror
                            </div>
                            <div class="form-group">
                                <label for="gender"> Gender</label>
                                 <div class="col col-md-9">
                                    <div class="form-check">
                                        <input type="radio" name="gender" id="gender1" value="male" class="form-check-input @error('gender') is_invalid @enderror" value="{{old('gender')}}"> Male
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" id="gender2" value="female" class="form-check-input @error('gender') is_invalid @enderror" value="{{old('gender')}}"> female
                                    </div>
                                </div>
                                @error('gender') {{$message}} @enderror
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