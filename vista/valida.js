function valida() {
    var name = document.forms["login"]["uname"].value;
    var password = document.forms["login"]["password"].value;
    
    var rName = "user";
    var rPassword = "123";

    if (name == "" && password == "") {
        alert("Introduce usuario y contraseña");
        return false;
    } else if (name == "") {
        alert("Introduce tu user name.");
        return false;
    } else if (password == "") {
        alert("Introduce tu contraseña.");
        return false;
    } else {
        if (name != rName || password != rPassword){
            alert("Usuario y/o contraseña incorrectos");
            return false;
        }else{
            return true;
        }
    }
}   


