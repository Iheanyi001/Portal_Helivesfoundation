<div>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        lucide.createIcons();
        toastr.options.closeMethod = 'fadeOut';
        toastr.options.closeDuration = 300;
        toastr.options.closeEasing = 'swing';
        var info = {!! json_encode(session()->has('info')) !!}
        var success = {!! json_encode(session()->has('success')) !!}
        var danger = {!! json_encode(session()->has('danger')) !!}
        console.log(info)
        if(info)
        toastr.info(`{{ session('info')}}`);
        if(success)
        toastr.success(`{{ session('success') }}`);
        if(danger)
        toastr.warning(`{{ session('danger') }}`);
      </script>

</div>
