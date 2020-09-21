function showStudents(){
    document.getElementById("addAdminForm").style.visibility = "hidden";
    document.getElementById("error").style.visibility = "hidden";
    document.getElementById("showCoaches").style.visibility = "hidden";
    document.getElementById("showAdmins").style.visibility = "hidden";
    document.getElementById("showStudents").style.visibility = "visible";

    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/showStudentsController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send();

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            // document.getElementById("pendingApproval").innerHTML = "<table> border='1'";
             document.getElementById("showStudents").innerHTML = this.responseText; 
            //  document.getElementById("pendingApproval").innerHTML = "</table>";
             //alert(this.responseText);
        }
    }
}