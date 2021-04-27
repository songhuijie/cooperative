<?php

namespace App\Console\Commands;

use App\Models\ActionLog;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Test2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //

        $app_key = config('app.ding.app_key');
        $app_secret = config('app.ding.app_secret');
        $url = "https://oapi.dingtalk.com/gettoken?appkey=$app_key&appsecret=$app_secret";

        $response = curlGet($url);


        dd($response);

        for($i=11001;$i <=11010 ;$i++){

            echo $i.',';
//            echo "'$i'"." => '头条唱歌赚钱($i)',";
//            echo "\n";
        }

        dd();
        $arr = '抽奖次数
中奖次数
中奖比率(次数)
抽奖人数
付费抽奖人数
中奖人数
中奖比率(人数)
织音币消耗
礼物总价值(织音币)
产出比率
奖池剩余金额
爆盘次数
产出比率
中奖个数
总价值(织音币)
中奖人数';
        $arr2 = '抽奖次数
中奖次数
中奖比率(次数)
抽奖人数
付费抽奖人数
中奖人数
中奖比率(人数)
织音币消耗
礼物总价值(织音币)';
        $arr = explode("\n",$arr2);
        foreach($arr as $v){


            echo '$data[$date_text][$count]["'.$v.'"] = 0;';
            echo "\n";

        }
//
        dd();
        $room_ids = [
            3246671,
            3150372,
            3339915,
            3900039,
            3599940,
            3796952,
            3222027,
            3259818,
            3617120,
            3814787,
            3907167,
            3641524,
            3818998,
            3526884,
            3319678,
            3308643,
            3109737,
            3956249,
            3703619,
            3122804,
            3510879,
            3641998,
            3367718,
            3624348,
            3181486,
            3989116,
            3048473,
            3105900,
            3237755,
            3009630,
            3032555,
            3981207,
            3540337,
            3510569,
            3210365,
            3182655,
            3373524,
            3537572,
            3687153,
            3147214,
            3376806,
            3025990,
            3886685,
            3034977,
            3193019,
            3025293,
            3059935,
            3259655,
            3254739,
            3369857,
            3094216,
            3856572,
            3599817,
            3793006,
            3281014,
            3907275,
            3097219,
            3196454,
            3276724,
            3239045,
            3238730,
            3405224,
            3603906,
            3771216,
            3489064,
            3900871,
            3329346,
            3286847,
            3752748,
            3416452,
            3937824,
            3623758,
            3396162,
            3751986,
            3982995,
            3825206,
            3689437,
            3279144,
            3278282,
            3721224,
            3219155,
            3685980,
            3442056,
            3216499,
            3543273,
            3344639,
            3688844,
            3323626,
            3078272,
            3955719,
            3119127,
            3956370,
            3480507,
        ];
        $str = '';
        $str1 = '';
        $count = [1,10,100];
        for($i=10008;$i <= 10100;$i++){
            $type = rand(1,2);
//            $speed = rand(100,999);
            $speed2 = rand(1,600000);
            $room = rand(3000000,4000000);
            $rand = rand(0,92);
//            $str.= "('2021-04-16', '2021-04-16 08:00:00.000', $i, 'windows', 0, 'M', '2021-02-24 18:37:00', 1, 9, 18, $room, 6, '', -1, '0a1864f6ba1e42bcbef4c598046887c31xny', -249784, 1, $count[$rand], $speed2, 1, 6990, 0, '', -1, -1, -1),";
            $speed3 = rand(1,60000);
            for($k=0;$k < rand(1,3) ;$k++){
                $str1 .= "('2021-04-16', '2021-04-16 08:00:00.000', $i, 'ios', 1, 'M', '2021-04-11 21:42:21', 0, 0, 0, $room_ids[$rand], 0, 2, 100, 20056, 2, $speed3, 643, 0, 'xxxxxxxxx', 0, 0, 0, 1616209783020),";
            }

//            echo "'$i' => '九星($i)',";
//            echo "\n";
        }
        echo $str1;

        dd();
        $data = [
            10000=>30,
            10001=>30,
            10002=>30,
            10003=>30,
            10004=>30,
        ];

        $dat2 = [
            10000=>10,
            10001=>20,
            10002=>30,
        ];

        foreach ($data as $k=>$v){
            $data[$k] = $v - (isset($dat2[$k]) ? $dat2[$k] : 0);
        }
        $a = array_count_values($data);
        unset($a[0]);
        dd(array_sum($a));
        dd($data);


        $str = '1.兄弟
2.同门
3.师尊
4.爱徒
5.情侣
6.丫鬟
7.跟班
8.护院
9.闺蜜
10.昆仑奴
11.小厮
12.仆从
13.侍女
14.金兰
15.家丁
16.小妾
17.鲜卑婢
18.姐妹
19.女皇
20.狗腿子
21.主公';


        $arr = explode("\n",$str);

        foreach($arr as $k=>$v){
            $tmp = explode('.',$v);

            echo $tmp[0]."=>'".$tmp[1]."',";
            echo "\n";

        }

        dd(1);


    }
}
