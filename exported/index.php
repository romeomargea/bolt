<?php
require_once 'config.php';
require_once 'functions.php';

// Get data from database
$sliderImages = getSliderImages($pdo);
$slideshowImages = getSlideshowImages($pdo);
$hero = getHero($pdo);
$galleryImages = getGalleryImages($pdo);
$features = getFeatures($pdo);

// Include the template
include 'templates/header.php';
include 'templates/navigation.php';
?>

<!-- Slider -->
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="center: true">
    <ul class="uk-slider-items uk-grid uk-grid-match" uk-height-viewport="offset-top: true; offset-bottom: 30">
        <?php foreach($sliderImages as $image): ?>
        <li class="uk-width-3-4">
            <div class="uk-cover-container">
                <img src="<?php echo htmlspecialchars($image->url); ?>" alt="<?php echo htmlspecialchars($image->title); ?>" uk-cover>
                <div class="uk-position-center uk-panel"><h1><?php echo htmlspecialchars($image->title); ?></h1></div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
</div>

<!-- Slideshow -->
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="animation: push; autoplay: true">
    <ul class="uk-slideshow-items">
        <?php foreach($slideshowImages as $image): ?>
        <li>
            <img src="<?php echo htmlspecialchars($image->url); ?>" alt="<?php echo htmlspecialchars($image->title); ?>" uk-cover>
            <div class="uk-position-center uk-position-small uk-text-center uk-light">
                <h2 class="uk-margin-remove"><?php echo htmlspecialchars($image->title); ?></h2>
                <p class="uk-margin-remove"><?php echo htmlspecialchars($image->description); ?></p>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    <div class="uk-position-bottom-center uk-position-small">
        <ul class="uk-dotnav">
            <?php foreach($slideshowImages as $key => $image): ?>
            <li uk-slideshow-item="<?php echo $key; ?>"><a href="#">Item <?php echo $key + 1; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<!-- Hero Section -->
<div class="uk-section uk-section-primary uk-light uk-padding-large">
    <div class="uk-container uk-text-center">
        <h1 class="uk-heading-medium"><?php echo htmlspecialchars($hero->title); ?></h1>
        <p class="uk-text-lead"><?php echo htmlspecialchars($hero->description); ?></p>
        <button class="uk-button uk-button-default uk-margin-right"><?php echo htmlspecialchars($hero->primary_button); ?></button>
        <button class="uk-button uk-button-secondary"><?php echo htmlspecialchars($hero->secondary_button); ?></button>
    </div>
</div>

<!-- Gallery -->
<div class="uk-section">
    <div class="uk-container">
        <h2 class="uk-heading-line uk-text-center"><span>Photo Gallery</span></h2>
        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
            <?php foreach($galleryImages as $image): ?>
            <div>
                <a class="uk-inline" href="<?php echo htmlspecialchars($image->url); ?>" data-caption="<?php echo htmlspecialchars($image->title); ?>">
                    <img src="<?php echo htmlspecialchars($image->thumbnail); ?>" alt="<?php echo htmlspecialchars($image->title); ?>">
                    <div class="uk-position-center uk-overlay uk-overlay-primary">
                        <span><?php echo htmlspecialchars($image->title); ?></span>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Features Grid -->
<div class="uk-section">
    <div class="uk-container">
        <h2 class="uk-heading-line uk-text-center"><span>Our Features</span></h2>
        <div class="uk-child-width-1-3@m uk-grid-match" uk-grid>
            <?php foreach($features as $feature): ?>
            <div>
                <div class="uk-card uk-card-default uk-card-body uk-text-center">
                    <i class="icon-<?php echo htmlspecialchars($feature->icon); ?> uk-margin-bottom"></i>
                    <h3 class="uk-card-title"><?php echo htmlspecialchars($feature->title); ?></h3>
                    <p><?php echo htmlspecialchars($feature->description); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>