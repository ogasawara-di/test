document.write("問1"+"<br>");
for(var i=1;i<=5;i++){
    document.write("★");
}
document.write("<br><br>");

document.write("問2"+"<br>");
for(var a=1;a<=2;a++){
    for(var b=1;b<=6;b++){
        if(b % 2==0){
            document.write("★");
        }
    }
    document.write("<br>");
}
document.write("<br>");

document.write("問3"+"<br>");
for(var c=1;c<=2;c++){
    for(var d=1;d<=10;d++){
        if(d % 2==0){
            document.write("☆");
        }
    }
    document.write("<br>");
}
document.write("<br>");

document.write("問4"+"<br>");
for(var e=1;e<=4;e++){
    for(var f=1;f<=10;f++){
        if(f % 2==0){
            document.write("★");
        }
    }
    document.write("<br>");
}
document.write("<br>");

document.write("問5"+"<br>");
for(var e=1;e<=4;e++){
    for(var f=1;f<=6;f++){
        if(f % 2==0){
            document.write("★");
        }
    }
    document.write("<br>");
}
document.write("<br>");

document.write("問6"+"<br>");
for(var g=1;g<=3;g++){
    for(var h=1;h<=3;h++){
        if(h % 2==0){
            document.write("☆");
        }else{
            document.write("★");
        }
    }
    document.write("<br>");
}
document.write("<br>");

document.write("問7"+"<br>");
for(var j=1;j<=4;j++){
    for(var k=1;k<=5;k++){
        if(k % 2==0){
            document.write("☆");
        }else{
            document.write("★");
        }
    }
    document.write("<br>");
}
document.write("<br>");

document.write("問8"+"<br>");
for(var l=1;l<=5;l++){
    for(var m=1;m<=l;m++){
        document.write("★");
    }
    document.write("<br>");
}