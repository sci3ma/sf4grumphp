<?php

declare(strict_types=1);

namespace MH\SymfonyGrumPHP\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Filesystem\Filesystem;

/**
 * @author Marcin Harasim <marcin.harasim@gmail.com>
 */
final class UninstallCommand extends AbstractCommand
{
    /**
     * {@inheritdoc}
     */
    protected static $defaultName = 'uninstall';

    /**
     * {@inheritdoc}
     */
    protected function configure(): void
    {
        $this
            ->setDescription('Remove configuration files of SymfonyGrumPHP')
            ->setHelp('The <info>uninstall</info> command removes preconfigured files from root folder of a project.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');
        $question = new ConfirmationQuestion('Do you want to remove configuration files? (yes/no) [yes]: ');
        if ($helper->ask($input, $output, $question)) {
            $filesystem = new Filesystem();
            foreach (self::CONF_FILES as $file) {
                $destinationFile = self::normalizeDestinationFile($file);
                $filesystem->remove($destinationFile);
                $filesystem->remove(sprintf('%s.scbak', $file));
                $output->writeln(sprintf('Files [%s, %s.scbak] have been deleted.', $file, $file));
            }
        }

        return 0;
    }
}
