<div>
    @section('title')
        Admin Authentication
    @endsection
      <div class="container-login">
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card shadow-sm my-5">
              <div class="card-body p-0">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="login-form">
                      <div class="title">
                        <h1 class="h4 text-gray-900 mb-4"> <b>SIGN UP</b></h1>
                      </div>
                      <form class="user" wire:submit.prevent="login">
                        @if (session()->has('successLogin'))
                              <script>
                                var url = "{{ route('admin.home') }}";
                                setTimeout(function(){
                                    window.location = url;
                                },3500);
                            </script>
                        @endif
                        @if (session()->has('errLog'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                           {{ session('errLog') }}
                          </div>
                        @endif
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" wire:model.lazy="email" aria-describedby="emailHelp"
                            placeholder="Enter Email Address">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                          <label for="email">Password</label>
                          <input type="password" name="password" wire:model.lazy="password" class="form-control  @error('password') is-invalid @enderror" 
                            placeholder="Enter Your Password">
                          @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                          <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                          </div>
                        </div>
                        <div class="form-group mb-0">
                            @if (session()->has('successLogin'))
                              <button class="btn btn-primary btn-block btn-login" disabled> <span class="spinner-border spinner-border-sm"></span> Redirecting...</button>
                            @else
                              <button class="btn btn-block btn-login">Login</button>
                            @endif
                        </div>
                        <div class="float-right text-small forgot-password"><i>Forgot Password?</i></div>
                        <div class="row mt-4">
                          <div class="col-5"><hr></div>
                          <div class="col-2 text-center">OR</div>
                          <div class="col-5"><hr></div>
                        </div>
                        <div class="text-center google-login"> 
                          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 48 48">
                            <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                          </svg>
                          <a href="login/google">Sign in with Google</a>
                        </div>
                        <div class="text-center pt-2">
                          <span class="text-small">Lần đầu bạn đến với gian hàng của chúng tôi? </span><a href="/register">Đăng ký</a> 
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<style>
  *{
    font-family: cursive;
    box-sizing: border-box;
  }
  .container-login .btn-login {
    color: white;
    background-color: #04aa6d;
    border-color: #04aa6d;
  }
  .container-login .btn-login:hover{
    background-color: #059862;
  }
  .container-login .btn-login::before{
    background-color: #04aa6d;
  }
  .container-login .btn-login:disabled{
    background-color: #059862;
  }
  .container-login .text-small{
    font-size: small;
  }
  .container-login .forgot-password:hover{
    color: #04aa6d;
    cursor: pointer;
    text-decoration: underline;
  }
  .hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
  }
  .container-login .google-login a{
    color: #757575 !important;
  }
  .container-login .google-login a:hover{
    color: #04aa6d !important;
    cursor: pointer;
    text-decoration: none;
  }
</style>
