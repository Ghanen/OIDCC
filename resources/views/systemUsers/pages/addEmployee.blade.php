@extends('systemUsers.users_layouts.userNav')

@section('content')

    <div class="jumbotron">
        <div class="container">
            {{--<div class="col-md-6 col-md-offset-3">--}}
                {{--<div class="panel panel-primary">--}}
                    <div class="bgAddEmployee">
                        <div class="panel-heading">
                            <h3 class="panel-title" id="emptitle" align="center">Add Employee</h3>
                        </div>
                    </div>

                    <br>
                    <div class="panel-body">
                        <form action="{{ route('employee.store') }}" method="POST">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                <li>{{  $error }}</li>
									@endforeach
                                    </ul>
                                </div>
                            @endif
                            {{--@if (count($success) > 0)--}}
                                {{--<div class="alert alert-danger">--}}
                                    {{--<ul>--}}
                                        {{--<li>{{ $success }}</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--@endif--}}
                            {{ csrf_field() }}

                            <div class="col-md-6">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                                        <input type="number" name="contact" class="form-control" placeholder="Contact No." required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                        <input type="text" name="company_name" class="form-control" placeholder="Company Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                                        <input type="text" name="position" class="form-control" placeholder="Position" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                        <input type="text" name="country" class="form-control" placeholder="country" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                        <input type="number" name="idcard" class="form-control" placeholder="IdCardNo." required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="save" class="btn btn-primary pull-right">
                                </div>
                            </div>
                        </form>
                    </div>
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection