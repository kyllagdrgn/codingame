<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 * ---
 * Hint: You can use the debug stream to print initialTX and initialTY, if Thor seems not follow your orders.
 **/

/**
 * Thor moves on a map which is 40 wide by 18 high. Note that the coordinates (X and Y) start at the top left! This means the most top left cell has the coordinates "X=0,Y=0" and the most bottom right one has the coordinates "X=39,Y=17".
 * 
 * Test cases
 * Stright line: (31,4), (5,4); 100
 * Up: (31,4), (31,17); 13
 * Easy Angle: (0,17), (31,4); 44
 * Optimal angle: (36,17), (0,0); 36
 **/

// $lightX: the X position of the light of power
// $lightY: the Y position of the light of power
// $initialTx: Thor's starting X position
// $initialTy: Thor's starting Y position
fscanf(STDIN, "%d %d %d %d", $lightX, $lightY, $initialTx, $initialTy);
$currentY = (int) $initialTy;
$currentX = (int) $initialTx;
// game loop
while (TRUE)
{
    // $remainingTurns: The remaining amount of turns Thor can move. Do not remove this line.
    fscanf(STDIN, "%d", $remainingTurns);
    $northSouth = '';
    $eastWest = '';
    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug: error_log(var_export($var, true)); (equivalent to var_dump)
    if ((int)$currentY == 0) {
        $northSouth = 'S';
        $currentY += 1;
    }
    else {
        switch ($currentY) {
            case $currentY > $lightY:
                $northSouth = 'N';
                $currentY -= 1;
                break;
            case $currentY < $lightY:
                $northSouth = 'S';
                $currentY += 1;
                break;
            case $currentY == $lightY:
                $northSouth = '';
                break;
        }
    }
    if ((int)$currentX == 0){
        $eastWest = 'E';
        $currentX += 1;
    }
    else {
        switch ($currentX) {
            case $currentX > $lightX:
                $eastWest = 'W';
                $currentX -= 1;
                break;
            case $currentX < $lightX:
                $eastWest = 'E';
                $currentX += 1;
                break;
            case $currentX == $lightX:
                $eastWest = '';
                break;
        }
    }
    // A single line providing the move to be made: N NE E SE S SW W or NW
    echo("$northSouth$eastWest\n");
}
?>