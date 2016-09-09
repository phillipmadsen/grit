
<div class="row options">
    <div class="form-group col-md-12">
        <label for="options">{{trans('product.productoptions')}} : </label>
        <div id="add_product_option" class=" btn btn-sm btn-primary">+ Add Option</div>
        <div class="options-group row">
            <div class="option col-md-3" op-index="0">
                <label for="options">{{trans('product.product_option_name')}} : <input type="text" name="options[0][name]"></label>

                <div class="indent-option">
                    <ul class="values"><a class="btn btn-danger remove-option" aria-label="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        <li>
                            <input type="text" name="options[0][values][]">
                        </li>
                    </ul>
                    <span class="add_option_value "> <i class="fa fa-plus-circle fa-lg" aria-hidden="true"></i>&nbsp; Add Value</span>
                </div>
            </div>
        </div>
    </div>
</div>
<span id="btn_new" class="btn btn-danger">
     <i id="ui-icon" class="fa-trash fa " aria-hidden="true"></i> &nbsp; new
</span>


<script>

        $('#btn_new').click(function(){
                $(this).find('#ui-icon').toggleClass('fa-plus-circle fa-trash');
        };

            $(function () {
                var options_counter = 0;

                $('#add_product_option').click(function () {
                    options_counter++;
                    $('.options-group').append('<div class="option col-md-3" op-index="' + options_counter + '">' +
                            '<span class="fa fa-times fa-lg remove-option"></span>' +
                            '<label for="options">Option Name:</label>' +
                            '<strong><input type="text" name="options[' + options_counter + '][name]"></strong><br>' +
                            '<div class="add_option_value">+ Add Value</div>' +
                            '<ul class="values"><li>' +
                            '<input type="text" name="options[' + options_counter + '][values][]"></li>' +
                            '</ul>' +
                            '</div>');
                });
                $(document).on("click", ".remove-option", function () {
                    $(this).parent().remove();
                });
                $(document).on("click", ".add_option_value", function () {
                    $(this).parent().find('.values').append('<li>' +
                            '<input type="text" name="options[' + $(this).parent().attr('op-index') + '][values][]">' +
                            '<i class="fa fa-minus remove-value"></i>' +
                            '</li>');
                });
                $(document).on("click", ".remove-value", function () {
                    $(this).parent().remove();
                });


            });

</script>
