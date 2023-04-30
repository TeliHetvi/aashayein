<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing:border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #989898;

}
.content {
  max-width: 1000px;
  margin: auto;
  background: white;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.9);
     box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9);
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
  font-family:Courier;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
  font-family:Courier;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}
.textcolor{
	color:  #0000b3;
	font-family: times;
	font-size: 25px;
}

a:link{
	font-family: times;
	color: #ff6666;
}
a:hover{
	text-decoration:none;
	color: red;		
}
a:active{
	color:#66ff33;
}
a:visited{
	color:#2E151B;
}
img:hover {
    cursor: default;
    transform: rotate(360deg);
    transition: all 0.3s ease-in-out 0s;
  }
}
</style>
</head>
<body>
<div class="content">
<div style="text-align:center">
  <h1 style="font-size:40px">Here, All You Can Do For Senior Citizens.</h1>
</div>

<!-- The App Section -->
<div class="container" style="background-color:#F0F8FF">
  <div class="row">
    <div class="column-66">
	  <p style="font-size:60px"><b>Help in Pandemic</b> </p>	
      <p class="textcolor"><span>Since,2019 The CORONA Pandemic has affected many things  
	  specially in lockdown period and other medical situations  
	  in which theelderly got more panic and in trouble,so here 
	  You as a Volunteer can help them very easily through  
	  Aashayein like bringing Grocery,Vegetables, Medicines &
	  manymore things you can do to help and stay away them 
	  CORONA Virus as its very harmful for senior citizens 
	  to recover as per WHO.we are providong you list of 
	  senior citizens according to your home locality to  
	  help them as fast as you can do.</p>
      <a href="helpsc.php" ><b><p style="font-size:30px">Help Them</p></b></a>
	  <!--<button class="button">Download Application</button>-->
	  </span>
    </div>
    <div class="column-33">
        <img src="VOLUNTEER.jpg" width="1280" height="1280">	  
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container" style="background-color:#EDC7B7">
  <div class="row">
	<div class="column-33">
        <img src="SC24.jpg" height="1280" width="1280">
    </div>
    <div class="column-66">
      <p style="font-size:60px"><b>Chat for Relief</b></h1>
      <p class="textcolor"><span>In the modern era, The Social media leaves the people 
	  more alone and feel them likewise no one for them  
	  and this is how their life is to be just like venom. 
	  So here is the chance through Aashayein to change in 
	  someone's life with your time to bring shine in their 
	  life.Our ancestors said <b>"Old is Gold"</b> but the generation 
	  gap is mainly responsible for it,they are  not liking   
	  their presence,behaviour and advices as well.<br/>
	  Sharing sorrow decreases and sharing happiness increases..!!<br/>
	  </p>
	  <a href="event_noti.php" ><b><p style="font-size:30px">Help Them</p></b></a>
      <!--<button class="button">Download Application</button>-->
    </span>
	</div>    
  </div>
</div>

<div class="container" style="background-color:#D1E8E2">
  <div class="row">
    <div class="column-66" style="color:#2C3531">
	  <p style="font-size:60px"><b>Paying Service for Senior Citizens</b></h1>
      <p class="textcolor" align="left"><span>
		Paying Services doesn't mean paying bills for them, <br/>
		share happiness,time and love to them for living their <br/> 
		life. You can spend a day with them. As The time is<br/> 
		valuable for everyone, depends on you where to use it.<br/>  
		The Elderly's advices are more specious then even Gold too.<br/>
		Respect their Ideology,Point of View,Mentality.Bcz Its law  
		of Karma the respect you give to someone,that will
		bring back to you as much.And they are the only bridge 
		that travels through our the new generation towards our 
		culture,sacrament,fidelty,have faith on your beloved  
		once and for us You and Senior citizens are Family..<br/>
		That's not in everyone's fate,is "Family"..!<br/>	
	  </span>
	  </p>
      <!--<button class="button" style="background-color:red">Read More</button>-->
	  <a href="G_G.php"><b><p style="font-size:30px">Help Them</p></b></a>
	</div>
    <div class="column-33">
      <img src="d5.jpg" alt="App" width="1280" height="1280">
    </div>
  </div>
  <center>
  <form action="aashayein.php" method="post">
			</br></br> <a href="aashayein.php"><button style="background-color: red;border color: black; color:white"><h3> Back To HomePage</h3></button></a>
	</form> 
</center>
</div>
</div>
</body>
</html>
