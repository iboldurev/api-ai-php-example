<?php

namespace ApiDemo\Command;

use Api\Client;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

/**
 * Class QueryCommand.
 */
class QueryCommand extends Command
{
    protected function configure()
    {
        $this->setName('api:query')
            ->setDescription('The query requests return structured data in JSON format with an action and parameters for that action.')
            ->addArgument('access_token', InputArgument::REQUIRED, 'Access token');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $access_token = $input->getArgument('access_token');
        $client = new Client($access_token);

        ask:

        $helper = $this->getHelper('question');
        $messagePrompt = new Question('>>> ');

        $message = $helper->ask($input, $output, $messagePrompt);
        $query = $client->get('query', [
            'query' => $message,
        ]);
        $response = json_decode((string) $query->getBody(), true);

        $output->writeln('<info>+ Response body :</info>');
        $output->writeln('<comment>'.json_encode($response, JSON_PRETTY_PRINT).'</comment>');

        goto ask;
    }
}
