
<!-- comment 1 -->
<?php
$conn= mysqli_connect('localhost', 'root', '', 'art');
if (!$conn) {
    die('Connection error : ' . mysqli_connect_error());
}
if(isset($_POST['add1'])) {
    $sql="insert into artwork(name,cdate,type) values ('$_POST[name]','$_POST[cdate]','$_POST[type]')";
    $result= mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('Details Added Successfully')</script>";
        echo "<script>window.location.href=window.location.href</script>";    
    }    
}
if(isset($_POST['add2'])) {
    $sql="insert into artist(name,exp,category) values ('$_POST[name]',$_POST[exp],'$_POST[category]')";
    $result= mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('Details Added Successfully')</script>";
        echo "<script>window.location.href=window.location.href</script>";    
    }    
}
if(isset($_POST['add3'])) {
    $sql="insert into customer(name,address,amount) values ('$_POST[name]','$_POST[address]',$_POST[amount])";
    $result= mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('Details Added Successfully')</script>";
        echo "<script>window.location.href=window.location.href</script>";    
    }    
}
?>
<html>
<head>
    <title>Art Gallery</title>
    <style type="text/css">
      th {
        text-align: left;
    }
    span {
        color:  red;
    }
    input[type="text"],input[type="email"],input[type="date"],input[type="number"],textarea {
        width: 220px;
        height: 25px;
        border-radius: 5px;
    }
    select,input[type="date"] {
        width: 100%;
        height: 27px;
        border-radius: 5px;
    }
    input[type="submit"],input[type="reset"] {
        width: 100px;
        height: 35px;
        border-radius: 5px;
    }
    .row {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        grid-gap: 20px;
    }
    .col-md-5 {
        grid-column: span 12;
    }
    .col-md-7 {
        grid-column: span 12;
    }

</style>
</head>
<body>
    <div class="row">
        <div class="col-md-5" style="display: block;border: solid;border-width: 1px;">
            <form method="post" action="">
                <table cellpadding="5px" cellspacing="5px"  align="center">
                    <tr>
                        <th colspan="2"><h1 align="center"> Art work</h1></th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <th>Date Created</th>
                        <td><input type="date" name="cdate"></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input type="text" name="type"></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: center;">
                            <input type="submit" value="Add" name="add1" style="background-color: #337ab7;">
                        </th>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-md-7" style="display: block;overflow-x: auto;">
            <table cellpadding="5px" cellspacing="5px"  align="center">
                <tr>
                    <th colspan="10"><h1 align="center">Art List</h1></th>
                </tr>
               
                        <?php
                        $sql="select * from artwork";
                        $res= mysqli_query($conn, $sql);
                        ?> 
                                        
                   
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created Date</th>
                    <th>Type</th>
                </tr>
                <?php 
                $n=1;
                while($row=mysqli_fetch_assoc($res)) {
                    ?>
                    <tr>
                        <td><?php echo $n++?></td>
                        <td><?php echo $row['artid']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['cdate']?></td>
                        <td><?php echo $row['type']?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5" style="display: block;border-right: solid;border-width: 1px;">
            <form method="post" action="">
                <table cellpadding="5px" cellspacing="5px"  align="center">
                    <tr>
                        <th colspan="2"><h1 align="center">Add Artist</h1></th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <th>Experience</th>
                        <td><input type="number" name="exp"></td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td><input type="text" name="category"></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: center;">
                            <input type="submit" value="Add" name="add2" style="background-color: #337ab7;">
                        </th>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-md-7" style="display: block;overflow-x: auto;">
            <table cellpadding="5px" cellspacing="5px"  align="center">
                <tr>
                    <th colspan="10"><h1 align="center">Artist List</h1></th>
                </tr>
               
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Experience</th>
                    <th>Category</th>
                </tr>
                  <?php
                        $sql="select * from artist";
                        $res= mysqli_query($conn, $sql);
                        ?> 
                <?php 
                $n=1;
                while($row=mysqli_fetch_assoc($res)) {
                    ?>
                    <tr>
                        <td><?php echo $n++?></td>
                        <td><?php echo $row['artistid']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['exp']?></td>
                        <td><?php echo $row['category']?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5" style="display: block;border-right: solid;border-width: 1px;">
            <form method="post" action="">
                <table cellpadding="5px" cellspacing="5px"  align="center">
                    <tr>
                        <th colspan="2"><h1 align="center">Add Customer</h1></th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><textarea name="address" rows="5" style="height: auto;border-style: inset;border-width: 2px;"></textarea></td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td><input type="number" name="amount"></td>
                    </tr>
                    <tr>
                        <th colspan="2" style="text-align: center;">
                            <input type="submit" value="Add" name="add3" style="background-color: #337ab7;">
                        </th>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-md-7" style="display: block;overflow-x: auto;">
            <table cellpadding="5px" cellspacing="5px"  align="center">
                <tr>
                    <th colspan="10"><h1 align="center">Customer List</h1></th>
                </tr>
               
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Amount</th>
                </tr>
                 <?php
                        $sql="select * from customer";
                        $res= mysqli_query($conn, $sql);
                        ?> 

                <?php 
                $n=1;
                while($row=mysqli_fetch_assoc($res)) {
                    ?>
                    <tr>
                        <td><?php echo $n++?></td>
                        <td><?php echo $row['customerid']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['amount']?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>