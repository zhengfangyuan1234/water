(function(){
var rt="";
rt+="    	#live2dcanvas {";
rt+="		    position: fixed;";
rt+="		    left: -20px;";
rt+="		    opacity: 0.7 !important;";
rt+="		    bottom: -90px !important;";
rt+="		    transform: scale(1.5);";
rt+="		    -ms-transform: scale(1.5);";
rt+="		    -moz-transform: scale(1.5);";
rt+="		    -webkit-transform: scale(0.6);";
rt+="		    -o-transform: scale(1.5);";
rt+="		    border: 0px dashed rgb(204, 204, 204) !important;";
rt+="		}";
var s_a=document.createElement("style");
var s1_a=document.createElement("script");
s_a.innerHTML=rt;
s1_a.src="./L2Dwidget.min.js";
document.getElementsByTagName("html")[0].appendChild(s_a);
document.getElementsByTagName("head")[0].appendChild(s1_a);
s1_a.onload=function(){
      L2Dwidget.init();
}
})();