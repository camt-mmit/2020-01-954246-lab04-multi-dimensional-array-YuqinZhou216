<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
printf("Input size (n >=1): ");
fscanf(STDIN, "%d", $number);
for($i=$number; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        if($j==1||$i==$number){
            $array[$i][$j]=1;
        }
        else{
            $array[$i][$j]=$array[$i+1][$j]+$array[$i][$j-1];
        }
        echo $array[$i][$j]."\t";
    }
echo"\n";
}