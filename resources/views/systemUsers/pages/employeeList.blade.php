@extends('systemUsers.users_layouts.userNav')

@section('content')
<div class="jumbotron">
    <div class="container-fluid">
        <h3>Employee List :</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>S.No.</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Company</th>
                <th>Position</th>
                <th>Country</th>
                <th>Image</th>
                <th>ID card No.</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <a href="{{ route('employee.create')}}" class="btn btn-info pull-right">Add new Employee</a><br>
                <tr>
                @foreach ($employees as $no => $employee)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->contact }}</td>
                    <td>{{ $employee->company_name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->country }}</td>
                    <td><img src="{{ asset('images/emp/')}}/{{ $employee->image }}"></td>
                    <td>{{ $employee->idcard }}</td>
                    <td>
                        <form class="" method="post" action="{{ route('employee.destroy',$employee->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="delete" />
                            <a href="{{ route('employee.edit', $employee->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?');" name="name" value="delete"><i class="fa fa-delete"></i></input>
                        </form>
                    </td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
