<?php
    /**
     * Student ID: 602110xxx
     * Name: Pachara Tinamas
     * WeChat: Pachara Tinamas
     */
    printf("Input number of students: ");
    fscanf(STDIN, "%d", $n);
    $scores = [];
    for($i = 0; $i < $n; $i++) {
        printf("Student %2d score ( chpt1 chpt2 ): ", $i + 1);
        $scores[$i] = fscanf(STDIN, "%f %f");
    }

    printf("\n");
    printf("Result:\n");
    foreach($scores as $i => $chpts) {
        printf("Student %2d: %6.2f %6.2f = %6.2f\n", $i + 1, $chpts[0], $chpts[1], $chpts[0] + $chpts[1]);
    }
