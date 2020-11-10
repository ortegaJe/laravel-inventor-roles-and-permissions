<!--<div style="padding-bottom: 6ch"><button type="button" class="btn btn-app float-right" data-toggle="modal"
        data-target="#AddCampu">
        <i class="fa fa-plus"></i> Agregar Sede</button>
</div>-->

<button type="button" class="btn btn-sm btn-info pull-right" data-toggle="modal" data-target="#AddCampu">
    Agregar nueva sede
</button>

{!! Form::open(['url' => 'campus']) !!}
<!--composer require laravelcollective/html-->
{{ Form::token() }}
<div class="modal fade" id="AddCampu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Nueva Sede:</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Nombre:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input style="text-transform:uppercase;"
                                        onkeyup="javascript:this.value=this.value.toUpperCase();" type="text"
                                        class="form-control" name="campu" value="VIVA 1A IPS" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Sede:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                    <input style="text-transform:uppercase;"
                                        onkeyup="javascript:this.value=this.value.toUpperCase();" type="text"
                                        class="form-control" name="campu-name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Abreviado:
                                    <small style="color: crimson">(Ej: Calle 30 = C30, max 4 letras)</small></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-font"></i></span>
                                    <input style="text-transform:uppercase;"
                                        onkeyup="javascript:this.value=this.value.toUpperCase();" type="text"
                                        class="form-control" maxlength="4" name="label" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!--<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: black; font-weight: 600">Nueva Sede
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-auto">

                    <form>
                        <div class="form-row">
                            <div class="col-md-12 mb-4">
                                <h2 style="font-weight: 700" for="recipient-rol-name">Sede:</h2>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-users-cog"></i></span>
                                    </div>
                                    <input style="text-transform:uppercase;"
                                        onkeyup="javascript:this.value=this.value.toUpperCase();" type="text"
                                        class="form-control" name="campu-name">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar sede</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>-->
{!! Form::close() !!}