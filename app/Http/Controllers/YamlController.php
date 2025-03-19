<?php

namespace App\Http\Controllers;

use Symfony\Component\Yaml\Yaml;

class YamlController extends Controller
{
    public function parse()
    {
        $value = Yaml::parseFile(storage_path('files/app.yml'));
        echo __('Version number: ') . $value['current']['major'] . '.' . $value['current']['minor'] . '.' . $value['current']['patch'] . PHP_EOL;
        if ($value['cache']['enabled']) { echo __('Cache key: ') . $value['cache']['key'] . PHP_EOL; }
        echo __('Build number: ') . $value['build']['number'] . PHP_EOL;
    }
}
