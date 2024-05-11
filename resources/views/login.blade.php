<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("/assets/css/tailwind.css") }}" />
    <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}" />
</head>

<body class="font-montserrat">
<section class="container py-20 m-auto bg-bg">
    <div class=" max-w-4xl  p-16 m-auto rounded-2xl">
        <div class="flex flex-col gap-10">
            <h1 class="text-3xl text-center text-white font-bold">Sign In</h1>
            <form action="{{ route("api.login")}}" method="POST">
                @csrf
                <div class="flex flex-col gap-5">
                    <div class="flex w-full p-3 px-4 items-center rounded-xl bg-dark  gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                             fill="none">
                            <path
                                d="M8 0C9.06087 0 10.0783 0.421427 10.8284 1.17157C11.5786 1.92172 12 2.93913 12 4C12 5.06087 11.5786 6.07828 10.8284 6.82843C10.0783 7.57857 9.06087 8 8 8C6.93913 8 5.92172 7.57857 5.17157 6.82843C4.42143 6.07828 4 5.06087 4 4C4 2.93913 4.42143 1.92172 5.17157 1.17157C5.92172 0.421427 6.93913 0 8 0ZM8 10C12.42 10 16 11.79 16 14V16H0V14C0 11.79 3.58 10 8 10Z"
                                fill="white" fill-opacity="0.4" />
                        </svg>
                        <input type="email" name="email" id="email" placeholder="Email"
                               class="border-0 text-white flex-1 focus:outline-none bg-transparent outline-none">
                    </div>
                    <div class="flex w-full py-3 px-4 items-center rounded-xl bg-dark  gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18" viewBox="0 0 14 18"
                             fill="none">
                            <path
                                d="M7 13.7143C7.46413 13.7143 7.90925 13.5337 8.23744 13.2122C8.56563 12.8907 8.75 12.4547 8.75 12C8.75 11.5453 8.56563 11.1093 8.23744 10.7878C7.90925 10.4663 7.46413 10.2857 7 10.2857C6.53587 10.2857 6.09075 10.4663 5.76256 10.7878C5.43437 11.1093 5.25 11.5453 5.25 12C5.25 12.4547 5.43437 12.8907 5.76256 13.2122C6.09075 13.5337 6.53587 13.7143 7 13.7143ZM12.25 6C12.7141 6 13.1592 6.18061 13.4874 6.5021C13.8156 6.82359 14 7.25963 14 7.71429V16.2857C14 16.7404 13.8156 17.1764 13.4874 17.4979C13.1592 17.8194 12.7141 18 12.25 18H1.75C1.28587 18 0.840752 17.8194 0.512563 17.4979C0.184374 17.1764 0 16.7404 0 16.2857V7.71429C0 7.25963 0.184374 6.82359 0.512563 6.5021C0.840752 6.18061 1.28587 6 1.75 6H2.625V4.28571C2.625 3.14907 3.08594 2.05898 3.90641 1.25526C4.72688 0.451529 5.83968 0 7 0C7.57453 0 8.14344 0.110853 8.67424 0.326231C9.20504 0.541608 9.68734 0.857291 10.0936 1.25526C10.4998 1.65322 10.8221 2.12568 11.042 2.64564C11.2618 3.16561 11.375 3.72291 11.375 4.28571V6H12.25ZM7 1.71429C6.30381 1.71429 5.63613 1.9852 5.14384 2.46744C4.65156 2.94968 4.375 3.60373 4.375 4.28571V6H9.625V4.28571C9.625 3.60373 9.34844 2.94968 8.85616 2.46744C8.36387 1.9852 7.69619 1.71429 7 1.71429Z"
                                fill="white" fill-opacity="0.4" />
                        </svg>
                        <input type="password" name="password" id="password" placeholder="Password"
                               class="border-0 text-white flex-1 focus:outline-none bg-transparent outline-none">
                    </div>
                    <div>
                        <span id="error" class="text-red hidden"></span>
                    </div>
                    <div class="text-xl text-white">
                        Don’t have an account? <a href="{{ route('register') }}" class="text-pink">Register Now!</a>
                    </div>
                    <div class="flex gap-3">
                        <button class="bg-pink py-3 px-5 text-white hover:opacity-50 transition-all rounded-lg">Login</button>
                        <button
                            class="bg-pink flex gap-2 py-3 px-5 text-white hover:opacity-50 transition-all rounded-lg"><svg
                                xmlns="http://www.w3.org/2000/svg" width="27" height="22" viewBox="0 0 27 22"
                                fill="none">
                                <path
                                    d="M22.8454 2.24523C21.1354 1.43169 19.2839 0.841221 17.3553 0.50006C17.3383 0.499508 17.3215 0.502747 17.306 0.509548C17.2904 0.51635 17.2765 0.526548 17.2653 0.539425C17.0338 0.972437 16.7638 1.53666 16.5838 1.96968C14.5382 1.65476 12.4578 1.65476 10.4122 1.96968C10.2322 1.52354 9.9622 0.972437 9.71791 0.539425C9.70505 0.513182 9.66648 0.50006 9.6279 0.50006C7.69928 0.841221 5.86066 1.43169 4.13775 2.24523C4.1249 2.24523 4.11204 2.25835 4.09918 2.27147C0.601942 7.61195 -0.36237 12.8081 0.113357 17.9517C0.113357 17.978 0.126214 18.0042 0.151929 18.0174C2.46628 19.7494 4.69063 20.7991 6.88926 21.4946C6.92783 21.5077 6.9664 21.4946 6.97926 21.4683C7.49356 20.7466 7.95643 19.9856 8.35501 19.1852C8.38073 19.1327 8.35501 19.0802 8.30358 19.0671C7.5707 18.7784 6.8764 18.4372 6.19495 18.0436C6.14352 18.0174 6.14352 17.9386 6.18209 17.8993C6.32353 17.7943 6.46496 17.6762 6.60639 17.5712C6.63211 17.545 6.67068 17.545 6.69639 17.5581C11.1194 19.6182 15.8895 19.6182 20.2611 17.5581C20.2868 17.545 20.3253 17.545 20.3511 17.5712C20.4925 17.6893 20.6339 17.7943 20.7754 17.9124C20.8268 17.9517 20.8268 18.0305 20.7625 18.0567C20.0939 18.4635 19.3867 18.7915 18.6539 19.0802C18.6024 19.0933 18.5896 19.1589 18.6024 19.1983C19.0139 19.9987 19.4767 20.7598 19.9782 21.4814C20.0168 21.4946 20.0553 21.5077 20.0939 21.4946C22.3054 20.7991 24.5297 19.7494 26.8441 18.0174C26.8698 18.0042 26.8827 17.978 26.8827 17.9517C27.4484 12.0077 25.9441 6.8509 22.8968 2.27147C22.884 2.25835 22.8711 2.24523 22.8454 2.24523ZM9.0236 14.8157C7.69928 14.8157 6.59353 13.5691 6.59353 12.0339C6.59353 10.4987 7.67357 9.25214 9.0236 9.25214C10.3865 9.25214 11.4665 10.5118 11.4537 12.0339C11.4537 13.5691 10.3736 14.8157 9.0236 14.8157ZM17.9853 14.8157C16.661 14.8157 15.5552 13.5691 15.5552 12.0339C15.5552 10.4987 16.6352 9.25214 17.9853 9.25214C19.3482 9.25214 20.4282 10.5118 20.4153 12.0339C20.4153 13.5691 19.3482 14.8157 17.9853 14.8157Z"
                                    fill="white" />
                            </svg>
                            Login with Discord</button>
                    </div>
                </div>
            </form>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            
            <script>
                const form = document.querySelector("form");
                const errorBlock = document.querySelector("#error");
                form.addEventListener("submit", async (e) => {
                    e.preventDefault();

                    $.ajax({
                        url: form.action,
                        type: form.method,
                        data: $(form).serialize(),
                        success: function (response) {
                            if(response.redirect){
                                window.location.href = response.redirect;
                            }
                            else{
                                errorBlock.classList.remove("hidden");
                                errorBlock.innerHTML = response.message;
                            }
                        },
                        error: function (xhr, status, error) {
                            errorBlock.classList.remove("hidden");
                            console.log(xhr.responseJSON)
                            errorBlock.innerHTML = xhr.responseJSON.message;
                        }
                    });
                });
            </script>
        </div>
    </div>
</section>

</body>

</html>
