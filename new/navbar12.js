const nav=document.querySelector('.nav')
	fetch('indexhomephp.php')
	.then(res=>res.text())
	.then(data=>{
		nav.innerHTML=data
	})