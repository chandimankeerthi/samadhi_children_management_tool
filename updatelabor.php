<?php

 include "config.php";

// get the ID
if(isset($_GET['id'])){
    $userId=$_GET['id'];

    //sql query
    $sqlString="SELECT * FROM labor WHERE id='$userId';";

    //EXECUTE THE QUERY
   $result=$conn->query($sqlString);


        if($raw=$result->fetch_assoc()){
            $fullname=$raw['fullName'];
            $firstname=$raw['firstName'];
            $dob=$raw['dob'];
            $gender=$raw['gender'];
            $contact=$raw['contact'];
            $address=$raw['address'];
            $company=$raw['company'];
            $initialname=$raw['initialname'];
            }
    }

// check the update button click

  if(isset($_POST['submit'])){

        $fullNameUpdate=$_POST['fullname'];
        $firstNameUpdate=$_POST['lastname'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
        $contact=$_POST['contact'];
        $address=$_POST['textarea'];
        $company=$_POST['$idupdate'];
        $initialname=$_POST['initName'];

//sql query
$sqlquery="UPDATE labor SET fullName='$fullNameUpdate', firstName='$firstNameUpdate',dob='$dob', gender='$gender',contact='$contact',address='$address',company='$company',initialname='$initialname' WHERE id='$userId'";

$result=$conn->query($sqlquery);

if($result==TRUE){
        echo "Record Updated Successfully ";
        //header("location:view.php");
        header ("location:viewlabor.php");
}else{
    echo "Error".$sqlquery."<br>".$conn->error;
    }

  }

?>





<!DOCTYPE html>
<html>
<head>
   <title>Add Labour</title>
    <link href="AddChildForm.css"  rel="stylesheet" type="text/css" >
    <link  href="assessment.css"   rel="stylesheet"  type="text/css">


      <script>

     function validation(){

        var linitname=document.forms["myForm"]["labourinitName"].value;
        var lfullname=document.forms["myForm"]["labourfullname"].value;
        var lfirstname=document.forms["myForm"]["labourfname"].value;
        var ldob=document.forms["myForm"]["labourdob"].value;
        var lgender=document.forms["myForm"]["labourgender"].value;
        var lcontact=document.forms["myForm"]["labourcontact"].value;
        var lcompany=document.forms["myForm"]["labourcompany"];

        if(linitname==""){
                alert("Name with Initials is required! ");
                return false;
        }else if(!isNaN(linitname)){
                alert(" A valid Initial Name is required! ");
                return false;
        }



       if(lfullname==""){
                alert("Full Name is required! ");
                return false;
        }else if(!isNaN(lfullname)){
                alert(" A valid Name is required! ");
                return false;
        }



        if(lfirstname==""){
                alert("First Name is required! ");
                return false;
        }else if(!isNaN(lfirstname)){
                alert(" A valid Name is required! ");
                return false;
        }



         if(ldob==""){
                alert("Birth Date is Required! ");
                return false;
        }


        if(lgender==""){
                alert("Choose your Gender! ");
                return false;
        }



        if(lcontact==""){
             alert("Contact Number is required!");
                return false;
        }else{
            if(lcontact.length<10){
                alert(" A valid Contact Number is required !! ");
                return false;
            }if(lcontact.length>10){
                alert("A valid Contact Number is required.Maximum length should be 10 !!");
                return false;
            }else if(lcontact.length==10){
                return true;
            }

        }


        if(lcompany==""){
            alert("Choose your Hiring Company! ");
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







    <div class="commonClass" style="background-color: #61cfcf; margin: auto;border-top-right-radius: 20px;
    border-top-left-radius:20px;float:right; margin-right:150px;margin-top:100px;padding:20px;
">
                <header>
                    <h1 style="padding-left: 50px;">Update Labour</h1>
                </header>
            </div>


        <div class="commonClass" style="background-color:#dbdbc1;border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px;float:right; margin-right:150px;padding:20px;
">
            <form name="myForm" action="" onsubmit="return validation()" method="POST">


                <div class="innerDiv">
                <label for="labourinitname">Name with Initials</label><br>
                <input type="text" id="labourinitName" name="labourinitName" placeholder="A.B.C.LastName" value="<?php echo $initialname; ?>">
                <input type="hidden" name="id" value="<?php echo $userId; ?>">
            </div>



            <div class="innerDiv">
                <label for="labourfullname">Full Name</label><br>
                <input type="text" id="labourfullname" name="labourfullname" placeholder="Enter Full Name" value="<?php echo $fullname; ?>">

            </div>


             <div class="innerDiv">
                <label for="labourfname">First Name</label><br>
                <input type="text" id="labourfname" name="labourfname" placeholder="Enter First Name" value="<?php echo $firstname; ?>">

            </div>



             <div class="innerDiv">
                <label for="labourdob">Birth Date</label><br>
                <input type="date" id="labourdob" name="labourdob" value="<?php echo $dob; ?>">
            </div>


                <div class="innerDiv">
                <label>Gender</label>
                 <input type="radio" id="labourgender" name="labourgender" value="male">&nbsp;
                 <label for="labourgender" <?php if($gender=='male'){echo "checked";}?>>Male</label>

                 <input type="radio" id="labourgender" name="labourgender" value="female">&nbsp;
                 <label for="labourgender" <?php if($gender=='female'){echo "checked";}?>>Female</label>
            </div>



            <div class="innerDiv">
                <label for="labourcontact">Contact</label><br>
                <input type="text" id="labourcontact" name="labourcontact" value="<?php echo $contact; ?>">
            </div>



            <div class="innerDiv">
                <label for="labouraddress">Permanent Address</label><br>
               <textarea id="labouraddress" name="labouraddress" rows="5" cols="20"><?php echo $address; ?></textarea>
            </div>



            <div class="innerDiv">
                <label for="labourcompany">Name of the Hiring Company</label><br>
                <select id="labourcompany" name="labourcompany">
                <option value="sunshine" <?php if($company=='sunshine'){echo "selected";}?>>Sunshine</option>
                <option value="moonlight" <?php if($company=='moonlight'){echo "selected";}?>>Moonlight</option>
                </select>
            </div>

                    <br><br><br>

             <div class="innerDiv">
                 <button name="submit" type="submit" style="width: 20%">Update</button>
            </div>

            </form>
        </div>



</body>
</html>
