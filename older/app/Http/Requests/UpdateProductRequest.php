<?php

namespace Fully\Http\Requests;

use Fully\Http\Requests\Request;
use Fully\Models\Product;

class UpdateProductRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Product::$rules;
    }
}
