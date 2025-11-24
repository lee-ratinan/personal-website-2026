<?php
function calculate_years (array $input_years, string $locale, string $separator = ', '): string
{
    $adjustment = 0;
    $format     = "";
    if ('th' == $locale) {
        $adjustment = 543;
        $format     = "ปี X";
    } else if ('zh-TW' == $locale) {
        $adjustment = -1911;
        $format     = "X年";
    } else if ('ja' == $locale) {
        $format     = "X年";
    }
    $output_years = [];
    foreach ($input_years as $year) {
        $year += $adjustment;
        $output_years[] = str_replace('X', $year, $format);
    }
    return implode($separator, $output_years);
}