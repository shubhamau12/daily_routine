<!DOCTYPE html>
<html>
<head>
<title>Daily Routine APP</title>
<!-- Meta tag Keywords -->


<style>
#btn_sign_up
{
	background:#3333ff;
	color:white;
	font-size:25px;
	width:200px;
	height:40px;
	border-color:orange;
	border-radius:50px;
}
.opt
{
color:solid-black;
margin-left:20px;	
}


#tab1, th, td 
{
    border: 10px solid black;
    border-collapse: collapse;
	font-size:20px;
}
#tr1 
{
    border: 10px solid black;
    border-collapse: collapse;
	font-size:20px;
}


</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/styler.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>


<script>
 function news()
 {
	// alert("hello");
	 $("#main_div").fadeOut();
	 $("#news").fadeIn(3000);
 }
 function news_insert()
 {
	 
	$.ajax(
	{
        
		type:'POST',
		url:'news_process.php',
		data:$("#frm").serialize(),
		success:function(response)
		            {
						alert(response);
				if(response=="success")
					{
                     	$("#main_div").fadeIn(3000);
	                    $("#news").fadeOut();
					}	
					else
					{
						alert("Data not inserted");
					}
					},
		error:function(response)
		         {
					 alert("error");
				 },
    	});
	 
	 
	
	 
 }
 
  function milk()
 {
	// alert("hello");
	 $("#main_div").fadeOut();
	 $("#milk").fadeIn(3000);
	
 }
 function milk_insert()
 {
	 
	 $.ajax(
	{
        
		type:'POST',
		url:'milk_process.php',
		data:$("#frm_milk").serialize(),
		success:function(response)
		            {
						alert(response);
				if(response=="success")
					{
                     	$("#main_div").fadeIn();
	                    $("#milk").fadeOut(3000);
					}	
					else
					{
						alert("Data not inserted");
					}
					},
		error:function(response)
		         {
					 alert("error");
				 },
    	}); 
	 
 }


  function lunch()
 {
 
 $("#main_div").fadeOut();
   $("#lunch").fadeIn(3000);
 
	// alert("hello");
	  }
 function lunch_insert()
 {
	   $.ajax(
	{
        
		type:'POST',
		url:'lunch_process.php',
		data:$("#frm_lunch").serialize(),
		success:function(response)
		            {
						alert(response);
				if(response=="success")
					{
                     	
                  $("#main_div").fadeIn();
	              $("#lunch").fadeOut(3000);
    
					}	
					else
					{
						alert("Data not inserted");
					}
					},
		error:function(response)
		         {
					 alert("error");
				 },
    	});
      
 


	 
 }

  function dinner()
 {
	// alert("hello");
	 $("#main_div").fadeOut();
	 $("#dinner").fadeIn(3000);
 }
 function dinner_insert()
 {
	 
	   $.ajax(
	{
        
		type:'POST',
		url:'dinner_process.php',
		data:$("#frm_dinner").serialize(),
		success:function(response)
		            {
						alert(response);
				if(response=="success")
					{
                     	
                 $("#main_div").fadeIn(3000);
            	 $("#dinner").fadeOut();
					}	
					else
					{
						alert("Data not inserted");
					}
					},
		error:function(response)
		         {
					 alert("error");
				 },
    	});
	 
	 
	 
	$("#main_div").fadeIn(3000);
	 $("#dinner").fadeOut(); 
 }

 function show()
 {
	// alert("hello");
	 $("#main_div").fadeOut();
	 $("#show_list").fadeIn(3000);
	 debugger;
    var today = new Date;
    document.getElementById('ti').innerHTML= today.toDateString();

	 
 }
 function back_list()
 {
	$("#main_div").fadeIn(3000);
	 $("#show_list").fadeOut(); 
 }
 function newsp_list()
 {
	// alert("hello");
	 $("#show_list").fadeOut();
	 $("#news_list").fadeIn(3000);
 }
 function back_news_list()
 {
	 $("#show_list").fadeIn(3000);
	 $("#news_list").fadeOut();
 }
 
 function milk_list()
 {
	// alert("hello");
	 $("#show_list").fadeOut();
	 $("#milk_list").fadeIn(3000);
 }
 function back_milk_list()
 {
	 $("#show_list").fadeIn(3000);
	 $("#milk_list").fadeOut();
 }
 
 function lunch_list()
 {
	// alert("hello");
	 $("#show_list").fadeOut();
	 $("#lunch_list").fadeIn(3000);
 }
 function back_lunch_list()
 {
	 $("#show_list").fadeIn(3000);
	 $("#lunch_list").fadeOut();
 }
 
  function dinner_list()
 {
	// alert("hello");
	 $("#show_list").fadeOut();
	 $("#dinner_list").fadeIn(3000);
 }
 function back_dinner_list()
 {
	 $("#show_list").fadeIn(3000);
	 $("#dinner_list").fadeOut();
 }
 
 
