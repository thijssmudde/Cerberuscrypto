<?php

header('Content-Type: application/json');

$jsonmining = file_get_contents('http://www.whattomine.com/coins.json');

$datamining = json_decode($jsonmining, true);

//var_dump($datamining);

$coins = count($datamining['coins']);

foreach ($datamining['coins'] as $ct => $cv) {
	$summary[] = array(
			$ct =>
			array(
			'Tag' => $datamining['coins'][$ct]['tag'],
			'Algo' => $datamining['coins'][$ct]['algorithm'],
			'BlockReward' => $datamining['coins'][$ct]['block_reward'],
			'BlockTime' => $datamining['coins'][$ct]['block_time'],
			'LastBlock' => $datamining['coins'][$ct]['last_block'],
			'Difficulty' => $datamining['coins'][$ct]['difficulty'],
			'Difficulty24' => $datamining['coins'][$ct]['difficulty24'],
			'NetHash' => $datamining['coins'][$ct]['nethash'],
			'ExchangeRate' => $datamining['coins'][$ct]['exchange_rate'],
			'Profitability' => $datamining['coins'][$ct]['profitability'],
			'Profitability24' => $datamining['coins'][$ct]['profitability24']
		)
	);
}

$encoded_price = json_encode($summary, JSON_HEX_QUOT | JSON_HEX_TAG);

//var_export($encoded_price);

/* Coin, algo, difficulty, exchange rate, profitability */

$table = 	'<table class="tablesorter" id="myTable">';
$table .= 		'<thead class="header">
					<tr>
						<th><input type="text" class="form-control" placeholder="#"></th>
						<th><input type="text" class="form-control" placeholder="Coin"></th>
						<th><input type="text" class="form-control" placeholder="Algo"></th>
						<th><input type="text" class="form-control" placeholder="Difficulty"></th>
						<th><input type="text" class="form-control" placeholder="Nethash"></th>
						<th><input type="text" class="form-control" placeholder="Exchange rate"></th>
						<th><input type="text" class="form-control" placeholder="Profitability"></th>
					</tr>
				</thead>
				<tbody>';
$i = 0;
foreach ($datamining['coins'] as $ct => $cv) {
	$i++;
	$table .=	'<tr>
					<td>'.$i.'</td>
					<td>'.$datamining['coins'][$ct]['tag'].'</td>
					<td>'.$datamining['coins'][$ct]['algorithm'].'</td>
					<td>'.$datamining['coins'][$ct]['difficulty'].'</td>
					<td>'.$datamining['coins'][$ct]['nethash'].'</td>
					<td>'.$datamining['coins'][$ct]['exchange_rate'].'</td>
					<td>'.$datamining['coins'][$ct]['profitability'].'</td>
				</tr>';
}
$table .= '</tbody>';
$table .= '</table>';

$encoded_table = json_encode($table);

echo $encoded_table;

?>