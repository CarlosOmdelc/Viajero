@extends('layouts.layout')

@section('content')
       <section id="form"><!--form-->
            <div class="container" style="text-align:center;">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form"><!--login form-->
                            <h2>Login to your account</h2>
                            <form action="#">
                                <img role="img" style="width:130px; height:130px;" src="" alt="Carlos Martín del Campo">
                                <h4>Carlos Martín del Campo</h4>
                            </form>
                        </div><!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">OR</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="signup-form"><!--sign up form-->
                            <h2>Create a New Account</h2>
                            <form action="#">
                                <input type="text" placeholder="Name"/>
                                <input type="email" placeholder="Email Address"/>
                                <input type="password" placeholder="Password"/>
                                <button type="submit" class="btn btn-default">Signup</button>
                            </form>
                        </div><!--/sign up form-->
                    </div>
                </div>
            </div>
        </section><!--/form-->
@endsection
