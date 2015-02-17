<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quinton Black</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootswatch/3.3.1/darkly/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/styles.css" rel="stylesheet">
    <?php
        require_once("cgi-bin/IPstorage.php");
        update_visitor((string)$_SERVER["REMOTE_ADDR"]);
    ?>


</head>
<body>
    <div class="container-fluid">
        <div class="row North">
            <div class="col-md-12">
                <div class="jumbotron banner center">
                    <h1>Hello world!</h1> <p>This is page is for CP476 assignment 1</p>
                </div>
                <p class="center">
                    My name is Quinton, I am a 5th year computer science and business student at Laurier.
                    I like books, video games, CS and lego.
                </p>
                <p class="center">
                    There have been <?php echo time();?> seconds since the Epoch.
                    The current server time is
                    <?php
                        date_default_timezone_set('EST');
                        echo date("h:i A e");
                    ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 West">
                <h4>My CS courses</h4>
                <ol>
                    <li>CP104</li>
                    <li>CP114</li>
                    <li>CP120</li>
                    <li>CP213</li>
                    <li>CP216</li>
                    <li>CP217</li>
                    <li>CP363</li>
                    <li>CP312</li>
                    <li>CP386</li>
                    <li>CP460</li>
                    <li>CP317</li>
                    <li>CP315</li>
                </ol>
            </div>

            <div class="col-md-8 Center">
                <table style="width:100%">
                    <thead>
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>8:30</td>
                        <td class="cp414">CP414</td>
                        <td></td>
                        <td class="cp414">CP414</td>
                        <td></td>
                        <td class="cp414">CP414</td>
                    </tr>
                    <tr>
                        <td>9:00</td>
                        <td class="cp414"></td>
                        <td></td>
                        <td class="cp414"></td>
                        <td></td>
                        <td class="cp414"></td>
                    </tr>
                    <tr>
                        <td>9:30</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td>10:00</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td>10:30</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td>11:00</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td>11:30</td>
                        <td class="cp373">CP373</td>
                        <td></td>
                        <td class="cp373">CP373</td>
                        <td></td>
                        <td class="cp373">CP373</td>
                    </tr>
                    <tr>
                        <td>12:00</td>
                        <td class="cp373"></td>
                        <td></td>
                        <td class="cp373"></td>
                        <td></td>
                        <td class="cp373"></td>
                    </tr>
                    <tr>
                        <td>12:30</td>
                        <td class="cp476">CP476</td>
                        <td></td>
                        <td class="cp476">CP476</td>
                        <td></td>
                        <td class="cp476">CP476</td>
                    </tr>
                    <tr>
                        <td>1:00</td>
                        <td class="cp476"></td>
                        <td class="bu481">BU481</td>
                        <td class="cp476"></td>
                        <td class="bu481">BU481</td>
                        <td class="cp476"></td>
                    </tr>
                    <tr>
                        <td>1:30</td>
                        <td class="cp372">CP372</td>
                        <td class="bu481"></td>
                        <td class="cp372">CP372</td>
                        <td class="bu481"></td>
                        <td class="cp372">CP372</td>
                    </tr>
                    <tr>
                        <td>2:00</td>
                        <td class="cp372"></td>
                        <td class="bu481"></td>
                        <td class="cp372"></td>
                        <td class="bu481"></td>
                        <td class="cp372"></td>
                    </tr>
                    <tr>
                        <td>2:30</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td>3:00</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td>3:30</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td>4:00</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td>4:30</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td>5:00</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    <tr>
                        <td>5:30</td>
                        <td></td>
                        <td class="cp469">CP469</td>
                        <td></td>
                        <td class="cp469">CP469</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6:00</td>
                        <td></td>
                        <td class="cp469"></td>
                        <td></td>
                        <td class="cp469" ></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6:30</td>
                        <td></td>
                        <td class="cp469"></td>
                        <td></td>
                        <td class="cp469"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7:00</td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-2 East">
                <h4>Languages</h4>
                <ul>
                    <li>Python</li>
                    <li>Java</li>
                    <li>Easy68k</li>
                    <li>C</li>
                    <li>SQL</li>
                    <li>Html</li>
                    <li>Matlab</li>
                    <li>AngularJS</li>
                    <li>C#</li>
                    <li>VBA</li>
                    <li>PHP</li>
                </ul>

            </div>
        </div>

        <div class="row South">
            <div class="col-md-10 col-md-offset-1" style="text-align: center">
                <hr>
                <div class="col-md-2 col-md-offset-1">
                    &copy; Quinton Black 2015
                </div>
                <div class="col-md-2">
                    <a href="mydoc.html">Resume</a>
                </div>
                <div class="col-md-2">
                    <a href="portal.html">Portal</a>
                </div>
                <div class="col-md-2">
                    Page hits:
                    <?php
                        $file_name = "count.txt";
                        $fh = fopen($file_name,"r+");
                        $last_count = fread($fh, filesize($file_name));
                        $count = intval($last_count)+1;
                        echo $count;
                        fseek($fh,0);
                        fwrite($fh,$count);
                        fclose($fh);
                    ?>
                </div>
                <div class="col-md-2">
                        <form class="form form-inline" action="visitors.php">
                            <button class="btn btn-default" type="submit">Who has been here?</button>
                        </form>
                </div>
            </div>
        </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</body>
</html>