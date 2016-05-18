<div aria-hidden="true" class="modal modal-va-middle fade" id="msgbox" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-inner">
                <p class="h5 margin-top-sm text-black-hint">@yield('mensaje')</p>
            </div>
            <div class="modal-footer">
                <p class="text-right"><a class="btn btn-flat btn-brand-accent waves-attach" data-dismiss="modal">Cancelar</a><a class="btn btn-flat btn-brand-accent waves-attach" href="@yield('accionOK')" data-dismiss="modal">Aceptar</a></p>
            </div>
        </div>
    </div>
</div>