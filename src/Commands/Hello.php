<?php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Hello extends Command
{

    protected function configure()
    {
        // ...
        $this->setName('hello:echo')
            ->setDescription('hello world')
            ->setHelp('...hellp...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('hello world!');
    }
}