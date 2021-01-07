<!doctype html>
<html lang="en">
    <head>
        @include('comp.head')
    </head>
    <body>
        <div class="dashboard-main-wrapper">
            @include('comp.nav')
        
            @include('comp.side')

            <div class="dashboard-wrapper">
                <div class="container-fluid dashboard-content">
                    {{-- Main Content --}}
                    @yield('content')
                </div>
                
                @include('comp.footer')
            </div>
        </div>
        
        @include('comp.script')
    </body>
</html>