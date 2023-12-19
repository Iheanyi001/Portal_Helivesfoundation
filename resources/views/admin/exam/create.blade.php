<x-app-layout>
    <x-top-nav>
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Application</a></li>
        <li class="breadcrumb-item"><a href="{{ route('exam.list') }}"> Examination</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </x-top-nav>

    <div class="intro-x relative mr-3 sm:mr-6">
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12">
                <!-- BEGIN: Input -->
                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Create Examination
                        </h2>

                    </div>
                    @livewire('ExamForm', ['exam'=>$exam])
                </div>
                <!-- END: Input -->
                <!-- BEGIN: Input Sizing -->
                <!-- END: Select Options -->
            </div>

                <!-- END: Checkbox & Switch -->
                <!-- BEGIN: Radio Button -->

                <!-- END: Radio Button -->
            </div>
        </div>
</div>
</x-app-layout>
