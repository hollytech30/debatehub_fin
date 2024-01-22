import './bootstrap';

window.addEventListener('alert', (e) => {
    swal(e.detail[0].title, e.detail[0].message, e.detail[0].type, {
        buttons: false,
        timer: 1500,
    });
});
window.addEventListener('alert-danger', (e) => {
    swal({
        title: e.detail[0].title,
        text: e.detail[0].message,
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
});
