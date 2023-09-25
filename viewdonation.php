<?php
include "config.php";

$sql="SELECT * FROM donation;";

$result=$conn->query($sql);

?>




<!DOCTYPE html>
<html>
<head>
   <title>View Donation</title>
    <link href="AddChildForm.css" rel="stylesheet" type="text/css" >
    <link href="assessment.css"   rel="stylesheet" type="text/css" >
    <link href="css/bootstrap.css" rel="stylesheet" >

      <script>


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
        <li class="overviewBtn"><a href="overview.php"><button>OverView
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
            if((document.getElementById('viewList1').style.display)=='block'){
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



            <div  class="commonClass"style="margin: auto;
">
                <header>
                    <h1 style=" padding-right:25px; padding-left:25px; color:yellow; background-color:brown; width:auto; height:auto; font-size:55px; text-align:center;">View Donation </h1>
                </header>
            </div>




    <div class="container" style="float:right; width:1000px;height:700px; ">

        <a style="float:right; "class="btn btn-primary" href="adddonation.php">ADD New Donar</a>
        <table class="table">
       <thead>
        <tr>
            <th>ID</th>
            <th>Donar Name</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
            <?php
            //row =firstrow
            while($row=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['donarId']; ?></td>
                    <td><?php echo $row['donarName']; ?></td>
                    <td><?php echo $row['contact'] ?></td>
                     <td><?php echo $row['address'] ?></td>
                     <td><?php echo $row['type'] ?></td>

                    <td><a class="btn btn-info" href="updatedonar.php?id=<?php echo $row['donarId'] ?>" >Edit</a>&nbsp;&nbsp;
                    <a class="btn btn-danger" href="deletedonation.php?id=<?php echo $row['donarId'] ?>">Delete</a>

                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>

    </table>

    </div>





</body>
</html>
