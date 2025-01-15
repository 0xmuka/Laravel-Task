@include('layouts.header')
        <!-- Menu -->

        @include('layouts.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

            @include('layouts.navbar')
          <!-- / Navbar -->

          <!-- Content wrapper -->
            @include('layouts.content')
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    @include('layouts.scripts')
    @include('layouts.footer')
  </body>
</html>
