<?php

namespace App\Http\Controllers;

use Symfony\Component\Yaml\Yaml;

class YamlController extends Controller
{
    public function parse()
    {
        $value = Yaml::parseFile(base_path('app.yml'));
        echo '版本號：' . $value['current']['major'] . '.' . $value['current']['minor'] . '.' . $value['current']['patch'] . PHP_EOL;
        if ($value['cache']['enabled']) { echo '快取金鑰：' . $value['cache']['key'] . PHP_EOL; }
        echo '建置號：' . $value['build']['number'] . PHP_EOL;
    }
}
