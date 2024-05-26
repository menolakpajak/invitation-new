<?php



function generateImage(array $imgs, string $className)
{
    $galery_path = "images/galery/";
    $BIG_HEIGHT = "312/129";
    $NORMAL_HEIGHT = "151/100";

    $galery = <<<GALLERY
    <!-- gallery -->
    
        <div id="gallery-container" class="overflow-y-auto flex flex-wrap container mx-auto">
    GALLERY;


    $lastIndex = count($imgs) - 1;

    foreach ($imgs as $i => $img) {
        $path = "$galery_path$img";

        if ($i == $lastIndex) {
            $width = ($i == 4 || $i == 5) ? 66 : 33;
            $height = ($i == 3 || $i == 6) ? $BIG_HEIGHT : $NORMAL_HEIGHT;

            $galery .= addImage($path, $width, $height, $className);
            $galery .= <<<END
        </div>
            </div>
        </div>
    </li>
END;
        } elseif ($i == 3 || $i == 6) {
            $galery .= addImage($path, 33, $BIG_HEIGHT, $className);
        } elseif ($i == 4 || $i == 5) {
            $galery .= addImage($path, 66, $BIG_HEIGHT, $className);
        } else {
            $galery .= addImage($path, 33, $NORMAL_HEIGHT, $className);
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
    <div style="width: $width%; overflow: hidden; padding: 4px">
        <div style="overflow: hidden; width: 100%; hright: auto; aspect-ratio: $height" class="h-full">
            <img src="$path" style="width: 100%;" class="lightbox {$className} h-full block object-cover object-[center_center] hover:brightness-75 transition-all" loading="lazy"/>
        </div>
    </div>
    HTML;
}


?>

<div class="grid grid-cols-[repeat(3,min-content)]" hidden></div>