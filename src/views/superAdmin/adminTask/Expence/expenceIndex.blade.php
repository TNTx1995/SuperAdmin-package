@extends('SuperAdmin::superAdmin.Template.template')


@section('content')
    <div class="jumbotron">
        <h3>Expence</h3>
    </div>
    <br>

    <form action="{{route('expence.store')}}" method="post">
        @csrf
        <div class="jumbotron">
            <table class="table table-striped">
                <tr>
                    <td>Sector</td>
                    <td><input type="text" class="form-control" name="sector"></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="text" class="form-control" name="amount"></td>
                </tr>
                <tr>
                    <td>date</td>
                    <td><input type="date" class="form-control" name="date"></td>
                </tr>
                <tr>
                    <td>Month</td>
                    <td>
                        <select name="month" class="form-control">
                            <option>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>Ouctobar</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td><input type="text" class="form-control" name="year"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-success" ></td>
                </tr>
            </table>
    
        </div>
    </form>

    <br>
    <div class="jumbotron">
        <table class="table">
            <tr>
                <td>#</td>
                <td>Sector</td>
                <td>Amount</td>
                <td>Date</td>
                <td>Month</td>
                <td>Year</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>

            @foreach($expence as $exp)
                <tr>
                    <td>{{$exp->id}}</td>
                    <td>{{$exp->sector}}</td>
                    <td>{{$exp->amount}}</td>
                    <td>{{$exp->date}}</td>
                    <td>{{$exp->month}}</td>
                    <td>{{$exp->year}}</td>
                    <td><a href="{{route('expence.edit',$exp->id)}}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{route('expence.delete',$exp->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>

    </div>



@endsection