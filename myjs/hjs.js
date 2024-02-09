setInterval(myTimer, 10);
var i=0;
function myTimer() {
	i++;
	if (i>=360)
	 {
	 	i=0;
	 }
  document.getElementById("logoimg").style.transform='rotate('+i+'deg)';

}
// setInterval(location, 10);
// var l=30;
// function location() {
// 	if (l==40) {l=l-10;}
// 	l=l+2;
//   document.getElementById("locationimg").width=l+'px';

// }
