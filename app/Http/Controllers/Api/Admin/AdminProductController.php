<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Controllers\Controller;
use App\Models\ModelHasRoles;
use App\Models\ProductList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductController extends BaseApiController
{
    //TODO Обычно бизнесс логику описую в сервисах
    public function delete(Request $request)
    {
       // $user_id = Auth::id();
        //$model = ModelHasRoles::where('user_id',$user_id)->first();
        //if($model->role_id == 1)
        //{
         //   return url('/home');
        //}
        ProductList::where('id',$request->id)->delete();
        return $this->getResponse([
            'message'=>__('Продукт удален!'),
            'data'=>url('home')
        ]);
    }
    public function add(Request $request)
    {
       $product = ProductList::create([
           'provider_name'=>$request->provider_name,
           'provider'=>$request->provider,
           'location'=>$request->location,
           'city'=>$request->city,
           'country'=>$request->country,
           'datacenter'=>$request->datacenter,
           'brand_label'=>$request->brand_label,
           'brand'=>$request->brand,
           'model'=>$request->model,
           'cpu'=>$request->cpu,
           'core'=>$request->core,
           'ram'=>$request->ram,
           'drive_label'=>$request->drive_lavel,
           'drive'=>$request->drive,
           'bandwidth'=>$request->bandwidth,
           'ip'=>$request->ip,
           'price'=>$request->price,
           'show_bw'=>$request->show_bw,
           'sell_out_start'=>$request->sell_out_start,
           'sell_out_end'=>$request->sell_out_end,
           'discount'=>$request->discount,
       ]);
       try {
           $bytes = random_bytes(5);
           $slug = bin2hex($bytes).'-'.$product->id;
       } catch (\Exception $e) {
       }
       ProductList::where('id',$product->id)->update(['slug'=>$slug]);
       return $this->getResponse([
           'message'=>__('Продукт добавлен!'),
           'data'=>url('edit-row/'.$slug)
       ]);
    }
    public function update(Request $request)
    {
        $product = ProductList::where('id',$request->id)->first();
        ProductList::find($request->id)->update([
            'provider_name'=>$request->provider_name,
            'provider'=>$request->provider,
            'location'=>$request->location,
            'city'=>$request->city,
            'country'=>$request->country,
            'datacenter'=>$request->datacenter,
            'brand_label'=>$request->brand_label,
            'brand'=>$request->brand,
            'model'=>$request->model,
            'cpu'=>$request->cpu,
            'core'=>$request->core,
            'ram'=>$request->ram,
            'drive_label'=>$request->drive_lavel,
            'drive'=>$request->drive,
            'bandwidth'=>$request->bandwidth,
            'ip'=>$request->ip,
            'price'=>$request->price,
            'show_bw'=>$request->show_bw,
            'sell_out_start'=>$request->sell_out_start,
            'sell_out_end'=>$request->sell_out_end,
            'discount'=>$request->discount,
        ]);

        return $this->getResponse([
            'message'=>__('Продукт изменен!'),
            'data'=>url('edit-row/'.$product->slug),
        ]);
    }
}