</script>


</head>
<body>
<!--header-->
	
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">MAINTAIN ROUTINE</h2>
		<div class="sub-main" id="main_div">	
			<form method="post" id="frm_maintain_routine">
			<div style="background:black;margin:2px;padding-top:2px;">
              <marquee behavior="scroll">
       <i>
      <font color="white" size="5"> 
        <strong>
         <span id="time"></span>
        </strong>           
      </font>
   </i>
</marquee> 
  
			<label></label></div>
			<div style="background:white;margin:10px;padding:20px;"><input type="button" value="NEWS PAPER" onclick="news()" id="btn_sign_up">	</div>
            <div style="background:white;margin:10px;padding:20px;"><input type="button" value="MILK" onclick="milk()" id="btn_sign_up">	</div>
			 <div style="background:white;margin:10px;padding:20px;"><input type="button" value="LUNCH" onclick="lunch()" id="btn_sign_up">	</div>
			 <div style="background:white;margin:10px;padding:20px;"><input type="button" value="DINNER" onclick="dinner()" id="btn_sign_up">	</div>				
			<div style="background:white;margin:10px;padding:20px;"><input type="button" value="SHOW DETAILS" onclick="show()" id="btn_sign_up"></DIV>
			</form>
		</div>
		
		<div style="display:none" id="news">
		
		<form method="post" id="frm">
			<div style="background:white;margin:5px;padding:10px;">	<label class="">DATE</label><input type="date" name="dat"><label></label></div>
			   <div style="background:white;margin:10px;padding:20px;">
			       <label class="opt">ENGLISH</label>
			       <label class="opt"><input type="radio" name="optione1" value="yes" >YES</label>
			       <label class="opt"><input type="radio" name="optione1" value="NO">NO</label>
			  </div>
                    <div style="background:white;margin:10px;padding:20px;">
					<label class="opt">HINDI</label>
					<label class="opt"><input type="radio" name="optionh1" value="yes" >YES</label>
					<label class="opt"><input type="radio" name="optionh1" value="NO">NO</label>
					</div>   
				<div style="background:white;margin:10px;padding:20px;">
				<label class="opt">REGIONAL</label>
				<label class="opt"><input type="radio" name="optionr1" value="yes" >YES</label>
				<label class="opt"><input type="radio" name="optionr1" value="NO">NO</label>
				</div>
		     <div style="background:white;margin:10px;padding:20px;">
		        <label class="opt">OTHER</label>
		        <label class="opt"><input type="radio" name="optiono1" value="yes" >YES</label>
		        <label class="opt"><input type="radio" name="optiono1" value="NO">NO</label>
		    </div>
		  <div style="background:white;margin:10px;padding:20px;">
		  <input type="button" value="SUBMIT DETAILS" onclick="news_insert()" id="btn_sign_up">
		  </DIV>
			</form>
		
		</div>
		
		<div style="display:none" id="milk">
		
		<form method="post" id="frm_milk">
			<div style="background:white;margin:5px;padding:10px;">
			<label class="">DATE</label><input type="date" name="dat"><label></label>
			</div>
			<div style="background:white;margin:10px;padding:20px;">
			<label class="opt">DAY</label>
			<label class="opt"><input type="radio" name="optiond" value="yes" checked>YES</label>
			<label class="opt"><input type="radio" name="optiond" value="NO">NO</label>
			</div>
                    <div style="background:white;margin:10px;padding:20px;">
					<label class="opt">NIGHT</label><label class="opt">
					<input type="radio" name="optionn" value="yes" checked>YES</label>
					<label class="opt"><input type="radio" name="optionn" value="NO">NO</label>
					</div>   
		  <div style="background:white;margin:10px;padding:20px;">
		  <input type="button" value="SUBMIT DETAILS" onclick="milk_insert()" id="btn_sign_up">
		  </DIV>
			</form>
		
		</div>
		
				
				<div style="display:none" id="lunch">
		
		<form method="post" id="frm_lunch">
			<div style="background:white;margin:5px;padding:10px;">	
			<label class="">DATE</label><input type="date" name="dat"><label></label>
			</div>
			
			<div style="background:white;margin:10px;padding:20px;">
			<label class="opt">DAY</label>
			<label class="opt"><input type="radio" name="optionld" value="yes" checked>YES</label>
			<label class="opt"><input type="radio" name="optionld" value="NO">NO</label>
			</div>
 
		  <div style="background:white;margin:10px;padding:20px;"><input type="button" value="SUBMIT DETAILS" onclick="lunch_insert()" id="btn_sign_up"></DIV>
			</form>
		
		</div>
		
		<div style="display:none" id="dinner">
		
		<form method="post" id="frm_dinner">
			<div style="background:white;margin:5px;padding:10px;">	<label class="">DATE</label><input type="date" name="dat"><label></label><label></label></div>
			<div style="background:white;margin:10px;padding:20px;">
			<label class="opt">DINNER</label>
			<label class="opt"><input type="radio" name="optiondin" value="yes" checked>YES</label>
			<label class="opt"><input type="radio" name="optiondin" value="NO">NO</label></div>
 
		  <div style="background:white;margin:10px;padding:20px;">
		  <input type="button" value="SUBMIT DETAILS" onclick="dinner_insert()" id="btn_sign_up">
		  </DIV>
			</form>
		
		</div>
		
	
		<form method="post" id="show_list" style="display:none">
			<div style="background:black;margin:5px;padding:10px;">	 <marquee behavior="scroll">
       <i>
      <font color="white" size="5"> 
        <strong>
         <span id="ti">hello</span>
        </strong>           
      </font>
   </i>
