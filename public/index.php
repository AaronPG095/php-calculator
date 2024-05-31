<style>
    <?php include './css/style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Calculator</title>
    <link type="text" href="./css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="calculator">
            <form action="" method="post">

                <div class="display">
                    <input type="text" name="display">
                </div>
                <div>
                    <input type="button" class="operator" name="all clear" value="AC" onclick="display.value = ''">
                    <input type="button" class="operator" name="delete" value="DE" onclick="display.value = display.value.toString().slice(0,-1)">
                    <input type="button" class="operator" name="point" value="." onclick="display.value += '.'">
                    <input id="operator" class="operator" type="button" name="divide" value="/" onclick="display.value += '/'">
                </div>
                <div>
                    <input type="button" value="7" onclick="display.value += '7'">
                    <input type="button" value="8" onclick="display.value += '8'">
                    <input type="button" value="9" onclick="display.value += '9'">
                    <input id="operator" class="operator" type="button" name="multiply" value="*" onclick="display.value += '*'">
                </div>
                <div>
                    <input type="button" value="4" onclick="display.value += '4'">
                    <input type="button" value="5" onclick="display.value += '5'">
                    <input type="button" value="6" onclick="display.value += '6'">
                    <input id="operator" class="operator" type="button" name="subtract" value="-" onclick="display.value += '-'">
                </div>
                <div>
                    <input type="button" value="1" onclick="display.value += '1'">
                    <input type="button" value="2" onclick="display.value += '2'">
                    <input type="button" value="3" onclick="display.value += '3'">
                    <input id="operator" class="operator" type="button" name="add" value="+" onclick="display.value += '+'">
                </div>
                <div>
                    <input type="button" value="00" onclick="display.value += '00'">
                    <input type="button" value="0" onclick="display.value += '0'">
                    <input id="operator" class="operator equal" type="button" onclick="display.value = eval(display.value)" value="=">
                </div>






                <!-- <div class="flex-row"> -->
                <!-- Widen value inputs, align in flex row, with operator container in between -->
                <!-- <label class="form-label" for="value1"></label>
                    <input class="form-input" type="number" step="any" name="value1" id="value1" placeholder="First Value"> -->
                <!-- Remove Original Select Options and Replace with Buttons -->
                <!-- Put operators into wrapped flexbox -->
                <!-- Add javascript onclick functions to add selected class to selected operator - pass value to Math Class -->
                <!-- <div class="operator-container">
                        <label class="form-label" for="add"></label>
                        <input id="operator" class="operator" name="add" type="button" value="+">
                        <label class="form-label" for="subtract"></label>
                        <input id="operator" class="operator" name="subtract" type="button" value="-">
                        <label class="form-label" for="multiply"></label>
                        <input id="operator" class="operator" name="multiply" type="button" value="*">
                        <label class="form-label" for="divide"></label>
                        <input id="operator" class="operator" name="divide" type="button" value="/">
                    </div> -->
                <!-- <input type="hidden" id="selectedInput" name="selectedInput">
                    <label class="form-label" for="value2"></label>
                    <input class="form-input" type="number" step="any" name="value2" id="value2" placeholder="Second Value"> -->
                <!-- </div> -->
                <!-- Style display container* -->
                <!-- <div class="flex-row">
                    <input type="submit" value="calculate">

                </div> -->


        </div>
        </form>
    </div>
    </div>


    <script src="js/script.js"></script>
</body>

</html>