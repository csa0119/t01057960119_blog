<meta charset="utf-8">
<?
include 'header.php';
include 'config.php';


$articles = getRows("select * from article order by id desc");

?>


<table border="1">
<thead>
<tr>
	<th>번호</th>
	<th>작성자</th>
	<th>내용</th>
	<th>날짜</th>
	<th>비고</th>
</tr>
</thead>
<script>
function deleteArticle(btn){
	if (confirm('삭제하시겠습니까?') == false){
		return;
	}

	var $clickedBtn = $(btn);
	var $listItem = $clickedBtn.closest('tr');
	$listItem.remove();
	
	var id2 = $listItem.children("td").eq(0).text();
	var id = $listItem.data('id');
	$.post(
		'/service/article/delete.php',
		{'id': id},
		function(data){
			alert(data.id + "가 삭제되었습니다.");
		},
		'json'	
	);

}

</script>

<tbody>
<?foreach($articles as $article){?>
<tr data-id="<?=$article['id']?>">
	<td><?=$article['id']?></td>
	<td><?=$article['writer']?></td>
	<td><?=$article['body']?></td>
	<td><?=$article['regDate']?></td>
	<td><button onclick="deleteArticle(this)">삭제</button></td>
</tr>
<?}?>
</tbody>
</table>