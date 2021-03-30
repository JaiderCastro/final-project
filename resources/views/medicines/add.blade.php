<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Al Carrito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               {{--  <form action="{{ url('add_cart/'.$medicine->id) }}" method="POST"> 
                    @csrf 
                    @method('PUT')
                    {{-- 
                        <h6>
                            <br> <br><strong> <div>
                                <input type="number" style="color: rgb(24, 88, 207); background: rgb(245, 243, 243); font-size: 30px;" id="cantidad" name="cantidad" placeholder="Agregue La Cantidad" required>
                            </div></strong>
                        </h6> --}}
            </div> 
                <div class="modal-footer">
                    <div class="modal-footer">
                        <a href="{{ url('add_cart/'.$medicine->id) }}" class="">
                            <i class="">Agregar Al Carrito</i>
                        </a>
                    </div>
                </div>
            </form> 
        </div>
    </div>
</div>