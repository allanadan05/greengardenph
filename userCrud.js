//add
function insert() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("addResponse").innerHTML = this.responseText;
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

//edit and update
function edit(ipinasa){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
              var buongObject=JSON.parse(this.responseText);
              document.getElementById("ufname").value = buongObject.ufname;
              document.getElementById("ulname").value = buongObject.ulname;
              document.getElementById("umname").value = buongObject.umname;
              document.getElementById("uage").value = buongObject.uage;
              document.getElementById("ugender").value = buongObject.ugender;
              document.getElementById("uaddress").value = buongObject.uaddress;
              document.getElementById("uemail").value = buongObject.uemail;
              document.getElementById("upword").value = buongObject.upword;
              document.getElementById("userid").value = forIpinasa;
      }
    };

      var forIpinasa = ipinasa;
      console.log(forIpinasa);
      var token = "edit";
      xhttp.open("GET", "userCrud.php?forIpinasa="+forIpinasa+"&token="+token, true);
      xhttp.send();
  }
  function update() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.getElementById("updateResponse").innerHTML = this.responseText;
      }
    };
    var ufname = document.getElementById("ufname").value;
    var ulname = document.getElementById("ulname").value;
    var umname = document.getElementById("umname").value;
    var uage = document.getElementById("uage").value;
    var ugender = document.getElementById("ugender").value;
    var uaddress = document.getElementById("uaddress").value;
    var uemail = document.getElementById("uemail").value;
    var upword = document.getElementById("upword").value;
    var userid = document.getElementById("userid").value;
    var token = "update";
    xhttp.open("GET", "userCrud.php?ufname="+ufname+"&ulname="+ulname+"&umname="+umname+"&uage="+uage+"&ugender="+ugender+
    "&uaddress="+uaddress+"&uemail="+uemail+"&upword="+upword+"&userid="+userid+"&token="+token, true);
      xhttp.send();

  }
