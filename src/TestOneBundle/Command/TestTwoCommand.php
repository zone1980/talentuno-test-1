<?php

namespace App\TestOneBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\TestOneBundle\Models\Order;
use App\TestOneBundle\Models\Invoice;
use App\TestOneBundle\Connectors\DefaultConnector;

class TestTwoCommand extends Command {
    /**
     * {@inheritDoc}
     */
    protected function configure() {
        $this->setName('test:command:two');
    }

    /**
     * Executes the command
     * First it calls the command one to output the results of it, than outputs the new Models
     * @param InputInterface $input
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
        $command = $this->getApplication()->find('test:command:one');
        
        $arguments = [
            'command' => 'test:command:one'
        ];
        
        $greetInput = new ArrayInput($arguments);
        $returnCode = $command->run($greetInput, $output);
        
        $connector = new DefaultConnector($output);
        
        $orders = Order::findAll();
        $invoices = Invoice::findAll();
        
        $connector->sendData(Order::$url, $orders);
        $connector->sendData(Invoice::$url, $invoices);
    }

}