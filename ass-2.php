<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
    printf("Input data (floor n): ");
    fscanf(STDIN, "%d %d", $floor, $n); 
    $building  = []; 
    for($k = 0; $k < $floor; $k++) {
        $building[$k] = [];
        printf("Floor: %d\n", $k + 1);
        for($j = 0; $j < $n; $j++) {
            $building[$k][$j] = [];
            for($i = 0; $i < $n; $i++) {
                printf("\tInput number of people in zone %d-%d: ", $j + 1, $i + 1);
                fscanf(STDIN, "%d", $building[$k][$j][$i]);
            }
        }
    }
    printf("\nPeople on each floor:\n");
    for($k = 0; $k < $floor; $k++) {
        printf("Floor: %d\n", $k + 1);
        $total = 0;
        for($j = 0; $j < $n; $j++) {
            printf("\t");
            for($i = 0; $i < $n; $i++){
                printf("%5d", $building[$k][$j][$i]);
                $total += $building[$k][$j][$i];
            }
            printf("\n");
        }
        printf("Number of people = %d\n", $total);
    }
    printf("People on each zone: \n");
       for($j = 0; $j < $n; $j++){
           for($i = 0; $i < $n; $i++){
               printf("   zone %d-%d :\n", $j, $i);
               $total = 0;
               // this must be $k = $floor - 1
               //for($k = $floor; $k >= 0; $k--){
               for($k = $floor - 1; $k >= 0; $k--){
                   printf("    %2d\n", $building[$k][$j][$i]);
                   $total += $building[$k][$j][$i];
               }
               printf("Number of people = %d\n", $total);
               echo"\n";
           }
       }
       
    