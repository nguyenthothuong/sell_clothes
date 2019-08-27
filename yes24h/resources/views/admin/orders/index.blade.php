@extends('admin.layouts.master')

@section('javascript')

    <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
    <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.scrollLock.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/app-custom.js') }}"></script>

    <!-- Page JS Code -->
    <script>

        $(document).ready(function () {

            //view order details when click a tr
            $(document).on('click', 'tr.order', function(event) {
                event.preventDefault();
                
                href = $(this).attr('href');
                window.location.replace(href);
            });

            $("table a, table button").on("click", function () {
                $(document).unbind("click");
            });

            $('button#btn-delete').on('click', function(event) {
                event.preventDefault();
                
                if (confirm('Bạn muốn hủy đơn hàng này?')) {
                    $(this).parent().children('form#order-cancelled-form').submit();
                }
            });
        });
        
    </script>

@endsection
