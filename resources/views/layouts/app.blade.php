

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'He Lives') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <style>
            .loader-3 {
                position: relative;
    margin-left: 10px;
	height: 32px;
	width: 32px;
}
.loader-3 span {
	display: block;
	position: absolute;
	top: 0; left: 0;
	bottom: 0; right: 0;
	margin: auto;
	height: 32px;
	width: 32px;
}
.loader-3 span::before {
	content: "";
	display: block;
	position: absolute;
	top: 0; left: 0;
	bottom: 0; right: 0;
	margin: auto;
	height: 32px;
	width: 32px;
	border: 3px solid #FFF;
	border-bottom: 3px solid transparent;
	border-radius: 50%;
	-webkit-animation: loader-3-1 1.5s cubic-bezier(0.770, 0.000, 0.175, 1.000) infinite;
	        animation: loader-3-1 1.5s cubic-bezier(0.770, 0.000, 0.175, 1.000) infinite;
}
@-webkit-keyframes loader-3-1 {
	0%   { -webkit-transform: rotate(0deg); }
	40%  { -webkit-transform: rotate(180deg); }
	60%  { -webkit-transform: rotate(180deg); }
	100% { -webkit-transform: rotate(360deg); }
}
@keyframes loader-3-1 {
	0%   { transform: rotate(0deg); }
	40%  { transform: rotate(180deg); }
	60%  { transform: rotate(180deg); }
	100% { transform: rotate(360deg); }
}
.loader-3 span::after {
	content: "";
	position: absolute;
	top: 0; left: 0;
	bottom: 0; right: 0;
	margin: auto;
	width: 6px;
	height: 6px;
	background: #FFF;
	border-radius: 50%;
	-webkit-animation: loader-3-2 1.5s cubic-bezier(0.770, 0.000, 0.175, 1.000) infinite;
	        animation: loader-3-2 1.5s cubic-bezier(0.770, 0.000, 0.175, 1.000) infinite;
}
@-webkit-keyframes loader-3-2 {
	0%   { -webkit-transform: translate3d(0, -32px, 0) scale(0, 2); opacity: 0; }
	50%  { -webkit-transform: translate3d(0, 0, 0) scale(1.25, 1.25); opacity: 1; }
	100% { -webkit-transform: translate3d(0, 8px, 0) scale(0, 0); opacity: 0; }
}
@keyframes loader-3-2 {
	0%   { transform: translate3d(0, -32px, 0) scale(0, 2); opacity: 0; }
	50%  { transform: translate3d(0, 0, 0) scale(1.25, 1.25); opacity: 1; }
	100% { transform: translate3d(0, 8px, 0) scale(0, 0); opacity: 0; }
}

</style>
    </head>
    <body class="py-5 relative">
        <x-banner />


        <div class="flex mt-[4.7rem] md:mt-0">
            @livewire('navigation-menu')
            <!-- Page Content -->
            <main class="content">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        @livewireScripts

    </body>
</html>
