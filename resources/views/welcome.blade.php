<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased">
    <div class="min-h-full">
        <header class="bg-gray-200">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-row py-4 items-center justify-between">
                    <div class="flex items-center sm:block">
                        <div class="shrink-0">
                            <input class="w-full border rounded-xl px-4 py-1" placeholder="Search" />
                        </div>
                    </div>
                    <h1 class="text-5xl font-semibold">the news <br> dispatch.</h1>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6 space-x-10">
                            <a href="#">Sign In</a>
                            <button class="px-6 py-2 round bg-gray-900 text-white rounded-xl" id="subscribe"
                                onclick="my_modal_1.showModal()">Subscribe</button>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white"
                        aria-current="page">Dashboard</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Team</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Calendar</a>
                    <a href="#"
                        class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="shrink-0">
                            <img class="size-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base/5 font-medium text-white">Tom Cook</div>
                            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                        </div>
                        <button type="button"
                            class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                            Profile</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div> -->
        </header>

        <nav class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 pt-10 sm:px-6 lg:px-8 ">
                <ul class="flex flex-row space-x-10 items-center justify-center">
                    <li class="uppercase border-b-4 border-indigo-900 rounded">Latest</li>
                    <li class="uppercase">World</li>
                    <li class="uppercase">Sport</li>
                    <li class="uppercase">Culture</li>
                    <li class="uppercase">Wellness</li>
                    <li class="uppercase">Economy</li>
                </ul>
            </div>
        </nav>
    </div>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <section id="content">
                <div class="w-full">
                    <h3 class="text-2xl font-semibold my-8">List Articel</h3>
                    <div class="sm:grid sm:grid-cols-3 gap-4 w-full">
                        @foreach ($articles as $data)
                        <div class="">
                            <div class="flex flex-row items-end space-x-8 mb-2">
                                <p class="text-5xl font-semibold">{{$loop->iteration}}</p>
                                <div class="w-full bg-gray-200 h-[160px] rounded-xl"></div>
                            </div>
                            @foreach ($data->articleTags as $tag)
                            <span class="px-2 rounded py-2 bg-gray-200 ">{{$tag->tag->name}}</span>
                            @endforeach
                            <p class="uppercase mt-3 font-bold text-[12px]">{{$data->articleCategory->category->name}}</p>
                            <h3 class="text-xl font-bold mt-3">{{$data->title}}
                            </h3>
                            <div class="mt-2">
                                <p class="text-md uppercase">{{$data->author->name}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <hr class="my-5 h-[4px] border-t-0 bg-gray-600 " />
                <div class="sm:grid sm:grid-cols-3 gap-2 w-full">
                    <div class="gird grid-cols-2 border-r-[1px] border-gray-300">
                        <div class="px-3">
                            <div class="flex flex-row space-x-4">
                                <img src="./assets/icons/headphone.svg" alt="" class="w-6">
                                <p class="my-3 text-xl font-semibold">Podcast episodes</p>
                            </div>
                            <h3 class=" font-bold text-3xl">Daily Minute: Reports <br> from around the world
                            </h3>
                            <div class="flex flex-row space-x-4 py-4 items-center justify-between">
                                <button class="p-3 bg-black  rounded-full">
                                    <div class="w-0 h-0  rounded
                                                                      border-t-[5px] border-t-transparent
                                                                      border-l-[8px] border-l-white
                                                                      border-b-[5px] border-b-transparent">
                                    </div>
                                </button>
                                <progress class="py-1 w-full" value="30" max="100"></progress>
                                <p>22:18</p>
                            </div>
                            <div class="flex flex-row items-center w-full space-x-4 py-2">
                                <div class="p-4 bg-gray-200  rounded-full"></div>
                                <p class="text-sm font-semibold">Nicola Schultz</p>
                            </div>
                            <hr class="my-5 h-[1px] border-t-0 bg-gray-300 " />
                            <div class="w-full">
                                <div class=" rounded-xl bg-gray-200 h-[200px]"></div>
                                <p class="uppercase mt-3 font-bold text-[12px]">News</p>
                                <h3 class="text-2xl font-bold mt-3">Lost cat found the way back to her home</h3>

                                <div class="flex flex-row justify-between items-center mt-2">
                                    <div class="text-md">Tom Jerry</div>
                                    <div class="text-sm mt-2">13 June 2023</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-1 text-center items-center justify-center">
                        <div class=" rounded-xl bg-gray-200 h-[270px]"></div>
                        <p class="uppercase mt-3 font-bold text-[12px]">Culture</p>
                        <h3 class="text-2xl font-bold my-3 text-center">Best Summer reads <br> for your
                            vacation</h3>

                        <p class="text-center text-md font-normal">Summer is the prefect time to indulge in some
                            leisury reading, wheater it's lying on the beach or lounging in the park. So if you're
                            looking for a way tu unwind this summer, why not pick up few books and escape in to some
                            captivating stories?</p>
                        <div class="text-center items-center justify-center mt-3">
                            <p class="text-md">Rag Booker</p>
                            <p class="text-sm mt-2">13 June 2023</p>
                        </div>

                    </div>
                    <div class="border-l-[1px] border-gray-300">
                        <div class="px-3">
                            <div class="w-full">
                                <div class="rounded-xl bg-gray-200 h-[200px]"></div>
                                <p class="uppercase mt-3 font-bold text-[12px]">Sports</p>
                                <h3 class="text-2xl font-bold mt-3">Footballer lead Aargentina to <br> victory
                                </h3>

                                <div class="flex flex-row justify-between items-center mt-2">
                                    <div class="text-md">Freed Baller</div>
                                    <div class="text-sm mt-2">13 June 2023</div>
                                </div>
                            </div>
                            <hr class="my-5 h-[1px] border-t-0 bg-gray-300 " />
                            <div class="w-full">
                                <div class="rounded-xl bg-gray-200 h-[200px]"></div>
                                <p class="uppercase mt-3">News</p>
                                <h3 class="text-2xl font-semibold mt-6">Major cyberattack happend </h3>

                                <div class="flex flex-row justify-between items-center mt-2">
                                    <div class="text-md">Peter Computer</div>
                                    <div class="text-sm mt-2">14 June 2023</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-5 h-[4px] border-t-0 bg-gray-600 " />
                <div class="w-full">
                    <div class="flex flex-row items-center justify-between  my-8">
                        <h3 class="text-2xl font-semibold">Food and Drink</h3>
                        <h3 class="font-normal">See all</h3>
                    </div>
                    <div class="sm:grid sm:grid-cols-4 gap-4 w-full">
                        <div class="flex flex-col">
                            <div class="w-full bg-gray-200 h-[160px] rounded-xl"></div>
                            <p class="uppercase mt-3 font-bold text-[12px]">Sports</p>
                            <div class="flex flex-col flex-grow">
                                <h3 class="text-xl font-bold mt-3 leading-relaxed">On a hunt for the best kombucha
                                </h3>
                                <div class="flex flex-row justify-between items-center mt-2">
                                    <div class="text-sm uppercase">Jane Drinks</div>
                                    <div class="text-sm">13 June 2023</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <div class="w-full bg-gray-200 h-[160px] rounded-xl"></div>
                            <p class="uppercase mt-3 font-bold text-[12px]">Food</p>
                            <h3 class="text-xl font-bold mt-3 leading-relaxed">Shoreditch's best bodegas</h3>
                            <div class="flex flex-row justify-between items-center mt-2">
                                <p class="uppercase text-sm">Tony Hungry</p>
                                <p class="text-sm">13 June 2023</p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <div class="w-full bg-gray-200 h-[160px] rounded-xl"></div>
                            <p class="uppercase mt-3 font-bold text-[12px]">Food</p>
                            <h3 class="text-xl font-bold mt-3 leading-relaxed">Cooking on budget
                            </h3>

                            <div class="flex flex-row justify-between items-center mt-2">
                                <p class="text-sm uppercase">Tony Hungry</p>
                                <p class="text-sm ">13 June 2023</p>
                            </div>

                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <div class="w-full bg-gray-200 h-[160px] rounded-xl"></div>
                            <p class="uppercase mt-3 font-bold text-[12px]">Drinks</p>
                            <h3 class="text-xl font-bold mt-3 leading-relaxed">Best alcohol-free cocktails
                            </h3>
                            <div class="flex flex-row justify-between items-center mt-2">
                                <p class="text-sm uppercase">Jane Drinks</p>
                                <p class="text-sm">13 June 2023</p>
                            </div>
                        </div>
                    </div>

                </div>
                <hr class="my-5 h-[4px] border-t-0 bg-gray-600 " />
                <div class="w-full">
                    <h3 class="text-2xl font-semibold my-8">Editor's picks</h3>
                    <div class="sm:grid sm:grid-cols-3 gap-4 w-full">
                        <div class="">
                            <div class="flex flex-row items-end space-x-8">
                                <p class="text-5xl font-semibold">1</p>
                                <div class="w-full bg-gray-200 h-[160px] rounded-xl"></div>
                            </div>
                            <p class="uppercase mt-3 font-bold text-[12px]">Sports</p>
                            <h3 class="text-xl font-bold mt-3">People are happy and healthy everywhere
                            </h3>
                            <div class="mt-2">
                                <p class="text-md uppercase">Tom Jerry</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex flex-row items-end space-x-8">
                                <p class="text-5xl font-semibold">2</p>
                                <div class="w-full bg-gray-200 h-[160px] rounded-xl"></div>
                            </div>
                            <p class="uppercase mt-3 font-bold text-[12px]">Sports</p>
                            <h3 class="text-xl font-bold mt-3">Hockey Championship is about to start
                            </h3>
                            <div class="mt-2">
                                <p class="text-md uppercase">Mike Sporty</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="flex flex-row items-end space-x-8">
                                <p class="text-5xl font-semibold">3</p>
                                <div class="w-full bg-gray-200 h-[160px] rounded-xl"></div>
                            </div>
                            <p class="uppercase mt-3 font-bold text-[12px]">Culture</p>
                            <h3 class="text-xl font-bold mt-3">Finally a good theatre!</h3>
                            <div class="mt-2">
                                <p class="text-md uppercase">Mama Drama</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </div>

        <dialog id="my_modal_1" class="modal z-10 p-4 rounded">
            <div class="modal-box w-[380px]">
                <h3 class="text-lg font-bold py-3">Subscribe</h3>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 rounded-xl"
                    placeholder="Your email address">
                <div class="modal-action mt-3">
                    <form method="dialog" class="flex flex-row items-center justify-between">
                        <button class="bg-gray-300 px-4 py-2 rounded-xl">Close</button>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-xl" id="send">Send</button>
                    </form>
                </div>
            </div>
        </dialog>
    </main>

    <footer class="mx-auto bg-gray-200">
        <div class="w-full flex flex-col items-center pb-6">
            <div class="py-10">
                <h1 class="text-3xl font-bold">the news <br> dispatch.</h1>
                <div class="flex flex-row text-center space-x-4 mt-3">
                    <div class="w-4 rounded-full p-4 border border-black"></div>
                    <div class="w-4 rounded-full p-4 border border-black"></div>
                    <div class="w-4 rounded-full p-4 border border-black"></div>
                </div>
            </div>
            <ul class="flex flex-row space-x-10 my-3">
                <li>
                    <a href="#" class="font-semibold">About</a>
                </li>
                <li>
                    <a href="#" class="font-semibold">Authors</a>
                </li>
                <li>
                    <a href="#" class="font-semibold">Archive</a>
                </li>
                <li><a href="#" class="font-semibold">Terms and Conditions</a>
                </li>
                <li>
                    <a href="#" class="font-semibold">Cookie Policy</a>
                </li>
            </ul>
            <p class="font-semibold">&copy; Uizard News</p>
        </div>
    </footer>


    <script>
        document.getElementById('send').addEventListener("click", function() {
            const email = document.getElementById("email").value
            if (email == '' || email == null || email == undefined) {
                alert("Email tidak boleh kosong")
            } else {
                alert("Thank you for subscribing to our news website.")
            }
        })
    </script>
</body>

</html>