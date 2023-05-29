<div wire:ignore.self class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            {{$component}} | {{ $selected_id > 0 ? 'EDITAR' : 'CREAR'}}
          </h5>
          <h6 class="text-center text-warning" wire:loading>
            POR FAVOR ESPERE 
          </h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">