<?php
include 'top.php';
require_once DOC_ROOT.'classes/db_connection.php';

/*  Pagination Settings  */
$num_rec_per_page = 5;
$limit_from = 0;
$showmaxpagelimit = 5;
$showminpagelimit = 0;
$cuttent_page_number = 1;

if (isset($_GET['currentpage'])) {  
	$cuttent_page_number = $_GET['currentpage'];
	if ($cuttent_page_number != 1) {
		$previous_page = $cuttent_page_number-1;
		$limit_from = $previous_page*$num_rec_per_page;
		$showmaxpagelimit = $cuttent_page_number + 3;
		$showminpagelimit = $cuttent_page_number - 3;
	}
	
}
/*  //Pagination Settings  */
$news_data_array = array('activestatus' => "1");
$news_data_count = $db->query("SELECT count(news_id) FROM tbl_news WHERE news_status = :activestatus", $news_data_array);

	$total_news = $news_data_count[0]['count(news_id)'];
	$total_pages = $total_news / $num_rec_per_page;
	$total_pages = ceil($total_pages); //convert to highest full number

$news_data = $db->query("SELECT * FROM tbl_news WHERE news_status = :activestatus ORDER BY news_date DESC limit $limit_from, $num_rec_per_page", $news_data_array);

function excerpt($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}

$include_file = DOC_ROOT.'pages/news_pages.php';
include DOC_ROOT.'template.php';
?>
