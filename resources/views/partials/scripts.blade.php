  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{asset('vendor/argon')}}/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="{{asset('vendor/argon')}}/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="{{asset('vendor/argon')}}/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <!-- Argon JS -->
  <script src="{{asset('vendor/argon')}}/assets/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{asset('vendor/argon')}}/assets/js/demo.min.js"></script>
  <script src="{{asset('vendor/sweetalert')}}/sweetalert.min.js"></script>
  @include('vendor.sweet.alert')
  @yield('scripts')