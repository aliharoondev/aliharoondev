<!DOCTYPE html>
<html lang="en">
@include('backend.partials.head')
<body>

    <!--=======================
        App Header
    ========================-->
    @include('backend.partials.header')


    <!--=======================
        App Header End
    ========================-->

    <section class="at-content-wrap">

        <!--=======================
            App Sidebar
        ========================-->
        @include('backend.partials.aside')

        <!--=======================
            App Sidebar End
        ========================-->

        <!--=======================
            App Content
        ========================-->
        <main class="at-content">
        @yield('content')
        </main>

        @include('backend.partials.footer')

        <!--=======================
            App Content End
        ========================-->

    </section>

    <!--=======================
        Footer Scripts
    ========================-->
    @include('backend.partials.scripts')

   

</body>
</html>