




<script type='text/javascript'>

    $(window).load(function () {

        $("#addRow").click(function () {
//            var row = $("<tr>" +
//                    "<td><input type='text' class='text-center form-control  currency ' name='prices[0][price]' data-affixes-stay='false' data-prefix='$ ' data-thousands=',' data-decimal='.' /></td>" +
//                    "<td><input type='text' class='text-center form-control' name='prices[0][quantity]' /></td>" +
//                    "<td><input type='text' class='text-center form-control' name='prices[0][model]' /></td>" +
//                    "<td><input type='text' class='text-center form-control' name='prices[0][sku]' /></td>" +
//                    "<td><input type='text' class='text-center form-control' name='prices[0][upc]' value='636343' /></td>" +
//                    "</tr><tr><td colspan="5"><input type="text" class="form-control" name="prices[]details[]" placeholder="Details:" /></td></tr>");
            var row = $("<tr>" +
                    "<td><input type='text' class='text-center form-control' name='model[]' /></td>" +
                    "<td><input type='text' class='text-center form-control  currency' name='price[]' placeholder='$0.00' data-affixes-stay='false' data-prefix='$ ' data-thousands=',' data-decimal='.' /></td>" +
                    "<td><input type='text' class='text-center form-control' name='quantity[]' /></td>" +
                    "<td><input type='text' class='text-center form-control' name='sku[]' /></td>" +
                    "<td><input type='text' class='text-center form-control' name='upc[]' value='636343' /></td>" +
                    "</tr>" +
                    "<tr><td colspan='5'><input type='text' class='form-control' name='details[]' placeholder='Details:' /></td></tr>" +
                    "<tr class='spacer invis'><td colspan='5'></td></tr>");
            $("table#product-pricing-table tbody").append(row);
            $('table#product-pricing-table input.currency').maskMoney();
        });
    });
    $(function() {
        $('table#product-pricing-table input.currency').maskMoney();

    })
</script>

<style>


</style>
<div class="row">
    <div class="col-md-12">
        <div class="adv-table editable-table ">
            <div class="clearfix">
                <div class="space15"></div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered" id="product-pricing-table">
                        <thead>
                            <tr>
                                <th>Model:</th>
                                <th>Price:</th>
                                <th>Quantity:</th>
                                <th>SKU:</th>
                                <th>UPC:</th>
                            </tr>
                        </thead>
                        <tbody>


                                @if(isset($product) && $product->prices->count()>0)
                                    @foreach($product->prices as $price)
                                        <tr class="alt">
                                            <td><input type="text" class="text-center form-control" name="model[]" value="{!! $price->model !!}" /></td>
                                            <td><input type="text" class="text-center form-control currency" name="price[]" value="{!! $price->price !!}" data-affixes-stay="false" data-prefix="$ " data-thousands="," data-decimal="." /> </td>
                                            <td><input type="text" class="text-center form-control" name="quantity[]" maxlength="4" value="{!! $price->quantity !!}" /></td>
                                            <td><input type="text" class="text-center form-control" name="sku[]" value="{!! $price->sku !!}" /></td>
                                            <td><input type="text" class="text-center form-control" name="upc[]" maxlength="12" value="{!! $price->upc !!}" /></td>

                                        </tr>
                                        <tr class="alt"><td colspan="5"><input type="text" class="form-control" name="details[]" value="{!! $price->details !!}" /></td></tr>
                                        <tr class="spacer invis"><td colspan="5"></td></tr>
                                    @endforeach
                                @else

                                        <tr class="alt">
                                            <td><input type="text" class="text-center form-control" name="model[]" value="" /></td>
                                            <td><input type="text" class="text-center form-control currency" name="price[]" placeholder="$0.00" data-affixes-stay="false" data-prefix="$ " data-thousands="," data-decimal="." /></td>
                                            <td><input type="text" class="text-center form-control" name="quantity[]" maxlength="4" /></td>
                                            <td><input type="text" class="text-center form-control" name="sku[]" value="" /></td>
                                            <td><input type="text" class="text-center form-control" name="upc[]" maxlength="12" value="636343" /></td>
                                        </tr>
                                        <tr class="alt">
                                            <td colspan="5"><input type="text" class="form-control" name="details[]" placeholder="Details:" /></td>
                                        </tr>
                                        <tr class="spacer invis"><td colspan="5"></td></tr>
                                @endif











                                {{--<tr>--}}
                                {{--<td><input type="text" class="text-center form-control currency" name="price[]" value="" data-affixes-stay="true" data-prefix="$ " data-thousands="," data-decimal="." /> </td>--}}
                                {{--<td><input type="text" class="text-center form-control" name="quantity[]" maxlength="4" value="" /></td>--}}
                                {{--<td><input type="text" class="text-center form-control" name="model[]" value="" /></td>--}}
                                {{--<td><input type="text" class="text-center form-control" name="sku[]" value="" /></td>--}}
                                {{--<td><input type="text" class="text-center form-control" name="upc[]" maxlength="12" value="636343" /></td>--}}
                                {{--<td><input type="text" class="text-center form-control currency" name="prices[0][price]" value="" data-affixes-stay="true" data-prefix="$ " data-thousands="," data-decimal="." /> </td>--}}
                                {{--<td><input type="text" class="text-center form-control" name="prices[0][quantity]" maxlength="4" value="" /></td>--}}
                                {{--<td><input type="text" class="text-center form-control" name="prices[0][model]" value="" /></td>--}}
                                {{--<td><input type="text" class="text-center form-control" name="prices[0][sku]" value="" /></td>--}}
                                {{--<td><input type="text" class="text-center form-control" name="prices[0][upc]" maxlength="12" value="636343" /></td>--}}
                                {{--</tr>--}}

                        </tbody>
                    </table>
</div>
                <button type="button" id="addRow" class="btn default">
                    Add New <i class="icon-plus"></i>
                </button>
            </div>
        </div>
    </div>
</div>



<script>

</script>