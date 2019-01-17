<?php

namespace App\TestOneBundle\Interfaces;

interface ManagerInterface {
    /**
     * @return array
     */
    public function findAll(): array;
}