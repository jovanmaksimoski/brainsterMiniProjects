$(function(){

    $('form').on('submit', function(event) {
        event.preventDefault()
    
        const formData = $('form').serialize()
    
        axios({
            method: 'post',
            url: '/api/vehicles',
            data: formData,
        })
        .then(function(response) {
            if (response.data.message) {
                alert(response.data.message)
                window.location.href = '/home'
            }
        })
        .catch(function(error) {
            let errors = error.response.data.errors

            let errorsString = ''

            Object.keys(errors).forEach(function(key) {
                errorsString += errors[key].join(', ') + '\n'
            })

            alert(errorsString)

        })
    })

})