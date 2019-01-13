// Fonction de vérification de mot de passe
function checkpass()
{
	var val1 = document.getElementById("mdp1");
	var val2 = document.getElementById("mdp2");

//	console.log(val1.value == "" || val2.value == "");
		 
	if(val1.value != val2.value)
	{
	   	document.getElementById("alerte_mdp").innerHTML="&nbsp;&#x2718;";
	    document.getElementById("alerte_mdp").style.color = 'red';
	}
	else
	{
		if (val1.value == "" || val2.value == "")
		{
			document.getElementById("alerte_mdp").innerHTML="";
		}
		else
		{
			document.getElementById("alerte_mdp").innerHTML="&nbsp;&#x2714;";
	   		document.getElementById("alerte_mdp").style.color = 'green';
		}
	   	
	}
}


// Fonctions de vérification de la non-présence du pseudo dans la BDD 
function checkpsd(pseudo)
{

    if (pseudo.value == '')
    {
        document.getElementById("psd").innerHTML = '';
        return
    }

   	request = new ajaxRequest();

    request.onreadystatechange = function()
   	{
	    if (this.readyState == 4)
	    {
	        if (this.status == 200)
	        {
	        	var res = this.response;
	        	console.log(this);
		        document.getElementById("psd").innerHTML = res.msg;
		        document.getElementById("psd").style.color = res.color;
	        }
	        else alert("Erreur Ajax :" + this.statusText);
	    }
	};

    params = "pseudo=" + pseudo.value;
    console.log(params);
    request.open("POST","check_psd.php",true);
    request.responseType = "json";
   	request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	request.send(params);
}

// Fonctions de vérification de la non-présence du mail dans la BDD et de son bonne écriture
function checkml(mail)
{
    if (mail.value == '')
    {
        document.getElementById('ml').innerHTML = '';
        return
    }

   	request = new ajaxRequest();

    request.onreadystatechange = function()
   	{
	    if (this.readyState == 4)
	    {
	        if (this.status == 200)
	        {
	        	var res = this.response;
	        	console.log(this);
		        document.getElementById('ml').innerHTML = res.msg;
		        document.getElementById("ml").style.color = res.color;
	        }
	        else alert("Erreur Ajax :" + this.statusText);
	    }
	};

    params = "mail=" + mail.value;
    console.log(params);
    request.open("POST","check_ml.php",true);
    request.responseType = 'json';
   	request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	request.send(params)
}

// Fonction de rêquetes Ajax3
function ajaxRequest()
{
    try { var request = new XMLHttpRequest() }
	catch(e1) {
	    try { request = new ActiveXObject("Msxml2.XMLHTTP")}
	    catch(e2) {
	        try { request = new ActiveXObject("Microsoft.XMLHTTP") }
	        catch(e3) {
		        request = false;
	}}}
	return request;
}