function ajax(e){
    var radio1 = document.getElementById('genderM');
    var radio2 = document.getElementById('genderZ');
    var check=document.getElementById('checkbox')
    if(radio1.checked || radio2.checked) {
    } else {
        alert('Niste odabrali spol');
    }
    if(check.checked){
    }
    else{
        alert('Niste prihvatili uvjete korištenja');
    }
        var user=document.getElementById("user");
        var email=document.getElementById("email");
        var password=document.getElementById("password");
        var m=document.getElementById("genderM");
        var z=document.getElementById("genderZ");

        if(user.value==="" && email.value==="" && password.value===""){
            user.style.borderColor="red";
            email.style.borderColor="red";
            password.style.borderColor="red";
        }else if(user.value==="" && typeof email.value!=="" && typeof password.value!==""){
            user.style.borderColor="red";
        }else if(email.value==="" && typeof user.value!=="" && typeof password.value!==""){
            email.style.borderColor="red";
        }else if(password.value==="" && typeof user.value!=="" && typeof email.value!==""){
            password.style.borderColor="red";
        }
        e.preventDefault();
        const xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../ajax/provjera.php");
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.onload = function() 
        {
            if(this.responseText == 0) {
                document.registerForm.submit();
            }
            else{
                alert('Username vec postoji!');
            }
        }
        var user='username=' + document.getElementById("user").value;
        xhttp.send(user);
    }
    function border() {
        var user=document.getElementById("user");
        var email=document.getElementById("email");
        var password=document.getElementById("password");
        var m=document.getElementById("genderM");
        var z=document.getElementById("genderZ");

        if(user.value==="" && email.value==="" && password.value===""){
            user.style.borderColor="red";
            email.style.borderColor="red";
            password.style.borderColor="red";
        }else if(user.value==="" && typeof email.value!=="" && typeof password.value!==""){
            user.style.borderColor="red";
        }else if(email.value==="" && typeof user.value!=="" && typeof password.value!==""){
            email.style.borderColor="red";
        }else if(password.value==="" && typeof user.value!=="" && typeof email.value!==""){
            password.style.borderColor="red";
        }
    }