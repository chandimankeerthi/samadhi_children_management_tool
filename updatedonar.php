<?php

 include "config.php";



?>




<!DOCTYPE html>
<html>
<head>
   <title>Add Donation</title>
    <link href="AddChildForm.css" rel="stylesheet" type="text/css" >
    <link href="assessment.css"   rel="stylesheet" type="text/css" >


       <script>

     function validation(){

         var dname=document.forms["myForm"]["donarNamename"].value;
        var dcontact=document.forms["myForm"]["donarcontact"].value;
        var daddress=document.forms["myForm"]["donartextarea"].value;
        var dtype=document.forms["myForm"]["donartype"].value;

        if(dname==""){
                alert(" Donar Name is required! ");
                return false;
        }else if(!isNaN(dname)){
                alert(" A valid Donar Name is required! ");
                return false;
        }



        if(dcontact==""){
             alert("Contact Number is required!");
                return false;
        }else{
            if(dcontact.length<10){
                alert(" A valid Contact Number is required !! ");
                return false;
            }if(dcontact.length>10){
                alert("A valid Contact Number is required.Maximum length should be 10 !!");
                return false;
            }else if(dcontact.length==10){
                return true;
            }

        }


        if(dtype==""){
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




            <div  class="commonClass"style="background-color: #61cfcf; margin: auto; border-top-right-radius: 20px;
    border-top-left-radius:20px;float:right; margin-right:150px;margin-top:100px;padding:20px;
">
                <header>
                    <h1 style=" padding-left: 50px;">Update Donation </h1>
                </header>
            </div>





    <div class="commonClass" style="background-color: #dbdbc1; border-bottom-right-radius: 20px;
    border-bottom-left-radius:20px;float:right; margin-right:150px;padding:20px;
">
            <form name="myForm" action="" method="POST" onsubmit="return validation()">

            <div class="innerDiv">
                <label for="donarname">Donar Name</label><br>
                <input type="text" id="donarname" name="donarname" placeholder="Enter Name" value="<?php echo $DonarName; ?>">
                <input type="hidden" name="id" value="<?php $DonarId; ?>">
            </div>


            <div class="innerDiv">
                <label for="donarcontact">Contact</label><br>
                <input type="text" id="donarcontact" name="donarcontact" value="<?php echo $Contact; ?>">
            </div>



            <div class="innerDiv">
                <label for="donaraddress">Address</label><br>
               <textarea id="donaraddress" name="donaraddress" rows="5" cols="20"><?php echo $Address; ?></textarea>
            </div>



            <div class="innerDiv">
                <label for="donartype">Donation Type</label><br>
                <select name="donartype" id="donartype" >
                <option value="cash" <?php if($Type=='cash'){ echo "selected";} ?>>Cash</option>
                <option value="items" <?php if($Type=='items'){ echo "selected";} ?>>Items</option>
                <option value="both" <?php if($Type=='both'){ echo "selected";} ?>>Both</option>
                </select>

            </div>



             <div class="innerDiv">
                <button name="submit" type="submit" style="width: 20%" >Update</button>
            </div>

            </form>
        </div>



</body>
</html>
