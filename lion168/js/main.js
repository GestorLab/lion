var ajax = new AJAX();ajax.setcharset("GBK");


function checkusername(username){
	if(username!=''){
	set("divTest","<font color=red>���ڼ���û�����Loading��</font>");
	ajax.get(
		"/ajax.php?action=checkusername&username="+username, 
		function(obj){
			if(obj.responseText){
				 divTest.innerHTML = obj.responseText;
				 if (obj.responseText == "<font color=#FF0000>���û����ѱ�ע�ᣬ���������룡</font>")
				 {
					 alert("���û����ѱ�ע�ᣬ����������")
					 document.frmMain.UserName.value="";
					 document.frmMain.UserName.focus();
					 return false;
				}
			}
		}
	);
	}else{0
		set("divTest","<font color=red>* �����������û���</font>");
	}
}
