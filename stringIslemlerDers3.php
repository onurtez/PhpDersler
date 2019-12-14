<?php
$str = " ProgramYazar.Com 'a için ders niteliği taşıyan makalaler serisi. String işleme  Örnenek Makale  10 \ %s  ?  ";
print_r(explode(" ", $str));
// Çıktı : Array ( [0] => [1] => ProgramYazar.Com [2] => 'a [3] => için [4] => ders [5] => niteliği [6] => taşıyan [7] => makalaler [8] => serisi. [9] => String [10] => işleme [11] => [12] => Örnenek [13] => Makale [14] => [15] => 10 [16] => \ [17] => %s [18] => [19] => ? [20] => [21] => )