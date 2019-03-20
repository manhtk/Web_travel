<script type="text/javascript">
    
                                               $('.field_checkin_out', body).each(function () {
                                            var parent           = $(this),
                                            check_in_input   = $('.check-in-input', parent),
                                            check_out_input  = $('.check-out-input', parent),
                                            check_in_out     = $('.check-in-out', parent),
                                            check_in_render  = $('.check-in .value', parent),
                                            check_out_render = $('.check-out .value', parent);

                                            check_in_out.daterangepicker({
                                                singleDatePicker    : false,
                                                autoApply           : true,
                                                dateFormat          : 'DD/MM/YYYY',
                                                widthSingle         : 500,
                                                minDate             : today
                                            },
                                            function (start, end, label) {
                                                check_in_input.val(start.format(parent.data('format')));
                                                check_in_render.html(start.format(parent.data('format')));
                                                check_out_input.val(end.format(parent.data('format')));
                                                check_out_render.html(end.format(parent.data('format')));
                                                check_in_out.trigger('daterangepicker_change', [start, end]);
                                            });
                                        });
</script>