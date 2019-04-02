
function kiemtra(){
	var ho=document.forms["dk"]["firstname"].value;
	var ten= document.forms["dk"]["lastname"].value
	var email=document.forms["dk"]["email"].value;
	var pw=document.forms["dk"]["pass"].value;

	var f=/[a-zA-Z]/;
	var l=/[a-zA-Z]/;
	var e=/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
	var p=/^0[0-9]{9}$/;
	
	if(f.test(ho)==false){
		alert("Họ không hợp lệ!!!");
		return false;
	}
	if(l.test(ten)==false){
		alert("Tên không hợp lệ!!!");
		return false;
	}
	if(e.test(email)==false) {
		alert("Email khong hop le !!!");
		return false;
	}
	if(p.test(pw)==false){
		alert("Password không hợp lệ!!!");
		return false;
	}
}