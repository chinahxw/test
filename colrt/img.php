<?php

$rr = '货号,款号,基因码,手寸,长度,主石粒数,主石重,副石粒数,副石重,加工商编号,总重,净度,颜色,证书号,国际证书,主石切工,标签备注,主石,副石,主成色,饰品分类,款式分类,名称,石3副石,石3粒数,石3重,石4副石,石4粒数,石4重,石5副石,石5粒数,石5重,主成色重,副成色,副成色重,买入工费,计价工费,加价率,最新零售价,模号,品牌,证书数量,配件数量,时尚款,系列,属性,类别,成本价,入库日期,加价率代码,主石粒重,副石粒重,标签手寸,字印,货币符号零售价,新成本价,新零售价,一口价,标价,定制价,A,B,C,D,E,F,G,H,I,HB_G,HB_H,样板可做镶口范围';


$data = explode(",", $rr);
$str = '';
$ss = '<td style="text-align: center;">';
foreach ($data as $key => $value) {
    $str.=$ss.$value.'</td><br/>';
}
echo $str;