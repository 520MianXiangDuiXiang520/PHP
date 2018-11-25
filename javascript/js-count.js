/**
 * Created by lenovo on 2018/11/25.
 */
function count() {

    var fu = document.getElementById("fuhao").value;
    var n1 = document.getElementById("num1").value;
    var n2 = document.getElementById("num2").value;
    var n3;
    switch (fu) {
        case "+":
            n3 = n1 + n2;
            break;
        case "-":
            n3 = n1 - n2;
            break;
        case "*":
            n3 = n1 * n2;
            break;
        case "/":
            n3 = n1 / n2;
            break;
        case "%":
            n3=n1%n2;
            break;
        default:
            alert("error!");
            break;
    }
    document.getElementById("jieguo").value=n3;

}
