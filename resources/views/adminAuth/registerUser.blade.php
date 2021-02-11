@extends('adminViewLayout.adminViewApp')
@section('adminContent')
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container" style="height: 900px">
            <div class="login-wrap"  >
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{{asset('images/top-logo.png')}}" alt="IZABBayen" />
                        </a>
                    </div>
                    <div class="login-form">
                        <form id="submenuForm" method="post" enctype="multipart/form-data" action="{{url('admin/add-User')}}">
                            <!-- <form id="submenuForm"> -->
                            @csrf 
                            <div class="row form-group">
                                <div class="col-12 col-md-12 form-group"><label for="status">Role</label>
                                    <select  name="role" id="role" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="author">Author</option>
                                    </select><small class="form-text text-muted">Select the status of publishes</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="au-input au-input--full" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                            </div>
                            {{-- <div class="form-group">
                                <label>Password confirmed</label>
                                <input class="au-input au-input--full" type="password_confirmed" name="password_confirmed" placeholder="Password confirmed">
                            </div> --}}

                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Register</button>
                        
                    </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection