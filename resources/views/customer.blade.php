<!-- learning2 -->
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <form method="POST" action="customer">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="phone">Phone No</label>
                <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <input type="submit" class="btn btn-default" value="SUBMIT">
        </form>
    </div>
    <div class="container">
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer -> name }}</td>
                <td>{{ $customer -> email }}</td>
                <td>{{ $customer -> phone_no }}</td>
                <td><a href="{{ url('customer/'.$customer->id) }}" class="btn btn-warning" >Update</a></td>
                <td><a href="{{ url('customer/'.$customer->id) }}" class="btn btn-danger" >Delete</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>