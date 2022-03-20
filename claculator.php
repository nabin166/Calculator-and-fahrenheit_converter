<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body style="background-color: gray; display: grid; margin-top:10%; ">
    <h1 style="text-align:center;">Simple_Calculator</h1>
    <form action="#" method="post">
        <div style="display: flex; flex-direction:column; align-items:center; justify-content: center;">
            <div><input type="text" name="firstValue" placeholder="first.."></div>
            <div><input type="text" name="secondValue" placeholder="second.."></div>
            <select name="operation" id="">
                <option value="none">none</option>
                <option value="add">add</option>
                <option value="Multiply">multiply</option>
                <option value="subtract">subtract</option>
                <option value="division">divide</option>
            </select>
            <button id="button" name="submit" type="submit">Submit</button>
        </div>

    </form>

    <p style="text-align: center;">

        <?php
        if (isset($_POST['submit'])) {
            $first = $_POST["firstValue"];
            $second = $_POST["secondValue"];
            $operation = $_POST["operation"];
            if (empty($first) &&  empty($second)) {
                echo "Both field are empty";
            } elseif (empty($first) ||  empty($second)) {
                echo "One field is empty";
            } else {
                switch ($operation) {

                    case 'add':
                        $add =  $first + $second;
                        echo $add;
                        break;

                    case 'Multiply':
                        $Multiply =  $first * $second;
                        echo $Multiply;
                        break;

                    case 'subtract':
                        $subtract =  $first - $second;
                        echo $subtract;
                        break;

                    case 'division':
                        $division =  $first / $second;
                        echo $division;
                        break;
                    default:
                        echo "<br>";
                        echo "please choose option from above ";
                        break;
                }
            }
        }


        ?>
    </p>

</body>

</html>

<style>
    #button {
        background-color: burlywood;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #button:hover {
        background-color: wheat;
        border-width: 5px;
        border-color: burlywood;
    }
</style>