<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; {{date('Y')}} <div class="bullet"></div> Developed By <a href="#">Biro Sistem Informasi</a>
    </div>
    <div class="footer-right">
        Version 1.2.0
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="{{asset('backend/modules/jquery.min.js')}}"></script>
<script src="{{asset('backend/modules/popper.js')}}"></script>
<script src="{{asset('backend/modules/tooltip.js')}}"></script>
<script src="{{asset('backend/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('backend/modules/moment.min.js')}}"></script>
<script src="{{asset('backend/js/stisla.js')}}"></script>

<!-- JS Libraies -->
@stack('js-libraries')

  <!-- Template JS File -->
  <script src="{{asset('backend/js/scripts.js')}}"></script>
  <script src="{{asset('backend/js/custom.js')}}"></script>
<!-- Page Specific JS File -->
@yield('js-pages')


<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";

    $('#search').on('keyup', function (e) {

        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: path,
            data: {
                'search': $value
            },
            success: function (data) {
                if (!e.target.value) {
                    $('.search-biro').html('');
                } else {
                    $('.search-biro').html(data);

                }
            }
        });
    })

</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });

</script>
</body>

</html>
