const FlashData = $('.flash-data').data('flashdata');


if (FlashData == 'True') {
    Swal.fire({
        icon: 'success',
        title: 'Your Answer is Correct',
        text: 'Very Good!'
    })
} else if (FlashData == 'False') {
    Swal.fire({
        icon: 'error',
        title: 'Thats not right',
        text: 'Try again'
    })
} else if (FlashData == 'null') {
    Swal.fire({
        icon: 'info',
        title: 'Please enter your answer',
        text: 'Try again'
    })
}