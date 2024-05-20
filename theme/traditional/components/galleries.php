<?php



function generateImage(array $imgs, string $className)
{
    $galery_path = "images/galery/";

    $galery = <<<GALLERY
    <!-- gallery -->
    
        <div id="gallery-container" class="overflow-y-auto flex flex-wrap max-w-[30rem] mx-auto">
    GALLERY;


    $lastIndex = count($imgs) - 1;

    foreach ($imgs as $i => $img) {
        $path = "$galery_path$img";

        if ($i == $lastIndex) {
            $width = ($i == 4 || $i == 5) ? 66.67 : 33.333;
            $height = ($i == 3 || $i == 6) ? 129 : 100;

            $galery .= addImage($path, $width, $height, $className);
            $galery .= <<<END
        </div>
            </div>
        </div>
    </li>
END;
        } elseif ($i == 3 || $i == 6) {
            $galery .= addImage($path, 33.333, 129, $className);
        } elseif ($i == 4 || $i == 5) {
            $galery .= addImage($path, 66.67, 129, $className);
        } else {
            $galery .= addImage($path, 33.333, 100, $className);
        }
    }

    $galery .= <<<FOOTER
    </div>
FOOTER;

    return $galery;
}

function addImage($path, $width, $height, $className)
{
    return <<<HTML
    <div style="width: $width%; overflow: hidden; padding: 4px" class="animate__animated animate__zoomIn animate__slower">
        <div style="overflow: hidden; width: 100%; height: {$height}px">
            <img src="$path" style="width: 100%; height: 100%; object-fit: cover" class="lightbox {$className} object-cover hover:brightness-75 transition-all" loading="lazy"/>
        </div>
    </div>
    HTML;
}


?>

<div class="grid grid-cols-[repeat(3,min-content)]" hidden></div>