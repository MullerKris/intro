<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="style.css">
    <title> Mulller Kris Raimund </title>  
   
  </head>
  <body background="./Poze/bg.jpg" >

	<div class="bt">
		<div class="meniu">
		<a href="#about" class="mn">ABOUT</a>
		</div>
		<div class="meniu">
		<a href="#resume" class="mn">RESUME</a>
		</div>
		<div class="meniu">
		<a href="#contact" class="mn">CONTACT</a>
		</div>
	</div>

   <div class="gif">
   		<img src="./Poze/img.jpg"  style="width:400px;height:250px;">
   </div> 

<div class="info">

   <div class="about" >
   <a name="about"></a>
   <b><i>ABOUT</i></b>
   
   </div>
   

    <div class="intro" > 
        
       My name is Muller Kris Raimund. I am 26 years old. I am a student of the Faculty of Transportation, the Road Vehicle Section of the Polytechnic University of Bucharest.I have embraced the web design from passion and desire to work in this field because it is a very beautiful field and with the opportunity for personal and professional development. I have learned PHP programming with MySQL databases. On the side of creating web pages I learned to use HTML and on the side of the page styles I use CSS.
    </div>


    <div class="pdf">
   		<div class="pdfbuton">
   			<img src="./Poze/pdf.jpg" style="width:14px;height:12px;"> &nbsp;
   			<a title="Download PDF Resume" href="../Text/cv.pdf" class="linkbuton" target="_blank">Download PDF</a>
    	</div>
    	<div class="pdfbuton">
    		<img src="./Poze/in.jpg" style="width:14px;height:12px;"> &nbsp;
    		<a href="https://www.linkedin.com/in/kris-muller-87260011b" class="linkbuton" target="_blank">LinkedIn</a>
    	</div>
    </div>
 </div>



 <div class="info">
 <a name="resume"></a>
   <div class="why" >
   <b><i>WHY ME?</i></b>
   </div>


      <div class="vision">
        <div class="col">
          <span class="h">Vision.</span>
          <p>I see web design as a very attractive and developing future. Through web design, you can help your customers promote their products and be as well-known in their industry. </p>
        </div>
        <div class="col">
          <span class="h">Problem-Solution.</span>
          <p>On the side of problems - solutions I think that if you are a person you are passionate about what you do then you can not solve all these problems. And any problem is solved by work. It's all about learning and practicing as much as possible to grow in the career you want to follow.</p>
        </div>
        <div class="col">
          <span class="h">Strategy.</span>
          <p>I believe that in any field you activate the most important part is the strategy. By this strategy I mean that you need to know exactly how you want the finished product to look from the basic things you want to do to the final result.</p>
        </div>
      
        
        <div class="col1">
          <span class="h">Skills and abilities.</span>
          <p>I consider myself a person who gives interest in what he does. Here I mean that if I set a goal I'm trying to touch it and give my interest as much as possible to get the desired result. I am a person who adapts me quickly to a new group and I like to learn from those around me. I'm eager to learn new things and I'm open to learning as many as possible. Thanks to my current work place, I have learned to be a more sociable person and a spirit developed in teamwork. I am a punctual, sociable and adaptable person in any circumstances.</p>
        </div>
        <div class="col1">
         <span class="h"> Experience.</span>
          <p>At the current workplace I helped develop and train new colleagues by helping to understand what we are doing and presenting the tasks to accomplish.</p>
        </div>
       </div>

 </div>   

	<div class="info">
		<a name="contact"></a>
    <div class="about" >        
          <b><i>CONTACT</i></b>
    </div>
    <div class="formular">        
        <form action="send_mail.php" method="post">
        <b>Name:</b>
        <input class="contactst" size="50" name="name" type="input"/>
        <br/>
        <br/>
        <b>Email:</b>
        <input class="contactst" size="50" name="email" type="input"/>
        <br/>
        <br/>
        <b>Message:</b>
        <textarea class="contactst" rows="5" cols="30" name="message"></textarea>
        <br/>
        <br/>
        <center><input type="submit" value="Send"></center>
        </form>
    </div>
  </div>
<div class="footer"></div>
</body>
</html>
