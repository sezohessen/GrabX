@extends('Frontend.layouts.app')

@section('js')
<script>
    $(function () {
         new TomSelect("#select-beast",{
        create: false,
        sortField: {
            field: "text",
            direction: "asc"
                }
            });
        });
        $(function () {
         new TomSelect("#select-beast2",{
        create: false,
        sortField: {
            field: "text",
            direction: "asc"
                }
            });
        });
        // Change city value
        $(document).on("change", '.gover', function () {
            // get governrate id
            var id       = $(this).val()
            // url
            var stateUrl = `api/city/${id}`;
            // ajax
            $.get(stateUrl,
                    {option: $(this).val()},
                    function (data) {
                        var model = $('.city');
                        model.empty();
                        // model.append("<option>Select a state</option>");
                        model.append("<option value='#'>@lang('Select city')</option>");
                        $.each(data['cities'], function (index, element) {
                            model.append("<option value='" + element.id + "'>" + element.name + "</option>");
                        });
                        // city deliverly_cost
                        // var cost = getElementById('deliverly').innerHTML = element.deliverly_cost;
                    }
            );
        }); //End
        $(document).on("change", '.city', function () {
            // get city id
            var id       = $(this).val()
            // api url
            var stateUrl = `api/deliverlyCost/${id}`;

            // ajax
            $.get(stateUrl,
            {option: $(this).val()},
                    function (data) {
                    var model = $('#deliverly');
                    model.empty();
                    model.append("<span >"+ data.city.deliverly_cost +" @lang('KWD')+</span>");
                    var subtotal            = document.getElementById('subtotal');
                    var total               = document.getElementById('new_value');
                    var discount            = document.getElementById('discount');
                    // var getDiscount         = data.discount[0] / 100;
                    subtotal.innerHTML      = data.subtotal[0] + data.city.deliverly_cost;

                    if (data.discount[0] > 0)
                    {
                        var totalOutput    = parseInt(subtotal.innerHTML) - (subtotal.innerHTML * (data.discount[0] / 100)) + ' ' ;
                        // get the last two decimal only
                        total.innerHTML    = (Math.round(totalOutput * 100) / 100).toFixed(2);


                    } else {
                        total.innerHTML    = subtotal.innerHTML;
                        console.log('there is no discount');
                    }

                }
            )

        }); //End



</script>
@endsection
@inject('paymentController', 'App\hesabe\Controllers\PaymentController')
@section('content')
    @livewire('order-type')
@endsection
