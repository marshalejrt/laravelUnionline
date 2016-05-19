@if(Session::has('informacion'))
   <script>
    {{$mensaje=Session::get('informacion')}}
    {{$accion=''}}
    {{$estilo='display:none'}}
   </script>
@endif
<div aria-hidden="true" class="modal modal-va-middle fade" id="msgbox" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-inner">
                <p class="h5 margin-top-sm text-black-hint">{{$mensaje}}</p>
            </div>
            <div class="modal-footer">
                <p class="text-right">
                    <a class="btn btn-flat btn-brand-accent waves-attach" style="{{$estilo}}" data-dismiss="modal">Cancelar</a>
                    <a class="btn btn-flat btn-brand-accent waves-attach" style="{{$estilo}}" href="{{$accion}}">Aceptar</a>
                </p>
            </div>
        </div>
    </div>
</div>
@if(Session::has('informacion'))
    <script>
        $(function(){
            $('#msgbox').modal('show');
            {{$mensaje=''}}
            {{$accion=''}}
            {{$estilo=''}}
            {{$informacion=''}}
        });
        setTimeout(function(){$('#msgbox').modal('hide');location.reload(); }, 2000);

    </script>
@endif