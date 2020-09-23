function coachApproval(){
    document.getElementById("showCoaches").style.visibility = "hidden";
    document.getElementById("error").style.visibility = "hidden";
    document.getElementById("showStudents").style.visibility = "hidden";
    document.getElementById("showAdmins").style.visibility = "hidden";
    document.getElementById("addAdminForm").style.visibility = "hidden";
    document.getElementById("coachApproval").style.visibility = "visible";

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/approveCoachController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send();

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            
             document.getElementById("coachApproval").innerHTML = this.responseText; 
            //  document.getElementById("pendingApproval").innerHTML = "</table>";
             //alert(this.responseText);
        }

    }
}
