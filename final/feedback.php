<?php
include 'top.php';

//Initialize
$dataIsGood = false;
$firstName = "";
$lastName = "";
$email = "";
$photographer = "";
$feedback = "";

//Function to check for text and numbers
function verifyAlphaNum($testString) {
    return(preg_match("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}

//Sanitize function
function getData($field) {
   if (!isset($_POST[$field])) {
       $data = "";
   }else{
       $data = trim($_POST[$field]);
       $data = htmlspecialchars($data);
   }
   return $data;
}
?>
<main>
    <article class="feedback">
        <h2>Submit Feedback!</h2>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $dataIsGood = true;
            
            //Server side sanitization
            $firstName = getData("txtFirstName");
            $lastName = getData("txtLastName");
            $email = getData("txtEmail");
            $photographer = getData("radPhotographer");
            $feedback = getData("txtFeedback");
            
            if($firstName == ""){
                print '<p class="mistake">Please enter your first name.</p>';
                $dataIsGood = false;
            }elseif(!verifyAlphaNum($firstName)){
                print '<p class="mistake">Your first name appears to have extra characters.</p>';
                $dataIsGood = false;
            }
            
            if($lastName == ""){
                print '<p class="mistake">Please enter your last name.</p>';
                $dataIsGood = false;
            }elseif(!verifyAlphaNum($lastName)){
                print '<p class="mistake">Your last name appears to have extra characters.</p>';
                $dataIsGood = false;
            }
            
            if($email == ""){
                print '<p class="mistake">Please enter your email address.</p>';
                $dataIsGood = false;
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                print '<p class="mistake">Your email address appears to be incorrect.</p>';
                $dataIsGood = false;
            }
            
            if($photographer != "Novice or Beginner" AND $photographer != "Skilled" AND $photographer != "Professional" AND $photographer != "None"){
                print '<p class="mistake">Please choose a photographer level.</p>';
                $dataIsGood = false;
            }
            
            if($feedback == ""){
                print '<p class="mistake">Please submit some feedback.</p>';
                $dataIsGood = false;
            }
            
            //Save
            if($dataIsGood){
                try{
                    $sql = 'INSERT INTO tblFeedback 
                        (fldFirstName, fldLastName, fldEmail, fldPhotographer, fldFeedback)
                        VALUES (?, ?, ?, ?, ?)';
                    $statement = $pdo->prepare($sql);
                    $params = array($firstName, $lastName, $email, $photographer, $feedback);
                    
                    
                    if($statement->execute($params)){
                        print '<p>Record was successfully saved.</p>';
                        
                        //Emailing user
                        $to = $email;
                        $from = 'Vanessa Tran <vtran@uvm.edu>';
                        $subject = 'Portfolio Feedback Confirmation';
                        
                        $message = '<html><body style="background-color: black; color: white; font-family: Arial;">';
                        $message .= '<h1 style="text-align: center;">Your Feedback was successfully sent through!</h1>';
                        $message .= '<p style="text-indent: 5%;">I appreciate the time you took to give me feedback!</p>';
                        $message .= '<p>I\'ll read everything as soon as I can.</p>';
                        $message .= '<p style="text-indent: 10%">Vanessa</p>';
                        $message .= '</body></html>';
                        
                        $headers = "MIME-Version: 1.0\r\n";
                        $headers .= "Content-type: text/html; charset=utf-8\r\n";
                        $headers .= "From: " . $from . "\r\n";
                        
                        $mailSent = mail($to, $subject, $message, $headers);
                        
                        if($mailSent){
                            print "<p>An email confirmation has been sent to you.<p>";
                            print $message;
                        }
                    }else{
                        print '<p>Record was NOT successfully saved.</p>';
                    }
                    
                } catch (PDOException $e) {
                    print '<p>Could\'t insert the record, please contact someone :).</p>';
                } //end try
            } //ends data is good
        } //ends form was submitted
        if($dataIsGood){
            print '<h2>Thank you, your information has been received.<h2>';
        }
        ?>
        <form action="#" method="post">
            <fieldset class="contact">
                <legend>Contact Info</legend>
                <p>
                    <label for="txtFirstName">First Name: </label>
                    <input type="text" id="txtFirstName" name="txtFirstName" value="<?php print $firstName;?>" required>
                </p>
                <p>
                    <label for="txtLastName">Last Name: </label>
                    <input type="text" id="txtLastName" name="txtLastName" value="<?php print $lastName;?>" required>
                </p>
                <p>
                    <label for="txtEmail">Email: </label>
                    <input type="email" id="txtEmail" name="txtEmail" value="<?php print $email;?>" required>
                </p>
            </fieldset>
            <fieldset class="radio">
                <legend>What level photographer are you?</legend>
                <p>
                    <input <?php if($photographer == "Novice or Beginner") print ' checked '; ?> type="radio" id="radNovice" name="radPhotographer" value="Novice or Beginner" required>
                    <label for="radNovice">Novice or Beginner</label>
                </p>

                <p>
                    <input <?php if($photographer == "Skilled") print ' checked '; ?> type="radio" id="radSkilled" name="radPhotographer" value="Skilled" required>
                    <label for="radSkilled">Skilled</label>
                </p>

                <p>
                    <input <?php if($photographer == "Professional") print ' checked '; ?> type="radio" id="radProfessional" name="radPhotographer" value="Professional" required>
                    <label for="radProfessional">Professional</label>
                </p>
                
                <p>
                    <input <?php if($photographer == "None") print ' checked '; ?> type="radio" id="radNone" name="radPhotographer" value="None" required>
                    <label for="radNone">None</label>
                </p>
            </fieldset>
            <fieldset class="textarea">
                <label for="txtFeedback">Feedback</label>
                <textarea id="txtFeedback" name="txtFeedback"><?php print $feedback; ?></textarea>
            </fieldset>
            <fieldset class="button">
                <p>
                    <input id="btnSubmit" name="btnSubmit" type="submit" value="Submit">
                </p>
            </fieldset>
        </form>
        <section>
           <h2>Your Feedback</h2>
           <table>
               <tr>
                   <th>Name</th>
                   <th>Photography Level</th>
                   <th>Feedback</th>
               </tr>
               <?php
                $sql = 'SELECT fldFirstName, fldPhotographer, fldFeedback FROM tblFeedback';
                
                $statement = $pdo->prepare($sql);
                $statement->execute();
                
                $records = $statement->fetchAll();
                
                foreach ($records as $record){
                    print '<tr>';
                    print '<td>' . $record['fldFirstName'] . '</td>';
                    print '<td>' . $record['fldPhotographer'] . '</td>';
                    print '<td>' . $record['fldFeedback'] . '</td>';
                    print '</tr>' . PHP_EOL;
                }
                ?>
           </table>
        </section>
    </article>
</main>
<?php
include 'footer.php';
?>
