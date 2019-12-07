function insert() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("response").innerHTML = this.responseText;
      document.getElementById("fname").value="";
      document.getElementById("lname").value="";
      document.getElementById("mname").value="";
      document.getElementById("age").value="";
      document.getElementById("gender").value="";
      document.getElementById("address").value="";
      document.getElementById("email").value="";
      document.getElementById("pword").value="";
    }
  };
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var mname = document.getElementById("mname").value;
  var age = document.getElementById("age").value;
  var gender = document.getElementById("gender").value;
  var address = document.getElementById("address").value;
  var email = document.getElementById("email").value;
  var pword = document.getElementById("pword").value;
  var token = "insert";
  xhttp.open("GET", "userCrud.php?fname="+fname+"&lname="+lname+"&mname="+mname+"&age="+age+"&gender="+gender+
  "&address="+address+"&email="+email+"&pword="+pword+"&token="+token, true);
    xhttp.send();

}
