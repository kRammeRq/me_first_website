var count = 0;
document.getElementById("myButton").onclick = function () {
    count++;
	if (count % 2 == 0) {
        var elem = document.getElementById('demo');
        elem.innerHTML = "";
	} else {
        var img = document.createElement("img");
        img.src = "https://www.advgazeta.ru/upload/iblock/c90/q8qotqberwmrcvxirkcm60b02jfeg42c/macrovector_1.jpg";
        document.getElementById("demo").appendChild(img);
	}
}