<div wire:ignore.self class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-5">
            {{ $componentName }} | {{ $selected_id > 0 ? 'EDITANDO': 'AGREGANDO' }}
          </h5>
          <h6 class="text-center text-warning" wire:loading>Processando, aguarde...</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">