<!DOCTYPE html>

<html lang="en" data-bs-theme-mode="light">
<!--begin::Head-->
<x-notification.notifications />

<head>
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->




    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('admin_assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_assets/css/admin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_assets/ckeditor/jodit.min.css') }}" rel="stylesheet" rel="nofollow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!--end::Global Stylesheets Bundle-->



    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" class="app-default">
    <!--begin::Page-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <x-admin.header />
            <x-admin.sidebar />
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid">
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Post-->
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <!--begin::Container-->
                        <div id="kt_content_container-fluid" class="container-fluid">

                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Wrapper-->
        </div>
    </div>
    <!--end::Page-->

    <script src="{{ asset('admin_assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin_assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('admin_assets/ckeditor/jodit.min.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('admin_assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--end::Javascript-->
    <script>
        function load_jodit(id) {
            Jodit.make("#" + id, {
                "useSearch": false,
                "toolbarStickyOffset": 100,
                "showCharsCounter": false,
                "showWordsCounter": false,
                "showXPathInStatusbar": false,
                "uploader": {
                    "insertImageAsBase64URI": true
                },
                "minHeight": 400,
            });
            return;

        }
    </script>

</body>
<script>
    $(document).ready(function() {
        var pageIdentifier = window.location.pathname;
        var accordionState = localStorage.getItem('accordionState_' + pageIdentifier);

        if (accordionState) {
            $('.accordion-item .accordion-button').addClass('collapsed');
            $('.accordion-collapse').removeClass('show');
            $(accordionState).addClass('show').prev().find('.accordion-button').removeClass('collapsed');
        } else {
            $('.accordion-item:first-of-type .accordion-button').removeClass('collapsed');
        }

        $('.accordion-item').on('shown.bs.collapse', function() {
            var target = $(this).find('.accordion-button').attr('data-bs-target');
            localStorage.setItem('accordionState_' + pageIdentifier, target);
        });
        $('.accordion-item').on('hidden.bs.collapse', function() {
            localStorage.removeItem('accordionState_' + pageIdentifier);
        });




    });
</script>


</html>
