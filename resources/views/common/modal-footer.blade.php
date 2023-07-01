        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="resetUI()" class="btn btn-secondary" data-bs-dismiss="modal">ENCERRAR</button>
            @if ($selected_id < 1)
            <button type="button" wire:click="store()" class="btn btn-primary">GUARDAR</button>
            @else
            <button type="button" wire:click="update()" class="btn btn-primary">ATUALIZAR</button>
            @endif
        </div>
        </div>
    </div>
</div>