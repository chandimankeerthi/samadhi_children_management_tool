<?php
include "config.php";

if(isset($_POST['submit'])){
    $fname=$_POST['stafffname'];
    $lname=$_POST['stafflname'];
    $initname=$_POST['staffinitname'];
    $dob=$_POST['staffdob'];
    $nic=$_POST['staffnic'];
    $gender=$_POST['staffgender'];
    $contact=$_POST['staffcontact'];
    $paddress=$_POST['staffaddress'];
    $email=$_POST['staffemail'];
    $post=$_POST['staffpost'];
    $image=$_POST['staffimage'];


    //query
    $sql="INSERT INTO staff(nic,initialName,firstName,lastName,dob,gender,contact,address,email,post,image) VALUES('$nic','$initname','$fname','$lname','$dob','$gender','$contact','$paddress','$email','$post','$image');";

    //Execute Query
    $result=$conn->query($sql);

    if($result==TRUE){
        echo "Staff Member Added Successfully ";
            header("location:viewstaff.php");
    }else{
        echo "Error".$sql."<br>".$conn->error;
    }
}

?>




<!DOCTYPE html>
<html>
<head>
   <title>Add Staff</title>
    <link href="AddChildForm.css" rel="stylesheet" type="text/css" >
    <link href="assessment.css"   rel="stylesheet" type="text/css" >


     <script>

    function validation(){

         var sfirstname=document.forms["myForm"]["stafffname"].value;
        var slastname=document.forms["myForm"]["stafflname"].value;
        var sinitname=document.forms["myForm"]["staffinitname"].value;
        var sdob=document.forms["myForm"]["staffdob"].value;
        var snic=document.forms["myForm"]["staffnic"].value;
        var sgender=document.forms["myForm"]["staffgender"].value;
        var scontact=document.forms["myForm"]["staffcontact"].value;
        var saddress=document.forms["myForm"]["staffaddress"].value;
        var semail=document.forms["myForm"]["staffemail"].value;
        var spost=document.forms["myForm"]["staffpost"].value;

        if(sfirstname==""){
                alert("First Name is required! ");
                return false;
        }else if(!isNaN(sfirstname)){
                alert(" A valid Name is required! ");
                return false;
        }



      if(slastname==""){
                alert("Last Name is required! ");
                return false;
        }else if(!isNaN(slastname)){
                alert(" A valid Name is required! ");
                return false;
        }



        if(sinitname==""){
                alert("Name with Initial is required! ");
                return false;
        }else if(!isNaN(sinitname)){
                alert(" A valid Name is required! ");
                return false;
        }



         if(sdob==""){
                alert("Birth Date is Required! ");
                return false;
        }


        if(snic==""){
            alert(" NIC is required! ");
                return false;
        }
        else if(!(snic=="")){

            if(snic.length<9){
                   alert("Invalid Nic Number! ");
               }else if(snic.length>12){
                   alert("Invalid Nic Number! NIC should not exeed 12 ");
               }

            return false;
        }

        if(sgender==""){
                alert("Choose your Gender! ");
                return false;
        }



        if(scontact==""){
             alert("Contact Number is required!");
                return false;
        }else{
            if(scontact.length<10){
                alert(" A valid Contact Number is required !! ");
                return false;
            }if(scontact.length>10){
                alert("A valid Contact Number is required.Maximum length should be 10 !!");
                return false;
            }if(scontact.length==10){

                     return true;
                     }

        }


        if(saddress.length>200){

             alert("Maximum character limit is 200 !! ");
                return false;
           }

        if(semail==""){
                alert("Email Address is required !! ");
                return false;
           }else{
             var regEmail=/^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/;
             if(!regEmail.text(semail)){
                 alert("A valid Email Address is required !! ");
                return false;
             }
           }


        if(post==""){
            alert("Choose the Post ! ");
                return false;
        }


    }

    </script>


