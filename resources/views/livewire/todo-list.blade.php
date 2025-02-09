<div class="flex flex-row border-b border-gray-200">
    @if (session()->has('message'))
    <div class="mt-4 text-green-600">
        {{ session('message') }}
    </div>
    @endif
    <div class="flex flex-col w-full md:w-1/2 border-r border-gray-300">
        <div class="p-6 lg:p-8 bg-white  flex flex-row border-b border-gray-300 justify-between  ">
            <x-nav-link class="flex flex-row gap-2 ">
                <svg width="25" height="25" viewBox="0 0 29 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.8511 26.2698L22.4285 25.4499V22.6013C22.4285 22.5211 22.3965 22.4442 22.3397 22.3875C22.2829 22.3308 22.2059 22.299 22.1255 22.299C22.0452 22.299 21.9681 22.3308 21.9113 22.3875C21.8545 22.4442 21.8226 22.5211 21.8226 22.6013V25.6246C21.8226 25.6777 21.8366 25.7298 21.8631 25.7758C21.8897 25.8218 21.928 25.8599 21.974 25.8865L23.5482 26.7935C23.5825 26.8135 23.6205 26.8266 23.66 26.8319C23.6994 26.8372 23.7395 26.8346 23.778 26.8243C23.8164 26.814 23.8524 26.7962 23.8839 26.7719C23.9154 26.7476 23.9418 26.7173 23.9614 26.6828C24.0016 26.6134 24.0126 26.531 23.9919 26.4535C23.9713 26.3761 23.9206 26.31 23.8511 26.2698ZM22.1255 19.578C18.7791 19.578 16.0664 22.2851 16.0664 25.6246C16.0664 28.9642 18.7791 31.6713 22.1255 31.6713C25.4701 31.6676 28.181 28.9624 28.1846 25.6246C28.1846 22.2851 25.4719 19.578 22.1255 19.578ZM22.1255 31.0666C21.4094 31.0666 20.7003 30.9259 20.0387 30.6524C19.3771 30.3789 18.7759 29.978 18.2695 29.4727C17.7631 28.9674 17.3615 28.3674 17.0874 27.7072C16.8134 27.0469 16.6723 26.3393 16.6723 25.6246C16.6723 24.91 16.8134 24.2023 17.0874 23.5421C17.3615 22.8818 17.7631 22.2819 18.2695 21.7766C18.7759 21.2712 19.3771 20.8704 20.0387 20.5969C20.7003 20.3234 21.4094 20.1827 22.1255 20.1827C23.5713 20.1843 24.9574 20.7581 25.9797 21.7784C27.0021 22.7986 27.5771 24.1818 27.5787 25.6246C27.5787 27.0679 27.0042 28.4521 25.9815 29.4727C24.9588 30.4933 23.5718 31.0666 22.1255 31.0666Z"
                        fill="#888888" stroke="#A1A3AB" />
                    <path
                        d="M15.8909 2.39129H13.5073V1.59419C13.506 1.17178 13.3382 0.767019 13.0404 0.468322C12.7427 0.169626 12.3392 0.00126159 11.9182 0H5.56182C5.14075 0.00126159 4.73729 0.169626 4.43955 0.468322C4.14181 0.767019 3.97398 1.17178 3.97273 1.59419V2.39129H1.58909C1.16802 2.39255 0.764563 2.56092 0.466823 2.85961C0.169083 3.15831 0.00125755 3.56307 0 3.98549V20.7245C0.00125755 21.1469 0.169083 21.5517 0.466823 21.8504C0.764563 22.1491 1.16802 22.3175 1.58909 22.3187H8.74V20.7245H1.58909V3.98549H3.97273V6.37678H13.5073V3.98549H15.8909V12.7536H17.48V3.98549C17.4787 3.56307 17.3109 3.15831 17.0132 2.85961C16.7154 2.56092 16.312 2.39255 15.8909 2.39129ZM11.9182 4.78258H5.56182V1.59419H11.9182V4.78258Z"
                        fill="#A1A3AB" />
                </svg>
                <h1 class="text-indigo-500">To-Do</h1>
            </x-nav-link>
            <x-button-link wire:click="openTodoModal" class="flex flex-row gap-2">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="10" y="2" width="4" height="20" fill="#6366F1" />
                    <rect x="2" y="10" width="20" height="4" fill="#6366F1" />
                </svg>

                <h1>Add Task</h1>
            </x-button-link>
        </div>
        <div class="ml-9 my-4">
            <h1>10 Nov • <span class="text-gray-500">today</span></h1>
        </div>
        <div class="flex flex-col gap-6 lg:gap-8   ml-9 mr-2">
            <div class="bg-white mx-5 rounded-xl border-b-[0.25px] border-r-[0.1px] border-red-600 shadow-md overflow-hidden md:flex md:max-w-2xl hover:shadow-lg transition-shadow duration-300">
                <!-- Gambar -->
                <div class="relative md:w-48">
                    <img class="object-cover w-full h-48 md:h-full" src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" alt="Task Image">

                </div>

                <!-- Konten -->
                <div class="p-5 flex flex-col justify-between flex-1 relative">
                    <!-- Header -->
                    <div class="flex items-center gap-3 mb-2">
                        <h5 class="text-xl font-semibold text-gray-900">Noteworthy technology acquisitions 2021</h5>
                    </div>

                    <!-- Deskripsi -->
                    <p class="text-gray-700 text-sm mb-4">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>

                    <!-- Info Tugas -->
                    <div class="flex justify-between text-sm text-gray-600">
                        <p>Priority: <br><span class="font-semibold text-blue-600">Low</span></p>
                        <p>Status: <br><span class="font-semibold text-red-600">Not Started</span></p>
                        <p>Create On: <br><span class="font-semibold text-gray-800">Feb 9, 2025</span></p>
                    </div>
                    <button class="absolute top-2 right-2 bg-white text-gray-500 p-2 rounded-full shadow-sm hover:bg-gray-100">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                </div>
            </div>

            <div class="bg-white mx-5 rounded-xl border-b-[0.25px] border-r-[0.1px] border-red-600 shadow-md overflow-hidden md:flex md:max-w-2xl hover:shadow-lg transition-shadow duration-300">
                <!-- Gambar -->
                <div class="relative md:w-48">
                    <img class="object-cover w-full h-48 md:h-full" src="https://opportunitydesk.org/wp-content/uploads/2022/03/Google-Developer-Student-Clubs-Solution-Challenge-2022.jpg" alt="Task Image">

                </div>

                <!-- Konten -->
                <div class="p-5 flex flex-col justify-between flex-1 relative">
                    <!-- Header -->
                    <div class="flex items-center gap-3 mb-2">
                        <h5 class="text-xl font-semibold text-gray-900">Noteworthy technology acquisitions 2021</h5>
                    </div>

                    <!-- Deskripsi -->
                    <p class="text-gray-700 text-sm mb-4">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>

                    <!-- Info Tugas -->
                    <div class="flex justify-between text-sm text-gray-600">
                        <p>Priority: <br><span class="font-semibold text-blue-600">Low</span></p>
                        <p>Status: <br><span class="font-semibold text-red-600">Not Started</span></p>
                        <p>Create On: <br><span class="font-semibold text-gray-800">Feb 9, 2025</span></p>
                    </div>
                    <button class="absolute top-2 right-2 bg-white text-gray-500 p-2 rounded-full shadow-sm hover:bg-gray-100">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                </div>
            </div>
            <div class="bg-white mx-5 rounded-xl border-b-[0.25px] border-r-[0.1px] border-red-600 shadow-md overflow-hidden md:flex md:max-w-2xl hover:shadow-lg transition-shadow duration-300">
                <!-- Gambar -->
                <div class="relative md:w-48">
                    <img class="object-cover w-full h-48 md:h-full" src="https://www.meetup.com/blog/wp-content/uploads/2022/01/pexels-matheus-bertelli-3856033-945x630.jpg" alt="Task Image">

                </div>

                <!-- Konten -->
                <div class="p-5 flex flex-col justify-between flex-1 relative">
                    <!-- Header -->
                    <div class="flex items-center gap-3 mb-2">
                        <h5 class="text-xl font-semibold text-gray-900">Noteworthy technology acquisitions 2021</h5>
                    </div>

                    <!-- Deskripsi -->
                    <p class="text-gray-700 text-sm mb-4">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>

                    <!-- Info Tugas -->
                    <div class="flex justify-between text-sm text-gray-600">
                        <p>Priority: <br><span class="font-semibold text-blue-600">Low</span></p>
                        <p>Status: <br><span class="font-semibold text-red-600">Not Started</span></p>
                        <p>Create On: <br><span class="font-semibold text-gray-800">Feb 9, 2025</span></p>
                    </div>
                    <button class="absolute top-2 right-2 bg-white text-gray-500 p-2 rounded-full shadow-sm hover:bg-gray-100">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                </div>
            </div>
            <div class="bg-white mx-5 rounded-xl border-b-[0.25px] border-r-[0.1px] border-red-600 shadow-md overflow-hidden md:flex md:max-w-2xl hover:shadow-lg transition-shadow duration-300">
                <!-- Gambar -->
                <div class="relative md:w-48">
                    <img class="object-cover w-full h-48 md:h-full" src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" alt="Task Image">

                </div>

                <!-- Konten -->
                <div class="p-5 flex flex-col justify-between flex-1 relative">
                    <!-- Header -->
                    <div class="flex items-center gap-3 mb-2">
                        <h5 class="text-xl font-semibold text-gray-900">Noteworthy technology acquisitions 2021</h5>
                    </div>

                    <!-- Deskripsi -->
                    <p class="text-gray-700 text-sm mb-4">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>

                    <!-- Info Tugas -->
                    <div class="flex justify-between text-sm text-gray-600">
                        <p>Priority: <br><span class="font-semibold text-blue-600">Low</span></p>
                        <p>Status: <br><span class="font-semibold text-red-600">Not Started</span></p>
                        <p>Create On: <br><span class="font-semibold text-gray-800">Feb 9, 2025</span></p>
                    </div>
                    <button class="absolute top-2 right-2 bg-white text-gray-500 p-2 rounded-full shadow-sm hover:bg-gray-100">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <hr />
    <div class="flex flex-col w-full md:w-1/2">
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex flex-row justify-between ">
            <x-nav-link class="flex flex-row gap-2 ">
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.64 20.0776L13.2572 17.669L11.96 18.9802L15.64 22.7L23 15.2604L21.7028 13.9492L15.64 20.0776Z"
                        fill="#A1A3AB" />
                    <path
                        d="M15.8909 2.39129H13.5073V1.59419C13.506 1.17178 13.3382 0.767019 13.0404 0.468322C12.7427 0.169626 12.3392 0.00126159 11.9182 0H5.56182C5.14075 0.00126159 4.73729 0.169626 4.43955 0.468322C4.14181 0.767019 3.97398 1.17178 3.97273 1.59419V2.39129H1.58909C1.16802 2.39255 0.764563 2.56092 0.466823 2.85961C0.169083 3.15831 0.00125755 3.56307 0 3.98549V20.7245C0.00125755 21.1469 0.169083 21.5517 0.466823 21.8504C0.764563 22.1491 1.16802 22.3175 1.58909 22.3187H8.74V20.7245H1.58909V3.98549H3.97273V6.37678H13.5073V3.98549H15.8909V12.7536H17.48V3.98549C17.4787 3.56307 17.3109 3.15831 17.0132 2.85961C16.7154 2.56092 16.312 2.39255 15.8909 2.39129ZM11.9182 4.78258H5.56182V1.59419H11.9182V4.78258Z"
                        fill="#A1A3AB" />
                </svg>


                <h1 class="text-indigo-500">Task Status</h1>
            </x-nav-link>
            <div></div>
        </div>
        @livewire('task-status')
        <div class="flex- flex-column gap-6 lg:gap-8  ml-9">
            <x-nav-link class="flex flex-row gap-2 my-12">
                <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.64 20.0776L13.2572 17.669L11.96 18.9802L15.64 22.7L23 15.2604L21.7028 13.9492L15.64 20.0776Z"
                        fill="#A1A3AB" />
                    <path
                        d="M15.8909 2.39129H13.5073V1.59419C13.506 1.17178 13.3382 0.767019 13.0404 0.468322C12.7427 0.169626 12.3392 0.00126159 11.9182 0H5.56182C5.14075 0.00126159 4.73729 0.169626 4.43955 0.468322C4.14181 0.767019 3.97398 1.17178 3.97273 1.59419V2.39129H1.58909C1.16802 2.39255 0.764563 2.56092 0.466823 2.85961C0.169083 3.15831 0.00125755 3.56307 0 3.98549V20.7245C0.00125755 21.1469 0.169083 21.5517 0.466823 21.8504C0.764563 22.1491 1.16802 22.3175 1.58909 22.3187H8.74V20.7245H1.58909V3.98549H3.97273V6.37678H13.5073V3.98549H15.8909V12.7536H17.48V3.98549C17.4787 3.56307 17.3109 3.15831 17.0132 2.85961C16.7154 2.56092 16.312 2.39255 15.8909 2.39129ZM11.9182 4.78258H5.56182V1.59419H11.9182V4.78258Z"
                        fill="#A1A3AB" />
                </svg>


                <h1 class="text-indigo-500">Task Complete</h1>
            </x-nav-link>
            <div class="bg-white mx-5 rounded-xl border-b-[0.25px] border-r-[0.1px] border-red-600 shadow-md overflow-hidden md:flex md:max-w-2xl hover:shadow-lg transition-shadow duration-300">
                <!-- Gambar -->
                <div class="relative md:w-48">
                    <img class="object-cover w-full h-48 md:h-full" src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" alt="Task Image">
                </div>

                <!-- Konten -->
                <div class="p-5 flex flex-col justify-between flex-1 relative">
                    <!-- Header -->
                    <div class="flex items-center gap-3 mb-2">
                        <h5 class="text-xl font-semibold text-gray-900">Noteworthy technology acquisitions 2021</h5>
                    </div>

                    <!-- Deskripsi -->
                    <p class="text-gray-700 text-sm mb-4">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>

                    <!-- Info Tugas -->
                    <div class="flex justify-between text-sm text-gray-600">
                        <p>Priority: <br><span class="font-semibold text-blue-600">Low</span></p>
                        <p>Status: <br><span class="font-semibold text-red-600">Not Started</span></p>
                        <p>Create On: <br><span class="font-semibold text-gray-800">Feb 9, 2025</span></p>
                    </div>
                    <button class="absolute top-2 right-2 bg-white text-gray-500 p-2 rounded-full shadow-sm hover:bg-gray-100">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                </div>
            </div>
            <div class="bg-white mx-5  rounded-xl border-b-[0.25px] border-r-[0.1px] border-red-600 shadow-md overflow-hidden md:flex md:max-w-2xl hover:shadow-lg transition-shadow duration-300 my-4">
                <!-- Gambar -->
                <div class="relative md:w-48">
                    <img class="object-cover w-full h-48 md:h-full" src="https://plus.unsplash.com/premium_photo-1664474619075-644dd191935f?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8fDA%3D" alt="Task Image">

                </div>

                <!-- Konten -->
                <div class="p-5 flex flex-col justify-between flex-1 relative">
                    <!-- Header -->
                    <div class="flex items-center gap-3 mb-2">
                        <h5 class="text-xl font-semibold text-gray-900">Noteworthy technology acquisitions 2021</h5>
                    </div>

                    <!-- Deskripsi -->
                    <p class="text-gray-700 text-sm mb-4">
                        Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                    </p>

                    <!-- Info Tugas -->
                    <div class="flex justify-between text-sm text-gray-600">
                        <p>Priority: <br><span class="font-semibold text-blue-600">Low</span></p>
                        <p>Status: <br><span class="font-semibold text-red-600">Not Started</span></p>
                        <p>Create On: <br><span class="font-semibold text-gray-800">Feb 9, 2025</span></p>
                    </div>
                    <button class="absolute top-2 right-2 bg-white text-gray-500 p-2 rounded-full shadow-sm hover:bg-gray-100">
                        <i class="fas fa-ellipsis-h"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>