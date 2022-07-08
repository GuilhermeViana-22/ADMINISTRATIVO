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
  modalWrap.innerHTML = `<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">${ConfirmModal}</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">${toDenyModal}</button>
      </div>
    </div>
  </div>
</div>`;
  document.body.append(modalWrap);

  $('#modal_corpo').load(url, function (body, message, xht) {
      var modal = new bootstrap.Modal(modalWrap.querySelector('.modal'));
      modal.show();
  });
 
}

