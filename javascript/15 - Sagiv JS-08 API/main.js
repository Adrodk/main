$.ajax({
    method: "GET",
    url: "https://vpic.nhtsa.dot.gov/api/vehicles/GetMakeForManufacturer/volvo?format=json", 
    type: "json",
    beforeSend: function(){  // turn on loader animation
        console.log("getting data....");
    
    }
  })
    .done(function( data ) {
      //console.log( data );
    //   displayinfo(data)
    

        displayData(data.Results);
    })
    .fail(function(err){ 
    console.log(err);
    })
    .always(function(){
      // turn off loader animation
    });


function displayData(data){
    console.log(data);
  var output = '';

    for(var i = 0; i < data.length; i++){
        output += '<div class="person">';
        output += '<h1>' + data[i].Make_Name + '</h1>';
        output += '<h3>' + data[i].Mfr_Name + '</h3>';
        output += '</div>';
    }
    $('.people').html(output);

}



