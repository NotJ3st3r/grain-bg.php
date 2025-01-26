<?php
$gradients = '';
for ($i = 0; $i < 8; $i++) {
    $x = rand(0, 100) . '%';
    $y = rand(0, 100) . '%';
    $hue = rand(0, 360);
    $saturation = rand(25, 75) . '%';
    $lightness = rand(50, 85) . '%';
    
    $gradients .= "radial-gradient(at $x $y, hsl($hue, $saturation, $lightness) 0px, transparent 50%),";
}

// Remove the trailing comma
$gradients = rtrim($gradients, ',');
?>
<style>
.background {
    z-index: -10;
    overflow: hidden;
    height: 110vh;
    width: 110vw;
    position: fixed;
    inset: 50%;
    transform: translate(-50%, -50%);
    
    background-color: lightgray; 
    background-image: <?= $gradients ?>;
    filter: grayscale(1) invert(1);
}

.background:after{
    content: '';
    position: fixed;
    height: 100%;
    width: 100%;
    background-image: url(data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTAwMCA1MDAwIiB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnPgogIDxmaWx0ZXIgaWQ9J25vaXNlRmlsdGVyJz4KICAgIDxmZVR1cmJ1bGVuY2UgCiAgICAgIHR5cGU9J2ZyYWN0YWxOb2lzZScgCiAgICAgIGJhc2VGcmVxdWVuY3k9JzAuNjUnIAogICAgICBudW1PY3RhdmVzPSczJyAKICAgICAgc3RpdGNoVGlsZXM9J3N0aXRjaCcgLz4KICA8L2ZpbHRlcj4KCiAgPHJlY3Qgd2lkdGg9JzEwMCUnIGhlaWdodD0nMTAwJScgZmlsdGVyPSd1cmwoI25vaXNlRmlsdGVyKScgLz4KPC9zdmc+Cg==);
    opacity: 0.5;
}
</style>

<div class="background"></div>
