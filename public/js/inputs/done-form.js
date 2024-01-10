class DoneForm extends FormGrabber
{
    beforeSend() {
        //console.log("before send", this)
    }
    onSuccess(json) {
        let resultElement = document.getElementById("result")
        resultElement.innerHTML = JSON.stringify(json, undefined, 2)
        console.log("result:", json)
    }
    onError(error) {}
}

try {
    let doneForm = new DoneForm({
        "debug": false,
        'button_id': "done",
        'input_ids': ["hidden_id", "age", "some_text", "some_text_area", "quill_content", "drink", "youtube", "locations", "date", "time"],
        'method': "POST",
        'endpoint': document.getElementsByTagName("base")[0].href + "api/test-input"
    })
} catch (e) {
    console.log('Error while creating form listener: ', e)
}