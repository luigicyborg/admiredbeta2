<!DOCTYPE html>
<html>
<head>
    <title>SAS ADMIRED</title>
</head>
<body>
	  <div class="calendar">
		<?php
			/*ESTABLECEMOS LA FECHA Y ZONA HORARIA*/
			date_default_timezone_set('UTC');
			//$fecha_actual = new DateTime('2020-06-07');
			$fecha_actual = new DateTime();

			$monthChange = $_REQUEST['mesSeleccionado'];
			$yearchange = $_REQUEST['anioSeleccionado'];

			//$fecha_seleccionada = date('d-m-Y', strtotime($_REQUEST['fechaSeleccionada']));
			//$fecha_seleccionada = new DateTime('2020-04-06 15:16:17');
			$fecha_seleccionada = new DateTime($_REQUEST["fechaSeleccionada"]);

			//$monthChange = $_GET['var'];
			function draw_calendar($month,$year,$dateRelease){
					$dateDayWeekNumber = $dateRelease->format('N');
					$month = $dateRelease->format('m');
					$monthPrev = $month - 1;
					$monthNext = $month + 1;
					$days_in_monthPrev = date('t',mktime(0,0,0,$monthPrev,1,$year));
					$days_in_monthNext = 1;

					$year = $dateRelease->format('y');
					$day = $dateRelease->format('d');
					$dayWeek = $dateRelease->format('l');


					$dateAux = new DateTime();
					$monthAux = $dateAux->format('m');

					$calendar= '<month class="month">';
					$headings = array('DOM','LUN','MAR','MIE','JUE','VIE','SAB');
					//$headings = array('LUN','MAR','MIE','JUE','VIE','SAB','DOM');
					$calendar.= '<week class="style-week-header"><cell-header>'.implode('</cell-header><cell-header>',$headings).'</cell-header></week>';

					$running_day = date('w',mktime(0,0,0,$month,1,$year));

					$days_in_monthPrev = $days_in_monthPrev-($running_day-1);

					$days_in_month = date('t',mktime(0,0,0,$month,1,$year));
					$week_counter = 1;
					$days_in_this_week = 2;
					$day_counter = 0;
					$dates_array = array();
					$calendar.= '<week id="week'.$week_counter.'" class="style-week">';

					for($x = 0; $x < $running_day; $x++):

						$calendar.= '<cell class="none-month"><div id="'.$days_in_monthPrev.'" class="cell-date-prev">'.$days_in_monthPrev.'</div></cell>';
						$days_in_monthPrev++;
						$days_in_this_week++;
					endfor;
					for($list_day = 1; $list_day <= $days_in_month; $list_day++):
						if($month == $monthAux):
							if($list_day!=$day):
								$calendar.= '<cell>';
								$calendar.= '<div id="'.$list_day.'" class="cell-date">'.$list_day.'</div>';
								$calendar.= '</cell>';
							else:
								$calendar.= '<cell-marked class="cell-marked-red">';
								$calendar.= '<div id="'.$list_day.'" class="cell-date">'.$list_day.'</div>';
								$calendar.= '</cell-marked>';
							endif;
						else:
							$calendar.= '<cell>';
							$calendar.= '<div id="'.$list_day.'" class="cell-date">'.$list_day.'</div>';
							$calendar.= '</cell>';
						endif;
						if($running_day == 6):
							$calendar.= '</week>';
							$week_counter++;
							if(($day_counter+1) != $days_in_month):
								$calendar.= '<week id="week'.$week_counter.'" class="style-week">';
							endif;
							$running_day = -1;
							$days_in_this_week = 0;
						endif;
						$days_in_this_week++; 
						$running_day++; 
						$day_counter++;
					endfor;
					if($days_in_this_week==1):
						$days_in_this_week = 8;
					endif;
					if($days_in_this_week < 8):
						for($x = 1; $x <= (8 - $days_in_this_week); $x++):
							$calendar.= '<cell class="none-month"><div id="'.$days_in_monthNext.'" class="cell-date-next">'.$days_in_monthNext.'</div></cell>';
							$days_in_monthNext++;
						endfor;
					endif;
					$calendar.= '</week>';
				$calendar.= '</month>';
				//$calendar.= '<cell>'.$running_day.'</cell>';
				//$calendar.= '<cell>'.$dateDayWeekNumber.'</cell>';
				//$calendar.= '<cell>'.$dateRelease->format('l').'</cell>';
				//$calendar.= '<cell>'.$dateRelease->format('Y-m-d H:i:s').'</cell>';
				return $calendar;
			}
			echo draw_calendar($monthChange,$yearchange,$fecha_seleccionada);
		?>
	  </div>
	<pre id="log"></pre>   
	

</body>
</html>


