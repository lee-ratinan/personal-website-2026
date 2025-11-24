<?php
/**
 * Format years
 * @param int[] $input_years array of int, use 0 for 'present'
 * @param string $locale accept all acceptable locales in this system
 * @param string $separator mainly accept ', ' and ' - ', the rest will not get fixed by the locale
 * @return string
 */
function calculate_years (array $input_years, string $locale, string $separator = ', '): string
{
    $adjustment = 0;
    $format     = "X";
    $now        = 'Present';
    // most settings
    if ('th' == $locale) {
        $adjustment = 543;
        $format     = "ปี X";
        $now        = 'ปัจจุบัน';
    } else if ('zh-TW' == $locale) {
        $adjustment = -1911;
        $format     = "X年";
        $now        = '現在';
    } else if ('ja' == $locale) {
        $format     = "X年";
        $now        = '現在';
    } else if ('en-SHAW' == $locale) {
        $now        = '𐑐𐑮𐑧𐑟𐑩𐑯𐑑';
    }
    // fix separators
    if (', ' == $separator && in_array($locale, ['zh-TW', 'ja'])) {
        $separator = '、';
    } else if (' - ' == $separator && 'ja' == $locale) {
        $separator = ' 〜 ';
    }
    $output_years = [];
    foreach ($input_years as $year) {
        if (0 == $year) {
            $output_years[] = $now;
        } else {
            $year = intval($year) + $adjustment;
            $output_years[] = str_replace('X', $year, $format);
        }
    }
    return implode($separator, $output_years);
}