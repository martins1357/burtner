<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Roboto, -apple-system, 'Helvetica Neue', 'Segoe UI', Arial, sans-serif;
            background: #3b4465;
        }

        .forms-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .section-title {
            font-size: 32px;
            letter-spacing: 1px;
            color: #fff;
        }

        .forms {
            display: flex;
            align-items: flex-start;
            margin-top: 30px;
        }

        .form-wrapper {
            animation: hideLayer .3s ease-out forwards;
        }

        .form-wrapper.is-active {
            animation: showLayer .3s ease-in forwards;
        }

        @keyframes showLayer {
            50% {
                z-index: 1;
            }

            100% {
                z-index: 1;
            }
        }

        @keyframes hideLayer {
            0% {
                z-index: 1;
            }

            49.999% {
                z-index: 1;
            }
        }

        .switcher {
            position: relative;
            cursor: pointer;
            display: block;
            margin-right: auto;
            margin-left: auto;
            padding: 0;
            text-transform: uppercase;
            font-family: inherit;
            font-size: 16px;
            letter-spacing: .5px;
            color: #999;
            background-color: transparent;
            border: none;
            outline: none;
            transform: translateX(0);
            transition: all .3s ease-out;
        }

        .form-wrapper.is-active .switcher-login {
            color: #fff;
            transform: translateX(90px);
        }

        .form-wrapper.is-active .switcher-signup {
            color: #fff;
            transform: translateX(-90px);
        }

        .underline {
            position: absolute;
            bottom: -5px;
            left: 0;
            overflow: hidden;
            pointer-events: none;
            width: 100%;
            height: 2px;
        }

        .underline::before {
            content: '';
            position: absolute;
            top: 0;
            left: inherit;
            display: block;
            width: inherit;
            height: inherit;
            background-color: currentColor;
            transition: transform .2s ease-out;
        }

        .switcher-login .underline::before {
            transform: translateX(101%);
        }

        .switcher-signup .underline::before {
            transform: translateX(-101%);
        }

        .form-wrapper.is-active .underline::before {
            transform: translateX(0);
        }

        .form {
            overflow: hidden;
            min-width: 720px;
            margin-top: 50px;
            padding: 30px 25px;
            border-radius: 5px;
            transform-origin: top;
        }

        .form-login {
            animation: hideLogin .3s ease-out forwards;
        }

        .form-wrapper.is-active .form-login {
            animation: showLogin .3s ease-in forwards;
        }

        @keyframes showLogin {
            0% {
                background: #d7e7f1;
                transform: translate(40%, 10px);
            }

            50% {
                transform: translate(0, 0);
            }

            100% {
                background-color: #fff;
                transform: translate(35%, -20px);
            }
        }

        @keyframes hideLogin {
            0% {
                background-color: #fff;
                transform: translate(35%, -20px);
            }

            50% {
                transform: translate(0, 0);
            }

            100% {
                background: #d7e7f1;
                transform: translate(40%, 10px);
            }
        }

        .form-signup {
            animation: hideSignup .3s ease-out forwards;
        }

        .form-wrapper.is-active .form-signup {
            animation: showSignup .3s ease-in forwards;
        }

        @keyframes showSignup {
            0% {
                background: #d7e7f1;
                transform: translate(-40%, 10px) scaleY(.8);
            }

            50% {
                transform: translate(0, 0) scaleY(.8);
            }

            100% {
                background-color: #fff;
                transform: translate(-35%, -20px) scaleY(1);
            }
        }

        @keyframes hideSignup {
            0% {
                background-color: #fff;
                transform: translate(-35%, -20px) scaleY(1);
            }

            50% {
                transform: translate(0, 0) scaleY(.8);
            }

            100% {
                background: #d7e7f1;
                transform: translate(-40%, 10px) scaleY(.8);
            }
        }

        .form fieldset {
            position: relative;
            opacity: 0;
            margin: 0;
            padding: 0;
            border: 0;
            transition: all .3s ease-out;
        }

        .form-login fieldset {
            transform: translateX(-50%);
        }

        .form-signup fieldset {
            transform: translateX(50%);
        }

        .form-wrapper.is-active fieldset {
            opacity: 1;
            transform: translateX(0);
            transition: opacity .4s ease-in, transform .35s ease-in;
        }

        .form legend {
            position: absolute;
            overflow: hidden;
            width: 1px;
            height: 1px;
            clip: rect(0 0 0 0);
        }

        .input-block {
            margin-bottom: 20px;
        }

        .input-block label {
            font-size: 14px;
            color: #a1b4b4;
        }

        .input-block input {
            display: block;
            width: 100%;
            margin-top: 8px;
            padding-right: 15px;
            padding-left: 15px;
            font-size: 16px;
            line-height: 40px;
            color: #3b4465;
            background: #eef9fe;
            border: 1px solid #cddbef;
            border-radius: 2px;
        }

        .form [type='submit'] {
            opacity: 0;
            display: block;
            min-width: 120px;
            margin: 30px auto 10px;
            font-size: 18px;
            line-height: 40px;
            border-radius: 25px;
            border: none;
            transition: all .3s ease-out;
        }

        .form-wrapper.is-active .form [type='submit'] {
            opacity: 1;
            transform: translateX(0);
            transition: all .4s ease-in;
        }

        .btn-login {
            color: #fbfdff;
            background: #a7e245;
            transform: translateX(-30%);
        }

        .btn-signup {
            color: #a7e245;
            background: #fbfdff;
            box-shadow: inset 0 0 0 2px #a7e245;
            transform: translateX(30%);
        }

    </style>
