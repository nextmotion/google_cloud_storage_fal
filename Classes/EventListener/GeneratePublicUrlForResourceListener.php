<?php

declare(strict_types=1);

namespace Nextmotion\GoogleCloudStorageDriver\EventListener;

/*
 * This file is part of TYPO3 CMS-based extension "google_cloud_storage_fal" by next.motion.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

use TYPO3\CMS\Core\Resource\Event\GeneratePublicUrlForResourceEvent;

class GeneratePublicUrlForResourceListener
{
    public function __invoke(GeneratePublicUrlForResourceEvent $event): void
    {
        $event->setPublicUrl(
            $event->getDriver()->getPublicUrl(
                $event->getResource()->getIdentifier()
            )
        );
    }
}
