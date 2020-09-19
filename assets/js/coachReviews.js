const userId = document.getElementById('userId');
const rowData = document.getElementById('rowData');



function features(reviewsId) {
  var reviewsData = {
    'functionName' : "features",
    'reviewsId' : reviewsId
  };

  reviewsData = JSON.stringify(reviewsData);
  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachReviewsController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send('json='+reviewsData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      alert (this.responseText);
      currentReviews();
    }
  }  
}

function currentReviews() {
  var userIdValue = userId.value.trim();

  var reviewsData = {
    'functionName' : "currentReviews",
    'userId' : userIdValue
  };

  reviewsData = JSON.stringify(reviewsData);

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachReviewsController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  // xhttp.responseType = "json";
  xhttp.send('json='+reviewsData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      rowData.innerHTML = this.responseText;
      // alert(this.responseText);
    }
  }
}


