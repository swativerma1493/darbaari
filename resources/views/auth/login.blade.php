@extends('layouts.log')

@section('content')
<body class="login-back">
<section class="login">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h2>Admin <span>Login Area</span></h2>
					 <div class="positioned">
					 <img src="images/logo-white.png" />						 
						 <form action="{{ route('login') }}" method='post'>
						 	 @csrf
						 <table>
						   <tr>
							 <th>Username</th>
							 <td><input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </td>
						   </tr>
						   <tr>
							 <th>Password</th>
							 <td><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							 	 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						   </tr>
						   <tr>
							<td colspan="2"><input type="submit" value='Login' />
							</td>						
						   </tr>					   
						 </table>
							<h4>Forgot username or password? <a href="{{ route('password.request') }}" target="_blank" >Click here</a> to recover</h4>
						 </form>	 
					 </div>
				</div>
			</div>
		</div>
		</section>
    
	<p class="copyright">All rights reserved &copy; <strong>UPMAVEN TECHNOLOGIES Pvt. Ltd.</strong></p>
	

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@endsection
