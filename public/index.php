<style>
    <?php include './css/style.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Calculator</title>
    <link type="text" href="public/css/style.css" rel="stylesheet" />
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
                    <div class="select-flex">
                        <select name="operation" id="operation">
                            <div class="flex-row">
                                <label for="add"></label>
                                <option name="add" class="operator">Add</option>
                                <label for="subtract"></label>
                                <option name="subtract" class="operator">Subtract</option>
                                <label for="multiply"></label>
                                <option name="multiply" class="operator">Multiply</option>
                                <label for="divide"></label>
                                <option name="divide" class="operator">Divide</option>
                            </div>
                        </select>
                    </div>
                    <input class="form-input" type="submit" value="Calculate">
                </div>
                <div class="flex-row">
                    <div class="display">
                        <div class="inner-display" name="form-result" id="result"></div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    </div>


    <script type="text/javascript" src="public/js/script.js"></script>
</body>

</html>