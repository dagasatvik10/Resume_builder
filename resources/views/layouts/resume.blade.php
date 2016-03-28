<!DOCTYPE html>
<html>
<head>
    <title>
        Your Resume
    </title>
</head>
<body>
<div id="main">
    <h1 id="name"><{{$name}}</h1>
</div>

<div id="header">{{$name." | ".$email." | ".$contact_no]}}/div>
<br>
<div class="table">
    <h2 id="heading">Objective</h2>

    <p>{{$objective}}</p>
</div>
</div>

<div class="table" >
    <h2 id="heading">Education</h2>
    <table>
        <tr>
            <th >Year</th>
            <th>Institute</th>
            <th>Course</th>
            <th>Percentage</th>
        </tr>
        <tr>
            {{--<td class="year"><?php echo $_POST['collegeyear'];?></td>--}}
            {{--<td class="institute"><?php echo $_POST['college'];?></td>--}}
            {{--<td class="course"><?php echo $_POST['collegecourse'];?></td>--}}
            {{--<td class="percent"><?php echo $_POST['collegepercentage'];--}}
                {{--if(!empty($_POST['collegesem']))--}}
                {{--{echo "( till ".$_POST['collegesem']." semester )";}--}}
                {{--?></td>--}}
        </tr>

    </table>
</div>

<div class="table">
    <h2 id="heading">Projects Undertaken</h2>
    <ul>
        <?php
        echo "<li>".$_POST['projectfinalyear']."</li>";
        $i=1;
        while(isset($_POST['project'.$i]))
        {
            if(!empty($_POST['project'.$i]))
            {
                echo "<li>".$_POST['project'.$i]."</li>";
            }
            $i++;
        }
        ?>
    </ul>
</div>

<div class="table">
    <h2 id="heading">Skills/h2>
    <ul>

        {{$skills}}

    </ul>
</div>
<div class="table">
    <h2 id="heading">Personal Details</h2>
    <ul>
        <li>
            <span>Date Of Birth :</span>{{$dob}}
        </li>
        <li>
            <span>Father's Name :</span>{{$fathers_name}}
        </li>


    </ul>
</div>
<div id="disclaimer">
    <h2 id="declaration">Declaration</h2>
    <p class="data">
        I hereby declare that the details provided by me in this resume are correct and I have knowingly not omitted/ misrepresented any information. I am aware that the company can use this data for verification purposes and any material inconsistency identified between the details shared above versus actual information would have a bearing on my employment, based upon company policies.
    </p>
    <p>
        <span>Date :</span>{{$date}}
    </p>
    <p>
        <span>Time :</span>{{$time}}
    </p>
    <p>
        <span>Place :</span>{{$place}}
    </p>
    <p>
        <span>Signature :</span>
    </p>
</div>


</body>
</html>