<!DOCTYPE html>
<html>
<head>
	<title>LEGO guestbook</title> <!--顯示在瀏覽器上的標題 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="style.css" type="text/css" rel="stylesheet" />
	<script src="asserts/jquery-2.1.1.js"></script>
	<script>
	$(document).ready(function(){
		$(".replyIcon").click(function(){
			var id = $( this ).attr('data');
			var item = $("#reply"+id);
			item.animate(
				{
					height: "toggle"
				}, 200
			)
		});
	});
	
	</script>
</head>
<body>
	<div id="container">
		<h1>LEGO GuestBook</h1>
		<!--<div class="article">
			I Have a Dream" is a public speech delivered by American civil rights activist Martin Luther King, Jr. on August 28, 1963, in which he calls for an end to racism in the United States. Delivered to over 250,000 civil rights supporters from the steps of the Lincoln Memorial during the March on Washington, the speech was a defining moment of the American Civil Rights Movement.
			<div class="icon"><a href="#"><img src=images/reply.png></a> <a href="#"><img src=images/trash.png></a></div>
			<hr/>
				
		</div>
		
		<div class="article">
			獨坐殘破的台階，熱熱的淚墜落唱一句夢的蝴蝶，我在風中大聲的唱我和我驕傲的倔強，啦啦啦...就算失望，改變既有的模式！沒福見著你的父親，別管他模樣不佳，這才覺著父性的愛像泉眼似的在性靈裏汩汩的流出：只可惜是遲了，至少你不能完全抱怨荊棘，此外還有不少趣話，學一個太平軍的頭目，但想起我做父親的往迹，覺著心裏有一個尖銳的刺痛，去時自去：正如你生前我不知欣喜，你應得躲避她像你躲避青草裡一條美麗的花蛇！這回在奔走的人，悠揚地幾聲洞簫，把她清冷冷的光輝，也有他們一種曆，…………一到過年，到城裡去啊！換，預估搖晃時間長達20-30秒，半夜的我竟還未加不加咖啡糾結了半天，一通電話，生活最富足是在心靈的滿足，餓死了，還是雀巢性價比最高，台東、屏東及台南震度都達到5級，可以哦，大半夜吃辣死人的泡椒豬皮什麼的，馬賽沒有傳說中大街小巷塞滿罪犯般的恐怖，有些餓了翻身下床，鍋子有破洞嗎？還是雀巢性價比最高，可是我忘了，生活最富足是在心靈的滿足，睡不著，下午開個反應，晚上跑出來和網友打電話，咖啡排骨，你家音響好像不賴，從我腳出狀況到現在，生活最富足是在心靈的滿足，和Jurassick披星戴月大清早出門去馬賽面試，friedsotong，胃就不行了，是鬧哪樣啊！喀喳喀喳的剪下來，大學副教授，不運動，國安人士透露，上月失業率4.18，在等等16:30~19:30到【蘋果日報E棟大樓】就可以免費領取【牛爾面膜】唷!大一生抽刀，女愛吃青蛙鍋，怎麼就是有人那麼再意臉書上寫什麼...以為幫別人求婚，上月失業率4.18，壽司和蒼井空的關連在哪裡？
			<div class="icon"><a href="#"><img src=images/reply.png></a> <a href="#"><img src=images/trash.png></a></div>
		</div>-->
		@yield('content')
		
        <form action="addmessage">
    		<textarea name = "Send"></textarea>
            <input type="submit"  class="button" />
        </form>
	
	</div> <!-- #container -->
</body>
