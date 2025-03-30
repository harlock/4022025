@extends('layouts.peliculas')
@section('content')
    
    <div class="container-fluid bg-light">
        <div class="row min-vh-100">
            <!-- Contenido Principal -->
            <div class="col-7 bg-secondary p-4 rounded">
                <div class="d-flex justify-content-between align-items-center bg-white p-3 rounded">
                    <h3 class="fw-bold text-dark">Peliculas</h3>
                    <input type="text" class="form-control w-25" placeholder="Buscar ...">
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card text-white bg-dark p-4 ">
                            <h5 class="fw-bold" >Ciudades.</h5>
                                <ul>
                                    <li>Guadalajara.</li>
                                    <li>Cdmx.</li>
                                    <li>Guanajuato.</li>
                                    <li>Oaxaca.</li>
                                    <li>Veracruz.</li>
                                </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card text-white bg-dark p-4">
                            <h5 class="fw-bold" >Dias de servicio</h5>
                            <h6>De 7:00am a 11:00pm</h6>
                                <ul>
                                    <li>Lunes.</li>
                                    <li>Martes.</li>
                                    <li>Miercoles.</li>
                                    <li>Jueves.</li>
                                    <li>Viernes.</li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-dark p-4">
                            <h5 class="fw-bold" >Idiomas</h5>
                                <ul>
                                    <li>Español(Latinoamerica).</li>
                                    <li>Ingles(Sub ES).</li>
                                </ul>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card p-3 text-white bg-dark">
                            <h5 class="fw-bold" >Generos</h5>
                            <ul>
                                <li>Terror.</li>
                                <li>Belico</li>
                                <li>Accion</li>
                                <li>Ciencia ficcion</li>
                                <li>Suspenso</li>
                                <li>Romance</li>
                                <li>Drama</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 text-white bg-dark">
                            <h5 class="fw-bold" >Clacificacion</h5>
                            <ul>
                                <li>AA: Comprensible para menores de 7 años</li>
                                <li>A: Para todo público</li>
                                <li>B: Para adolescentes de 12 años en adelante</li>
                                <li>B15: No recomendada para menores de 15 años</li>
                                <li>C: Para adultos de 18 años en adelante</li>
                                <li>D: Películas para adultos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 text-white bg-dark">
                            <h5 class="fw-bold" >Horarios</h5>
                            <ul>
                                <li>7:00am a 10:00am</li>
                                <li>10:30am a 1:00pm</li>
                                <li>1:30pm a 4:00pm</li>
                                <li>5:00pm a 8:00pm</li>
                                <li>8:00pm a 11:00pm</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tabla de últimos movimientos -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card p-3 ">
                            <h5 class="fw-bold" >Proyecciones</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pelicula</th>
                                        <th>Genero</th>
                                        <th>Clasificacion</th>
                                        <th>Idioma</th>
                                        <th>Duracion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Duro de matar</td>
                                        <td>Accion</td>
                                        <td>B15</td>
                                        <td>Español</td>
                                        <td>2:30 h</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>La forma del agua</td>
                                        <td>Romance</td>
                                        <td>B15</td>
                                        <td>Español</td>
                                        <td>3:00 h</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>The martian</td>
                                        <td>Ciencia ficcion</td>
                                        <td>B</td>
                                        <td>Ingles</td>
                                        <td>2:50 h</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>En las montañas de la locura</td>
                                        <td>Terror</td>
                                        <td>C</td>
                                        <td>Ingles</td>
                                        <td>3:00 h</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Sin novedad en el frente</td>
                                        <td>Belico</td>
                                        <td>D</td>
                                        <td>Español</td>
                                        <td>3:00 h</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tercera Columna -->
            <div class="col-3 p-4 bg-light">
                <div class="card p-3 text-center bg-secondary text-white">
                    <h5 class="fw-bold" >Capacidad de los cines</h5>
                    <div class="progress">
                        <div class="progress-bar " style="width: 50%">50%</div>
                    </div>
                </div>

                <div class="card p-3 mt-4 bg-secondary text-white">
                    <h5 class="fw-bold" >Notificaciones</h5>
                    <ul>
                        <li>Actualización del sistema disponible</li>
                        <li>Se detectó un problema en la sala 2</li>
                        <li>Se programó un mantenimiento del servidor</li>
                    </ul>
                </div>

                <div class="card p-3 mt-4 bg-secondary text-white">
                    <h5 class="fw-bold" >Personal</h5>
                    <ul>
                        <li>Arturo Carbajal - Admin</li>
                        <li>Javier Chávez - Developer</li>
                        <li>Ádan López - Support</li>
                        <li>Imanol - Tecnico en proyectores</li>
                        <li>Emiliano Menchaca - Conserje</li>
                        <li>Gael - Actor de la morsa</li>
                    </ul>
                </div>

                <div class="card p-3 mt-4 text-center bg-secondary text-white">
                    <h5 class="fw-bold" >Acciones rapidas</h5>
                    <button class="btn  w-100 my-2 bg-white text-dark">Añadir pelicula</button>
                    <button class="btn  w-100 my-2 bg-white text-dark">Generar boletos</button>
                </div>
            </div>
        </div>
    </div>
@endsection