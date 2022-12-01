function callRequest(body, url) {
    let request = new XMLHttpRequest()
    request.open("POST", url, true)
    request.setRequestHeader("Content-type", "application/json")
    request.send(JSON.stringify(body))

    request.onload = function () {
        this.responseText;
    }
    const returnReq = request.responseText
    return returnReq
}

const callFetch = async function(body, url) {
    fetch(url, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(body)
    })
        .then(response => {
            console.log(response.json())
            return response
            }
        )
}