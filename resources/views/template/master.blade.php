<!DOCTYPE html>
<html lang="en">
@include('template.head')

<body>
    <div class="adminx-container">
    @include('template.sidebar')
        @include('template.navbar')
        <div class="adminx-content">
            <div class="adminx-main-content">
                @yield('content')
            </div>
        </div>
    </div>
    @include('template.script')
    @yield('script')
</body>

</html>