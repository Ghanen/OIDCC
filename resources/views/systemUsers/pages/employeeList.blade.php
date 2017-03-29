@extends('systemUsers.users_layouts.userNav')

@section('content')
<div class="jumbotron">
    <div class="container">
        <h3>Employee List :</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>Employee ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Company</th>
                <th>Position</th>
                <th>Country</th>
                <th>ID card No.</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <a href="{{ route('employee.create')}}" class="btn btn-info pull-right">Add new Employee</a><br>
                <tr>
                <?php
                foreach ($employees as $employee) { ?>
                <tr>
                    <td><?php echo $employee->id ?></td>
                    <td><?php echo $employee->first_name ?></td>
                    <td><?php echo $employee->last_name?></td>
                    <td><?php echo $employee->address?></td>
                    <td><?php echo $employee->contact?></td>
                    <td><?php echo $employee->company_name?></td>
                    <td><?php echo $employee->position?></td>
                    <td><?php echo $employee->country?></td>
                    <td><?php echo $employee->idcard ?></td>
                    <td>
                        <form class="" method="post" action="{{ route('employee.destroy',$employee->id) }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="delete" />
                            <a href="{{ route('employee.edit', $employee->id)}}" class="btn btn-primary">Edit</a>
                            <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?');" name="name" value="delete"></input>
                        </form>
                    </td>
                    <?php	}
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
