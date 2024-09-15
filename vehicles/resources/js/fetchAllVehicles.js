$(function(){

    function fetchVehicles(){
        axios({
            method: 'get',
            url: 'api/vehicles',
        }).then(function (data) {
            const vehicleTable = $('#vehicleTable tbody');
            vehicleTable.empty();
    
            data.data.forEach(function (vehicle) {
                vehicleTable.append(`
                    <tr>
                        <td>${vehicle.brand}</td>
                        <td>${vehicle.model}</td>
                        <td>${vehicle.plate_number}</td>
                        <td>${vehicle.insurance_date}</td>
                        <td>${vehicle.insurance_date}</td>
                        <td>
                            <a href="/vehicles/edit/${vehicle.id}" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger deleteBtn" data-id=${vehicle.id}>Delete</button>
                        </td>
                    </tr>
                `);
            });
        })
    }

    fetchVehicles()

    $(document).on('click', '.deleteBtn', function(event){
        let vehicleId = $(event.target).data('id')

        axios.delete(`/api/vehicles/${vehicleId}`, {
            
        }).then(function(response){
            if(response.data.message){
                alert(response.data.message)
                fetchVehicles()
            }
        }).catch(function(error){
            console.log(error)
        })
    })

})