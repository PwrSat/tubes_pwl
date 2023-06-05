<x-guest-layout>
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                <form method="POST" action="{{ route('login') }}" class="user">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" :value="__('Email')"></label>
                                        <input type="email" id="email" class="form-control form-control-user"
                                            name="email" :value="old('email')" required autofocus
                                            autocomplete="username" id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" :value="__('Password')"></label>
                                        <input type="password" class="form-control form-control-user" name="password"
                                            :messages="$errors->get('password')" id="exampleInputPassword"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-success btn-block ">
                                </form>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href=" {{ route('password.request') }}"> {{ __('Forgot your
                                        password?') }}</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href=" {{ route('register') }}"> {{ __('Create an account!') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



</x-guest-layout>