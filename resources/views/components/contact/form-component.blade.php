
@if(session()->has('success'))
    <span class="text-green-600 ring-green-600 bg-green-200">{{ session('success') }}</span>
@endif

@if(session()->has('error'))
    <span class="text-red-600 ring-red-600 bg-red-200">{{ session('error') }}</span>
@endif


<form action="{{route('save_submission')}}" class="my-3 mx-3" method="POST">
    @csrf
    <div class="grid lg:grid-cols-2 md:grids-cols-1 sm:grids-cols-1 grid-flow-row gap-3 my-6">
        <div>
            <x-input-label for="inputField" class="text-3xl" :value="'Enter your Full Name'"></x-input-label>
            <x-text-input class="w-full" name="fullname" placeholder="Enter your Full name"></x-text-input>
        </div>
        <div>
            <x-input-label for="inputField" class="text-3xl" :value="'Enter your Email Address'"></x-input-label>
            <x-text-input class="w-full" name="email" type="email" required="true" placeholder="Enter your Email Address"></x-text-input>
        </div>
    </div>

    <div class="grid lg:grid-cols-1 md:grids-cols-1 sm:grids-cols-1 grid-flow-row gap-3 my-6">
        <div>
            <x-input-label for="message" class="text-3xl" :value="'Enter your Message'"></x-input-label>
            <x-text-area class="w-full" name="body" placeholder="Enter your Message"></x-text-area>
        </div>
    </div>

    <div>
        <div class="grid grid-flow-row grid-cols-2 items-start my-6 gap-0">
            <h3 class="text-xl flex justify-start m-1">Answer this: </h3>
            <div class="grid grid-flow-row grid-cols-3">
                <x-text-input class="w-full" name="math_one" type="text" required="true" value="{{rand(1,10)}}" disabled="true"></x-text-input>
                <span class="text-3xl m-auto"> + </span>
                <x-text-input class="w-full" name="math_two" type="text" required="true" value="{{rand(1,10)}}" disabled="true"></x-text-input>
            </div>
        </div>


        <div class="grid grid-flow-row grid-cols-1 justify-start my-6">
            <x-text-input class="w-full" name="placeholder" name="solution" placeholder="Enter your Solution" required></x-text-input>
        </div>
    </div>


    <button type="submit" class="mt-4 p-2 bg-sky-500 hover:bg-sky-900 transition duration-300 rounded-lg text-white float-right">Submit</button>
</form>