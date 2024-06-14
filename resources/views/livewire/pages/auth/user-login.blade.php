<div>
    <div>
        <div class=" bg-no-repeat bg-cover" style="background-image:url({{ asset('images/background.png') }}) ">
            <div class="fixed  w-2/6W h-screen p-5">
                <img src="{{ asset('images/XDezo-Technologies-Best-IT-Company-in-Nepal-Logo-Re-Imagine-the-Future.png') }}"
                    alt="" class="w-24">
                <div class="pt-16">
                    <a href="{{ route('cert-check') }}"
                        class="text-[#EF602F] text-2xl hover::after inline-block w-2/6W max-lg:text-lg hover:underline max-md:text-sm">Validate
                        Your Certificate
                        <i class="fa fa-smile-o" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="w-4/6 ms-[33.333%] h-screen flex justify-center items-center"
                style="background: linear-gradient(180deg, #EF602F 0%, #A43610 100%);">
                <div class="w-2/4 lg:w-1/2 xl:w-1/3">
                    <h1 class=" text-white text-center py-3 text-5xl">LOG IN</h1>
                    <form action="" class="text-white">
                        <div class="my-5">
                            <label for="">Certificate ID</label>
                            <br>
                            <input type="text" name="" id=""
                                class="w-full my-2 p-1 px-2  text-base text-black outline-none focus:outline-none"
                                placeholder="Enter your Email">
                        </div>
                        <div class="my-5">
                            <label for="">DOB</label>
                            <br>
                            <input type="date" name="" id=""
                                class="w-full my-2 p-1 px-2 text-base text-black outline-none focus:outline-none"
                                placeholder="Enter your Date of Birth">
                        </div>
                        <div class="text-center">

                            <button class=" px-5 py-2 w-2/4  bg-white text-[#EF602F] rounded">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
