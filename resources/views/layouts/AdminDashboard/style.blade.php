@section('styles')
    @vite(['resources/admin_panel_style/css/bootstrap.min.css', 'resources/admin_panel_style/css/plugins.css',
           'resources/admin_panel_style/css/mailing-chat.css', 'resources/admin_panel_style/css/structure.css',
           'resources/admin_panel_style/css/scrollspyNav.css', 'resources/admin_panel_style/css/file-upload-with-preview.min.css'])
@show

@section('scripts')
    <script src="{{ Vite::asset('resources/admin_panel_style/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/admin_panel_style/js/popper.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/bootstrap.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/admin_panel_style/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ Vite::asset('resources/admin_panel_style/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ Vite::asset('resources/admin_panel_style/js/mailbox-char.js') }}"></script>
    <script src="{{ Vite::asset('resources/admin_panel_style/js/scrollspyNav.js') }}"></script>
    <script src="{{ Vite::asset('resources/admin_panel_style/js/file-upload-with-preview.min.js') }}"></script>
    <script>
        // Для загрузки фото в slider.blade.php
        var firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>

@show
