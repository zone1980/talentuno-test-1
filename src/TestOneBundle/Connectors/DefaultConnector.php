<?php 

namespace App\TestOneBundle\Connectors;

use App\TestOneBundle\Interfaces\ConnectorInterface;

class DefaultConnector implements ConnectorInterface {
    
    protected $output;
    
    public function __construct($output) {
        $this->output = $output;
    }
    
    public function sendData(string $url, array $data) {
        $section = $this->output->section();
        $section->writeln('URL: ' . $url);
        $section->writeln(var_dump($data));
    }
}