const flashData = $('.flash-data').data('flashdata');

if(flashData) {
    swal({
        title: 'Good job!',
        text: "You clicked the!" + flashData, 
        type: 'success',
        padding: '2em'
      })
  }