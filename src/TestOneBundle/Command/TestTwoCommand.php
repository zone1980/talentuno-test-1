<?php

namespace App\TestOneBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestTwoCommand extends Command {
    /**
     * {@inheritDoc}
     */
    protected function configure() {
        $this->setName('test:command:two');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {

    }

}