</marquee> </label></div>
			<div style="background:white;margin:10px;padding:20px;"><input type="button" value="NEWS PAPER" onclick="newsp_list()" id="btn_sign_up">	</div>
            <div style="background:white;margin:10px;padding:20px;"><input type="button" value="MILK" onclick="milk_list()" id="btn_sign_up">	</div>
			 <div style="background:white;margin:10px;padding:20px;"><input type="button" value="LUNCH" onclick="lunch_list()" id="btn_sign_up">	</div>
			 <div style="background:white;margin:10px;padding:20px;"><input type="button" value="DINNER" onclick="dinner_list()" id="btn_sign_up">	</div>				
			
		  <div style="background:white;margin:10px;padding:20px;"><input type="button" value="BACK" onclick="back_list()" id="btn_sign_up"></DIV>
			</form>
		
	
	  <form method="post" id="news_list" style="display:none">
	         
			<div style="background:white;margin:5px;padding:10px;">	<input type="date" name="dat1"> <label class="">BETWEEN</label> 
			<input type="date" name="dat2"> <label></label></div>
			
			<div style="background:white;margin:5px;padding:10px;">	<label class="">NEWS LIST</label>
			<label></label>
			<div class="table-responsive"> 
			<table style="width:100%" id="tab1">
			 
                <tr id="tr1">
             <th id="dat">Date</th>
             <th id="eng">English </th>
			 <th id="hin">Hindi</th>
			 <th id="reg">Regional</th>
			 <th>Other</th>
			 
               </tr>
            </table>
			</div>
			</div>	
		  <div style="background:white;margin:10px;padding:20px;"><input type="button" value="BACK" onclick="back_news_list()" id="btn_sign_up"> 
		  <input type="button" value="SHOW" onclick="show_news_list()" id="btn_sign_up">
		  </DIV>
			</form>
		
		<form method="post" id="milk_list" style="display:none">
			<div style="background:white;margin:5px;padding:10px;">	<input type="date" name="dat1"> <label class="">BETWEEN</label> 
			<input type="date" name="dat2"> <label></label></div>
			<div style="background:white;margin:5px;padding:10px;">	
			<label class="">MILK LIST</label>
			
			<div class="table-responsive"> 
			<table style="width:100%" id="tab2">
			 
                <tr id="tr1">
             <th id="dat">Date</th>
             <th id="eng">Day</th>
			 <th id="hin">Night</th>			 
               </tr>
            </table>
			</div>
			
			<label></label>
			
			</div>	
		  <div style="background:white;margin:10px;padding:20px;"><input type="button" value="BACK" onclick="back_milk_list()" id="btn_sign_up"> <input type="button" value="SHOW" onclick="show_milk_list()" id="btn_sign_up"></DIV>
			</form>
		<form method="post" id="lunch_list" style="display:none">
			<div style="background:white;margin:5px;padding:10px;"><input type="date" name="dat1"> <label class="">BETWEEN</label> 
			<input type="date" name="dat2"></label></div>
			<div style="background:white;margin:5px;padding:10px;">	<label class="">LUNCH LIST</label>
			<div class="table-responsive"> 
			<table style="width:100%" id="tab3">
			 
                <tr id="tr1">
             <th id="dat">Date</th>
			 <th id="reg">Day</th>
			 
               </tr>
            </table>
			</div>
			
			<label></label></div>	
		  <div style="background:white;margin:10px;padding:20px;"><input type="button" value="BACK" onclick="back_lunch_list()" id="btn_sign_up">
		  <input type="button" value="SHOW" onclick="show_lunch_list()" id="btn_sign_up"></DIV>
			</form>
	
	     		<form method="post" id="dinner_list" style="display:none">
			<div style="background:white;margin:5px;padding:10px;">	<input type="date" name="dat1"> <label class="">BETWEEN</label> 
			<input type="date" name="dat2"><label></label></div>
			<div style="background:white;margin:5px;padding:10px;">	<label class="">Dinner LIST</label>
			<div class="table-responsive"> 
			<table style="width:100%" id="tab4">
			 
                <tr id="tr1">
             <th id="dat">Date</th>
			 <th id="reg">Night</th>
			 
               </tr>
            </table>
			</div>
			
			<label></label></div>	
		  <div style="background:white;margin:10px;padding:20px;"><input type="button" value="BACK" onclick="back_dinner_list()" id="btn_sign_up">
		  <input type="button" value="SHOW" onclick="show_dinner_list()" id="btn_sign_up">
		  </DIV>
			</form>
	
	
		
		
		<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->

