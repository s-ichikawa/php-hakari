<?php
namespace Sichikawa\Hakari;

require_once(__DIR__ . '/../vendor/autoload.php');

class Hakari extends \Ubench
{
    public function json()
    {
        return json_encode([
            'elapsed_time' => $this->getTime(),
            'memory_peak' => $this->getMemoryPeak(),
            'memory_usage' => $this->getMemoryUsage()
        ]);
    }

    public function display()
    {
        echo $this->toString();
    }

    public function toString()
    {
        return <<< EOM
|elapsed time | {$this->getTime()}
|memory peak  | {$this->getMemoryPeak()}
|memory usage | {$this->getMemoryUsage()}

EOM;
    }
}

