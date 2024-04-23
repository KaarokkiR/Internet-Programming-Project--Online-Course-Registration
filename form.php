<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./form.css">
    <title>REGISTER</title>
    </head>
    <body>
        <script>
            function validateform()
            {
            var x=document.f1.fname.value;  
            var y=document.f1.lname.value;
            var d1=document.f1.month.value;
            var g=document.f1.gender.value; 
            var a1=document.f1.addr.value; 
            var a2=document.f1.addr2.value; 
            var c=document.f1.city.value; 
            var s=document.f1.state.value;
            var z=document.f1.email.value; 
            var p=document.f1.mno.value; 
            var cor=document.f1.course.value;  
            
            var atpos=z.indexOf("@");
            var dotpos=z.lastIndexOf(".");
            
            if(x==""||x==null ||y==""||y==null||z==""||z==null||d1==""||
            g==""||g==null ||a1==""||a2==null ||c==""||c==null ||s==""||s==null ||p==""||p==null ||cor==""||cor==null ){
              alert("enter the required fields");
              return false;
            }
            else if((atpos<1)||(dotpos<atpos+2)||(atpos+2>=z.length)){
             alert("invalid email");
             return false;
            }
            else if(p.length!=10){
            alert("Enter a valid phone number");
                     return false;
            }
            
            }
        </script>

            

     <div class="container">
     <form  id="form" name="f1" onsubmit="return validateform()" method="post" action="addprocess.php">
     <h1 id="head">REGISTER</h1><br>
     <div class="input-group">
     <label for="username">Student name</label>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" name="fname">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" name="lname">
            </div>
          </div>
     </div>
     <div class="input-group">
              <label for="birthdate">Birth Date</label>
              <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="DD/MM/YYYY" name="month">
                </div>
              </div>
                
            </div>
     

     
     <div class="input-group">
     <label for="genders">Gender</label>
     <div class="row">
        <div class="col-md-6">
     <select class="form-control" name="gender">
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
      </select>
    </div>
     </div>
     </div>


     <div class="input-group">
        <div class="row">
            <div class="col">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="addr">
              <div class="form-text" id="bordertext">Street Address</div>
            </div>
        </div>
     </div>
     <div class="input-group">
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="addr2">
              <div class="form-text" id="bordertext">Street Address line 2</div>
            </div>
        </div>
     </div>
     <div class="input-group">
           <div class="row">
               <div class="col">
                 <input type="text" class="form-control"  name="city">
                 <div class="form-text" id="bordertext">City</div>
               </div>
               <div class="col">
                 <input type="text" class="form-control" name="state">
                 <div class="form-text" id="bordertext">State/Province</div>
               </div>
             </div>
        </div>

        <div class="input-group">
           <div class="row">
               <div class="col">
                <label for="email">Student Email</label>
                 <input type="text" class="form-control" placeholder="ex:name@email.com"  name="email">
                 <div class="form-text" id="bordertext">example@example.com</div>
               </div>
               <div class="col">
                <label for="mobile">Mobile Number</label>
                 <input type="text" class="form-control" placeholder="(000)-000-0000" name="mno">
               </div>
             </div>
        </div>

        <div class="input-group">
            <label for="cor">Course</label>
            <div class="row">
               <div class="col">
            <select class="form-control" name="course">
               <option>Options</option>
               <option>Web Development</option>
               <option>Python </option>
               <option>Java </option>
               <option>C</option>
               <option>Ethical Hacking</option>
               <option>Android App development</option>
               <option>Cloud computing</option>
               <option>Data Structure and Algorithm</option>
               <option>Machine Learning</option>
               <option>Business Analytics</option>
               <option>Advanced Excel</option>
               <option>Ui/UX</option>
               <option>Graphics Design</option>
               <option>Digital Marketing</option>
               <option>AR/VR</option>
             </select>
           </div>
            </div>
            </div>
       
     <button type="submit">Register</button>
     </form>
     
     </div>
    </body>
    </html>