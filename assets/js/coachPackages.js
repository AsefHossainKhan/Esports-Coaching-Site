const userId = document.getElementById('userId');
const packageName = document.getElementById('packageName');
const packagePrice = document.getElementById('packagePrice');
const packageDuration = document.getElementById('packageDuration');
const rowData = document.getElementById('rowData');


function addPackage() {
  var packageData = {
    'functionName' : "addPackage",
    'userId' : userId.value.trim(),
    'packageName' : packageNameCheck(),
    'packagePrice' : packagePriceCheck(),
    'packageDuration' : packageDurationCheck()
  };

  packageData = JSON.stringify(packageData);
  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachPackageController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.responseType = "json";
  xhttp.send('json='+packageData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      alert(this.response.status);
      currentPackages();
    }
  }
}

function packageNameCheck() {
  var packageNameValue = packageName.value.trim();
  if (packageNameValue === '') {
    alert("packageName Field Cannot be Empty");
    return false;
  }
  else {
    return packageNameValue;
  }
}

function packagePriceCheck() {
  var packagePriceValue = packagePrice.value.trim();
  if (packagePriceValue === '') {
    alert("packagePrice Field Cannot be Empty");
    return false;
  }
  else {
    return packagePriceValue;
  }
}

function packageDurationCheck() {
  var packageDurationValue = packageDuration.value.trim();
  if (packageDurationValue === '') {
    alert("packageDuration Field Cannot be Empty");
    return false;
  }
  else {
    return packageDurationValue;
  }
}

function deletes(packageId) {
  var packageData = {
    'functionName' : "deletes",
    'packageId' : packageId
  };

  packageData = JSON.stringify(packageData);
  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachPackageController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send('json='+packageData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      alert (this.responseText);
      currentPackages();
    }
  }  
}

function currentPackages() {
  var userIdValue = userId.value.trim();

  var packageData = {
    'functionName' : "currentPackages",
    'userId' : userIdValue
  };

  packageData = JSON.stringify(packageData);

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachPackageController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  // xhttp.responseType = "json";
  xhttp.send('json='+packageData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      rowData.innerHTML = this.responseText;
      // alert(this.responseText);
    }
  }
}


