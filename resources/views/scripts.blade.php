@push('script-includes')
<script src="js/vendors.js"></script>
<script src="js/designesia.js"></script>
<script src="js/validation-booking.js"></script>
<script src="js/swiper.js"></script>
<script src="js/custom-swiper-2.js"></script>
@endpush

@push('scripts')
<script>
    var selected_unit_id = 0;
    $(function () {
      $("#date").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      }).datepicker('update', new Date());
    });
    @if(empty($unit))
    $(document).on('selected-unit', function(e, data) {
        $(window).trigger('resize');
        data = data["unit"];
        data['price'] = data['precio'];
        selected_unit_id = data["id"];
        $('#unit').val(data["id"]).trigger('change');
        @stack('fill')
    });
    @endif
    @if(!isset($imp))
    console.log("aki");
    $(".floor-cover").hide();
    $(".floor").show();
    $(".unit-cover").hide();
    $(".unit-area").show();
    $('#plans').show();
    @stack('fill')
    @endif
</script>
@endpush

@if(isset($imp))
@include('listing-utils::ImageMapPro.multi-image-map-pro',['imp'=>$imp])
@endif

@stack('script-includes')
@stack('scripts')