function menseki(hankei){
    return (hankei*hankei*3.14);
}
document.write("半径5cmの円の面積は"+menseki(5)+"cm²"+"<br>");
document.write("半径7cmの円の面積は"+menseki(7)+"cm²"+"<br>");
document.write("半径10cmの円の面積は"+menseki(10)+"cm²"+"<br>");

document.write("<br>");

function totalPrice(otona,kodomo){
    return (otona*500)+(kodomo*200);
}
document.write("Aグループの合計金額は"+totalPrice(2,4)+"円です。"+"<br>");
document.write("Bグループの合計金額は"+totalPrice(1,5)+"円です。"+"<br>");
document.write("Cグループの合計金額は"+totalPrice(3,7)+"円です。"+"<br>");