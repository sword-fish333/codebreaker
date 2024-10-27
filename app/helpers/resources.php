<?php

function emoji($word): bool
{
    if (!$word) return false;
    $codepoint = mb_ord($word, 'UTF-8');

    // Emoji code point ranges
    return (
        ($codepoint >= 0x1F600 && $codepoint <= 0x1F64F) || // Emoticons
        ($codepoint >= 0x1F300 && $codepoint <= 0x1F5FF) || // Misc Symbols and Pictographs
        ($codepoint >= 0x1F680 && $codepoint <= 0x1F6FF) || // Transport and Map Symbols
        ($codepoint >= 0x1F1E6 && $codepoint <= 0x1F1FF) || // Regional Indicator Symbols
        ($codepoint >= 0x2600 && $codepoint <= 0x26FF)   || // Misc symbols
        ($codepoint >= 0x2700 && $codepoint <= 0x27BF)   || // Dingbats
        ($codepoint >= 0x1F900 && $codepoint <= 0x1F9FF) || // Supplemental Symbols and Pictographs
        ($codepoint >= 0x1FA70 && $codepoint <= 0x1FAFF)    // Symbols and Pictographs Extended-A
    );
}
