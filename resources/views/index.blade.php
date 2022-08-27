<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    
    <link rel="apple-touch-icon" href="./app-assets/images/logo-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/logo-icon.png">
</head>
<body>
    <div class="login-wrap">
        <div class="login-html">
            @if (session('error'))
                <p style="color:white;">{{session('error')}}</p>
                
            @endif
            @if (session('success'))
                <p style="color:white;">{{session('success')}}</p>
                
            @endif
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="{{url('signin')}}" method="post">
                    @csrf
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" name="username" value="{{old('username')}}">
                    </div>
                   @if ($errors->has('username'))
                       <p style="color:white;">{{$errors->first('username')}}</p>
                   @endif
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" name="password" class="input" data-type="password">
                    </div>
                    @error('password')
                        <p style="color:white;">{{ $message }}</p>
                        
                    @enderror
                    {{-- <div class="group">
                        <input id="check" type="checkbox" name="remember_me" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div> --}}
                   
                    <div class="group">
                        <input type="submit" class="button" value="Sign In">
                    </div>
                   </form>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="{{url('/forget_password')}}">Forgot Password?</a>
                    </div>
                </div>
                <div class="sign-up-htm">
                    <form action="{{route('signup')}}" method="post">
                        @csrf
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" name="username" value="{{old('username')}}" class="input">
                    </div>
                     @error('username')
                        <p style="color:white;">{{ $message }}</p>
                        
                    @enderror
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" name="password"  data-type="password">
                    </div>
                     @error('password')
                        <p style="color:white;">{{ $message }}</p>
                        
                    @enderror
                    <div class="group">
                        <label for="pass" class="label">Repeat Password</label>
                        <input id="pass" type="password" class="input" name="password_confirmation" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" type="email" name="email" value="{{old('email')}}" class="input">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="group">
                        <input type="submit" class="button" value="Sign Up">
                    </div>
                </form>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Already Member?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>