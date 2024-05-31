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
                <div class="flex-row">
                    <!-- Widen value inputs, align in flex row, with operator container in between -->
                    <label class="form-label" for="value1"></label>
                    <input class="form-input" type="number" step="any" name="value1" id="value1" placeholder="First Value">
                    <!-- Remove Original Select Options and Replace with Buttons -->
                    <!-- Put operators into wrapped flexbox -->
                    <!-- Add javascript onclick functions to add selected class to selected operator - pass value to Math Class -->
                    <div class="operator-container">
                        <label class="form-label" for="add"></label>
                        <input class="operator" name="add" type="button" value="+">
                        <label class="form-label" for="subtract"></label>
                        <input class="operator" name="subtract" type="button" value="-">
                        <label class="form-label" for="multiply"></label>
                        <input class="operator" name="multiply" type="button" value="*">
                        <label class="form-label" for="divide"></label>
                        <input class="operator" name="divide" type="button" value="/">
                    </div>
                    <label class="form-label" for="value2"></label>
                    <input class="form-input" type="number" step="any" name="value2" id="value2" placeholder="Second Value">
                </div>
                <!-- Style display container* -->
                <div class="flex-row">
                    <input type="submit" value="calculate">
                    <div class="display">
                        <input type="text" name="display">
                    </div>
                </div>


        </div>
        </form>
    </div>
    </div>


    <script src="js/script.js"></script>
</body>

</html>