function check() {

var question1 = document.quizzes.q1.value;
var question2 = document.quizzes.q2.value;
var correct = 0;

if(question1 == "1"){
	correct++;
}

if(question2 == "1")
{
	correct++;
}

window.alert("You got "+correct+"/2 correct!")

//document.getElementId("number_correct").innerHTML = "You got "+correct+"/2 correct";
} 