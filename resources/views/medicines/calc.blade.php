<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Realizar Calculos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                <h3>¿Que tipo de calculo desea realizar? </h3> <br><br>
                <a href="/sumar" class="btn btn-outline-primary"><i class="fas fa-plus-circle">Suma</i></a> &nbsp;&nbsp;&nbsp;
                <a href="/restar" class="btn btn-outline-secondary"><i class="fas fa-minus">Resta</i></a>  &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="/multiplicar" class="btn btn-outline-success"><i class="fas fa-times">Multiplicacion</i></a>
                <a href="/dividir" class="btn btn-outline-info"><i class="fas fa-divide">Division</i></a> &nbsp;
            </div>
                <div class="modal-footer">
                   
                </div>
        
        </div>
    </div>
</div>