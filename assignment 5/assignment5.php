
<html>
 <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.js"></script>
  <link rel="stylesheet"  type="text/css" href="bootstyle.css">
 </head>
 <center>
 <body>
  <div class="container">
    <div class="row register">
      <h3 >Web Technology Workshop Registration</h3>
        <div class="col-sm-3"></div>
          <div class="col-sm-6 reg">
            <form class="form-horizontal hr" method="post" action="insertData.php">
			<h2>Registration Here</h2>
              <div  class="form-group">
                <label class="control-label col-sm-4" for="fname">First name:</label>
                  <div class="col-sm-8">
                    <input type="text"   name="fname" placeholder="Enter Your First name" class="form-controler" id="uname" >
                  </div>
              </div>
	      <!------->
              <div class="form-group">
                <label class="control-label col-sm-4" for="mname">Middle name:</label>
                 <div class="col-sm-8">
                   <input type="text"   name="mname" placeholder="Enter Your Middle name"class="form-controler" id="uname">
                 </div>
              </div>
          <!------>
		      <div class="form-group">
                <label class="control-label col-sm-4" for="lname">Last name:</label>
                 <div class="col-sm-8">
                  <input type="text"  name="lname" placeholder="Enter Your Last name" class="form-controler" id="uname">
                 </div>
              </div>
          <!----->
		      <div class="form-group" >
                <label class="control-label col-sm-4" for="Email">Email:</label>
                  <div >
                    <input type="email" name="mail" placeholder="Enter Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-controler" id="uname">
                  </div>
              </div>
          <!----->
		       <div  class="form-group">
                 <label class="control-label col-sm-4" for="no">Phone no:</label>
                   <div >
                     <input type="number" name="phone" placeholder="Enter Your Phone no" class="form-controler" id="uname">
                   </div>
               </div>
          <!----->
		        <div class="form-group">
                  <label class="control-label col-sm-4"for="gen">Gender:</label>
                    <div class="col-sem-2"><!DOCTYPE html>
                    <html>
                    <head>
                      <title></title>
                    </head>
                    <body>

                    </body>
                    </html>
					   Male:<input type="radio"  name="gen" class="form-controler" id="uname" value="m">

					  Female:<input type="radio"  name="gen" class="form-controler" id="uname" value="f">

					  Others:<input type="radio"  name="gen" class="form-controler" id="uname" value="o">
                    </div>
                </div>
   <!----->
  <div  >
<label  for="Pro">What is Your Profession</label>
<div >
 <input type="checkbox" name="Pro" value="student"" color="blue">Student</input><br>
  <input type="checkbox" name="Pro" value="teacher" color="black">Teacher</input><br>
  <input type="checkbox" name="Pro" value="employe" color="black">employe</input><br>

 </div>
 </div>
    <!-----><br>
     <div >
<label  color="black">Address:</label>
<div >
<textarea placeholder="Street Address"colspan="4" name="saddress" class="form-controler"></textarea><br><br>
<textarea placeholder="Nearer Area"  colspan="4" name="naddress" class="form-controler"></textarea><br><br>
    <input type="number" pattern="[0-9]{1,6}"  placeholder="Pincode" name="pincode" class="form-controler"><br><br>
 </div>
 </div>
     <!----->
   <div >
<label for="sugg">Suggestions or topics you would like to be included
in the workshop?</label><br>
<div >
 <textarea class="form-controler" pattern="[a-zA-Z]" colspan="4" rowspan="3" name="sugg"></textarea>
  </div>
  </div><br>
      <!----->
	  <div class="form-group">

                 <div class="col-sm-offset-2col-sm-8">
                  <button  type="submit"class="btn btn-default">Submit</button>
                 </div>
              </div>
          <!------>
			</form>
        </div>
           <div class="col-sm-3">
           </div>
    </div>
  </div>


</body>
</center>
</html>
