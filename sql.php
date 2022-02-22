<?php

/*Question :1
For the last 30 days deduce the mean and median difference between Actual and
Predicted ETA of all trips in the cities of ‘Qarth’ and ‘Meereen’



*/

$query1="SELECT (AVG(predicted_eta +actual_Eta) as MEAN )-

AVG(SET @rowindex := -1;
 
SELECT
   AVG(a.actual_Eta) as AMedian 
FROM
   (SELECT @rowindex:=@rowindex + 1 AS rowindex,
           trips.actual_Eta as actual_Eta
    FROM trips
    ORDER BY trips.actual_Eta) AS a
WHERE
a.rowindex IN (FLOOR(@rowindex / 2), CEIL(@rowindex / 2))+

SET @rowindex := -1;
 
SELECT
   AVG(p.predicted_eta) as PMedian 
FROM
   (SELECT @rowindex:=@rowindex + 1 AS rowindex,
           trips.predicted_eta AS predicted_eta
    FROM trips
    ORDER BY trips.predicted_eta) AS p
WHERE
p.rowindex IN (FLOOR(@rowindex / 2), CEIL(@rowindex / 2)))


FROM trips WHERE city_id=("SELECT city_id FROM cities WHERE city_name='Qarth' and city_name='Meereen'and request_at>now()-INTERVAL 30 DAY");




/*  
Question2:
*/

$query1="SELECT reder_id,city_id,_ts from events where event_name='sign_up_success' and 
city_id=("SELECT city_id FROM cities WHERE city_name='Qarth' and city_name='Meereen') and _ts BETWEEN '2021-01-01'AND '2021-01-07'  ")

UNION SELECT avg(COUNT(status)) from trips WHERE status='completed' AND city_id=("SELECT city_id FROM cities WHERE city_name='Qarth' and city_name='Meereen')";



?>