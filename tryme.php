<html>
    <head>
        <title>Commision</title>

    <h1>Result of sale commision </h1>
    <?php
        $coursework=$_POST['coursework'];
        if ($coursework>=50) {
            echo ' Your coursework grade cannot be above 50 ';
        } elseif ($coursework<=51) { 
            print "<p>Your initial coursework grade is" .$coursework."</p>"; 
        }
        $written=$_POST['written'];
        if ($written>=50) {
            echo ' written grade cannot be above 50 ';
        } elseif ($written<=51) {
            print "<p> Your initial written grade is" .$written."</p>";
        }

        $total= $written + $coursework;
        print "<p>Your total grade combine is " .$total."</p>";
    ?>
</html>

<html>
    <head>
        <title>Commision</title>

    <h1>Grade calculator </h1>
    <p>This form will allow you to work out grades</p>

    <h2>Provide your grades </h2>

    <form name="commision" action="graderesp.php" method="POST">
        <p>Enter your written examination mark: <input type="text" name="written"></p>
        <p>Enter your coursework mark: <input type="text" name="coursework"></p>

        <p>Thank you for your salary <input type="submit" name="continue" value="Continue" /></p>
    </form>
</html>
