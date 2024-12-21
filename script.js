function submitForm() {
    var name = document.getElementById("clubname").value;
    var email = document.getElementById("eventname").value;
    var age = document.getElementById("date").value;
 var age = document.getElementById("time").value;
 var age = document.getElementById("place").value;
 var age = document.getElementById("mode").value;
 var age = document.getElementById("enrollment").value;
    var xhr = new XMLHttpRequest();
    var url = "process.php";
    var params = "clubname=" + clubname + "&eventname=" + eventname + "&date=" + date + " &time " = " time + " &place = " + place + " &mode = " mode + " &enrollment = " enrollment;

    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("result").innerHTML = xhr.responseText;
        }
    }

    xhr.send(params);
}
