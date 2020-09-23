<?php
    /**
     * Student ID: 602110xxx
     * Name: Pachara Tinamas
     * WeChat: Pachara Tinamas
     */
    printf("Input number of students: ");
    fscanf(STDIN, "%d", $n);
    printf("Input number of chapters: ");
    fscanf(STDIN, "%d", $nchpt);
    $scores = [];
    $chpt_message = "";
    $input_format = "";
    for($j = 0; $j < $nchpt; $j++) {
        $chpt_message .= " chpt".($j + 1);
        $input_format .= " %f";
    }
    $chpt_message = trim($chpt_message);
    $input_format = trim($input_format);
    for($i = 0; $i < $n; $i++) {
        printf("Student %2d score ( %s ): ", $i + 1, $chpt_message);
        $scores[$i] = fscanf(STDIN, $input_format);
    }
    
    printf("\n");
    printf("Result:\n");
    foreach($scores as $i => $chpts) {
        printf("Student %2d:", $i + 1);
        $total = 0;
        foreach($chpts as $chpt) {
            $total += $chpt;
            printf(" %6.2f", $chpt);
        }
        printf(" = %6.2f\n", $total);
    }
