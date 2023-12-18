<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Demo 1</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main>
        <nav class="flex justify-end items-center gap-4 pr-4 py-4 shadow-xl sticky top-0 bg-white z-10">
            <a href="{{ route('login') }}" class="font-semibold hover:opacity-50">
                Login
            </a>
            <a href="{{ route('register') }}" class="font-semibold hover:opacity-50">
                Register
            </a>
        </nav>
        <div class="px-8 py-4">
            <p class="text-2xl text-center underline">Home Page</p>
            <p class="text-sm text-justify w-[50%] m-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Veniam
                excepturi
                deleniti, quos ut placeat maiores
                harum non perferendis eum ducimus laudantium at, praesentium eligendi aliquam doloremque repellendus
                labore
                architecto nisi?</p>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-4 mt-4">

            @for ($i = 0; $i < 10; $i++)
                <img src="https://source.unsplash.com/random/800x800/?img={{ $i + 1 }}"
                    class="cover h-[800px] rounded opacity-100 hover:opacity-50 cursor-pointer transition-opacity duration-150 delay-75" />
            @endfor

        </div>
    </main>
</body>

</html>
