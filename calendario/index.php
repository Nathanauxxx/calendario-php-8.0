<?php
    require_once("function.php");
    echo "<link rel='stylesheet' href='style.css'>";
   
$monthTime = getMonthTime();    
    echo "<header>";
    echo '<a href="?month='.prevMonth($monthTime).'">Anterior</a>';
    echo " <h1>" .date('F Y', $monthTime). "</h1>";
    echo '<a href="?month='.nextMonth($monthTime).'">Próximo</a>';
    echo "</header>";

   echo "<table>"
   echo "<thead>
         <tr>
         <th>DOM</th> 
         <th>SEG</th>   
         <th>TERÇ</th>      
         <th>QUA</th>   
         <th>QUI</th>   
         <th>SEX</th>   
         <th>SAB</th>   
        </tr>
    </thead>
   ";
    $startDate =strotime("last sunday",$monthTime);
    echo "<tbody>";
for($row = 0; $row <6; $row++){
        echo "<tr>";
        for($column =0; $column < 7; $column++){
            if(date('Y-m',$startDate) !==date('Y-m', $monthTime)){
                echo "<td class='other-month'>";
            }else{
                echo "<td>";
            }
            echo date('j',$startDate);
            echo"</td>";
            $startDate = strototime("+1 day", $startDateDate);
        }
        echo"</tr>";
}
   echo"</tbody>";
   echo"</table>";
