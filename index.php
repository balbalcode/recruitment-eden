<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EDEN Tech Test</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<section class="container my-5 rounded border">
		<?php
		$data = array(
			0 => array(
				'id' => 1,
				'name' => 'Foo', 'image' => array( 'url' => '/pub/foo.jpg')
			),
			1 => array(
				'id' => 2,
				'name' => 'Bar', 'image' => array('url' => '/pub/bar.jpg' )
			),
			2 => array(
				'id' => 3,
				'name' => 'Foo Bar', 'image' => array( 'url' => '/pub/foobar.jpg')
			)
		);		

		function semiRecursive($array) {
			$finalData = [];
			foreach ($array as $key => $vals) {
				array_push($finalData, $vals["image"]["url"]);
			}
			return $finalData;
		}

		$finalData = semiRecursive($data);
		echo "<pre>";
		print_r($finalData);
		echo "</pre>";
		?>


	</section>
</body>
<script type="text/javascript">
	var data = [
	{type:"Foo", year:1995},
	{type:"Bar", year:1993},
	{type:"Foobar", year : 2020},
	];

	// this is only sort a - b so we can use array.sort(funct => a-b)
	let sortedData = data.sort((prev, next) =>{
		return (prev.year - next.year)
	})
	console.log(sortedData , "SORTED DATA")
</script>
</html>