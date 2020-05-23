<?php

namespace maxiorphy\star_rating;


class ShowStars extends \yii\base\Widget

{
    public $rating = 'rating';

    public function run()
    {
        $rate = round($this->rating);

        for ($i = 0; $i < $rate - 1; $i++) {
            echo '<i class="fa fa-star gold-star"></i>';
        }
        if ($rate - $this->rating >= 0.5) {
            echo '<i class="fa fa-star-half-alt gold-star" ></i>';
        } elseif ($this->rating == 0) {
        } elseif ($rate - $this->rating <= 0.5) {
            echo '<i class="fa fa-star gold-star" ></i>';
        } else if ($rate - $this->rating >= 0 && $this->rating != 0) {
            echo '<i class="fa fa-star gold-star" ></i>';
        } else {
            echo '<i class="fa fa-star grey-star" ></i>';
        }
        for ($i = 0; $i < 5 - $rate; $i++) {
            echo '<i class="fa fa-star grey-star"></i>';
        }


    }

}
