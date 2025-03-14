<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Aside Toolbarl-->

    <!--end::Aside Toolbarl-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5  " id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
            data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px"
            style="overflow-x: hidden !important; height: 778px;">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary     menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">


                <div class="menu-item">
                    <a class="menu-link gap-3 {{ Route::is('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <span class="menu-bullet">
                            <i class="bi bi-person-lines-fill fs-3 text-white"></i>
                        </span>
                        <span class="menu-title text-white">Dashboard</span>
                    </a>
                </div>
               
                <div class="menu-item">
                    <a class="menu-link gap-3 {{ Route::is('blogs') ? 'active' : '' }}"
                        href="{{ route('blogs') }}">
                        <span class="menu-bullet">
                            <i class="bi bi-person-lines-fill fs-3 text-white"></i>
                        </span>
                        <span class="menu-title text-white">Blogs</span>
                    </a>
                </div>

                 



            </div>
        </div>
        <!--end:Menu sub-->
    </div>
    <!--begin::Menu-->
    <!--end::Footer-->
</div>
