<?
function create_calendar($m=null){
    if($m==null) $m=date('n');
    $year=date('Y');
    $daysInMonth=cal_days_in_month(CAL_GREGORIAN,$m,$year);
    $firstDayOfMonth=date('N',strtotime("$year-$m-01"));

    echo '<table>';
    echo '<tr>';
    echo '<th>Пн</th>';
    echo '<th>Вт</th>';
    echo '<th>Ср</th>';
    echo '<th>Чт</th>';
    echo '<th>Пт</th>';
    echo '<th>Сб</th>';
    echo '<th>Вс</th>';
    echo '</tr>';

    $numRows=ceil(($daysInMonth+$firstDayOfMonth-1)/7);

    $day=1-$firstDayOfMonth;
    for($i=0;$i<$numRows;$i++){
        echo "<tr>";
        for($j=0;$j<7;$j++){
            if($day>=1 && $day<=$daysInMonth)
            echo "<td>$day</td>";
            else 
            echo "<td></td>";
            $day++;
        }
        echo "</tr>";
    }
    echo "</table>";
}

create_calendar();
$m=date('n')+1;
for($i=$m;$i<=12;$i++)
create_calendar($i);