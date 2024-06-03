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
            <form id="calcForm">
                <div class="flex-row">
                    <label class="form-label" for="value1"></label>
                    <input class="form-input" type="number" step="any" name="value1" id="value1" placeholder="First Value">
                    <label class="form-label" for="value2"></label>
                    <input class="form-input" type="number" step="any" name="value2" id="value2" placeholder="Second Value">
                </div>
                <div class="flex-row">
                    <label class="form-label" for="add"></label>
                    <input id="operator" class="operator" name="add" type="button" value="+">
                    <label class="form-label" for="subtract"></label>
                    <input id="operator" class="operator" name="subtract" type="button" value="-">
                    <label class="form-label" for="multiply"></label>
                    <input id="operator" class="operator" name="multiply" type="button" value="*">
                    <label class="form-label" for="divide"></label>
                    <input id="operator" class="operator" name="divide" type="button" value="/">

                    <input type="hidden" id="selectedInput" name="selectedInput">
                </div>
                <div class="flex-row">
                    <div class="display">
                        <input type="text" name="form-result" id="result">
                    </div>
                    <input class="form-input" type="submit" value="Calculate">
                </div>
            </form>
        </div>
    </div>
    </div>


    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>