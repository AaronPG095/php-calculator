
document.addEventListener('DOMContentLoaded', (event) => {
    // Select all text input elements
    const operatorInputs = document.querySelectorAll('input[type="button"]');

    // Add click event listener to each operator input
    operatorInputs.forEach(input => {
        input.addEventListener('click', function() {
            // Remove 'selected' class from all inputs
            operatorInputs.forEach(inp => inp.classList.remove('selected'));
            // Set the value of the hidden input to the name of the clicked input
            document.getElementById('selectedInput').value = this.name;
            // Add the 'selected' class to the clicked input
            this.classList.add('selected');
        });
    });
});

// listens for action "submit" on form with id "calcForm"
// exec handleFormSubmit
document.getElementById("calcForm").addEventListener("submit", handleFormSubmit);

// fetches values from form as key/value pairs
// exec postData with fetched values
// exec displayResults with response
async function handleFormSubmit(e) {
    e.preventDefault();
  
    const formData = new FormData(document.getElementById("calcForm"));
    const data = Object.fromEntries(formData.entries());

    try {
        const result = await postData(data);
        displayResult(result);
    } catch (error) {
        displayResult(JSON.stringify(
            {"error": error}
        ));
    }
}

// post request to submit.php with data as JSON
// resolves response from submit.php
async function postData(data) {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        const url = "Azubi/Api/submit.php";
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-type", "application/json;charset=UTF-8");
        xhr.onreadystatechange = function () {
            if (this.readyState === 4) {
                if (this.status === 200) {
                    resolve(this.responseText);
                } else {
                    reject(this.statusText);
                }
            }
        };
        xhr.send(JSON.stringify(data));
    });
}

// parses JSON response, displays result
function displayResult(result) {
    try {
        const parsedResult = JSON.parse(result);
        if (parsedResult.error) {
            document.getElementById("result").innerHTML = parsedResult.error;
        } else {
            document.getElementById("result").innerHTML = parsedResult.result;
        }
    } catch(error) {
        document.getElementById("result").innerHTML = error;
    }
}