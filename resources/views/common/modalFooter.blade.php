            </div>
            <div class="modal-footer">
                @if ($selected_id > 0)
                <button type="button" wire:click.prevent='Store()' class="btn btn-primary"> GUARDAR</button>
                @else
                <button type="button" wire:click.prevent='Update()' class="btn btn-primary">EDITAR</button>
                @endif
                
                <button type="button" wire:click.prevent='resetUI()' class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>