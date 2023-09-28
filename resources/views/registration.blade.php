{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Post</label>
                <input type="text" name="post" class="form-control" placeholder="Enter Name">
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input">
                    <label for="">Choose Image</label>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('message'))
    <script>
        toastr.options = {
            "progressBar" : true,
            "closeButton" : true,
        }
        toastr.success("{{ Session::get('message') }}", 'Success!', {timeout: 12000});
    </script>
    @endif
</body>
</html> --}}