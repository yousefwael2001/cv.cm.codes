<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    @vite('resources/css/app.css')
<style>


#cv {
 width: 90%;
 max-width: 800px;
  background: #ffffff;
 margin: 30px auto;
}

.hig{

    height:100%;
    min-height:800px;

}

.bb{
    background: #e5e5e5;
     width: 40%;
     height:100%;
    min-height:800px;
     
}

.mrg{

margin: 30px ;
}

.titel{
    margin: 0px 20px ;
    color:#457b9d;
    font-size:20px
}

.mm{
     margin:  30px ; 
}

.fname{
    font-weight:bold;
    font-size:40px;
    margin: 0px ;

}

.lname{
    font-weight:lighter;
    font-size:40px;
    margin: 0px ;

}


.details {
  line-height: 20px;
  
  .section {
    margin-bottom: 40px;  
  }
  
  .section:last-of-type {
    margin-bottom: 0px;  
  }
  
  .section__title {
    letter-spacing: 2px;
    color: #54AFE4;
    font-weight: bold;
    margin-bottom: 10px;
    text-transform: uppercase;
  }
  
  .section__list-item {
    margin-bottom: 40px;
  }
  
  .section__list-item:last-of-type {
    margin-bottom: 0;
  }
  
  .left ,
  .right {
    vertical-align: top;
    display: inline-block;
  }
  
  .left {
    width: 50%;    
  }
  
  .right {
    tex-align: right;
    width: 39%;    
  }
  
  .name {
    font-weight: bold;
  }
  
  a {
    text-decoration: none;
    color: #000;
    font-style: italic;
  }
  
  a:hover {
    text-decoration: underline;
    color: #000;
  }
  
  .skills {
    
  }
    
  .skills__item {
    margin-bottom: 10px;  
  }
  
  .skills__item .right {
    input {
      display: none;
    }
    
    label {
      display: inline-block;  
      width: 20px;
      height: 20px;
      background: #C3DEF3;
      border-radius: 20px;
      margin-right: 3px;
    }
    
    input:checked + label {
      background: #79A9CE;
    }
  }
}



</style>
</head>
<body  id="cv"  >



<table >

<tr class=""> 
 
    <td  class="bb"> 
        
<div >
<div class="section__title">content infrmation</div>
<div class=" mrg">Emile:  <span>fatima@gmail.com</span></div>
<div class=" mrg">Phone: <span>0591963572</span></div>
<div class=" mrg">Location: <span>الاحساء</span></div>
</div>
 <div class=" ">
<div class="section__title">skills</div>
<ul class=" mrg">
  <li >C++</li>
  <li >JAVA</li>
  <li >PYTHON</li>
  <li >PHP</li>
  <li >CSS</li>
  <li >HTML</li>
  
  

</ul>
 </div>
<div class="">
<div class="section__title"> education</div>
<div class="titel">School Name:</div>
<p class=" mrg">King false University</p>  

<div class="titel">Degree :</div>

<p class=" mrg">Bachelor's</p>



<div class="titel">Year :</div>
  <p class=" mrg">2024</p>


</div>

    </td>
    <td >

   
    <div class="fname" >JOHN <span  class="lname"  >DEN</span></div>
    <div  class="mrg" >
  <div class="section__title">profile</div>
  <div >
    <p class="">I am a computer science student interested in development and technology. I have many computer skills and skills in communication and dealing with individuals, people and groups. I took courses in learning Larval, the back end and the front end, and I also took courses in development</p>
  </div>

 
  <div class="details">
   <div class="section">
      <div class="section__title">Experiences</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name">Experience</div>
            <p class="addr">truning in cube master</p>
             <p class="addr">studey at king fasel University</p>
            
          </div>
          <div class="right">
            <div class="name">Time</div>
            <p  class="addr">10 weeks</p>
             <p  class="addr">5 years</p>
          </div>
        </div>
               

      </div>
    </div>

    <div class="section">
      <div class="section__title">Languages</div>
      <div class="section__list">
        <div class="section__list-item">
          <div class="left">
            <div class="name">Language:</div>
            <p class="addr">Arabic</p>
             <p class="addr">English</p>
            
          </div>
          <div class="right">
            <div class="name">Level</div>
            <p  class="addr">very good</p>
             <p  class="addr">good</p>
          </div>
        </div>
               

      </div>
    </div>
 
  <div  >


  

 

  </div>
</div>


    </td>
    
  </tr>

 
</table>

</body>
</html>






