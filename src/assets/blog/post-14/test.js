const form = document.getElementById('test');
const testResult = document.getElementById('testResult');
let initialResult = 0;

form.onchange = function() {
    console.log('checked');

    initialResult = 0;

    for (let i = 0; i < form.length; i++) {
        if (form[i].checked) {
            initialResult += Number(form[i].value);
        }
    }

    testResult.innerHTML = initialResult;
}