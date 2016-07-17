<html>
<head>
<meta charset="utf-8">
<title>송아스 블로그</title>
<!-- 자바스크립트 라이브러리: jQuery 불러오기 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- 자주 사용하는 스타일 시트 외부 파일로 분리-->
<link rel="stylesheet" type="text/css" href="style.css"/>

<script>
	$(function(){
		$(".top-nav ul").click(function(){
			$("li").each(function(){						
				alert($(this).attr("class"));
				if($(this).attr("class")!="active")
				{
					$(this).addClass('active');
				}
			});
 
		});

	});
</script>


</head>
<body>
<nav class="top-nav">
	<ul>
		<li class="active"><a href="/index.php">메인페이지</a></li>
		<li><a href="/list.php">게시물리스트</a></li>
	</ul>
</nav>

</body>
</html>