<?php
    $mediaSrcDir = '/php/media_library/uploads';

    function getMediaItems() {
        global $mediaSrcDir;

        $mediaItems = scandir(__DIR__ . '/uploads');
        array_shift($mediaItems);
        array_shift($mediaItems);

        for ($key = 0; $key < count($mediaItems); $key++) {
            $mediaItems[$key] = getMediaItemPath($mediaItems[$key]);
        }

        return $mediaItems;
    }

    function getMediaItemPath($mediaItemName) {
        global $mediaSrcDir;
        return $mediaSrcDir . '/' . $mediaItemName;
    }