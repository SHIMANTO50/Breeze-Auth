{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #f6f8fa;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        max-width: 700px;
        width: 100%;
        background: #ffffff;
        border-radius: 0.5rem;
        box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.1),
            0px 5px 12px -2px rgba(0, 0, 0, 0.1),
            0px 18px 36px -6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin: 10px;
    }

    .container .title {
        padding: 25px;
        background: #f6f8fa;
    }

    .container .title p {
        font-size: 25px;
        font-weight: 500;
        position: relative;
    }

    .container .title p::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 30px;
        height: 3px;
        background: linear-gradient(to right, #F37A65, #D64141);
    }

    .user_details {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 20px;
        padding: 25px;
    }

    .user_details .input_box {
        width: calc(100% / 2 - 20px);
        margin: 0 0 12px 0;
    }

    .input_box label {
        font-weight: 500;
        margin-bottom: 5px;
        display: block;
    }

    .input_box label::after {
        content: " *";
        color: red;
    }

    .input_box input {
        width: 100%;
        height: 45px;
        border: none;
        outline: none;
        border-radius: 5px;
        font-size: 16px;
        padding-left: 15px;
        box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.1);
        background-color: #f6f8fa;
        font-family: 'Poppins', sans-serif;
        transition: all 120ms ease-out 0s;
    }


    .input_box input:focus,
    .input_box input:valid {
        box-shadow: 0px 0px 0px 2px #AC8ECE;
    }

    form .gender {
        padding: 0px 25px;
    }

    .gender .gender_title {
        font-size: 20px;
        font-weight: 500;
    }

    .gender .category {
        width: 80%;
        display: flex;
        justify-content: space-between;
        margin: 5px 0;
    }

    .gender .category label {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .gender .category label .dot {
        height: 18px;
        width: 18px;
        background: #d9d9d9;
        border-radius: 50%;
        margin-right: 10px;
        border: 4px solid transparent;
        transition: all 0.3s ease;
    }

    #radio_1:checked~.category label .one,
    #radio_2:checked~.category label .two,
    #radio_3:checked~.category label .three {
        border-color: #d9d9d9;
        background: #D64141;
    }

    .gender input {
        display: none;
    }

    .reg_btn {
        padding: 25px;
        margin: 15px 0;
    }

    .reg_btn input {
        height: 45px;
        width: 100%;
        border: none;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        background: linear-gradient(to right, #F37A65, #D64141);
        border-radius: 5px;
        color: #ffffff;
        letter-spacing: 1px;
        text-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2);
    }

    .reg_btn input:hover {
        background: linear-gradient(to right, #D64141, #F37A65);
    }

    @media screen and (max-width: 584px) {

        .user_details {
            max-height: 340px;
            overflow-y: scroll;
        }

        .user_details::-webkit-scrollbar {
            width: 0;
        }

        .user_details .input_box {
            width: 100%;
        }

        .gender .category {
            width: 100%;
        }

    }


    @media screen and (max-width: 419px) {
        .gender .category {
            flex-direction: column;
        }
    }
</style>

<body>
    <div class="container">
        <div class="title">
            <p>Registration</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="user_details">
                <div class="input_box">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>

                <div class="input_box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="input_box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input_box">
                    <label for="confirmPass">Confirm Password</label>
                    <input type="password" id="confirmPass" name="password_confirmation" placeholder="Confirm your password" required>
                </div>
            </div>

            <div class="reg_btn">
                <input type="submit" value="Register">
            </div>
            <div class="mt-3" style="margin-left: 30px; margin-bottom:25px;">
                <p>Already Registered? <a href="{{ route('login') }}">Login Here</a></p>
            </div>
        </form>
    </div>
</body>

</html>
