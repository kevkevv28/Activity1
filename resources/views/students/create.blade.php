
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
</head>

<body>
    <div class="container mt-4">
        <h1>Add New Student</h1>
        
        <form action="{{ route('students.store') }}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required> 
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" required min="1"> 
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a> 
        </form>
    </div>
</body>
</html>