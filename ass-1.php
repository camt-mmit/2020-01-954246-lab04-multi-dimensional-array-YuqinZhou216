<?php
/*ID: 602110197
Name: Yuqin Zhou(Ice)
Wechat: blue*/
    printf("Input number of students: ");
    fscanf(STDIN, "%d", $n);
    printf("Input number of chapters: ");
    fscanf(STDIN, "%d", $nchpt);
    $format = "%s";
    for($i = 0; $i < $nchpt; $i++) {
        $format .= " %f";
    }
    $scores = [];
    for($i = 0; $i < $n; $i++) {
        printf("Student %2d score ( name", $i + 1);
        for($j = 0; $j < $nchpt; $j++) {
            printf(" chpt%d", $j + 1);
        }
        printf(" ): ");
        $scores[] = fscanf(STDIN, $format);
    }printf("\n");
    printf("Result:\n");
    printf("           ");
    for($i=1; $i<=$nchpt; $i++){
        printf("%7d", $i);
    }printf("\n");
    printf("-----------");
    for($i=0; $i<$nchpt; $i++){
        printf("-------");
    }printf("---------\n");
    foreach($scores as $chpts){
        printf("%-10s: ", $chpts[0]);
        $total=0;
        for($i=1; $i<$nchpt+1; $i++){
            $total+=$chpts[$i];
            printf("%7.2f", $chpts[$i]);
        }printf(" =%7.2f", $total);
        printf("\n");
    }