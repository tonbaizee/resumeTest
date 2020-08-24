<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.08.2020
 * Time: 18:21
 */

namespace App\Services;


use App\Models\Datacenters;
use App\Models\ProductList;

class HomeLogic
{
    public function getAllElements()
    {
        $datacenters = Datacenters::all();
        $products = ProductList::all();
        $response['datacenters']=$datacenters;
        $response['products']=$products;
        return $response;
    }
    public function search($str)
    {
        $all_elements = ProductList::where('provider_name', 'LIKE', '%' . ($str . '%'))
            ->orWhere('provider', 'LIKE', '%' . ($str . '%'))
            ->orWhere('location', 'LIKE', '%' . ($str . '%'))
            ->orWhere('city', 'LIKE', '%' . ($str . '%'))
            ->orWhere('country', 'LIKE', '%' . ($str . '%'))
            ->orWhere('datacenter', 'LIKE', '%' . ($str . '%'))
            ->orWhere('brand_label', 'LIKE', '%' . ($str . '%'))
            ->orWhere('brand', 'LIKE', '%' . ($str . '%'))
            ->orWhere('model', 'LIKE', '%' . ($str . '%'))
            ->orWhere('cpu', 'LIKE', '%' . ($str . '%'))
            ->orWhere('core', 'LIKE', '%' . ($str . '%'))
            ->orWhere('drive_label', 'LIKE', '%' . ($str . '%'))
            ->orWhere('ram', 'LIKE', '%' . ($str . '%'))
            ->orWhere('drive', 'LIKE', '%' . ($str . '%'))
            ->orWhere('bandwidth', 'LIKE', '%' . ($str . '%'))
            ->orWhere('ip', 'LIKE', '%' . ($str . '%'))
            ->orWhere('price', 'LIKE', '%' . ($str . '%'))
            ->orWhere('show_bw', 'LIKE', '%' . ($str . '%'))
            ->orWhere('sell_out_start', 'LIKE', '%' . ($str . '%'))
            ->orWhere('sell_out_end', 'LIKE', '%' . ($str . '%'))
            ->orWhere('discount', 'LIKE', '%' . ($str . '%'))->get();
        return $all_elements;
    }
    public function insertRows($url)
    {
        $content = json_decode(file_get_contents($url),true);
        if(!is_array($content) && !is_array($content['data']))
        {
            echo '<script type="text/javascript">alert("Structure is incorrect!")</script>';
            return;
        }
        Datacenters::truncate();
        foreach ($content['datacenters'] as $key=>$value)
        {
            Datacenters::create([
                'datacenter_id'=>$key,
                'datacenter_name'=>$value
            ]);
        }
        ProductList::truncate();
        foreach ($content['data'] as $datum)
        {
            $product = ProductList::where('provider_name',$datum['provider_name'])
                ->where('provider',$datum['provider'])
                ->where('location',$datum['location'])
                ->where('city',$datum['city'])
                ->where('country',$datum['country'])
                ->where('datacenter',$datum['datacenter'])
                ->where('brand_label',$datum['brand_label'])
                ->where('brand',$datum['brand'])
                ->where('model',$datum['model'])
                ->where('cpu',$datum['cpu'])
                ->where('core',$datum['core'])
                ->where('ram',$datum['ram'])
                ->where('drive_label',$datum['drive_label'])
                ->where('drive',$datum['drive'])
                ->where('bandwidth',$datum['bandwidth'])
                ->where('ip',$datum['ip'])
                ->where('price',$datum['price'])
                ->where('show_bw',$datum['show_bw'])
                ->where('sell_out_start',$datum['sell_out_start'])
                ->where('sell_out_end',$datum['sell_out_end'])
                ->where('discount',$datum['discount'])->first();
            if($product!=null)
            {
              continue;
            }
            else{
                $product = ProductList::create([
                    'provider_name'=>$datum['provider_name'],
                    'provider'=>$datum['provider'],
                    'location'=>$datum['location'],
                    'city'=>$datum['city'],
                    'country'=>$datum['country'],
                    'datacenter'=>$datum['datacenter'],
                    'brand_label'=>$datum['brand_label'],
                    'brand'=>$datum['brand'],
                    'model'=>$datum['model'],
                    'cpu'=>$datum['cpu'],
                    'core'=>$datum['core'],
                    'ram'=>$datum['ram'],
                    'drive_label'=>$datum['drive_label'],
                    'drive'=>$datum['drive'],
                    'bandwidth'=>$datum['bandwidth'],
                    'ip'=>$datum['ip'],
                    'price'=>$datum['price'],
                    'show_bw'=>$datum['show_bw'],
                    'sell_out_start'=>$datum['sell_out_start'],
                    'sell_out_end'=>$datum['sell_out_end'],
                    'discount'=>$datum['discount'],
                ]);
                try {
                    $bytes = random_bytes(5);
                } catch (\Exception $e) {
                }
                ProductList::where('id',$product->id)->update(['slug'=>bin2hex($bytes).'-'.$product->id]);
            }
        }
    }
    protected function RowToArray($item)
    {
        return [
            'provider_name'=>$item->provider_name,
            'provider'=>$item->provider,
            'location'=>$item->location,
            'city'=>$item->city,
            'country'=>$item->country,
            'datacenter'=>$item->datacenter,
            'brand_label'=>$item->brand_label,
            'brand'=>$item->brand,
            'model'=>$item->model,
            'cpu'=>$item->cpu,
            'core'=>$item->core,
            'ram'=>$item->ram,
            'drive_label'=>$item->drive_label,
            'drive'=>$item->drive,
            'bandwidth'=>$item->bandwidth,
            'ip'=>$item->ip,
            'price'=>$item->price,
            'show_bw'=>$item->show_bw,
            'sell_out_start'=>$item->sell_out_start,
            'sell_out_end'=>$item->sell_out_end,
            'discount'=>$item->discount,
        ];
    }
}
