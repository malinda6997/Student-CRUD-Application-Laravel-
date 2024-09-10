<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h2 class="fw-bold">Create Student</h2>
        <a class="btn btn-primary " href="{{ url('students') }}">Go to home</a>

        <form class="mt-4" method="POST" action="{{ url('students/create') }}">
            @csrf
            <div class="mb-3">
                <label for="inputName" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" id="inputName">
            </div>
            <div class="mb-3">
                <label for="InputEmail" class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" id="InputEmail">
            </div>
            <div class="mb-3">
                <label for="InputMobile" class="form-label">Mobile Number</label>
                <input type="text" name="mobile" class="form-control" id="InputMobile">
            </div>

            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
