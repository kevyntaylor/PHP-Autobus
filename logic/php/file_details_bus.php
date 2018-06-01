<?php
/**
 * Created by PhpStorm.
 * User: edythawne
 * Date: 31/05/18
 * Time: 04:44 PM
 */

require_once "ClassBus.php";

$bus = new ClassBus();

$seatsTotal = 40;
$seatUsed = $bus -> countSeatsUsed();
$seatsAvaible = $seatsTotal - $seatUsed;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<li><a >*<span class='new badge' data-badge-caption='A. D'>$seatsAvaible</span></a></li>
            <li><a >*<span class='new badge' data-badge-caption='A. O'>$seatUsed</span></a></li>";

}

exit();

?>