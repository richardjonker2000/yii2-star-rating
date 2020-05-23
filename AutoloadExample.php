<?php

namespace maxiorphy\star_rating;

/**
 * This is just an example.
 */
class AutoloadExample extends \yii\base\Widget
{
    public function run($rating)
    {
        $rate = round($rating);
        for ($i = 0; $i < $rate - 1; $i++) {
            echo '<i class="fa fa-star gold-star"></i>';
        }
        if ($rate - $rating >= 0.5) {
            echo '<i class="fa fa-star-half-alt gold-star" ></i>';
        } elseif ($rating == 0) {
        } elseif ($rate - $rating <= 0.5) {
            echo '<i class="fa fa-star gold-star" ></i>';
        } else if ($rate - $rating >= 0 && $rating != 0) {
            echo '<i class="fa fa-star gold-star" ></i>';
        } else {
            echo '<i class="fa fa-star grey-star" ></i>';
        }
        for ($i = 0; $i < 5 - $rate; $i++) {
            echo '<i class="fa fa-star grey-star"></i>';
        }
        echo "Hello!";
    }
}
