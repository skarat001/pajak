var x=document.getElementById("form-registrasi").elements
var print="";
 for (var i = 0; i < x.length; i++) {
  //for(key in x) {
  
    print+=x[i].name+" \n";

 
  }
  console.log(print);