<?php

 include "config.php";

// get the ID
if(isset($_GET['id'])){
    $userId=$_GET['id'];

    //sql query
    $sqlString="SELECT * FROM staff WHERE nic='$userId';";

    //EXECUTE THE QUERY
   $result=$conn->query($sqlString);

  // retrieve data from the database
        if($raw=$result->fetch_assoc()){
            $firstname=$raw['firstName'];
            $lastname=$raw['lastName'];
            $initName=$raw['initialName'];
            $dob=$raw['dob'];
            $gender=$raw['gender'];
            $address=$raw['address'];
            $email=$raw['email'];
            $post=$raw['post'];
            $nic=$raw['nic'];
            $contact=$raw['contact'];
            $img=$raw['image'];
            }else{
            echo "No Value Found ";
        }
    }

// check the update button click

  if(isset($_POST['update'])){

        $firstNameUpdate=$_POST['stafffname'];
        $lastNameUpdate=$_POST['stafflname'];
        $initname=$_POST['staffinitName'];
        $dob=$_POST['staffdob'];
        $genderUpdate=$_POST['staffgender'];
        $address=$_POST['staffaddress'];
        $emailupdate=$_POST['staffemail'];
        $post=$_POST['staffpost'];
        $nic=$_POST['staffnic'];
        $contact=$_POST['staffcontact'];
        $image=$_POST['staffimage'];

//sql query
$sqlquery="UPDATE staff SET firstName='$firstNameUpdate', lastName='$lastNameUpdate', initialName='$initname',dod='$dob',gender='$genderUpdate',address='$address',email='$emailupdate',post='$post',image='$image',contact='$contact' WHERE nic='$userId'";

$result=$conn->query($sqlquery);

if($result==TRUE){
        echo "Record Updated Successfully ";
        //header("location:view.php");
        header ("location:viewstaff.php");
}else{
    echo "Error".$sqlquery."<br>".$conn->error;
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

        var firstname=document.forms["myForm"]["stafffname"].value;
        var lastname=document.forms["myForm"]["stafflname"].value;
        var initname=document.forms["myForm"]["staffinitname"].value;
        var dob=document.forms["myForm"]["staffdob"].value;
        var nic=document.forms["myForm"]["staffnic"].value;
        var gender=document.forms["myForm"]["staffgender"].value;
        var contact=document.forms["myForm"]["staffcontact"].value;
        var address=document.forms["myForm"]["staffaddress"].value;
        var email=document.forms["myForm"]["staffemail"].value;
        var post=document.forms["myForm"]["staffpost"].value;

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


        if(spost==""){
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





    <aside class="Sidenavi">
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
                <li id="viewList1"><a href="adddonation.php">Add Donation</a></li>
                <li id="viewList2"><a href="viewdonation.php">View Donation</a></li>
            </ul>
        </li>
    </ul>

        <span><img src="staff.png" id="IconRight"></span>
    <ul>
        <li><button onclick="staffinfo()">Staff
            <span><img src="whitearrow.png" id="IconLeft"></span>
            </button>
            <ul>
                <li id="viewList3"><a href="addstaff.php">Add Staff</a></li>
                <li id="viewList4"><a href="viewstaff.php">View Staff</a></li>
            </ul>
        </li>
    </ul>

        <span><img src="child.png" id="imgRight"></span>
    <ul>
        <li> <button onclick="childinfo()">Child
            <span><img src="whitearrow.png" id="IconLeft"></span>
            </button>
            <ul>
                <li id="viewList5"><a href="addchild.php">Add Child</a></li>
                <li id="viewList6"><a href="viewchild.php">View Child</a></li>
            </ul>
        </li>
    </ul>

        <span><img src="labor.png" id="IconRight"></span>
        <ul>
        <li><button onclick="laborinfo()">Labor
            <span><img src="whitearrow.png" id="IconLeft"></span>
            </button>
            <ul>
                <li id="viewList7"><a href="addlabor.php">Add Labor</a></li>
                <li id="viewList8"><a href="viewlabor.php">View Labor</a></li>
                <li id="viewList9">View Labor Salary</li>
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




            <div  class="commonClass"style="background-color: #61cfcf; margin: auto; border-top-right-radius: 20px;
    border-top-left-radius:20px;float:right; margin-right:150px;margin-top:100px;padding:20px;
">
                <header>
                    <h1 style=" padding-left: 50px;">Update Staff</h1>
                </header>
            </div>





           <div class="commonClass" style="background-color: #dbdbc1; border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px;float:right; margin-right:150px;padding:20px;
">
            <form name="myForm" action="" method="POST" onsubmit="return validation()">

            <div class="innerDiv">
                <label for="stafffname">First Name</label><br>
                <input type="text" id="stafffname" name="stafffname" placeholder="Enter Name" value="">

            </div>


             <div class="innerDiv">
                <label for="stafflname">Last Name</label><br>
                <input type="text" id="stafflname" name="stafflname" placeholder="Enter Last Name" value="">

            </div>


             <div class="innerDiv">
                <label for="staffinitname">Name with Initials</label><br>
                <input type="text" id="staffinitname" name="staffinitName" value="">
            </div>


             <div class="innerDiv">
                <label for="staffdob">Birth Date</label><br>
                <input type="date" id="staffdob" name="staffdob" value="">
            </div>


             <div class="innerDiv">
                <label for="staffnic">NIC</label><br>
                <input type="text" id="staffnic" name="staffnic" value="" >
            </div>


             <div class="innerDiv">
                <label>Gender</label>
                 <input type="radio" id="staffgender" name="staffgender" value="male">&nbsp;
                 <label for="staffgender">Male</label>

                 <input type="radio" id="staffgender" name="staffgender" value="female">&nbsp;
                 <label for="staffgender">Female</label>
            </div>


            <div class="innerDiv">
                <label for="staffcontact">Contact</label><br>
                <input type="text" id="staffcontact" name="staffcontact" value="">
            </div>


            <div class="innerDiv">
                <label for="staffaddress">Permanent Address</label><br>
               <textarea id="staffaddress" name="staffaddress" rows="5" cols="20"></textarea>
            </div>


              <div class="innerDiv">
                <label for="staffemail">Email</label><br>
                <input type="email" id="staffemail" name="staffemail" value="">
            </div>


            <div class="innerDiv">
                <label for="staffpost">Post</label><br>
                <select name="staffpost" id="staffpost" >
                <option value="admin">Admin</option>
                <option value="principal">Principal</option>
                <option value="matron" >Matron</option>
                </select>
            </div>
            <br><br><br><br>
            <div class="innerDiv">
                <label for="staffimage">Employee Image</label><br>
                <input type="file" id="staffimage" name="staffimage" value="">
            </div>

             <div class="innerDiv">
                <button name="update" type="submit" style="width: 20%">Submit</button>
            </div>

            </form>
        </div>






</body>
</html>
