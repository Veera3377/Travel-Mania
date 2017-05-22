<html>
<?php
session_start();
if (!isset($_SESSION['name']))
    header('location: Login.php');
$con = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($con,'travel');
$pname = $_GET['name'];
$a=0;
$xdata = array(array());
if($pname == "Most visited")
{
$q = "SELECT * FROM places ORDER BY p_rating DESC LIMIT 5";
$result = mysqli_query($con,$q);
while($row = mysqli_fetch_array($result,1))
    {
        $xdata[$a][0] = $row['p_name'];
        $xdata[$a][1] = $row['p_image'];
        $xdata[$a][2] = $row['p_location'];
        $a++;
    }
}
if($pname == "Mysterious Escavations")
{
    $q = "SELECT * FROM places where p_category=\"$pname\" LIMIT 5";
    $result = mysqli_query($con,$q);
    $xdata = array();
    while($row = mysqli_fetch_array($result,1))
    {
        $xdata[$a][0] = $row['p_name'];
        $xdata[$a][1] = $row['p_image'];
        $xdata[$a][2] = $row['p_location'];
        $a++;
    }
}
if($pname == "Heritage")
{
    $q = "SELECT * FROM places where p_category=\"$pname\" LIMIT 5";
    $result = mysqli_query($con,$q);
    $xdata = array();
    while($row = mysqli_fetch_array($result,1))
    {
        $xdata[$a][0] = $row['p_name'];
        $xdata[$a][1] = $row['p_image'];
        $xdata[$a][2] = $row['p_location'];
        $a++;
    }
}
if($pname == "Vacations")
{
    $q = "SELECT * FROM places where p_category=\"$pname\" LIMIT 5";
    $result = mysqli_query($con,$q);
    $xdata = array();
    while($row = mysqli_fetch_array($result,1))
    {
        $xdata[$a][0] = $row['p_name'];
        $xdata[$a][1] = $row['p_image'];
        $xdata[$a][2] = $row['p_location'];
        $a++;
    }
}
if($pname == "Adventurous")
{
    $q = "SELECT * FROM places where p_category=\"$pname\" LIMIT 5";
    $result = mysqli_query($con,$q);
    $xdata = array();
    //var_dump($result);
    while($row = mysqli_fetch_array($result,1))
    {
        $xdata[$a][0] = $row['p_name'];
        $xdata[$a][1] = $row['p_image'];
        $xdata[$a][2] = $row['p_location'];
        $a++;
    }
   // var_dump($xdata);
}
?>
    <head>
    <style>
     .menu
            {
                font-size: 20px;
                font-family: 'algerian';
                font-weight: bold;
            }
    .thumbnail
    {
        width : 170px;
        height: 220px;
    }
    </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TravelMania</title>
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet" type="text/css">
        <style>
        .column {
    max-width: 100%;
    display: block;
}

.column {
    width: 100%;
    height: 100%;    
}

.column img {
    -webkit-transition: all 1s ease; /* Safari and Chrome */
    -moz-transition: all 1s ease; /* Firefox */
    -o-transition: all 1s ease; /* IE 9 */
    -ms-transition: all 1s ease; /* Opera */
    transition: all 1s ease;
}

.column:hover img {
    -webkit-transform:scale(1.25); /* Safari and Chrome */
    -moz-transform:scale(1.25); /* Firefox */
    -ms-transform:scale(1.25); /* IE 9 */
    -o-transform:scale(1.25); /* Opera */
     transform:scale(1.25);
}

        </style>
 
    </head>
    <body>
        <style type="text/css">
        </style>
        <div class="top-bar">
            <div class="top-bar-left">
                <ul class="menu">
                    <center><a href="Index.php"><img src="TravelManiaLogo.png" height="50" width="100"></img></a></center>
                </ul>
            </div>
            <div class="top-bar-right">
                <ul class="menu">
                    <li>
                        <input type="search" placeholder="Search">
                    </li>
                    <li>
                        <button type="button" class="button">Search</button>
                    </li>
                    <li>
                        <a href="Index.php?flag=1">Home</a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <center><h2>States</h2></center>
        <br>
        <div class="row small-up-2 medium-up-3 large-up-6" id="dynamicstate">
        </div>
        <hr>
        <div class="row column">
            <ul class="menu">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
            <br>
        </div>
        <script type="text/javascript">
            var data =<?php echo json_encode($xdata); ?> ;
            var number_of_states = data.length;
            var temp = document.getElementById("dynamicstate");
                    temp.innerHTML = "";
            var x = new Array();
            
        for (i =0 ; i < number_of_states; i++)
        {
                x = data[i][1].split(',');
                //alert(x);
                var temp_div = "<div class='column'>\
                <img class='thumbnail' src='images/"+data[i][2]+'/'+x[1]+"'>\
                <center><h5>"+data[i][0]+"</h5></center>\
                <a class='button small expanded hollow' href='toprecieve.php?name="+data[i][0]+"'>Let's Go Here!</a>\
            </div>"
                    temp.innerHTML += temp_div;            
        }
        </script>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
        <script>
            $(document).foundation();
        </script>
        <script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
    </body>
</html>