</head>
<body style="margin: auto">

  <header class="header">
    <div>
      <h3>SAMADHI CHILDREN HOME</h3>
      </div>
    </header>





    <aside class="Sidenavi" style="position:static;">
    <nav>
        <span><img src="overview.png" id="IconRight"></span>
    <ul>
        <li class="overviewBtn"> <a href="overview.php"><button>OverView
            </button> </a>
        </li>
    </ul>

       <span><img src="donation.png" id="IconRight"></span>
    <ul>
        <li class="donation"> <button onclick="donationinfo()">Donation
            <span><img src="whitearrow.png" id="IconLeft"></span>
            </button>
            <ul>
                <li id="displayList1"><a href="adddonation.php">Add Donation</a></li>
                <li id="displayList2"><a href="viewdonation.php">View Donation</a></li>
            </ul>
        </li>
    </ul>

        <span><img src="staff.png" id="IconRight"></span>
    <ul>
        <li><button onclick="staffinfo()">Staff
            <span><img src="whitearrow.png" id="IconLeft"></span>
            </button>
            <ul>
                <li id="displayList3"><a href="addstaff.php">Add Staff</a></li>
                <li id="displayList4"><a href="viewstaff.php">View Staff</a></li>
            </ul>
        </li>
    </ul>

        <span><img src="child.png" id="IconRight"></span>
    <ul>
        <li> <button onclick="childinfo()">Child
            <span><img src="whitearrow.png" id="IconLeft"></span>
            </button>
            <ul>
                <li id="displayList5"><a href="addchild.php">Add Child</a></li>
                <li id="displayList6"><a href="viewchild.php">View Child</a></li>
            </ul>
        </li>
    </ul>

        <span><img src="labor.png" id="IconRight"></span>
        <ul>
        <li><button onclick="laborinfo()">Labor
            <span><img src="whitearrow.png" id="IconLeft"></span>
            </button>
            <ul>
                <li id="displayList7"><a href="addlabor.php">Add Labor</a></li>
                <li id="displayList8"><a href="viewlabor.php">View Labor</a></li>
                <li id="displayList9">View Labor Salary</li>
            </ul>
        </li>
    </ul>

         <span><img src="whitelogout.png" id="IconRight" style="margin-top: 20px;"></span>
        <ul class="LogoutBtn">
           <li><button onclick="logoutEvent()">Log Out</button></li>
        </ul>


    </nav>
    </aside>



    <script>

      function donationinfo(){
            if((document.getElementById('displayList1').style.display)=='block'){
            document.getElementById('displayList1').style.display='none';
            document.getElementById('displayList2').style.display='none';
            }else{
            document.getElementById('displayList1').style.display='block';
            document.getElementById('displayList2').style.display='block';
        }
      }


        function staffinfo(){
        if((document.getElementById('displayList3').style.display)=='block'){
            document.getElementById('displayList3').style.display='none';
            document.getElementById('displayList4').style.display='none';
        }else{
            document.getElementById('displayList3').style.display='block';
            document.getElementById('displayList4').style.display='block';
        }
      }


        function childinfo(){
        if((document.getElementById('displayList5').style.display)=='block'){
            document.getElementById('displayList5').style.display='none';
            document.getElementById('displayList6').style.display='none';
        }else{
            document.getElementById('displayList5').style.display='block';
            document.getElementById('displayList6').style.display='block';
        }
      }


        function laborinfo(){
        if((document.getElementById('displayList7').style.display)=='block'){
            document.getElementById('displayList7').style.display='none';
            document.getElementById('displayList8').style.display='none';
            document.getElementById('displayList9').style.display='none';
        }else{
            document.getElementById('displayList7').style.display='block';
            document.getElementById('displayList8').style.display='block';
            document.getElementById('displayList9').style.display='none';
        }
      }


    </script>



    <div  class="commonClass"style="background-color: #61cfcf; margin: auto; float:center; margin-left:50px;  padding:0px;
  ">
  <header>

      <h1 style=" padding-right:25px; padding-left:25px; color:yellow; background-color:brown; width:auto; height:auto; font-size:55px; text-align:center;">Add Staff </h1>
  </header>
  </div>


  <div class="commonClass" style="background-color: #dbdbc1; border-bottom-right-radius: 20px;
  border-bottom-left-radius:20px; border-top-right-radius: 20px; border-top-left-radius: 20px; float:right; margin-right:100px;padding:20px;width: 50%; margin-top: 5px;
  ">
            <form name="myForm" action="" method="POST" onsubmit="return validation()">

            <div class="innerDiv">
                <label for="stafffname">First Name</label><br>
                <input type="text" id="stafffname" name="stafffname" placeholder="Enter Name" style="width:100%;">

            </div>


             <div class="innerDiv">
                <label for="stafflname">Last Name</label><br>
                <input type="text" id="stafflname" name="stafflname" placeholder="Enter Last Name" style="width:100%;">

            </div>


             <div class="innerDiv">
                <label for="staffinitname">Name with Initials</label><br>
                <input type="text" id="staffinitname" name="staffinitname" style="width:100%;">
            </div>


             <div class="innerDiv">
                <label for="staffdob">Birth Date</label><br>
                <input type="staffdate" id="staffdob" name="staffdob" style="width:100%;">
            </div>


             <div class="innerDiv">
                <label for="staffnic">NIC</label><br>
                <input type="text" id="staffnic" name="staffnic" style="width:100%;" >
            </div>


             <div class="innerDiv">
                <label>Gender</label>
                 <input type="radio" id="staffgender" name="staffgender" value="male">&nbsp;
                 <label for="staffgender">Male</label>

                 <input type="radio" id="gender" name="gender" value="female">&nbsp;
                 <label for="staffgender">Female</label>
            </div>


            <div class="innerDiv">
                <label for="staffcontact">Contact</label><br>
                <input type="text" id="staffcontact" name="staffcontact" style="width:100%;">
            </div>


            <div class="innerDiv">
                <label for="staffaddress">Permanent Address</label><br>
               <textarea id="staffaddress" name="staffaddress" rows="5" cols="20" style="width:100%;"></textarea>
            </div>


              <div class="innerDiv">
                <label for="staffemail">Email</label><br>
                <input type="email" id="staffemail" name="staffemail" style="width:100%;">
            </div>


            <div class="innerDiv">
                <label for="staffpost">Post</label><br>
                <select name="staffpost" id="staffpost" >
                <option value="admin">Admin</option>
                <option value="principal">Principal</option>
                <option value="matron">Matron</option>
                </select>
            </div>
            <br>
            <div class="innerDiv">
                <label for="staffimage">Employee Image</label><br>
                <input type="file" id="staffimage" name="staffimage" style="width:100%;">
            </div>

             <br><br><br>
             <div class="innerDiv">
                <button name="submit" type="submit" style="width: 20%">Submit</button>
            </div>

            </form>
        </div>






</body>
</html>