<!--//footer-->
<script language="javascript">
debugger;
var today = new Date;
    document.getElementById('time').innerHTML= today.toDateString();
	
	
	
	function show_news_list()
 {
	 
	 var row;
     var cell1;
     var cell2;
     var cell3;
      var cell4;
	  var cell5;
	  var $count=0;
	  //$("#show_list").fadeOut();
	 $("#news_list").fadeIn(3000);
	  $.ajax
	   ({
		type:'POST',
		url:'news_list_process.php',
		
		data:$("#news_list").serialize(),
		success:function(response)
				   {
				var da = JSON.parse(response);
				  //$leng=da.date.length;
				  console.log(da.date);
				  console.log(da.eng);
				  alert(da.date);
				    var table1=document.getElementById("tab1");
					for(i=0;i<da.date.length;i++)
					{
					var row=table1.insertRow(1);
					cell1=row.insertCell(0);
					cell2=row.insertCell(1);
					cell3=row.insertCell(2);
					cell4=row.insertCell(3);
					cell5=row.insertCell(4);
					cell1.innerHTML=da.date[i];
                                        cell2.innerHTML=da.eng[i];
                                        cell3.innerHTML=da.hindi[i];
					  cell4.innerHTML=da.regional[i];
					  cell5.innerHTML=da.other[i];
					}
					  
                      //btndel.type="button";
                     // btndel.value="DELETE";
                     // btndel.setAttribute("onclick","Remove(this);");
					 // cell3.appendChild(btndel);
					  
					//  $count++;
					  //alert('sss'+$count);
				  },
    	});
    
	  
	    alert("hello");
	  
 }
 


