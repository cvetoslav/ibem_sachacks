function upDown(){
    $(".hero__check").animate({top: '-=30px'}, 3000);
    $(".hero__check").animate({top: '+=30px'}, 3000);
    setTimeout(upDown, 1000);
}; upDown();

$( ".switch" ).click(function() {
	var login = document.getElementById("login");
	login.classList.toggle("hidden");

	var register = document.getElementById("register");
	register.classList.toggle("hidden");
});

function login(){
    var email = $("#loge").val();
    var pass = $("#logp").val();
    $.ajax({
    url: 'assets/php/loginphp.php',
    type: 'post',
    data: {
      'email': email,
      'pass': pass,
      'login':1
    },
    success: function(response){
        if(response == "Logged in")
        {
        	window.location.href = "main.php";
        }
    }
    });
}

function register(){
	var uname = $("#regn").val();
    var upass = $("#regp").val();
    window.location.href = "assets/php/registerphp.php";
    var uemail = $("#rege").val();
    $.ajax({
    url: 'assets/php/registerphp.php',
    type: 'post',
    data: {
      'uname': uname,
      'uemail': uemail,
      'upass': upass,
      'register': 1
    },
    success: function(response){
        if (response == "New record created successfully") {
        	window.location.href = "main.php";
        }
    }
    });
}
