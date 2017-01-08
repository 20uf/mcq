<?php

/*
 * This file is part of the mcq project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mcq\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class McqCommand
 *
 * @author Michael COULLERET <michael@coulleret.pro>
 */
class McqCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('mcq:start')
            ->setDescription('Start mcq.')
            ->setHelp("This command run multiple choice test")
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Run mcq',
            '============',
            '',
        ]);
    }
}
