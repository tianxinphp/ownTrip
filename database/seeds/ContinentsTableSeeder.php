<?php

use Illuminate\Database\Seeder;
use App\Models\Continent;
use Carbon\Carbon;
class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp=Carbon::now();
        $continents=[
            [
                'cn_name'  =>'亚洲',
                'en_name'  =>'Asia',
                'ping_name'=>'yazhou',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'cn_name'  =>'欧洲',
                'en_name'  =>'Europe',
                'ping_name'=>'ouzhou',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'cn_name'  =>'北美洲',
                'en_name'  =>'North America',
                'ping_name'=>'beimei',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'cn_name'  =>'南美洲',
                'en_name'  =>'South America',
                'ping_name'=>'nanmei',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'cn_name'  =>'大洋洲',
                'en_name'  =>'Oceania',
                'ping_name'=>'dayangzhou',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'cn_name'  =>'非洲',
                'en_name'  =>'Africa',
                'ping_name'=>'feizhou',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],
            [
                'cn_name'  =>'南极洲',
                'en_name'  =>'Antarctica',
                'ping_name'=>'nanjizhou',
                'created_at'=>$timestamp,
                'updated_at'=>$timestamp
            ],

        ];
        Continent::query()->insert($continents);
    }
}
