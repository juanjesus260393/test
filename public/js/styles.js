function enable_input(){

if(document.getElementById('btnbudgettotal').disabled == true)
			{
				document.getElementById('btnbudgettotal').disabled = false;
			}else if(document.getElementById('btnbudgettotal').disabled==false){
				// deshabilitamos
				   	document.getElementById('btnbudgettotal').disabled = true;
			}


}