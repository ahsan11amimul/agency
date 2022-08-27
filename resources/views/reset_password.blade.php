<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Reset Password</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">
                            <a href="/">Back To Home</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/reset_password')}}" method="post">
                            @csrf
                            <div class="from-group mb-2">
                              <label for="pass" class="label">Password</label>
                              <input id="pass" type="password" class="form-control" name="password">  
                              @error('password')
                            
                              <p class="text-danger">{{$message}}</p>
                            @enderror
                            </div>
                            <input type="hidden" name="email" value="{{session('email')??''}}">
                            <div class="from-group mb-2">
                              <label for="pass" class="label">Confirm Password</label>
                                <input id="pass" type="password" class="form-control" name="password_confirmation">
                            </div>
                            {{-- <div class="from-group mb-2">
                                <label for="pass" class="label">Repeat Password</label>
                                <input id="pass" type="password" class="from-control" name="password_confirmation">
                            </div> --}}
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>