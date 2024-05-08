<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


    @vite('resources/css/app.css')
</head>


<body class=" mt-9">


    <div class="container  mx-auto -mt-16 sm:-mt-28   md:text-2xl  lg:text-2xl">

        <img class="w-full h-full mt-[10%] sm:mt-0 md:w-[600px] md:mx-auto lg:w-[600px] lg:-mt-20 lg:mx-auto"
            src="{{ asset('assets/img/email-verification.png') }}" alt="logo">
        <h1 class="font-poppins text-3xl px-5 text-center -mt-16 sm:-mt-28 mb-2 font-bold md:text-4xl">Confirm your
            email
        </h1>
        <p class="font-base font-poppins  text-center px-1  mx-auto -mt-13 text-xl md:text-2xl  md:text-center ">We have
            sent verification email to</p>
        <p class=" text-gray-800 font-poppins font-bold text-center text-xl my-1">{{ Auth::user()->email }}</p>
        <p
            class="font-base font-poppins  text-justify px-4 mx-auto -mt-13 text-xl md:text-2xl sm:text-center lg:w-[600px] ">
            please check your email and complete the verification process to proceed to the next step</p>

        <div class="ml-[30%] sm:ml-[40%] lg:ml-[45%]  mt-5">
            <button type="button"
                class="text-white   focus:ring-4 focus:outline-none focus:ring-pink-200 bg-[#44B564]  font-medium rounded-lg text-base px-5 py-2.5 text-center mr-2 mb-2">Resend
                Email</button>

        </div>



    </div>


</body>

</html>