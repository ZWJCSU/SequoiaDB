--TEST--
Test count_chars() function : basic functionality 
--FILE--
<?php

/* Prototype  : mixed count_chars  ( string $string  [, int $mode  ] )
 * Description: Return information about characters used in a string
 * Source code: ext/standard/string.c
*/


echo "*** Testing count_chars() : basic functionality ***\n";

$string = "Return information about characters used in a string";

var_dump(count_chars($string));
var_dump(count_chars($string, 0));
var_dump(count_chars($string, 1));
var_dump(count_chars($string, 2));
var_dump(count_chars($string, 3));
var_dump(bin2hex(count_chars($string, 4)));


?>
===DONE===
--EXPECTF--
*** Testing count_chars() : basic functionality ***
array(256) {
  [0]=>
  int(0)
  [1]=>
  int(0)
  [2]=>
  int(0)
  [3]=>
  int(0)
  [4]=>
  int(0)
  [5]=>
  int(0)
  [6]=>
  int(0)
  [7]=>
  int(0)
  [8]=>
  int(0)
  [9]=>
  int(0)
  [10]=>
  int(0)
  [11]=>
  int(0)
  [12]=>
  int(0)
  [13]=>
  int(0)
  [14]=>
  int(0)
  [15]=>
  int(0)
  [16]=>
  int(0)
  [17]=>
  int(0)
  [18]=>
  int(0)
  [19]=>
  int(0)
  [20]=>
  int(0)
  [21]=>
  int(0)
  [22]=>
  int(0)
  [23]=>
  int(0)
  [24]=>
  int(0)
  [25]=>
  int(0)
  [26]=>
  int(0)
  [27]=>
  int(0)
  [28]=>
  int(0)
  [29]=>
  int(0)
  [30]=>
  int(0)
  [31]=>
  int(0)
  [32]=>
  int(7)
  [33]=>
  int(0)
  [34]=>
  int(0)
  [35]=>
  int(0)
  [36]=>
  int(0)
  [37]=>
  int(0)
  [38]=>
  int(0)
  [39]=>
  int(0)
  [40]=>
  int(0)
  [41]=>
  int(0)
  [42]=>
  int(0)
  [43]=>
  int(0)
  [44]=>
  int(0)
  [45]=>
  int(0)
  [46]=>
  int(0)
  [47]=>
  int(0)
  [48]=>
  int(0)
  [49]=>
  int(0)
  [50]=>
  int(0)
  [51]=>
  int(0)
  [52]=>
  int(0)
  [53]=>
  int(0)
  [54]=>
  int(0)
  [55]=>
  int(0)
  [56]=>
  int(0)
  [57]=>
  int(0)
  [58]=>
  int(0)
  [59]=>
  int(0)
  [60]=>
  int(0)
  [61]=>
  int(0)
  [62]=>
  int(0)
  [63]=>
  int(0)
  [64]=>
  int(0)
  [65]=>
  int(0)
  [66]=>
  int(0)
  [67]=>
  int(0)
  [68]=>
  int(0)
  [69]=>
  int(0)
  [70]=>
  int(0)
  [71]=>
  int(0)
  [72]=>
  int(0)
  [73]=>
  int(0)
  [74]=>
  int(0)
  [75]=>
  int(0)
  [76]=>
  int(0)
  [77]=>
  int(0)
  [78]=>
  int(0)
  [79]=>
  int(0)
  [80]=>
  int(0)
  [81]=>
  int(0)
  [82]=>
  int(1)
  [83]=>
  int(0)
  [84]=>
  int(0)
  [85]=>
  int(0)
  [86]=>
  int(0)
  [87]=>
  int(0)
  [88]=>
  int(0)
  [89]=>
  int(0)
  [90]=>
  int(0)
  [91]=>
  int(0)
  [92]=>
  int(0)
  [93]=>
  int(0)
  [94]=>
  int(0)
  [95]=>
  int(0)
  [96]=>
  int(0)
  [97]=>
  int(5)
  [98]=>
  int(1)
  [99]=>
  int(2)
  [100]=>
  int(1)
  [101]=>
  int(3)
  [102]=>
  int(1)
  [103]=>
  int(1)
  [104]=>
  int(1)
  [105]=>
  int(4)
  [106]=>
  int(0)
  [107]=>
  int(0)
  [108]=>
  int(0)
  [109]=>
  int(1)
  [110]=>
  int(5)
  [111]=>
  int(3)
  [112]=>
  int(0)
  [113]=>
  int(0)
  [114]=>
  int(5)
  [115]=>
  int(3)
  [116]=>
  int(5)
  [117]=>
  int(3)
  [118]=>
  int(0)
  [119]=>
  int(0)
  [120]=>
  int(0)
  [121]=>
  int(0)
  [122]=>
  int(0)
  [123]=>
  int(0)
  [124]=>
  int(0)
  [125]=>
  int(0)
  [126]=>
  int(0)
  [127]=>
  int(0)
  [128]=>
  int(0)
  [129]=>
  int(0)
  [130]=>
  int(0)
  [131]=>
  int(0)
  [132]=>
  int(0)
  [133]=>
  int(0)
  [134]=>
  int(0)
  [135]=>
  int(0)
  [136]=>
  int(0)
  [137]=>
  int(0)
  [138]=>
  int(0)
  [139]=>
  int(0)
  [140]=>
  int(0)
  [141]=>
  int(0)
  [142]=>
  int(0)
  [143]=>
  int(0)
  [144]=>
  int(0)
  [145]=>
  int(0)
  [146]=>
  int(0)
  [147]=>
  int(0)
  [148]=>
  int(0)
  [149]=>
  int(0)
  [150]=>
  int(0)
  [151]=>
  int(0)
  [152]=>
  int(0)
  [153]=>
  int(0)
  [154]=>
  int(0)
  [155]=>
  int(0)
  [156]=>
  int(0)
  [157]=>
  int(0)
  [158]=>
  int(0)
  [159]=>
  int(0)
  [160]=>
  int(0)
  [161]=>
  int(0)
  [162]=>
  int(0)
  [163]=>
  int(0)
  [164]=>
  int(0)
  [165]=>
  int(0)
  [166]=>
  int(0)
  [167]=>
  int(0)
  [168]=>
  int(0)
  [169]=>
  int(0)
  [170]=>
  int(0)
  [171]=>
  int(0)
  [172]=>
  int(0)
  [173]=>
  int(0)
  [174]=>
  int(0)
  [175]=>
  int(0)
  [176]=>
  int(0)
  [177]=>
  int(0)
  [178]=>
  int(0)
  [179]=>
  int(0)
  [180]=>
  int(0)
  [181]=>
  int(0)
  [182]=>
  int(0)
  [183]=>
  int(0)
  [184]=>
  int(0)
  [185]=>
  int(0)
  [186]=>
  int(0)
  [187]=>
  int(0)
  [188]=>
  int(0)
  [189]=>
  int(0)
  [190]=>
  int(0)
  [191]=>
  int(0)
  [192]=>
  int(0)
  [193]=>
  int(0)
  [194]=>
  int(0)
  [195]=>
  int(0)
  [196]=>
  int(0)
  [197]=>
  int(0)
  [198]=>
  int(0)
  [199]=>
  int(0)
  [200]=>
  int(0)
  [201]=>
  int(0)
  [202]=>
  int(0)
  [203]=>
  int(0)
  [204]=>
  int(0)
  [205]=>
  int(0)
  [206]=>
  int(0)
  [207]=>
  int(0)
  [208]=>
  int(0)
  [209]=>
  int(0)
  [210]=>
  int(0)
  [211]=>
  int(0)
  [212]=>
  int(0)
  [213]=>
  int(0)
  [214]=>
  int(0)
  [215]=>
  int(0)
  [216]=>
  int(0)
  [217]=>
  int(0)
  [218]=>
  int(0)
  [219]=>
  int(0)
  [220]=>
  int(0)
  [221]=>
  int(0)
  [222]=>
  int(0)
  [223]=>
  int(0)
  [224]=>
  int(0)
  [225]=>
  int(0)
  [226]=>
  int(0)
  [227]=>
  int(0)
  [228]=>
  int(0)
  [229]=>
  int(0)
  [230]=>
  int(0)
  [231]=>
  int(0)
  [232]=>
  int(0)
  [233]=>
  int(0)
  [234]=>
  int(0)
  [235]=>
  int(0)
  [236]=>
  int(0)
  [237]=>
  int(0)
  [238]=>
  int(0)
  [239]=>
  int(0)
  [240]=>
  int(0)
  [241]=>
  int(0)
  [242]=>
  int(0)
  [243]=>
  int(0)
  [244]=>
  int(0)
  [245]=>
  int(0)
  [246]=>
  int(0)
  [247]=>
  int(0)
  [248]=>
  int(0)
  [249]=>
  int(0)
  [250]=>
  int(0)
  [251]=>
  int(0)
  [252]=>
  int(0)
  [253]=>
  int(0)
  [254]=>
  int(0)
  [255]=>
  int(0)
}
array(256) {
  [0]=>
  int(0)
  [1]=>
  int(0)
  [2]=>
  int(0)
  [3]=>
  int(0)
  [4]=>
  int(0)
  [5]=>
  int(0)
  [6]=>
  int(0)
  [7]=>
  int(0)
  [8]=>
  int(0)
  [9]=>
  int(0)
  [10]=>
  int(0)
  [11]=>
  int(0)
  [12]=>
  int(0)
  [13]=>
  int(0)
  [14]=>
  int(0)
  [15]=>
  int(0)
  [16]=>
  int(0)
  [17]=>
  int(0)
  [18]=>
  int(0)
  [19]=>
  int(0)
  [20]=>
  int(0)
  [21]=>
  int(0)
  [22]=>
  int(0)
  [23]=>
  int(0)
  [24]=>
  int(0)
  [25]=>
  int(0)
  [26]=>
  int(0)
  [27]=>
  int(0)
  [28]=>
  int(0)
  [29]=>
  int(0)
  [30]=>
  int(0)
  [31]=>
  int(0)
  [32]=>
  int(7)
  [33]=>
  int(0)
  [34]=>
  int(0)
  [35]=>
  int(0)
  [36]=>
  int(0)
  [37]=>
  int(0)
  [38]=>
  int(0)
  [39]=>
  int(0)
  [40]=>
  int(0)
  [41]=>
  int(0)
  [42]=>
  int(0)
  [43]=>
  int(0)
  [44]=>
  int(0)
  [45]=>
  int(0)
  [46]=>
  int(0)
  [47]=>
  int(0)
  [48]=>
  int(0)
  [49]=>
  int(0)
  [50]=>
  int(0)
  [51]=>
  int(0)
  [52]=>
  int(0)
  [53]=>
  int(0)
  [54]=>
  int(0)
  [55]=>
  int(0)
  [56]=>
  int(0)
  [57]=>
  int(0)
  [58]=>
  int(0)
  [59]=>
  int(0)
  [60]=>
  int(0)
  [61]=>
  int(0)
  [62]=>
  int(0)
  [63]=>
  int(0)
  [64]=>
  int(0)
  [65]=>
  int(0)
  [66]=>
  int(0)
  [67]=>
  int(0)
  [68]=>
  int(0)
  [69]=>
  int(0)
  [70]=>
  int(0)
  [71]=>
  int(0)
  [72]=>
  int(0)
  [73]=>
  int(0)
  [74]=>
  int(0)
  [75]=>
  int(0)
  [76]=>
  int(0)
  [77]=>
  int(0)
  [78]=>
  int(0)
  [79]=>
  int(0)
  [80]=>
  int(0)
  [81]=>
  int(0)
  [82]=>
  int(1)
  [83]=>
  int(0)
  [84]=>
  int(0)
  [85]=>
  int(0)
  [86]=>
  int(0)
  [87]=>
  int(0)
  [88]=>
  int(0)
  [89]=>
  int(0)
  [90]=>
  int(0)
  [91]=>
  int(0)
  [92]=>
  int(0)
  [93]=>
  int(0)
  [94]=>
  int(0)
  [95]=>
  int(0)
  [96]=>
  int(0)
  [97]=>
  int(5)
  [98]=>
  int(1)
  [99]=>
  int(2)
  [100]=>
  int(1)
  [101]=>
  int(3)
  [102]=>
  int(1)
  [103]=>
  int(1)
  [104]=>
  int(1)
  [105]=>
  int(4)
  [106]=>
  int(0)
  [107]=>
  int(0)
  [108]=>
  int(0)
  [109]=>
  int(1)
  [110]=>
  int(5)
  [111]=>
  int(3)
  [112]=>
  int(0)
  [113]=>
  int(0)
  [114]=>
  int(5)
  [115]=>
  int(3)
  [116]=>
  int(5)
  [117]=>
  int(3)
  [118]=>
  int(0)
  [119]=>
  int(0)
  [120]=>
  int(0)
  [121]=>
  int(0)
  [122]=>
  int(0)
  [123]=>
  int(0)
  [124]=>
  int(0)
  [125]=>
  int(0)
  [126]=>
  int(0)
  [127]=>
  int(0)
  [128]=>
  int(0)
  [129]=>
  int(0)
  [130]=>
  int(0)
  [131]=>
  int(0)
  [132]=>
  int(0)
  [133]=>
  int(0)
  [134]=>
  int(0)
  [135]=>
  int(0)
  [136]=>
  int(0)
  [137]=>
  int(0)
  [138]=>
  int(0)
  [139]=>
  int(0)
  [140]=>
  int(0)
  [141]=>
  int(0)
  [142]=>
  int(0)
  [143]=>
  int(0)
  [144]=>
  int(0)
  [145]=>
  int(0)
  [146]=>
  int(0)
  [147]=>
  int(0)
  [148]=>
  int(0)
  [149]=>
  int(0)
  [150]=>
  int(0)
  [151]=>
  int(0)
  [152]=>
  int(0)
  [153]=>
  int(0)
  [154]=>
  int(0)
  [155]=>
  int(0)
  [156]=>
  int(0)
  [157]=>
  int(0)
  [158]=>
  int(0)
  [159]=>
  int(0)
  [160]=>
  int(0)
  [161]=>
  int(0)
  [162]=>
  int(0)
  [163]=>
  int(0)
  [164]=>
  int(0)
  [165]=>
  int(0)
  [166]=>
  int(0)
  [167]=>
  int(0)
  [168]=>
  int(0)
  [169]=>
  int(0)
  [170]=>
  int(0)
  [171]=>
  int(0)
  [172]=>
  int(0)
  [173]=>
  int(0)
  [174]=>
  int(0)
  [175]=>
  int(0)
  [176]=>
  int(0)
  [177]=>
  int(0)
  [178]=>
  int(0)
  [179]=>
  int(0)
  [180]=>
  int(0)
  [181]=>
  int(0)
  [182]=>
  int(0)
  [183]=>
  int(0)
  [184]=>
  int(0)
  [185]=>
  int(0)
  [186]=>
  int(0)
  [187]=>
  int(0)
  [188]=>
  int(0)
  [189]=>
  int(0)
  [190]=>
  int(0)
  [191]=>
  int(0)
  [192]=>
  int(0)
  [193]=>
  int(0)
  [194]=>
  int(0)
  [195]=>
  int(0)
  [196]=>
  int(0)
  [197]=>
  int(0)
  [198]=>
  int(0)
  [199]=>
  int(0)
  [200]=>
  int(0)
  [201]=>
  int(0)
  [202]=>
  int(0)
  [203]=>
  int(0)
  [204]=>
  int(0)
  [205]=>
  int(0)
  [206]=>
  int(0)
  [207]=>
  int(0)
  [208]=>
  int(0)
  [209]=>
  int(0)
  [210]=>
  int(0)
  [211]=>
  int(0)
  [212]=>
  int(0)
  [213]=>
  int(0)
  [214]=>
  int(0)
  [215]=>
  int(0)
  [216]=>
  int(0)
  [217]=>
  int(0)
  [218]=>
  int(0)
  [219]=>
  int(0)
  [220]=>
  int(0)
  [221]=>
  int(0)
  [222]=>
  int(0)
  [223]=>
  int(0)
  [224]=>
  int(0)
  [225]=>
  int(0)
  [226]=>
  int(0)
  [227]=>
  int(0)
  [228]=>
  int(0)
  [229]=>
  int(0)
  [230]=>
  int(0)
  [231]=>
  int(0)
  [232]=>
  int(0)
  [233]=>
  int(0)
  [234]=>
  int(0)
  [235]=>
  int(0)
  [236]=>
  int(0)
  [237]=>
  int(0)
  [238]=>
  int(0)
  [239]=>
  int(0)
  [240]=>
  int(0)
  [241]=>
  int(0)
  [242]=>
  int(0)
  [243]=>
  int(0)
  [244]=>
  int(0)
  [245]=>
  int(0)
  [246]=>
  int(0)
  [247]=>
  int(0)
  [248]=>
  int(0)
  [249]=>
  int(0)
  [250]=>
  int(0)
  [251]=>
  int(0)
  [252]=>
  int(0)
  [253]=>
  int(0)
  [254]=>
  int(0)
  [255]=>
  int(0)
}
array(18) {
  [32]=>
  int(7)
  [82]=>
  int(1)
  [97]=>
  int(5)
  [98]=>
  int(1)
  [99]=>
  int(2)
  [100]=>
  int(1)
  [101]=>
  int(3)
  [102]=>
  int(1)
  [103]=>
  int(1)
  [104]=>
  int(1)
  [105]=>
  int(4)
  [109]=>
  int(1)
  [110]=>
  int(5)
  [111]=>
  int(3)
  [114]=>
  int(5)
  [115]=>
  int(3)
  [116]=>
  int(5)
  [117]=>
  int(3)
}
array(238) {
  [0]=>
  int(0)
  [1]=>
  int(0)
  [2]=>
  int(0)
  [3]=>
  int(0)
  [4]=>
  int(0)
  [5]=>
  int(0)
  [6]=>
  int(0)
  [7]=>
  int(0)
  [8]=>
  int(0)
  [9]=>
  int(0)
  [10]=>
  int(0)
  [11]=>
  int(0)
  [12]=>
  int(0)
  [13]=>
  int(0)
  [14]=>
  int(0)
  [15]=>
  int(0)
  [16]=>
  int(0)
  [17]=>
  int(0)
  [18]=>
  int(0)
  [19]=>
  int(0)
  [20]=>
  int(0)
  [21]=>
  int(0)
  [22]=>
  int(0)
  [23]=>
  int(0)
  [24]=>
  int(0)
  [25]=>
  int(0)
  [26]=>
  int(0)
  [27]=>
  int(0)
  [28]=>
  int(0)
  [29]=>
  int(0)
  [30]=>
  int(0)
  [31]=>
  int(0)
  [33]=>
  int(0)
  [34]=>
  int(0)
  [35]=>
  int(0)
  [36]=>
  int(0)
  [37]=>
  int(0)
  [38]=>
  int(0)
  [39]=>
  int(0)
  [40]=>
  int(0)
  [41]=>
  int(0)
  [42]=>
  int(0)
  [43]=>
  int(0)
  [44]=>
  int(0)
  [45]=>
  int(0)
  [46]=>
  int(0)
  [47]=>
  int(0)
  [48]=>
  int(0)
  [49]=>
  int(0)
  [50]=>
  int(0)
  [51]=>
  int(0)
  [52]=>
  int(0)
  [53]=>
  int(0)
  [54]=>
  int(0)
  [55]=>
  int(0)
  [56]=>
  int(0)
  [57]=>
  int(0)
  [58]=>
  int(0)
  [59]=>
  int(0)
  [60]=>
  int(0)
  [61]=>
  int(0)
  [62]=>
  int(0)
  [63]=>
  int(0)
  [64]=>
  int(0)
  [65]=>
  int(0)
  [66]=>
  int(0)
  [67]=>
  int(0)
  [68]=>
  int(0)
  [69]=>
  int(0)
  [70]=>
  int(0)
  [71]=>
  int(0)
  [72]=>
  int(0)
  [73]=>
  int(0)
  [74]=>
  int(0)
  [75]=>
  int(0)
  [76]=>
  int(0)
  [77]=>
  int(0)
  [78]=>
  int(0)
  [79]=>
  int(0)
  [80]=>
  int(0)
  [81]=>
  int(0)
  [83]=>
  int(0)
  [84]=>
  int(0)
  [85]=>
  int(0)
  [86]=>
  int(0)
  [87]=>
  int(0)
  [88]=>
  int(0)
  [89]=>
  int(0)
  [90]=>
  int(0)
  [91]=>
  int(0)
  [92]=>
  int(0)
  [93]=>
  int(0)
  [94]=>
  int(0)
  [95]=>
  int(0)
  [96]=>
  int(0)
  [106]=>
  int(0)
  [107]=>
  int(0)
  [108]=>
  int(0)
  [112]=>
  int(0)
  [113]=>
  int(0)
  [118]=>
  int(0)
  [119]=>
  int(0)
  [120]=>
  int(0)
  [121]=>
  int(0)
  [122]=>
  int(0)
  [123]=>
  int(0)
  [124]=>
  int(0)
  [125]=>
  int(0)
  [126]=>
  int(0)
  [127]=>
  int(0)
  [128]=>
  int(0)
  [129]=>
  int(0)
  [130]=>
  int(0)
  [131]=>
  int(0)
  [132]=>
  int(0)
  [133]=>
  int(0)
  [134]=>
  int(0)
  [135]=>
  int(0)
  [136]=>
  int(0)
  [137]=>
  int(0)
  [138]=>
  int(0)
  [139]=>
  int(0)
  [140]=>
  int(0)
  [141]=>
  int(0)
  [142]=>
  int(0)
  [143]=>
  int(0)
  [144]=>
  int(0)
  [145]=>
  int(0)
  [146]=>
  int(0)
  [147]=>
  int(0)
  [148]=>
  int(0)
  [149]=>
  int(0)
  [150]=>
  int(0)
  [151]=>
  int(0)
  [152]=>
  int(0)
  [153]=>
  int(0)
  [154]=>
  int(0)
  [155]=>
  int(0)
  [156]=>
  int(0)
  [157]=>
  int(0)
  [158]=>
  int(0)
  [159]=>
  int(0)
  [160]=>
  int(0)
  [161]=>
  int(0)
  [162]=>
  int(0)
  [163]=>
  int(0)
  [164]=>
  int(0)
  [165]=>
  int(0)
  [166]=>
  int(0)
  [167]=>
  int(0)
  [168]=>
  int(0)
  [169]=>
  int(0)
  [170]=>
  int(0)
  [171]=>
  int(0)
  [172]=>
  int(0)
  [173]=>
  int(0)
  [174]=>
  int(0)
  [175]=>
  int(0)
  [176]=>
  int(0)
  [177]=>
  int(0)
  [178]=>
  int(0)
  [179]=>
  int(0)
  [180]=>
  int(0)
  [181]=>
  int(0)
  [182]=>
  int(0)
  [183]=>
  int(0)
  [184]=>
  int(0)
  [185]=>
  int(0)
  [186]=>
  int(0)
  [187]=>
  int(0)
  [188]=>
  int(0)
  [189]=>
  int(0)
  [190]=>
  int(0)
  [191]=>
  int(0)
  [192]=>
  int(0)
  [193]=>
  int(0)
  [194]=>
  int(0)
  [195]=>
  int(0)
  [196]=>
  int(0)
  [197]=>
  int(0)
  [198]=>
  int(0)
  [199]=>
  int(0)
  [200]=>
  int(0)
  [201]=>
  int(0)
  [202]=>
  int(0)
  [203]=>
  int(0)
  [204]=>
  int(0)
  [205]=>
  int(0)
  [206]=>
  int(0)
  [207]=>
  int(0)
  [208]=>
  int(0)
  [209]=>
  int(0)
  [210]=>
  int(0)
  [211]=>
  int(0)
  [212]=>
  int(0)
  [213]=>
  int(0)
  [214]=>
  int(0)
  [215]=>
  int(0)
  [216]=>
  int(0)
  [217]=>
  int(0)
  [218]=>
  int(0)
  [219]=>
  int(0)
  [220]=>
  int(0)
  [221]=>
  int(0)
  [222]=>
  int(0)
  [223]=>
  int(0)
  [224]=>
  int(0)
  [225]=>
  int(0)
  [226]=>
  int(0)
  [227]=>
  int(0)
  [228]=>
  int(0)
  [229]=>
  int(0)
  [230]=>
  int(0)
  [231]=>
  int(0)
  [232]=>
  int(0)
  [233]=>
  int(0)
  [234]=>
  int(0)
  [235]=>
  int(0)
  [236]=>
  int(0)
  [237]=>
  int(0)
  [238]=>
  int(0)
  [239]=>
  int(0)
  [240]=>
  int(0)
  [241]=>
  int(0)
  [242]=>
  int(0)
  [243]=>
  int(0)
  [244]=>
  int(0)
  [245]=>
  int(0)
  [246]=>
  int(0)
  [247]=>
  int(0)
  [248]=>
  int(0)
  [249]=>
  int(0)
  [250]=>
  int(0)
  [251]=>
  int(0)
  [252]=>
  int(0)
  [253]=>
  int(0)
  [254]=>
  int(0)
  [255]=>
  int(0)
}
string(18) " Rabcdefghimnorstu"
string(476) "000102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f2122232425262728292a2b2c2d2e2f303132333435363738393a3b3c3d3e3f404142434445464748494a4b4c4d4e4f5051535455565758595a5b5c5d5e5f606a6b6c7071767778797a7b7c7d7e7f808182838485868788898a8b8c8d8e8f909192939495969798999a9b9c9d9e9fa0a1a2a3a4a5a6a7a8a9aaabacadaeafb0b1b2b3b4b5b6b7b8b9babbbcbdbebfc0c1c2c3c4c5c6c7c8c9cacbcccdcecfd0d1d2d3d4d5d6d7d8d9dadbdcdddedfe0e1e2e3e4e5e6e7e8e9eaebecedeeeff0f1f2f3f4f5f6f7f8f9fafbfcfdfeff"
===DONE===
