<?php
    // Initialize the session
    session_start();

    // Access Database
    require 'config.php';

    $allusers_q = mysqli_query($link, 'select * from staff');
?> 

<html>
<head>
    <title>Show Whole Table</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

<CENTER>

<?php 

// use SESSION to automatically DETECT username

    if(!empty($_SESSION["username"]))
    {
        echo "<h4>Hello <font color=\"red\">";
        echo htmlspecialchars($_SESSION["username"]); 
        echo "</font>!";
    }
    if(isset($_GET['msg']))
    {
        echo $_GET['msg'];
    }
?>

    <h1> USERS TABLE </h1>
        <table border="0" cellpadding ="5" style="border-collapse: collapse; ">
            <tbody>
                <tr style="border-bottom: 1px solid">
                    <th>User ID</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>

<?php

// DISPLAY cell content of each column and each row
//-------------------------------------------------

        function hrefFix_two($id, $col)
        {
            echo "editCell.php?pkname=id&id=" . $id
            . "&column=" . $col . "&table=staff";
        }
        while($users_t_vals = mysqli_fetch_object($allusers_q))
        { 
          $pid = $users_t_vals->id;
?>

                <tr style="border-bottom: 1px solid">
                    <td>
  			<a href=<?php //echo hrefFix_two($pid, "id"); ?>>
  				 <?php echo $users_t_vals->id; ?>
                        </a>
                    </td>
                    <td>
			<a href=<?php echo hrefFix_two($pid, "title"); ?>>  
                    		<?php echo $users_t_vals->title; ?>
                        </a>
                    </td>
                    <td>
                        <a href=<?php echo hrefFix_two($pid, "bio"); ?>>
                        	<?php echo $users_t_vals->bio; ?>
                        </a>        
                   </td>
                </tr>
<?php
        }
?>

            </tbody>
        </table>
  
<p> <br>
</CENTER>

</body>
</html>