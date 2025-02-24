<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudinary PHP Quickstart</title>
</head>

<body>
    <h1>Cloudinary PHP Quickstart</h1>
</body>

</html>


<?php
require 'vendor/autoload.php'; // Load Composer dependencies

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Admin\AdminApi;
use Cloudinary\Api\Exception\ApiError;
use Cloudinary\Api\Upload\UploadApi;



Configuration::instance([
    'cloud' => [
        'cloud_name' => 'dukphrfdb',
        'api_key'    => '729782969534866',
        'api_secret' => 'nmjxjiR2rNPmnQl5cHo6NTZXeDQ'
    ],
    'url' => [
        'secure' => true
    ]
]);

try {
    // Try to get account details
    $admin = new AdminApi();
    $response = $admin->ping();

    echo "✅ Successfully connected to Cloudinary!";

    // Use the UploadApi class for uploading assets

    // Upload the image
    $imagePath = __DIR__ . '/lion.jpg';

    // Upload the local image
    $upload = new UploadApi();
    $response = $upload->upload($imagePath, [
        'public_id' => 'duck_sample', // You can change this
        'use_filename' => true,
        'overwrite' => true
    ]);

    // Show response
    echo '<pre>';
    echo json_encode($response, JSON_PRETTY_PRINT);
    echo '</pre>';

    // Display the uploaded image
    echo "<img src='" . $response['secure_url'] . "' alt='Uploaded Image'>";
} catch (ApiError $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>