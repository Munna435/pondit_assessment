<x-app>
    <x-slot:title>
       Login
    </x-slot:title>



<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 my-5">

                <div class="form-wrapper">
                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign in with:</p>
                                <a href="#" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-facebook"></i>
                                </a>

                                <a href="#" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-google"></i>
                                </a>

                                <a href="#" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-twitter"></i>
                                </a>

                                <a href="#" class="btn btn-link btn-floating mx-1">
                                    <i class="bi bi-github"></i>
                                </a>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Email input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="loginName">Email or username</label>
                                <input type="email" id="loginName" class="form-control" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="loginPassword">Password</label>
                                <input type="password" id="loginPassword" class="form-control" />
                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0" style="font-size: 14px">
                                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-end" style="font-size: 14px">
                                    <!-- Simple link -->
                                    <a href="#">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary col-12 mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="#">Register</a></p>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerName" class="form-control" />
                                <label class="form-label" for="registerName">Name</label>
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerUsername" class="form-control" />
                                <label class="form-label" for="registerUsername">Username</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control" />
                                <label class="form-label" for="registerEmail">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control" />
                                <label class="form-label" for="registerPassword">Password</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control" />
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                                       aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->

                </div>

            </div>

        </div>
    </div>




</x-app>
