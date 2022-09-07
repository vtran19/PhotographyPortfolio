<?php
include 'top.php';
?>
<main>
    <article>
        <h2>SQL Statements</h2>
        <pre>
            <h3>Creating table for feedback</h3>
            <code>
                CREATE TABLE tblFeedback(
                    pmkFeedbackId INT AUTO_INCREMENT PRIMARY KEY,
                    fldFirstName varchar(30),
                    fldLastName varchar(30),
                    fldEmail varchar(50),
                    fldPhotographer varchar(30),
                    fldFeedback text
                );
            </code>
            <h3>Inserting sample data into table</h3>
            <code>
                INSERT INTO tblFeedback (fldFirstName, fldLastName, fldEmail, fldPhotographer, fldFeedback) VALUES
            ('Vanessa', 'Tran', 'vtran@uvm.edu', 'Novice or Beginner', 'None.');
            </code>
            <h3>Selecting data to display from table</h3>
            <code>
                SELECT fldType, fldWorks, fldExample FROM tblEnergy;
            </code>

        </pre>
    </article>
</main>
<?php
include 'footer.php';
?>
