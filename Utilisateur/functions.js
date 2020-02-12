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

function graph(canvas_name, id)
{

        request = new ajaxRequest();

        request.onreadystatechange = function()
        {
          if (this.readyState == 4)
          {
              if (this.status == 200)
              {
                var res = this.response;
                console.log(this.response);

                let Progress = document.getElementById(canvas_name).getContext('2d');

                Chart.defaults.global.defaultFontFamily = 'Lato';
                Chart.defaults.global.defaultFontSize = 18;
                Chart.defaults.global.defaultFontColor = '#777';

                let massPopChart = new Chart(Progress, {
                  type:'bar', 
                  
                  data:{
                    labels:['Matière', 'Optique', 'Energie', 'SVT', 'Espace', 'Maths'],
                    datasets:[{
                      label:'Progression',
                      data:[
                        res.Matiere,
                        res.Optique,
                        res.Energie,
                        res.SVT,
                        res.Espace,
                        res.Maths
                      ],
                      backgroundColor:[
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)'
                      ],
                      borderWidth:1,
                      borderColor:'#777',
                      hoverBorderWidth:3,
                      hoverBorderColor:'#000'
                    }]
                  },
                  options:{
                    title:{
                      display:true,
                      text:'Ta progression sur le site !',
                      fontSize:25
                    },
                    layout:{
                      padding:{
                        left:50,
                        right:0,
                        bottom:0,
                        top:0
                      }
                    },
                    tooltips:{
                      enabled:true
                    },
                    scales: {
                        yAxes: [{
                                display: true,
                                ticks: {
                                    beginAtZero: true,
                                    steps: 20,
                                    stepValue: 10,
                                    max: 100
                                },
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Pourcentage'
                                }
                            }]
                    }
                    }
                  });
              }
              else alert("Erreur Ajax :" + this.statusText);
          }
        };

      param = 'id=' + id;
      request.open("GET","recup_score.php?" + param,true);
      request.responseType = "json";
      request.send(null);
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

function test(msg)
{
	console.log(msg);
}