function show_milk_list()
 {
	 
	 var row;
     var cell1;
     var cell2;
     var cell3;
	  var $count=0;
	  $("#show_list").fadeOut();
	 $("#milk_list").fadeIn(3000);
	  $.ajax
	   ({
		type:'POST',
		url:'milk_new_list.php',
		data:$("#milk_list").serialize(),
		success:function(response)
				   {
				var da = JSON.parse(response);
				  //$leng=da.date.length;
				  console.log(da.date);
				  console.log(da.eng);
				  alert(da.date);
				  alert(da.day);
				    var table1=document.getElementById("tab2");
					for(i=0;i<da.date.length;i++)
					{
					var row=table1.insertRow(1);
					cell1=row.insertCell(0);
					cell2=row.insertCell(1);
					cell3=row.insertCell(2);
				
					cell1.innerHTML=da.date[i];
                     cell2.innerHTML=da.day[i];
                      cell3.innerHTML=da.night[i];
					  
					}
					  
                      //btndel.type="button";
                     // btndel.value="DELETE";
                     // btndel.setAttribute("onclick","Remove(this);");
					 // cell3.appendChild(btndel);
					  
					//  $count++;
					  //alert('sss'+$count);
				  },
    	});
    
	  
	    //alert("hello");
	  
 }
 
//maintain lunch list


function show_lunch_list()
 {
	 
	 var row;
     var cell1;
     var cell2;
    	  var $count=0;
	  //$("#show_list").fadeOut();
	 //$("#milk_list").fadeIn(3000);
	  $.ajax
	   ({
		type:'POST',
		url:'lunch_list_process.php',
		data:$("#lunch_list").serialize(),
		success:function(response)
				   {
				var da = JSON.parse(response);
				  //$leng=da.date.length;
				  //console.log(da.date);
				  //console.log(da.eng);
				  alert(da.date);
				  //alert(da.day);
				    var table1=document.getElementById("tab3");
					for(i=0;i<da.date.length;i++)
					{
					var row=table1.insertRow(1);
					cell1=row.insertCell(0);
					cell2=row.insertCell(1);

				
					cell1.innerHTML=da.date[i];
                     cell2.innerHTML=da.lunch[i];
                      
					  
					}
					  
                      //btndel.type="button";
                     // btndel.value="DELETE";
                     // btndel.setAttribute("onclick","Remove(this);");
					 // cell3.appendChild(btndel);
					  
					//  $count++;
					  //alert('sss'+$count);
				  },
    	});
    
	  
	    alert("hello");
	  
 }







//end lunch list 

//show dinner list

function show_dinner_list()
 {
	 
	 var row;
     var cell1;
     var cell2;
    	  var $count=0;
	  //$("#show_list").fadeOut();
	 //$("#milk_list").fadeIn(3000);
	  $.ajax
	   ({
		type:'POST',
		url:'dinner_list_process.php',
		data:$("#dinner_list").serialize(),
		success:function(response)
				   {
				var da = JSON.parse(response);
				  //$leng=da.date.length;
				  //console.log(da.date);
				  //console.log(da.dinner);
				  //alert(da.date);
				 // alert(da.dinner);
				    var table1=document.getElementById("tab4");
					for(i=0;i<da.date.length;i++)
					{
					var row=table1.insertRow(1);
					cell1=row.insertCell(0);
					cell2=row.insertCell(1);

				
					cell1.innerHTML=da.date[i];
                     cell2.innerHTML=da.dinner[i];
                      
					  
					}
					  
                      //btndel.type="button";
                     // btndel.value="DELETE";
                     // btndel.setAttribute("onclick","Remove(this);");
					 // cell3.appendChild(btndel);
					  
					//  $count++;
					  //alert('sss'+$count);
				  },
    	});
    
	  
	    alert("hello");
	  
 }


//end dinner list



	
 </script>
 <style>
 table, th, td {
    border: 10px solid black;
    border-collapse: collapse;
	font-size:20px;
}
 </style>
</body>
</html>