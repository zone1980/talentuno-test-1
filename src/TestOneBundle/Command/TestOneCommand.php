<?php

namespace App\TestOneBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\TestOneBundle\Connectors\DefaultConnector;
use App\TestOneBundle\Models\Cart;
use App\TestOneBundle\Models\Product;
use App\TestOneBundle\Models\User;

class TestOneCommand extends Command {
    /**
     * {@inheritDoc}
     */
    protected function configure() {
        $this->setName('test:command:one');
    }
    
    /**
     * Executes the command
     * 
     * {@inheritDoc}
     * @see \Symfony\Component\Console\Command\Command::execute()
     */
    protected function execute(InputInterface $input, OutputInterface $output) {
        $connector = new DefaultConnector($output);
        
        $carts = Cart::findAll();
        $products = Product::findAll();
        $users = User::findAll();
        
        $connector->sendData(Cart::$url, $carts);
        $connector->sendData(Product::$url, $products);
        $connector->sendData(User::$url, $users);
    }
}