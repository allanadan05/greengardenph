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
    var productName = document.getElementById("uproductName").value;
    var productDescription = document.getElementById("uproductDescription").value;
    var category = document.getElementById("ucategory").value;
    var quantity = document.getElementById("uquantity").value;
    var price = document.getElementById("productid").value;
    var token = "update";
    xhttp.open("GET", "editProduct.php?uproductName="+uproductName+"&uproductDescription="+uproductDescription+"&ucategory="+ucategory+"&uquantity="+uquantity+"&uprice="+uprice+
    "&token="+token+"&productid="+productid, true);
      xhttp.send();

  }
  //Ban and confirm
  function ban(ipinasa){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
                var buongObject=JSON.parse(this.responseText);
                document.getElementById("banfname").value = buongObject.banfname;
                document.getElementById("banlname").value = buongObject.banlname;
                document.getElementById("banuserid").value = forIpinasa;
        }
      };

        var forIpinasa = ipinasa;
        console.log(forIpinasa);
        var token = "ban";
        xhttp.open("GET", "userCrud.php?forIpinasa="+forIpinasa+"&token="+token, true);
        xhttp.send();
}
function banConfirm(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("banConfirmResponse").innerHTML = this.responseText;
    }
  };
	var token ="banConfirm";
	var banuserid = document.getElementById("banuserid").value;
	xhttp.open("GET", "userCrud.php?banuserid="+banuserid+"&token="+token, true);
    xhttp.send();
}
