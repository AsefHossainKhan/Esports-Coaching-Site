const userId = document.getElementById('userId');
const rowData = document.getElementById('rowData');
const wallet = document.getElementById('wallet');



function loadData() {
  var userIdValue = userId.value.trim();

  var userData = {
    'functionName' : "loadData",
    'userId' : userIdValue
  };

  userData = JSON.stringify(userData);

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachTransactionsController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send('json='+userData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      rowData.innerHTML = this.responseText;
      // alert(this.responseText);
    }
  }
}

function loadWallet() {
  var userIdValue = userId.value.trim();

  var userData = {
    'functionName' : "loadWallet",
    'userId' : userIdValue
  };

  userData = JSON.stringify(userData);

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachTransactionsController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send('json='+userData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      wallet.innerHTML = this.responseText;
      // alert(this.responseText);
    }
  }
}


