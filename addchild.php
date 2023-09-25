
<?php
include "config.php";

if(isset($_POST['submit'])){
    $name=$_POST['childname'];
    $fullname=$_POST['childfname'];
    $dob=$_POST['childdob'];
    $gender=$_POST['childgender'];
    $image=$_POST['childImage'];


    //query
    $sql="INSERT INTO child(initialname,fullname,dob,gender,image) VALUES('$name','$fullname','$dob','$gender','$image');";

    //Execute Query
    $result=$conn->query($sql);

    if($result==TRUE){
        echo "Child Information Added Successfully ";
            header("location:viewchild.php");
    }else{
        echo "Error!!".$sql."<br>".$conn->error;
    }
}

?>


<!DOCTYPE html>
<html>
<head>
   <title>Add Child</title>
    <link href="AddChildForm.css" rel="stylesheet" type="text/css" >
    <link href="assessment.css"   rel="stylesheet" type="text/css" >


      <script>

    function validateForm(){
        var cname=document.forms["myForm"]["childname"].value;
        var cfname=document.forms["myForm"]["childfname"].value;
        var cdob=document.forms["myForm"]["childdob"].value;
        var cgender=document.forms["myForm"]["childgender"].value;
        var cfile=document.forms["myForm"]["childImage"].value;

        if(cname==""){
                alert("Name with Initials is required! ");
                return false;
        }else if(!isNaN(cname)){
                alert(" A valid Name is required! ");
                return false;
        }



       if(cfname==""){
                alert("Full Name is required! ");
                return false;
        }else if(!isNaN(cfname) || !isNaN(cfname)){
                alert(" A valid Name is required! ");
                return false;
        }


         if(cdob==""){
                alert("Birth Date is Required! ");
                return false;
        }

        if(cgender==""){
                alert("Choose your Gender! ");
                return false;
        }


        if(cfile.value!=""){

           }else{
                if(cfile.size<1024*1024){
                   alert("File too small. Please select a file more than 1 MB ! ");

                 }else if(cfile.size>4*1024*1024){
                           alert(" File too large. Please select a file less than 4 MB !");

                            }
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

   <aside class="Sidenavi"style="position:sticky;">
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







    <div  class="commonClass"style="background-color: #61cfcf; margin: auto; float:center; margin-left:50px;  padding:0px;
  ">
  <header>

      <h1 style=" padding-right:25px; padding-left:25px; color:yellow; background-color:brown; width:auto; height:auto; font-size:55px; text-align:center;">Add Child </h1>
  </header>
  </div>


  <div class="commonClass" style="background-color: #dbdbc1; border-bottom-right-radius: 20px;
  border-bottom-left-radius:20px; border-top-right-radius: 20px; border-top-left-radius: 20px; float:right; margin-right:100px;padding:60px;width: 50%; margin-top: 5px;
  ">
        <form name="myForm" action="" onsubmit="return validateForm()" method="POST">

        <div class="innerDiv">
        <label for="childname">Name with Initials</label><br>
            <input type="text" id="childname" name="childname" placeholder="Eg-A.B.C.LastName" style="width:100%;">
        </div>


        <div class="innerDiv">
        <label for="childfname">Full Name</label><br>
            <input type="text" id="childfname" name="childfname" placeholder="Enter Full Name" style="width:100%;">
        </div>


        <div class="innerDiv">
        <label for="childdob">Birth Date</label><br>
            <input type="date" id="childdob" name="childdob" style="width:100%;">
        </div>


        <div class="innerDiv">
        <label>Gender</label>&nbsp;
       <input type="radio" id="childgender" name="childgender" value="male">&nbsp;
            <label for="childgender">Male</label>

            <input type="radio" id="female" name="childgender" value="female">&nbsp;
            <label for="childgender">Female</label>
        </div>


        <div class="innerDiv">
        <label for="childimage">Child Image</label><br>
            <input type="file" id="childimage" name="childImage" style="width:100%;">
        </div>

         <br><br><br>
        <div class="innerDiv">
           <button name="submit" type="submit" style="width: 20%">Submit</button>

        </div>

        </form>
    </div>

</body>
</html>
