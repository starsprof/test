<?php
include 'vendor/autoload.php';

$faker = \Faker\Factory::create();
$words = $faker->words($faker->numberBetween(2,10));


$str = 'вишня, груша, слива, груша';

$words = explode(',', $str);
$words = array_map('trim', $words);
$words = array_unique($words);
$words = implode(', ', $words);
$words = trim($words);
print_r($words);

<html>
<head>
    <style>
        th{
            border-bottom: 1px solid gray;
        }
        table, td
        {
            margin: 10px;
            flex-grow: 1;
            width: calc(100% * (1/4) - 20px - 1px);
            text-align: center;
            border-collapse: collapse;
            font-size: 22px;
        }
        .container
        {
            margin: 0 auto;
            width: 1025px;
            height: 100vh;
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
<div class="container">
<?php
$months = range(1,12); //'Y-m-d'
$months = array_map(function ($month) {
    $year = date('Y');
    $daysCount = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $days = range(1, $daysCount);
    $startDay = date('N', strtotime("$year-$month-01"));
    $beforeDays = array_fill(0, $startDay - 1, 0);
    $days = array_merge($beforeDays, $days);
    $endDay = count($days) % 7;
    if($endDay !== 0){
        $afterDays = array_fill(0, 7 - $endDay, 0);
        $days = array_merge($days, $afterDays);
    }
    $weeks = array_chunk($days, 7);
    $weeks = array_map(function ($week) {
        $days = array_map(function($day) {
            return $day > 0 ?  "<td>$day</td>" : '<td></td>';
        }, $week);
        return '<tr>' . implode($days) . '</tr>';
    }, $weeks);
    return '<table>
                <thead>
                    <tr>
                        <th colspan="7">'. date('F', strtotime("$year-$month-1")).'</th>
                    </tr>
                    <tr>
                        <th>Mo</th>
                        <th>Tu</th>
                        <th>We</th>
                        <th>Th</th>
                        <th>Fr</th>
                        <th>Sa</th>
                        <th>Su</th>
                    </tr>
                </thead>
                    <tbody>' .
                        implode($weeks) .
                    '</tbody>
            </table>';
},$months );
echo implode($months);
?>
</div>
</body>
</html>
