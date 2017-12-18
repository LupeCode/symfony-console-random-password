<?php

namespace RndPwd;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RandomCommand extends Command
{

    protected function configure()
    {
        $this->setName("gen")
             ->setDescription("Generates a randomized password")
             ->addArgument('Password Length', InputArgument::REQUIRED, 'The length of the resulting password')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $RP  = new RandomPassword();
        $pwd = $RP::generateRandomPassword($input->getArgument('Password Length'));
        $output->writeln($pwd);
    }
}
