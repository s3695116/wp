function creditCheck() {

    var letter = document.getElementById("credit").value;
    var text;
    var n = letter.length;
    if (letter.startsWith('4') && (n == 16)){
            document.getElementById("cc-tip").innerHTML = '<img src="../../media/visa-logo.png"/>';


    }
    else if(letter.startsWith('5') && (n == 16))
        {
            document.getElementById("cc-tip").innerHTML = '<img src="../../media/master-logo.png" width="60" height="40"/> ' ;
        }
    else {
        text = "-blank-";
            document.getElementById("cc-tip").innerHTML = text;
    }


}