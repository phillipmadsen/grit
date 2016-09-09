<?php
/**
 * Created by PhpStorm.
 * User: Phillip
 * Date: 8/30/2016
 * Time: 3:41 PM
 */
?>




protected function flatten($array) {
$result = [];

foreach($array as $key=>$value) {
if (is_array($value)) {
$result = $result + $this->flatten($value, $key);
} else {
$result[$key] = $value;
}
}

return $result;
}




/**
* @param Request $product
* @return \Illuminate\Http\RedirectResponse
*/
public function store(Request $request)
{




// dd($product);

/**
* Validate the submitted Data
*/
$this->validate($request, [
'name' => 'required',
//            'manufacturer' => 'required',
//            'price' => 'required',
//            'details' => 'required',
//            'quantity' => 'required',
//            'categories' => 'required',
//            'thumbnail' => 'required|image',
]);


if ($request->hasFile('album')) {
foreach ($request->album as $photo) {
if ($photo && strpos($photo->getMimeType(), 'image') === false) {
return \Redirect()->back();
}
}
}

/**
* Upload a new thumbnail
*/
$dest = "testtubes/";
$dest2 = "testtubes/2/";
//        $dest = "content/images/";

$name = $request->file('thumbnail')->getClientOriginalName();
$request->file('thumbnail')->move($dest, $name);


$name2 = $request->file('thumbnail2')->getClientOriginalName();
$request->file('thumbnail2')->move($dest2, $name2);



//
// $user->expires_at = Carbon::tomorrow();

$product = $request->all();


$product['price'] = $request->price;
$product['created_at'] = \Carbon\Carbon::now();
$product['thumbnail'] = "/" . $dest . $name;
$product['thumbnail2'] = "/" . $dest2 . $name2;

$product = Product::create($product);



/**
* Upload Album Photos  firstOrCreate
*/
if ($request->hasFile('album')) {
foreach ($request->album as $photo) {
if ($photo) {
$name = str_random(11) . "_" . $photo->getClientOriginalName();
$photo->move($dest, $name);
AlbumPhoto::firstOrCreate([
'product_id' => $product->id,
'photo_src' => "/" . $dest . $name
]);
}
}

}


/**
* Linking the categories to the product
*/
foreach ($request->categories as $category_id) {
CategoryProduct::create([
'category_id' => $category_id,
'product_id' => $product->id
]);
}


if ($request->has('prices')) {

foreach ($request->prices as $price) {
if (!empty($request->price)) {
$productPrice = new Price();
$productPrice->price = $price;
$productPrice->quantity = $price;
$productPrice->model = $price;
$productPrice->sku = $price;
$productPrice->upc = $price;
$productPrice->details = $price;
$productPrice->product_id = $product->id;
$product->prices()->save($productPrice);

foreach ($request->price as $price_id) {
ProductPrice::create([
'price_id' => $product->id,
'product_id' => $price_id
]);
}
}
}
}





//       foreach ($request->prices as $price_id) {
//
//            Price::create([
//                'product_id' => $product->id,
//                'price' => $request->get('price'),
//                'model' => $request->get('model'),
//                'sku' => $request->get('sku'),
//                'upc' => $request->get('upc'),
//                'quantity' => $request->get('quantity')
//
//            ]);
//
//            ProductPrice::create([
//                'price_id' => $product->id,
//                'product_id' => $price_id
//            ]);
//        }

/**
* Linking the options to the product
*/
if ($request->has('options')) {
foreach ($request->options as $option_details) {
if (!empty($option_details['name']) && !empty($option_details['values'][0])) {
$option = Option::create([
'name' => $option_details['name'],
'product_id' => $product->id
]);
foreach ($option_details['values'] as $value) {
OptionValue::create([
'value' => $value,
'option_id' => $option->id
]);
}
}
}
}

if (!empty($request->attribute_name)) {
foreach ($request->attribute_name as $key => $item) {
$productVariant = new ProductVariant();
$productVariant->attribute_name = $item;
$productVariant->product_attribute_value = $request->product_attribute_value[$key];
$product->productVariants()->save($productVariant);
}
}
//
if (!empty($request->feature_name)) {
foreach ($request->feature_name as $feature) {
$productFeature = new ProductFeature();
$productFeature->feature_name = $feature;
$product->productFeatures()->save($productFeature);

}
}


//        if ($request->has('prices')) {
//
//            foreach ($request->prices as $price) {
//                if (!empty($request->price)) {
//                    $productPricing = new Price();
//                    //$productPricing = $request->input('products.0.prices.0.price');
//                    // $productPricing = $request->input('price');
//                    // $productPricing = $request->input('quantity');
//                    // $productPricing = $request->input('model');
//                    // $productPricing = $request->input('sku');
//                    // $productPricing = $request->input('upc');
//                    $product->prices()->save($productPricing);
//                }
//            }
//        }

$product->save();


FlashAlert()->success('Success!', 'The Product Was Successfully Added');

return \Redirect(getLang().'/admin/products');
}

//    public function getFullNameAttribute() {
//        return $this->name . ' ' . $this->surname;
//    }
//$employees = Employee::where('branch_id', 9)->get()->lists('full_name', 'id');









































http://laravel.io/forum/05-13-2014-how-to-send-relationship-data-to-view-one-to-many-relationships

https://laracasts.com/discuss/channels/general-discussion/laravel-5-how-do-i-pass-all-related-items-to-the-view

public function getPriceAttribute($price)
{
    $custom_price = DB::table('product_user') // pivot table
    ->where('product_id', $this->id) // product id
    ->where('user_id', Sentinel::getUser()) // user id
    ->first();

    return ( ! empty($custom_price) ) ? $price : $custom_price ;
}


public function getAlternativePrice(User $user)
{
    return $this->hasOne("name of your class", "product_id")->where("user_id", "=", $user->id);
}

public function getFinalPrice(User $user)
{
    $alternativePrice = $this->getAlternativePrice($user)->first();
    return ( $alternativePrice ) ? $alternativePrice->price : $this->price;
}


$products = Product::take(10)->get();

foreach ($products as $product)
{
    $product->price; // works as expected
}


//https://laracasts.com/discuss/channels/laravel/sum-total-from-products


class Order extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('total');
    }
}

$order = Order::find(id);
$total = 0;
foreach($order->products as $product) {
    $total += $product->pivot->total;
}
dd($total);

https://travis-ci.org/PrestaShop/PrestaShop/jobs/105200937#L973

public function ajaxProcessPublishProduct()
{
if ($this->tabAccess['edit'] === '1') {
if ($id_product = (int)Tools::getValue('id_product')) {
$bo_product_url = dirname($_SERVER['PHP_SELF']).'/index.php?tab=AdminProducts&id_product='.$id_product.'&updateproduct&token='.$this->token;
if (Tools::getValue('redirect')) {
die($bo_product_url);
}
$product = new Product((int)$id_product);
if (!Validate::isLoadedObject($product)) {
die('error: invalid id');
}
$product->active = 1;
if ($product->save()) {
die($bo_product_url);
} else {
die('error: saving');
}
}
}
}