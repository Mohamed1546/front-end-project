@extends('user.master')


@section('title', __('admin.orders'))

@section('page-title', __('admin.orders'))
@section('css')
    <style>
      .rating:hover{
        color: #fce708;
        transition: 0.5s;
      }
    </style>
@endsection
@section('content')

    @livewire('user.search-order')
    
@endsection
@section('ajax')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            // setInterval(function() {
            //       $('.addStar').on('click', function(e) {
            //           $(this).submit();
            //       });
            // },500);
            setInterval(function() {
                $('.add_attach').on('click', function() {
                    const order_id_new = $(this).attr("data-id");
                    $("#order_id1").val(order_id_new);
                });
            }, 1000);

            $('#form_attach').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                var opError = " ";
                $.ajax({
                    url: `{{ url('profile/orders') }}`,
                    type: 'POST',
                    data: formData,
                    success: function(result) {
                        //console.log(result);
                        $("#form_attach")[0].reset();
                        $('.alterErrorletter').html(" ");
                        swal(result.success, {
                            icon: "success",
                        });
                    },
                    cache: false,
                    contentType: false,
                    processData: false,
                    error: function(errorsub) {
                        if (errorsub) {
                            if (errorsub.responseJSON.errors.name_attach) {
                                opError += '<div class="alert alert-danger">' +
                                    errorsub.responseJSON.errors
                                    .name_attach + '</div>';
                            } else if (errorsub.responseJSON.errors
                                .attachment_file) {
                                opError += '<div class="alert alert-danger">' +
                                    errorsub.responseJSON.errors
                                    .attachment_file + '</div>';
                            }
                            $('.alterErrorletter').html(" ");
                            $('.alterErrorletter').append(opError);
                        }
                    }
                });
            });
        });
    </script>
@endsection
