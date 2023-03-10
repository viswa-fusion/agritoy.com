
var row=0;
function keyCode(event){
	var box1=id01.value;
	var box2=id02.value;
	var w=event.keyCode;
	if (w === 13){
		var display = document.getElementById("display");
        var newRow = display.insertRow(row);
		var cell1 = newRow.insertCell(0);
	    var cell2 = newRow.insertCell(1);
		cell1.innerHTML=box1;
		cell2.innerHTML=box2;
		row++;
	}
}
