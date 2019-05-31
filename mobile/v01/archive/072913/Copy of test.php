<head>
<script language="javascript" type="text/javascript">
function ajaxFunction(){  
    var xmlHttp;
      try{    // Firefox, Opera 8.0+, Safari    
        xmlHttp=new XMLHttpRequest();
    }
      catch (e){    // Internet Explorer    
        try{      
            xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e){      
            try{
                xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
              catch (e){
                alert("Your browser does not support AJAX!");
                return false;
            }
        }
    }
    xmlHttp.onreadystatechange=function()
      {
      if(xmlHttp.readyState==4)
        {
            document.getElementById("response").innerHTML=xmlHttp.responseText;
            var img = document.createElement('img');
            img.onload = function (e) {
                document.getElementById("imgHolder").width=this.width;
                document.getElementById("imgHolder").height=this.height;
                document.getElementById("imgHolder").src=this.src;
            }
            img.onerror = function(e){
                alert("Error processing Image.  Please try again.")
            }
            img.src = xmlHttp.responseText;
        }
      }
      
    sendVars="tx="+document.forms["myForm"]["txtTxt"].value;
    sendVars+="&fon=ARIAL.TTF";
    sendVars+="&sz="+document.forms["myForm"]["txtSz"].value;
    sendVars+="&fg="+document.forms["myForm"]["txtFG"].value;;
    sendVars+="&bg="+document.forms["myForm"]["txtBG"].value;;

    xmlHttp.open("POST","testAjaxSS.php",true);
    xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //include this for post or it won't work!!!!
    xmlHttp.send(sendVars);  
}
 </script>
</head>
<body>
<form name="myForm">
text: <input type="text" name="txtTxt" /><br/>
size: <input type="text" name="txtSz" /><br/>
fg: <input type="text" name="txtFG" /><br/>
bg: <input type="text" name="txtBG" /><br/>
</form>
<img src="" id="imgHolder"/>
<a href="javascript:ajaxFunction()">Send!</a>
</body>
</html>