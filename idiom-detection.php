<?php

function is_idiom($string)
{
    if (in_array($string, array('一事無成','一毛不拔','一無是處','一目十行','不近人情','九牛一毛','劍拔弩張','君臨天下','哀兵必勝','哀鴻遍野','屢敗屢戰','恩重如山','愛不釋手','愛屋及烏','愛莫能助','按兵不動','按部就班','明目張膽','永無寧日','溫故知新','無所事事','百年樹人','耳目一新','背水一戰','苦中作樂','觸景生情','觸目驚心','避重就輕','雞毛蒜皮','馬不停蹄','驕兵必敗'))) {
        return true;
    }
    return false;
}
