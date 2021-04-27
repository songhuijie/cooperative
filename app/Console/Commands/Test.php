<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

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
        $title = [
            '进房人数' => [
                '男性' => 'number',
                '女性' => 'number'
            ],
            '进房次数' => [
                '男性' => 'number',
                '女性' => 'number'
            ],
            '活跃人数' => [
                '男性' => 'number',
                '女性' => 'number'
            ],
            '参与拍卖' => [
                '男性' => 'number',
                '女性' => 'number'
            ],
            '竞拍出价' => [
                '男性' => 'number',
                '女性' => 'number',
            ],
            '开启拍卖次数' => 'number',
            '成功拍卖次数' => 'number',
            '成交价汇总' => 'price',
            '出价汇总' => 'price',
            '送礼' => [
                '人数' => 'number',
                '次数' => 'number',
                '总流水' => 'price'
            ]
        ];

        echo '[';
        foreach($title as $k=>$v){

            if(is_array($v)){
                echo "'".$k."'=>[";
                echo "\n";
                foreach($v as $k2=>$v2){
                    echo "    '".$k2."',";
                    echo "\n";
                }
                echo '],';
            }else{
                echo "'".$k."',";
            }

            echo "\n";
        }
        dd(1);

        $str = "3-2 关注个人.txt
3-3 荧光棒变化.txt
400-1 家族聊天.txt";
        $arr = explode("\n",$str);
        foreach ($arr as $v){
            $path=public_path()."/test/$v";
            $str= '{
  "payload": {
    "eid": "'.explode(' ',$v)[0].'",
    "time": "2020-02-20 11:05:01",
    "role_id": "148946",
    "event_info": {

    },
    "user_info": { //账号信息
      "win": "0",
      "fail": "0",
      "sex": "M",
      "wealth_grade": "0",
      "nickname": "小丑",
      "one_price": "209",
      "vip": "",
      "reg_time": "2020-02-15 21:48:30.150",
      "wealth": "0",
      "channel": 0
    },
    "os": "android",
    "type": "behavior",
    "device_info": {},
    "ext": {}
  }
}'; //要声明的字符串
            file_put_contents($path,$str);//把字符串内容存储到web.php中。
        }
        dd('success');

//        $user = User::findOrFail(2);

//        dd($user);

        dd('TravelEdge');
        dd(Redis::get('a'));

        dd(mb_strlen('部分工作交接 百今通服务端,数据库配置,项目地址,接口文档整理。公交车服务端,公交车后台,数据库配置,项目地址,接口文档整理。优客服务端,优客后台,后台导入sql,数据库配置,项目地址。 agv后台,agv调度服务,第一版配置vagrant虚拟机盒子和第一版的配置文档。以及vmware 虚拟机安装的流程和步骤,配置等项目的工作交接,新同事在改项目。所以没有完整将流程跑起来自己测试,已经整理好并以文件格式发送给新同事。agv项目:远程现场调试了一些权限问题,其他暂无反馈健康诊所项目:完善项目后台和客户提出的导出用户部分信息。修复测试提出的界面展示问题以及后台因为其他功能影响没有测到地方。处理小程序的对接出现的错误问题'));

        $a ='time[3110]=1607585410&question[3110]=B&time[3111]=1607585410&question[3111]=B&time[3112]=1607585429&question[3112]=C&time[3113]=1607585437&question[3113]=A&time[3114]=1607585447&question[3114]=A&time[3115]=1607585453&question[3115]=B&time[3116]=1607585468&question[3116]=B&time[3117]=1607585477&question[3117]=D&time[3118]=1607585482&question[3118]=B&time[3119]=1607585492&question[3119]=A&time[3120]=1607585502&question[3120]=C&time[3121]=1607585508&question[3121]=A&time[3122]=1607585514&question[3122]=D&time[3123]=1607585523&question[3123]=A&time[3124]=1607585529&question[3124]=D&time[3125]=1607585532&question[3125]=A&time[3126]=1607585538&question[3126]=D&time[3127]=1607585543&question[3127]=D&time[3128]=1607585547&question[3128]=C&time[3129]=1607585555&question[3129]=B&time[3130]=1607585562&question[3130]=A&time[3131]=1607585566&question[3131]=B&time[3132]=1607585569&question[3132]=C&time[3133]=1607585574&question[3133]=D&time[3134]=1607585578&question[3134]=B';


        $arr =  explode('&',$a);
        foreach($arr as $k=>&$v){

            if($k == 0 || $k%2==0){
                $tmp = explode('=',$v);
                $tmp[1] = time()+ rand(10,50000);
                $v = implode('=',$tmp);
            }
        }

        echo implode('&',$arr);
    }
}
