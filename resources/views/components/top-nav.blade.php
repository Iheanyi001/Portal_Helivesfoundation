<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
        <ol class="breadcrumb">
            {{ $slot }}
        </ol>
    </nav>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->
    <div class="intro-x relative mr-3 sm:mr-6">
        <div class="search hidden sm:block">
            <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
            <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
        </div>
        <a class="notification sm:hidden" href="#"> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
        <div class="search-result">
            <div class="search-result__content">
                <div class="search-result__content__title">Pages</div>
                <div class="mb-5">
                    <a href="#" class="flex items-center">
                        <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                        <div class="ml-3">Mail Settings</div>
                    </a>
                    <a href="#" class="flex items-center mt-2">
                        <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                        <div class="ml-3">Users & Permissions</div>
                    </a>
                    <a href="#" class="flex items-center mt-2">
                        <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                        <div class="ml-3">Transactions Report</div>
                    </a>
                </div>
                <div class="search-result__content__title">Users</div>
                <div class="mb-5">
                    <a href="#" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                        </div>
                        <div class="ml-3">Kevin Spacey</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com</div>
                    </a>
                    <a href="#" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                        </div>
                        <div class="ml-3">Johnny Depp</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                    </a>
                    <a href="#" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                        </div>
                        <div class="ml-3">Johnny Depp</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                    </a>
                    <a href="#" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                        </div>
                        <div class="ml-3">Morgan Freeman</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">morganfreeman@left4code.com</div>
                    </a>
                </div>
                <div class="search-result__content__title">Products</div>
                <a href="#" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-9.jpg">
                    </div>
                    <div class="ml-3">Oppo Find X2 Pro</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                </a>
                <a href="#" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-1.jpg">
                    </div>
                    <div class="ml-3">Nikon Z6</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                </a>
                <a href="#" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-2.jpg">
                    </div>
                    <div class="ml-3">Sony Master Series A9G</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                </a>
                <a href="#" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-8.jpg">
                    </div>
                    <div class="ml-3">Dell XPS 13</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Search -->
    <!-- BEGIN: Notifications -->
    <div class="intro-x dropdown mr-auto sm:mr-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
        <div class="notification-content pt-2 dropdown-menu">
            <div class="notification-content__box dropdown-content">
                <div class="notification-content__title">Notifications</div>
                <div class="cursor-pointer relative flex items-center ">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-7.jpg">
                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Morgan Freeman</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-1.jpg">
                        <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">03:20 PM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button id="nav-toggle-btn" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    @else
                        <span class="inline-flex rounded-md">
                            <button id="nav-toggle-btn"  type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                {{ Auth::user()->name }}

                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </span>
            @endif
        </div>
        <div id="nav-drop-bar" class="dropdown-menu w-56">
            <ul class="dropdown-content bg-primary text-white">
                <li class="p-2">
                    <div class="font-medium">{{ Auth::user()->name }}</div>
                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">{{ Auth::user()->roles[0]->name }}</div>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                </li>
                <li>
                    <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                </li>
                <li>
                    <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                </li>
                <li>
                    <a href="#" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a class="dropdown-item hover:bg-white/5" @click.prevent="$root.submit()"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>

                    </form>


                </li>
            </ul>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>
