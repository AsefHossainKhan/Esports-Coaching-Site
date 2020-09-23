const profileGameName = document.getElementById('profileGameName');
const profileFullName = document.getElementById('profileFullName');
// const phone = document.getElementById('phone');
const ign = document.getElementById('ign');
// const discord = document.getElementById('discord');
// const steam = document.getElementById('steam');
const mmr = document.getElementById('mmr');
const primaryRole = document.getElementById('primaryRole');
const achievements = document.getElementById('achievements');
const availability = document.getElementById('availability');
const about = document.getElementById('about');
const userId = document.getElementById('userId');
const profileAvatar = document.getElementById('profileAvatar');



function setData() {
  var userIdValue = userId.value.trim();

  var coachData = {
    'functionName' : "setData",
    'userId' : userIdValue
  };

  coachData = JSON.stringify(coachData);

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachProfileController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.responseType = "json";
  xhttp.send('json='+coachData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      // alert(this.response.name);
      profileGameName.innerHTML = this.response.ign;
      profileFullName.innerHTML =  this.response.name;
      achievements.innerHTML = this.response.achievements;
      availability.innerHTML = this.response.timetable;
      profileAvatar.src = this.response.profilePicture;
      about.innerHTML = this.response.aboutMe;
    }
  }
}

function setPackages() {
  var userIdValue = userId.value.trim();

  var packageData = {
    'functionName' : "currentPackages",
    'userId' : userIdValue
  };

  packageData = JSON.stringify(packageData);

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachProfileController.php', true);
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

function setReviews() {
  var userIdValue = userId.value.trim();

  var reviewsData = {
    'functionName' : "currentReviews",
    'userId' : userIdValue
  };

  reviewsData = JSON.stringify(reviewsData);

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachProfileController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  // xhttp.responseType = "json";
  xhttp.send('json='+reviewsData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      reviews.innerHTML = this.responseText;
      // alert(this.responseText);
    }
  }
}

function setFeaturedReviews() {
  var userIdValue = userId.value.trim();

  var reviewsData = {
    'functionName' : "currentFeaturedReviews",
    'userId' : userIdValue
  };

  reviewsData = JSON.stringify(reviewsData);

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachProfileController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  // xhttp.responseType = "json";
  xhttp.send('json='+reviewsData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      featuredReview.innerHTML = this.responseText;
      // alert(this.responseText);
    }
  }
}