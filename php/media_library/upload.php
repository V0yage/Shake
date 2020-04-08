<?php
    $allowFilesFormats = ['jpg', 'png', 'gif'];
    $uploadDir = __DIR__ . '/upload';

    function uploadFile(string $fileSign) ?string {
        $file = $_FILES[$fileSign];
        $fileExt = pathinfo($file['name'], PATHINFO_EXTENSION);
        $uploadFilePath = $uploadDir . '/' . $file['name'];

        if (!in_array($fileExt, $allowFilesFormats)) {
            $error = 'File extension error';
        } elseif ($file['error'] !== UPLOAD_ERR_OK) {
            $error = 'Upload error';
        } elseif (file_exist($uploadFilePath)) {
            $error = 'File exists error';
        } elseif (!move_uploaded_file($file['tmp_name'], $uploadFilePath)) {
            $error = 'Upload error';
        } else {
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir);
            }
        }

        return $error ?? null;
    }
