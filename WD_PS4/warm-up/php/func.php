<?php

	function addEllP($res){
		return '<p>' . $res . '</p';
	}

	function getResultTask1(){
		$count = 0;

		for ($i = -1000; $i <= 1000; $i++){
			$count += $i;
		}
		return addEllP($count);
	}
	
	function getResultTask2(){
		$count = 0;

		for ($i = -1000; $i <= 1000; $i++){
			
			$tmp = i % 10;
			
			if($tmp === 2 || $tmp === 3 || $tmp === 7){
				$count += $i;
			}
		}

		return addEllP($count);
	}

	function getResultTask3(){
		$line = '';
		$res = '';

		for($i = 0; $i < 50; $i++){
			
			for($j = 0; $j < $i; $j++){
				$line .= '*';
			}
			
			$res = $res . $line . '<br>';
			$line = '';
		}
		return addEllP($res);
	}

	function getResultTask4(){
		$line = '';
		$res = '';
		$lines = $_POST['task4-lines'];
		$column = $_POST['task4-column'];

		for($i = 0; $i < $column; $i++){
			
			$line = '<div class="task4-line">';
			
			for($j = 0; $j < $lines; $j++){
				
				if(($j + $i) % 2 === 0){
					$line .= '<div class="task4-cell"></div>';
				} else {
					$line .= '<div class="task4-cell even"></div>';
				}
			}
			
			$line .= '</div>';
			
			$res .= $line;
		}
		return addEllP($res);
	}

	function getResultTask5(){
		return addEllP(array_sum(str_split((string) abs($_POST['task5-input']))));
	}

	function getResultTask6(){
		$arr = array_map(function(){
						return rand( 1, 10);
						}, array_pad( [], 100, 0)
				);

		sort($arr);

		return array_unique(
				array_reverse($arr)
			);
	}

?>