<!-- learning2 -->
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form method="POST" action="{{ url('customer-update') }}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $customers['id'] }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $customers['name'] }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ $customers['email'] }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone No</label>
            <input type="text" name="phone" class="form-control" id="phone" value="{{ $customers['phone_no'] }}">
        </div>
        <input type="submit" class="btn btn-default" value="SUBMIT">
    </form>
</div>
</body>
</html>

