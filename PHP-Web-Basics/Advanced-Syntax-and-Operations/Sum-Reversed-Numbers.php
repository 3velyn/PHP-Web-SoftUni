<?php

echo array_reduce(explode(' ', readline()),
    function ($sum, $el) {
        return $sum += intval(strrev($el));
    }, 0);
