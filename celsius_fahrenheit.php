<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body style="background-color: gray; display: grid; margin-top:10%; ">
    <h1 style="text-align:center;">Simple_Celsius_converter</h1>
    <form action="#" method="post">
        <div style="display: flex; flex-direction:column; align-items:center; justify-content: center;">
            <div>
                <input type="text" name="firstValue" placeholder="first..">
            </div>


            <input type="radio" id="cel" checked="checked" name="operation" value="cel" >
            <label for="cel">calsius</label>
            <input type="radio" id="fahr" name="operation" value="fahr">
            <label for="fahr">Fahrenheit</label>
            <button id="button" name="submit" type="submit">Submit</button>
        </div>

    </form>

    <p style="text-align: center;">

        <?php
        if (isset($_POST['submit'])) {
            $first = $_POST["firstValue"];

          
            if (empty($first) ) {
                echo " field are empty";
            } else {
                $operation = $_POST["operation"];
                switch ($operation) {

                    case 'cel':
                        $Fahrenheit =  ($first * (9/5)) + 32;
                        echo  'The Fahrenheit of '.$first.'degree is '.$Fahrenheit;
                        break;

                    case 'fahr':
                        $celsius = ($first - 32) * (5/9);
                        echo  'The celsius of '.$first.' is '.$celsius;
                        break;

                    default:
                        echo "<br>";
                        echo "please add the value that you want to convert . ";
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