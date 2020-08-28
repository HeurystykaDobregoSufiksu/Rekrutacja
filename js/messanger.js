function message(msg){
    document.getElementById('successMsg').style.visibility = "visible";
    document.getElementById('successMsg').innerText=msg.toString();
    setTimeout(hideMsg, 2000)
}
function hideMsg(){
    document.getElementById('successMsg').style.visibility = "hidden";
}