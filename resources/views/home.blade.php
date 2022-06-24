@extends('layouts.app')
@section('content')
    <div>
        @yield('contenido');
    </div>
    <footer class="footer-container">
        <div class="footer">
            <div class="footer-heading footer-1">
                <h2>Acerca de Pequeñito</h2>
                <a href="#">Acerca de nosotros</a>
                <a href="#">Nuestros valores</a>
                <a href="#">Terminos de Condicion</a>
            </div>
            <div class="footer-heading footer-2">
                <h2>Delivery</h2>
                <a href="#">Tiempos y Costo de envios</a>
                <a href="#">Cambio y Devoluciones</a>
            </div>
            <div class="footer-heading footer-3">
                <h2>Servicio al cliente</h2>
                <a href="#">Contactenos</a>
                <a href="#">Comprobante</a>
            </div>
            <div class="footer-heading">
                <h2>Redes sociales</h2>
                <a href="#">Contactenos</a>
                <a href="#">Comprobante</a>
            </div>
        </div>
    </footer>

@endsection
