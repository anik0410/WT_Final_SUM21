<script>
function get(id){
	return document.getElementById(id);
}
function loadDoc(){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","my_profile.php",true);
	xhr.onreadystatechange=function(){
		if(this.readystatechange=4 && this.status == 200){
			get("demo").innerHTML= this.responseText;
		}
	};
	xhr.send();
}
</script>
<button onclick="loadDoc()">
Click Me 
</button>
<div id="demo">
</div>