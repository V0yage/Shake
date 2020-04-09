<?php
    $allowFilesFormats = ['jpg', 'png', 'gif'];
    $uploadDir = __DIR__ . '/uploads';

    function uploadFile(string $fileSign): ?string {
        global $allowFilesFormats;
        global $uploadDir;

        $file = $_FILES[$fileSign];
        $fileExt = pathinfo($file['name'], PATHINFO_EXTENSION);
        $uploadFilePath = $uploadDir . '/' . $file['name'];

        if (!file_exists($uploadDir)) {
            mkdir($uploadDir);
        }

        if (!in_array($fileExt, $allowFilesFormats)) {
            $error = 'File extension error';
        } elseif ($file['error'] !== UPLOAD_ERR_OK) {
            $error = 'Upload error 1';
        } elseif (file_exists($uploadFilePath)) {
            $error = 'File exists error';
        } elseif (!move_uploaded_file($file['tmp_name'], $uploadFilePath)) {
            $error = 'Upload error 2';
        }

        return $error ?? null;
    }
