<?php

declare(strict_types=1);

namespace AssetGrabber\Factories\Themes;

use AssetGrabber\Commands\Themes\MetaDownloadThemesCommand;
use AssetGrabber\Services\Themes\ThemeListService;
use Laminas\ServiceManager\ServiceManager;

class MetaDownloadThemesCommandFactory
{
    public function __invoke(ServiceManager $serviceManager): MetaDownloadThemesCommand
    {
        $listSerivce = $serviceManager->get(ThemeListService::class);
        return new MetaDownloadThemesCommand($listSerivce);
    }
}