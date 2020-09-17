const phone = document.getElementById('phone');
const ign = document.getElementById('ign');
const discord = document.getElementById('discord');
const steam = document.getElementById('steam');
const mmr = document.getElementById('mmr');
const primaryRole = document.getElementById('primaryRole');
const achievements = document.getElementById('achievements');
const timetable = document.getElementById('timetable');
const aboutMe = document.getElementById('aboutMe');
const securityQuestion = document.getElementById('securityQuestion');
const answer = document.getElementById('answer');
const userId = document.getElementById('userId');

function submits() {
  var userIdValue = userId.value.trim();
  if (phoneCheck() && ignCheck() && discordCheck() && steamCheck() && mmrCheck() && primaryRoleCheck() && securityQuestionCheck() && answerCheck()) {
    var coachData = {
      'userId' : userIdValue,
      'phone' : phoneCheck(),
      'ign' : ignCheck(),
      'discord' : discordCheck(),
      'steam' : steamCheck(),
      'mmr' : mmrCheck(),
      'primaryRole' : primaryRoleCheck(),
      'achievements' : achievementsCheck(),
      'timetable' : timetableCheck(),
      'aboutMe' : aboutMeCheck(),
      'securityQuestion' : securityQuestionCheck(),
      'answer' : answerCheck()
    };
    
    coachData = JSON.stringify(coachData);

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/coachFirstProfileController.php', true);
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
  return achievementsValue;
}

function timetableCheck() {
  var timetableValue = timetable.value.trim();
  return timetableValue;
}

function aboutMeCheck() {
  var aboutMeValue = aboutMe.value.trim();
  return aboutMeValue;
}

function securityQuestionCheck() {
  var securityQuestionValue = securityQuestion.value.trim();
  if (securityQuestionValue === '') {
    alert("securityQuestion Field Cannot be Empty");
    return false;
  }
  else {
    return securityQuestionValue;
  }
}

function answerCheck() {
  var answerValue = answer.value.trim();
  if (answerValue === '') {
    alert("answer Field Cannot be Empty");
    return false;
  }
  else {
    return answerValue;
  }
}