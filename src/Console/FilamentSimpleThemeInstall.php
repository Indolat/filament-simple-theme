<?php

namespace Indolat\FilamentSimpleTheme\Console;

use Illuminate\Console\Command;
class FilamentSimpleThemeInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'filament-simple-theme:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install package and publish assets';

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Publish Vendor Assets');
        
        $viteConfig = __DIR__ . '/../../publish/vite.config.js';
        if(\Illuminate\Support\Facades\File::exists($viteConfig)){
            \Illuminate\Support\Facades\File::copy($viteConfig, base_path('vite.config.js'));
        }
        
        $packageJson = __DIR__ . '/../../publish/package.json';
        if(\Illuminate\Support\Facades\File::exists($packageJson)){
            \Illuminate\Support\Facades\File::copy($packageJson, base_path('package.json'));
        }

        $this->call("filament:optimize");
        $this->info('Filament Simple Theme installed successfully. please run npm install && npm run dev');
    }
}
