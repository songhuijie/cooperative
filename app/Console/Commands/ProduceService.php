<?php

namespace App\Console\Commands;

use App\Tools\KafkaTool;
use Illuminate\Console\Command;

class ProduceService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'produce';

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
        //kafka消费

        $topic = env('TOPIC_TEST'); //配置在env中
        $url = env('KAFKA_URL_TEST'); //配置在env中

        $value =
            [
                'code' => 'test',
                'data_type' => 'personal',
                'action' => 'update',
                'data' =>
                    [
                        'id' => 1,
                        'name' => 'tom',
                        'gender' => 2
                    ],
                'redirect_url' => '',
                'operator' => 'system',
            ];
        $value = json_encode ($value, JSON_FORCE_OBJECT );
        $kafka = new KafkaTool();
        $kafka->Producer($topic, $value , $url);

    }
}
