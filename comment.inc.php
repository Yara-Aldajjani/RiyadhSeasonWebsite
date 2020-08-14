<?php
function setComments($conn){
if(isset($_POST['CommentSubmit'])) //unless we hit the submit button, the function shouldnt run
{

//get the data from the url (post) 
$uid=$_POST['uid']; 
$date=$_POST['date']; 
$message=$_POST['message']; 
$pageid=$_POST['pageid']; 
//insert data from form to database
$sql="INSERT INTO comments(uid, date, message, pageid) VALUES('$uid', '$date','$message','$pageid') ";
$result=$conn ->query($sql); //use connection to query the database

}
}

function getComments($conn, $pageid){
    $sql="SELECT * FROM comments WHERE pageid=$pageid ORDER BY date DESC"; //show recent comments first
    $result=$conn ->query($sql); 
    //loop through array of results
    while($row=$result ->fetch_assoc()){
        
        echo "<div class='comment-box'><p>";
        echo "<div class='uidStyle'>".$row['uid']."<br>"."</div> "; //show username
        echo "<div class='dateStyle'>".$row['date']."<br>"."</div> "; //show date
        echo "<div class='contentStyle'>".nl2br($row['message'])."</div> " ; //show message, line breaks in db are seen as php nl (new line), convert it to break
    echo "</p></div>";
        }
        
    }
    
    

