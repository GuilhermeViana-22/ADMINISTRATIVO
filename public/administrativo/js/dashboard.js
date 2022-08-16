/***
 *  arquivo para tratar todos os eventos relacionados ao dashbboard
 *
 * modal
 * chartjs
 * events
 * Media
 *
 *
 */
// Create an "li" node:


let modalWrap = null;
const showModal = (url, title, description, ConfirmModal = 'Yes', toDenyModal = 'No', callback) => {

    //do not create multiple
    if (modalWrap !== null) {
        modalWrap.remove();
    }

    modalWrap = document.createElement('div')
    modalWrap.innerHTML = `<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">${title}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_corpo">
        <p>${description}</p>
      </div>
    </div>
  </div>`;
    document.body.append(modalWrap);

    $('#modal_corpo').load(url, function (body, message, xht) {
        var modal = new bootstrap.Modal(modalWrap.querySelector('.modal'));
        modal.show();
    });

}

/*
* REFRESH
*/
function refresh() {
    window.location.reload("Refresh")
}

$(document).ready(function () {
    $('.cpf').mask('000.000.000-00');
    $('#cep').mask('00000-000');
    $('#rg').mask('00.000.0009');
    $('#msg').click(function () {
        $('#msg').fadeOut('slow');

    })
});

