<?php

namespace App\TestOneBundle\Interfaces;

interface ConnectorInterface {
    /**
     * @param string $url
     * @param array $data
     */
    public function sendData(string $url, array $data): void;
}