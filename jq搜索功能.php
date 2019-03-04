<script src="https://www.zhengfy.top/jq.js"></script>
<input type="text" id="findinput" />
<meta charset="UTF-8">
<ul id="huuu" style="color:red"></ul>
<br>
<br>
<ul class="todo-content">
	<li class="todo-ltem">
		<div class="todo-tip">
			<p>fhasjfas</p>
		</div>
	</li>
	<li class="todo-ltem">
		<div class="todo-tip">
			<p>enbyy</p>
		</div>
	</li>
	<li class="todo-ltem">
		<div class="todo-tip">
			<p>a</p>
		</div>
	</li>
	<li class="todo-ltem">
		<div class="todo-tip">
			<p>as</p>
		</div>
	</li>
	<li class="todo-ltem">
		<div class="todo-tip">
			<p>你好</p>
		</div>
	</li>
	<li class="todo-ltem">
		<div class="todo-tip">
			<p>你好啊</p>
		</div>
	</li>
</ul>
<div id="hei" hidden="hidden"></div>
<script>
	function check(f, x) {
		var result = true;
		$(f).each(function() {
			if (x == this.innerHTML) {
				result = false;
			}
		});
		return result;
	}
	$("#findinput").bind("input propertychange", function(event) {
		$("#huuu").html("");
		var keyword = $(this).val();
		if (keyword == "") {
			return false;
		}
		$("#hei").empty();
		$("#hei").append($(".todo-content").clone(true));
		var parr = $("#hei p").filter(":Contains(" + keyword + ")").parents('.todo-ltem');
		$("#huuu").html(parr);
	});
</script>