function check(){
	var q1=document.quiz.q1.value;
	var q2=document.quiz.q2.value;
	var q3=document.quiz.q3.value;
	var q4=document.quiz.q4.value;
	var c=0;
	if(q1==="1"){
		c++;
	}
	if (q2==="2") {
		c++;
	}
	if(q3==="3"){
		c++;
	}
	if (q4==="4") {
		c++;
	}
	window.alert("You got "+c+" correct!");
}
