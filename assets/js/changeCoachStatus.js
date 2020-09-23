var id; 

function changeCoachStatus(id){
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/changeCoachStatusController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('&id='+id);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            document.getElementById("coachApproval").innerHTML = this.responseText;
        }
    }
}
