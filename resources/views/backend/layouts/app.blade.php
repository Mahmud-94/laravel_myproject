<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Zapily I Fast build Admin dashboard for any platform</title>
    <meta name="description" content="Zapily is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords"
        content="admin, admin dashboard, admin template, cms, crm, Zapily Admin, Zapilyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />



    @yield('css')
    @include ('backend.layouts.css');




</head>

<body>
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!-- /Preloader -->
        <div class="wrapper theme-1-active pimary-color-gold">
            <!-- Top Menu Items -->

            @if (Auth()->guard('admin')->check())
                @include ('backend.layouts.topmenu')

            @elseif(Auth()->guard('agent')->check())
                @include ('backend.layouts.agent_topmenu')

            @endif
            <!-- /Top Menu Items -->

            <!-- Left Sidebar Menu -->

            @if (Auth()->guard('admin')->check())
                @include ('backend.layouts.expert_left_sidebar')

            @elseif(Auth()->guard('agent')->check())
                @include ('backend.layouts.agent_left_sidebar')

            @endif
            <!-- /Left Sidebar Menu -->

            <!-- Right Sidebar Menu -->
            @include ('backend.layouts.right_sidebar');
            <!-- /Right Sidebar Menu -->

            <!-- Main Content -->
            <div class="page-wrapper">
            @yield('content')
            </div>
            <!-- /Main Content -->

            <!-- Footer -->
            @include ('backend.layouts.footer');
            <!-- /Footer -->

        </div>
    </div>




    @include ('backend.layouts.js');

    @yield('js')
</body>

</html>
