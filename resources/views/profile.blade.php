@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Profile Update') }}</div>
            <div class="card-body">
                <form action="{{route('update_profile')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <div class="col">
                                <input type="text" class="form-control"value="{{Auth::user()->name}}" placeholder="name" name="name" aria-label="First name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="email" value="{{Auth::user()->email}}" name="email" aria-label="Last name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="location" name="location" value="{{Auth::user()->location}}" aria-label="First name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="phone number" name="phone number" value="{{Auth::user()->phone_number}}" aria-label="Last name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="farming type" name="farming_type" value="{{Auth::user()->farming_type}}" aria-label="farming type">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                {{-- <label for="exampleFormControlFile1">Example file input</label> --}}
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            
                          </div>
                    </div>

                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- location,phone  number , farming , profile phonto --}}