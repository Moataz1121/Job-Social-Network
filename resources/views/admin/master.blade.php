<!DOCTYPE html>


<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('admin') }}/assets/" data-template="vertical-menu-template-free">
@include('admin.layouts.head')

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('admin.layouts.sidebar')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('admin.layouts.navbar')
                <!-- / Navbar -->
                <!-- Content wrapper -->
                {{-- <div class="content-wrapper"> --}}
                <!-- Content -->
                <div class="container h-100">
                    @yield('content')
                </div>
                <!-- / Content -->
                <!-- Footer -->
                @include('admin.layouts.footer')
                <!-- / Footer -->
                <div class="content-backdrop fade"></div>
                {{-- </div> --}}
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- Core JS -->
    @include('admin.layouts.script')
</body>

</html>
