const name = document.getElementById('name');
const phone = document.getElementById('phone');
const ign = document.getElementById('ign');
const discord = document.getElementById('discord');
const steam = document.getElementById('steam');
const mmr = document.getElementById('mmr');
const primaryRole = document.getElementById('primaryRole');
const achievements = document.getElementById('achievements');
const timetable = document.getElementById('timetable');
const aboutMe = document.getElementById('aboutMe');
const userId = document.getElementById('userId');


function setData() {
  var userIdValue = userId.value.trim();

  var coachData = {
    'functionName' : "setData",
    'userId' : userIdValue
  };

  coachData = JSON.stringify(coachData);

  var xhttp = new XMLHttpRequest();
  xhttp.open('POST', '../controllers/coachEditProfileController.php', true);
  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.responseType = "json";
  xhttp.send('json='+coachData);

  xhttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      name.value = this.response.name;
      phone.value = this.response.phone;
      ign.value = this.response.ign;
      discord.value = this.response.discord;
      steam.value = this.response.steam;
      mmr.value = this.response.mmr;
      primaryRole.value = this.response.primaryRole;
      achievements.value = this.response.achievements;
      timetable.value = this.response.timetable;
      aboutMe.value = this.response.aboutMe;
    }
  }
}

function submits() {
  var userIdValue = userId.value.trim();
  if (nameCheck() && phoneCheck() && ignCheck() && discordCheck() && steamCheck() && mmrCheck() && primaryRoleCheck()) {
    var coachData = {
      'functionName' : "submits",
      'userId' : userIdValue,
      'name' : nameCheck(),
      'phone' : phoneCheck(),
      'ign' : ignCheck(),
      'discord' : discordCheck(),
      'steam' : steamCheck(),
      'mmr' : mmrCheck(),
      'primaryRole' : primaryRoleCheck(),
      'achievements' : achievementsCheck(),
      'timetable' : timetableCheck(),
      'aboutMe' : aboutMeCheck(),
    };
    
    coachData = JSON.stringify(coachData);

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/coachEditProfileController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.responseType = "json";
    xhttp.send('json='+coachData);

    xhttp.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        alert(this.response.status);
      }
    }
  }
  else {
    alert('Edit failed');
  }
}

function nameCheck() {
  var nameValue = name.value.trim();
  if (nameValue === '') {
    alert("name Field Cannot be Empty");
    return false;
  }
  else {
    return nameValue;
  }
}

function phoneCheck() {
  var phoneValue = phone.value.trim();
  if (phoneValue === '') {
    alert("Phone Field Cannot be Empty");
    return false;
  }
  else {
    return phoneValue;
  }
}

function ignCheck() {
  var ignValue = ign.value.trim();
  if (ignValue === '') {
    alert("ign Field Cannot be Empty");
    return false;
  }
  else {
    return ignValue;
  }
}

function discordCheck() {
  var discordValue = discord.value.trim();
  if (discordValue === '') {
    alert("discord Field Cannot be Empty");
    return false;
  }
  else {
    return discordValue;
  }
}

function steamCheck() {
  var steamValue = steam.value.trim();
  if (steamValue === '') {
    alert("steam Field Cannot be Empty");
    return false;
  }
  else {
    return steamValue;
  }
}

function mmrCheck() {
  var mmrValue = mmr.value.trim();
  if (mmrValue === '') {
    alert("mmr Field Cannot be Empty");
    return false;
  }
  else {
    return mmrValue;
  }
}

function primaryRoleCheck() {
  var primaryRoleValue = primaryRole.value.trim();
  if (primaryRoleValue === '') {
    alert("Primary Role Field Cannot be Empty");
    return false;
  }
  else {
    return primaryRoleValue;
  }
}

function achievementsCheck() {
  var achievementsValue = achievements.value.trim();
  var check = /\'/g;
  achievementsValue = achievementsValue.replace(check,"\'\'");
  return achievementsValue;
}

function timetableCheck() {
  var timetableValue = timetable.value.trim();
  var check = /\'/g;
  timetableValue = timetableValue.replace(check,"\'\'");
  return timetableValue;
}

function aboutMeCheck() {
  var aboutMeValue = aboutMe.value.trim();
  var check = /\'/g;
  aboutMeValue = aboutMeValue.replace(check,"\'\'");
  return aboutMeValue;
}

// function securityQuestionCheck() {
//   var securityQuestionValue = securityQuestion.value.trim();
//   if (securityQuestionValue === '') {
//     alert("securityQuestion Field Cannot be Empty");
//     return false;
//   }
//   else {
//     return securityQuestionValue;
//   }
// }

// function answerCheck() {
//   var answerValue = answer.value.trim();
//   if (answerValue === '') {
//     alert("answer Field Cannot be Empty");
//     return false;
//   }
//   else {
//     return answerValue;
//   }
// }