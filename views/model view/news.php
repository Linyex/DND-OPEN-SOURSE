<?php

require_once __DIR__ . '/../../engine/news/config.php';
	

if (isset($_GET['page_num'])) {
    $page_num = $_GET['page_num'];
} else {
    $page_num = 1;
    	}

    
$page_len = 6;
$sql = "SELECT COUNT(*) FROM news";
if($result = $conn->query($sql)){


	$res =  mysqli_fetch_array($result);
	$rows_count =$res[0];
    $pages_count = ceil($rows_count / $page_len);

  
    if($page_num < 1)
    	$page_num = 1;
    if($page_num > $pages_count)
    	$page_num = $pages_count;

    $offset = ($page_num-1) * $page_len;
    $sql = "SELECT * FROM  news  ORDER BY id DESC LIMIT $page_len OFFSET $offset";
	$result = $conn->query($sql);
} else{
	echo "Ошибка: " . $conn->error;
}

?>

<div>
<?php
	
		while( $row = mysqli_fetch_assoc($result) ){
			echo "<div class='news'>";
				echo "<span>" . $row["data"] . "</span>";
				echo "<h3>" . $row["header"] . "</h3>";
				echo  $row["text"];
			echo "</div>";
		}
		$result->free();
	?>
</div>
	<?php
	require_once __DIR__ . '/../../engine/news/pagination.php'
	?>