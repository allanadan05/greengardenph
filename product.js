//add
function insert() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("addResponse").innerHTML = this.responseText;
      document.getElementById("productName").value="";
      document.getElementById("productDescription").value="";
      document.getElementById("category").value="";
      document.getElementById("quantity").value="";
      document.getElementById("price").value="";

    }
  };
  var productName = document.getElementById("productName").value;
  var productDescription = document.getElementById("productDescription").value;
  var category = document.getElementById("category").value;
  var quantity = document.getElementById("quantity").value;
  var price = document.getElementById("price").value;
  var token = "insert";
  xhttp.open("GET", "addProduct.php?productName="+productName+"&productDescription="+productDescription+"&category="+category+"&quantity="+quantity+"&price="+price+
  "&token="+token, true);
    xhttp.send();

}

//edit and update
function edit(ipinasa){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
              var buongObject=JSON.parse(this.responseText);
              document.getElementById("productid").value = forIpinasa;
              document.getElementById("uproductName").value = buongObject.uproductName;
              document.getElementById("uproductDescription").value = buongObject.uproductDescription;
              document.getElementById("ucategory").value = buongObject.ucategory;
              document.getElementById("uquantity").value = buongObject.uquantity;
              document.getElementById("uprice").value = buongObject.uprice;
      }
    };

      var forIpinasa = ipinasa;
      console.log(forIpinasa);
      var token = "edit";
      xhttp.open("GET", "editProduct.php?forIpinasa="+forIpinasa+"&token="+token, true);
      xhttp.send();
  }
  function update() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        document.getElementById("updateResponse").innerHTML = this.responseText;
      }
    };
    var uproductName = document.getElementById("uproductName").value;
    var uproductDescription = document.getElementById("uproductDescription").value;
    var ucategory = document.getElementById("ucategory").value;
    var uquantity = document.getElementById("uquantity").value;
    var uprice = document.getElementById("uprice").value;
    var productid = document.getElementById("productid").value;
    var token = "update";
    xhttp.open("GET", "editProduct.php?uproductName="+uproductName+"&uproductDescription="+uproductDescription+"&ucategory="+ucategory+"&uquantity="+uquantity+"&uprice="+uprice+
    "&token="+token+"&productid="+productid, true);
      xhttp.send();

  }
  //Ban and confirm
  function rm(ipinasa){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
                var buongObject=JSON.parse(this.responseText);
                document.getElementById("rmproductid").value = forIpinasa;
                document.getElementById("rmproductName").value = buongObject.rmproductName;
        }
      };

        var forIpinasa = ipinasa;
        console.log(forIpinasa);
        var token = "remove";
        xhttp.open("GET", "removeProduct.php?forIpinasa="+forIpinasa+"&token="+token, true);
        xhttp.send();
}
function rmConfirm(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("rmConfirmResponse").innerHTML = this.responseText;
    }
  };
	var token ="rmConfirm";
	var rmproductid = document.getElementById("rmproductid").value;
	xhttp.open("GET", "removeProduct.php?rmproductid="+rmproductid+"&token="+token, true);
    xhttp.send();
}