</head>

<body>
    <section class="forms-section">
        <h1 class="section-title">SIGNUP PAGE</h1>
        <div class="forms">
            <div class="form-wrapper is-active">
                <button type="button" class="switcher switcher-login">
                    Sign up
                    <span class="underline"></span>
                </button>
                <form class="form form-login" method="POST" action="{{ route('register') }}">
                    @csrf
                    <fieldset>
                        <legend>Please, complete the Registration form</legend>
                        <div class="input-block">
                            <input type="text" name="firstname" class="form-control rounded-left" placeholder="firstname"
                                value="{{ old('firstname') }}">
                            @error('firstname')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="input-block">
                            <input type="text" name="lastname" class="form-control rounded-left" placeholder="lastname"
                                value="{{ old('lastname') }}">
                            @error('lastname')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="input-block">
                            <input type="text" name="username" class="form-control rounded-left" placeholder="Username"
                                value="{{ old('username') }}">
                            @error('username')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="input-block">
                            <input type="email" name="email" class="form-control rounded-left" placeholder="Email"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="input-block">
                            <input type="tel" name="phone" class="form-control rounded-left" placeholder="Phone"
                                value="{{ old('phone') }}">
                            @error('phone')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="input-block">
                            <input type="tel" name="country" class="form-control rounded-left" placeholder="country"
                                value="{{ old('country') }}">
                            @error('country')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="input-block">
                            <input type="text" name="referral" class="form-control rounded-left"
                                placeholder="Referral ID" value="{{ !empty($ref) ? $ref : old('referral') }}">
                            @error('referral')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="input-block">
                            <input type="password" maxlength="6" name="pin" name="password_confirmation"
                                class="form-control rounded-left" placeholder="Transaction Pin (6 digits)"
                                value="{{ old('pin') }}">
                            @error('pin')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="input-block">
                            <input type="password" name="password" class="form-control rounded-left"
                                placeholder="Password">
                            @error('password')
                                <p class=" text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="input-block">
                            <input type="password" name="password_confirmation" class="form-control rounded-left"
                                placeholder="Confirm Password" value="">
                            @error('password')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="input-block">
                            <input type="checkbox" name="terms" class=""> Agree to Our <a
                                href="{{ route('register') }}">Terms and
                                Conditon</a>
                            @error('terms')
                                <p class="text-danger">{{ $message }} </p>
                            @enderror
                        </div>
                    </fieldset>
                    <button type="submit" id="submit" class="slide-btn login-btn">Signup</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <!-- <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
                Sign Up
                <span class="underline"></span>
            </button>
            <form class="form form-signup">
                <fieldset>
                    <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                    <div class="input-block">
                        <label for="signup-email">E-mail</label>
                        <input id="signup-email" type="email" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-password">Password</label>
                        <input id="signup-password" type="password" required>
                    </div>
                    <div class="input-block">
                        <label for="signup-password-confirm">Confirm password</label>
                        <input id="signup-password-confirm" type="password" required>
                    </div>
                </fieldset>
                <button type="submit" class="btn-signup">Continue</button>
            </form>
        </div> -->
        </div>
    </section>
</body>
<script>
    const switchers = [...document.querySelectorAll('.switcher')]

    switchers.forEach(item => {
        item.addEventListener('click', function() {
            switchers.forEach(item => item.parentElement.classList.remove('is-active'))
            this.parentElement.classList.add('is-active')
        })
    })
</script>


</html>
