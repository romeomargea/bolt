<?php
function getSliderImages($pdo) {
    return $pdo->query("SELECT * FROM slider_images")->fetchAll(PDO::FETCH_OBJ);
}

function getSlideshowImages($pdo) {
    return $pdo->query("SELECT * FROM slideshow_images")->fetchAll(PDO::FETCH_OBJ);
}

function getHero($pdo) {
    return $pdo->query("SELECT * FROM heroes LIMIT 1")->fetch(PDO::FETCH_OBJ);
}

function getGalleryImages($pdo) {
    return $pdo->query("SELECT * FROM gallery_images")->fetchAll(PDO::FETCH_OBJ);
}

function getFeatures($pdo) {
    return $pdo->query("SELECT * FROM features")->fetchAll(PDO::FETCH_OBJ);
}
?>