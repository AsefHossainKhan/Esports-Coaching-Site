var id;

function deleteCoaches(id){
    var xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controllers/deleteCoachController.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('&id='+id);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //alert(this.responseText);
            document.getElementById("showCoaches").innerHTML = this.responseText;
        }
    }
}