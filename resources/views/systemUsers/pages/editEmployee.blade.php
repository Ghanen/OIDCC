<script>
    function previewFile(){
        var preview = document.querySelector('img'); //selects the query named img
        var file    = document.querySelector('input[type=file]').files[0]; //sames as here
        var reader  = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file); //reads the data as a URL
        } else {
            preview.src = "";
        }
    }

    previewFile();  //calls the function named previewFile()
</script>
@extends('systemUsers.users_layouts.userNav')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="bgAddEmployee">
                        <div class="panel-heading">
                            <h3 class="panel-title" id="emptitle" align="center">Edit Employee</h3>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_method" value="PATCH">
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
                                        <span class="input-group-addon"><i class="fa fa-envelope-square"></i></span>
                                        <input type="email" name="email" class="form-control" placeholder="example@example.com" value="{{ $employee->email }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{ $employee->first_name }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $employee->last_name }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                        <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $employee->address }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                                        <input type="number" name="contact" class="form-control" placeholder="Contact No." value="{{ $employee->contact }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                        <input type="text" name="company_name" class="form-control" value="{{ Sentinel::getUser()->company_name }}" placeholder="Company Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                                        <input type="text" name="position" class="form-control" placeholder="Position" value="{{ $employee->position }}" required>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                        <input type="text" name="country" class="form-control" placeholder="country" value="{{ $employee->country }}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                        <input type="number" name="idcard" class="form-control" placeholder="IdCardNo." value="{{ $employee->idcard }}" required>
                                    </div>
                                </div>

                                <div class="form-group" >
                                    <div class="input-group" style="text-align:center;">
                                        <img  src="" height="182" alt="Image preview...">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-image"></i></span>
                                        <input class="form-control" name="image" type="file" accept="image/" onchange="previewFile()">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Save" class="btn btn-primary pull-right">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
