<?php

namespace Webkul\GraphQLAPI\Console\Commands;

use Illuminate\Console\Command;
use Webkul\GraphQLAPI\Providers\GraphQLAPIServiceProvider;
use Illuminate\Encryption\Encrypter;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bagisto-graphql:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installing Bagisto GraphQL API Extension';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->warn('Step1: Generating JWT Secret token...');
        $this->call('jwt:secret');

        $this->warn('Step2: Migrating Notification tables into database...');
        $this->call('migrate');

        $this->warn('Step3: Publishing GraphQLAPI Provider File...');
        $this->info($this->call('vendor:publish', [
            '--provider' => GraphQLAPIServiceProvider::class,
            '--force'    => true,
        ]));

        $key = 'base64:' . base64_encode(
            Encrypter::generateKey($this->laravel['config']['app.cipher'])
        );

        $envPath = base_path('.env');
        $envContent = file_get_contents($envPath);

        if (preg_match('/^MOBIKUL_API_KEY=.*$/m', $envContent)) {
            // Replace existing key
            $envContent = preg_replace(
            '/^MOBIKUL_API_KEY=.*$/m',
            "MOBIKUL_API_KEY={$key}",
            $envContent
            );
            file_put_contents($envPath, $envContent);
        } else {
            // Append new key
            file_put_contents($envPath, PHP_EOL . "MOBIKUL_API_KEY={$key}" . PHP_EOL, FILE_APPEND);
        }

        $this->warn('Step4: MOBIKUL_API_KEY has been generated and added to .env file.');

        $this->warn('Step: Publishing Lighthouse Provider File...');
        $this->info(shell_exec('php artisan vendor:publish --provider="Nuwave\Lighthouse\LighthouseServiceProvider" --tag=config'));

        $this->warn('Step: Publishing GraphiQL Provider File...');
        $this->info(shell_exec('php artisan vendor:publish --provider="MLL\GraphiQL\GraphiQLServiceProvider" --tag=config'));

        $this->warn('Step: Publishing GraphiQL Configuration File...');
        $this->info(shell_exec('php artisan vendor:publish --tag=graphiql-config'));

        $this->warn('Step: Clearing the cache...');
        $this->call('optimize:clear');

        $this->comment('Success: Bagisto GraphQL API has been configured successfully.');
    }
}
