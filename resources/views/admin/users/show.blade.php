@extends('admin.templates.master')
@section('content')
    @include('admin.templates.layouts.navbar')
    @include('admin.templates.layouts.users-sidebar')
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-8">
                    <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ !empty($users->name) ? $users->name : 'Unset' }}'s Profile</h4>
                    </div>
                    <div class="card-body">
                        <form>
                        <div class="row">
                            <div class="col-md-5">
                            <div class="form-group">
                                <label class="bmd-label-floating">Company</label>
                                <input type="text" class="form-control" value="{{ !empty($users->company) ? $users->company : 'No Company' }}" disabled disabled>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label class="bmd-label-floating">Registered From</label>
                                <input type="text" class="form-control" value="{{ !empty($users->provider) ? $users->provider : 'Xscript Regist' }}" disabled>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Email address</label>
                                <input type="email" class="form-control" value="{{ !empty($users->email) ? $users->email : 'Unset' }}" disabled>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Full Name</label>
                                <input type="text" class="form-control" value="{{ !empty($users->name) ? $users->name : 'Unset' }}" disabled>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Adress</label>
                                <input type="text" class="form-control" value="{{ !empty($users->address) ? $users->address : 'Unset' }}" disabled>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">City</label>
                                <input type="text" class="form-control" value="{{ !empty($users->city) ? $users->city : 'Unset' }}" disabled>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Country</label>
                                <input type="text" class="form-control" value="{{ !empty($users->country) ? $users->country : 'Unset' }}" disabled>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label class="bmd-label-floating">Postal Code</label>
                                <input type="text" class="form-control" value="{{ !empty($users->postal) ? $users->postal : 'Unset' }}" disabled>
                            </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                        <img class="img" src="{{ $users->avatar }}" />
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">{{ !empty($users->job) ? $users->job : null }}</h6>
                        <h4 class="card-title">{{ !empty($users->name) ? $users->name : 'Unset' }}</h4>
                        <p class="card-description">
                        {{ !empty($users->about) ? $users->about : 'No Description.' }}
                        </p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection