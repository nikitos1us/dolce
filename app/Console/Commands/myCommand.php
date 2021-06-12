<?php

namespace App\Console\Commands;

use App\Models\Assort;
use Illuminate\Console\Command;

class myCommand extends Command
{

    protected $signature = 'mycommand:name';
    protected $description = 'Command dome!';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Assort::truncate();

        $row = 1;
        if (($handle = fopen("resources/sass/files/inventoryAssorty.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

                foreach ($data as $dt) {
                    $el = new Assort();

                    $l = explode(';', $dt);

                    $el->title = $l[0];
                    $el->price = $l[1];
                    $el->save();
                    echo "Insertion done!" . "\n";
                }

                $row++;
            }
            fclose($handle);


        }
    }
}
